// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Javascript Module to handle browser storage for format_tiles for student view.
 * (Can also be used by staff when they view the student view).
 * Stores and retrieves course content and settings
 * e.g. which filter button do I have pressed
 *
 * @module browser_storage
 * @package course/format
 * @subpackage tiles
 * @copyright 2018 David Watson {@link http://evolutioncode.uk}
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @since Moodle 3.3
 */

/* eslint space-before-function-paren: 0 */

define(["jquery", "format_tiles/browser_storage_set_up"], function ($, storageSetUp) {
    "use strict";

    var courseId;
    var userId;

    var localStorageKeyElements = {
        prefix: "mdl-tiles-",
        course: "mdl-tiles-course-",
        lastSection: "-lastSecId",
        content: "-content",
        lastUpdated: "-lastUpdated",
        collapseSecZero: "-collapsesec0",
        user: "-user-",
        section: "-sec-",
        userChoicePrefix: "mdl-tiles-userPrefStorage-"
    };

    var MAX_SECTIONS_TO_STORE;
    /**
     * The last visited section number will be stored with a key in the format
     * mdl-tiles-course-[courseid]-lastSecId
     * @returns {string} the key to use for this course
     */
    var encodeLastVistedSectionKeyName = function() {
        return localStorageKeyElements.course + courseId
            + localStorageKeyElements.user + userId
            + localStorageKeyElements.lastSection;
    };

    /**
     The last visited section's content will be stored with a key in the format
     * mdl-tiles-course-[courseid]-sec-[sectionid]-content
     * @param {number} sectionId the section Id we are interested in
     * @returns {string} the key to use for this course section's content
     */
    var encodeContentKeyName = function(sectionId) {
        return localStorageKeyElements.course + courseId
            + localStorageKeyElements.section + sectionId.toString()
            + localStorageKeyElements.user + userId
            + localStorageKeyElements.content;
    };

    /**
     * The last update time for the content for this section
     * will be stored with a key in the format
     * mdl-tiles-course-[courseid]-sec-[sectionid]-lastUpdated
     * @param {number} sectionId the section Id we are interested in
     * @returns {string} the key to use for this course section's content update time
     */
    var encodeContentLastUpdatedKeyName = function(sectionId) {
        return localStorageKeyElements.course + courseId
            + localStorageKeyElements.section + sectionId.toString()
            + localStorageKeyElements.user + userId
            + localStorageKeyElements.lastUpdated;
    };

    /**
     * Whether or not section zero is collapsed for this course/user
     * will be stored with a key in this format
     * @returns {string} the key to use
     */
    var collapseSecZeroKey = function() {
        return localStorageKeyElements.course + courseId
            + localStorageKeyElements.user + userId
            + localStorageKeyElements.collapseSecZero;
    };

    /**
     * Check if the current key name is a last updated content key or not
     * The format used if this is true will be
     * mdl-tiles-course-[courseid]-sec-[sectionid]-lastUpdated
     * Check for this and return true if this key matches
     * @param {string} key the key to check
     * @returns {boolean} whether it matches or not
     */
    var isContentLastUpdatedKeyName = function(key) {
        return key.indexOf(localStorageKeyElements.prefix) === 0
            && key.substr(-localStorageKeyElements.lastUpdated.length) === localStorageKeyElements.lastUpdated;
    };

    /**
     * Store HTML from a section (or the landing page if sectionId is zero) into session storage
     * Considered using core/storagewrapper, core/sessionstorage and core/localstorage but they
     * don't contain much so implemented directly
     * @param {string} courseId
     * @param {number} sectionId
     * @param {String} html
     */
    var storeCourseContent = function (courseId, sectionId, html) {
        if (sectionId === undefined || courseId === undefined) {
            throw new Error("Missing section id");
        }
        try {
            if (html !== undefined && html !== ""
                && storageSetUp.Enabled.session && storageSetUp.storageAllowed() === true) {
                sessionStorage.setItem(encodeContentKeyName(sectionId), html);
                sessionStorage.setItem(
                    encodeContentLastUpdatedKeyName(sectionId),
                    Math.round(Date.now() / 1000).toString()
                );
            } else {
                // HTML is empty so remove from store if present.
                sessionStorage.removeItem(encodeContentKeyName(sectionId));
                sessionStorage.removeItem(encodeContentLastUpdatedKeyName(sectionId));
            }
        } catch (err) {
            require(["core/log"], function(log) {
                log.debug(err);
            });
        }
    };

    /**
     * Decode a storage key in the format
     * @param {string} key the text value of key e.g. mdl-tiles-course-3-sec-10-user-2-lastUpdated
     * @return {object} json with key values
     */
    var decodeLastUpdatedKey = function (key) {
        var splitKey = key.split("-");
        if (isContentLastUpdatedKeyName(key)) {
            return {
                courseId: parseInt(splitKey[splitKey.indexOf("course") + 1]),
                sectionId: parseInt(splitKey[splitKey.indexOf("sec") + 1]),
                userId: parseInt(splitKey[splitKey.indexOf("user") + 1]),
                title: "lastUpdated"
            };
        } else {
            throw new Error("Invalid lastUpdated key");
        }
    };

    /**
     * Clean up items in local storage and session storage
     * For SESSION STORAGE, these will be course content HTML items or corresponding time records for them,
     * so to ensure we don't get too many, on each course access, we delete them if they are older than the threshold
     * This applies even if they relate to a different course to the one now being visited.
     * For LOCAL STORAGE, items will be very small (no HTML) so we only clear them if the user has selected to
     * clear browser storage. They include IDs of sections last visited in each course, whether section zero is collapsed etc
     * @param {number} contentDeleteMins how many minutes old a stored content HTML item must be, before it is be deleted here
     * @param {number} clearBrowserStorage if true, we are deleting all session and local storage on user command
     * @param {number} maxNumberToKeep how many items of HTML can be kept in store in total (evict the rest)
     */
    var cleanUp = function (contentDeleteMins, clearBrowserStorage, maxNumberToKeep) {
        // Clean localStorage first - only clear if we are clearing all browser storage.
        // Otherwise leave it (used for last visited section IDs etc).
        if (clearBrowserStorage) {
            Object.keys(localStorage).filter(function (key) {
                return key.indexOf(localStorageKeyElements.prefix) === 0
                    && key.indexOf(localStorageKeyElements.userChoicePrefix) !== 0;
            }).forEach(function (item) {
                // Item does relate to this plugin.
                // It is not the user's preference about whether to use storage or not (keep that).
                localStorage.removeItem(item);
            });

            // Now clean sessionStorage (used for course content HTML).
            Object.keys(sessionStorage).filter(function (key) {
                // Filter to only keys relating to this plugin.
                return key.indexOf(localStorageKeyElements.prefix) === 0;
            }).forEach(function (itemKey) {
                // Item does relate to this plugin.
                if (isContentLastUpdatedKeyName(itemKey)) {
                    var params = decodeLastUpdatedKey(itemKey);
                    // Remove *all* items for this plugin regardless of age.
                    storeCourseContent(params.courseId, params.sectionId, ""); // Empty last arg will mean deletion.
                }
            });
        } else {
            // Remove *stale* items for this plugin.
            var staleTime = Math.round(Date.now() / 1000) - contentDeleteMins * 60;
            Object.keys(sessionStorage).filter(function (key) {
                // Filter to only keys relating to this plugin.
                return key.indexOf(localStorageKeyElements.prefix) === 0;
            }).forEach(function (itemKey) {
                if (isContentLastUpdatedKeyName(itemKey)) {
                    var params = decodeLastUpdatedKey(itemKey);
                    if (sessionStorage.getItem(itemKey) < staleTime
                        || contentDeleteMins === 0) {
                        // Item is stale - older than contentDeleteMins settings.
                        // this key represents an item with a last update date older than the delete threshold.
                        storeCourseContent(params.courseId, params.sectionId, ""); // Empty last arg will mean deletion.
                    }
                }
            });

            // Now check if we still have too many items and if we do, remove the oldest.
            var lastUpdateKeys = Object.keys(sessionStorage).filter(function (item) {
                return isContentLastUpdatedKeyName(item);
            });
            if (lastUpdateKeys.length > maxNumberToKeep) {
                // We don't need this step if clearing whole browser storage as it is already cleared above.
                // get all the update times in order from newest to oldest.
                var lastUpdateTimes = lastUpdateKeys.map(function (key) {
                    return parseInt(sessionStorage[key]);
                }).sort();
                // Set a cut off time so that we only have maxNumberToKeep newer than the cut off.
                var cutOffTime = lastUpdateTimes[lastUpdateTimes.length - maxNumberToKeep];
                if (maxNumberToKeep === 0) {
                    cutOffTime = Date.now();
                }
                var params;
                // Remove course content for all items older than the cut off time.
                lastUpdateKeys.filter(function (key) {
                    return sessionStorage[key] < cutOffTime;
                }).forEach(function (expiredKey) {
                    params = decodeLastUpdatedKey(expiredKey);
                    storeCourseContent(params.courseId, params.sectionId, ""); // Empty "" will remove item.
                });
            }
        }
    };

    /**
     * Clear all storage used by this plugin.
     */
    var clearAllStorage = function() {
        cleanUp(0, 1, 1);
    };

    /**
     * Set the last visited section for the user for this course
     * Used to reload that section on next visit
     * Data is just an integer for section if
     * Uses local storage not session storage so that it persists
     * @param {number} sectionNum the section number last visited
     */
    var setLastVisitedSection = function (sectionNum) {
        if (sectionNum && storageSetUp.Enabled.local) {
            localStorage.setItem(encodeLastVistedSectionKeyName(), sectionNum.toString());
        } else {
            localStorage.removeItem(encodeLastVistedSectionKeyName());
        }
    };

    var Module = {

        init: function (course, maxContentSectionsToStore, isEditing, sectionNum,
                        storedContentDeleteMins, assumeDataStoreConsent, user) {
            courseId = course.toString();
            userId = user.toString();
            MAX_SECTIONS_TO_STORE = parseInt(maxContentSectionsToStore);
            storageSetUp.init(userId, assumeDataStoreConsent, clearAllStorage);
            if (parseInt(maxContentSectionsToStore) === 0) {
                // We do not want to use local storage at all.
                storageSetUp.setAllowed(false);
            }
            $(document).ready(function () {

                if (storageSetUp.storageAllowed() !== true) {
                    cleanUp(0, 1, 0);
                }
                if (isEditing) {
                    // Teacher is editing now so not using JS nav but set their current section for when they stop editing.
                    setLastVisitedSection(sectionNum);
                    // Clear storage in case they just changed something.
                    cleanUp(0, 1, 0);
                    if (storageSetUp.Enabled.session) {
                        storeCourseContent(courseId, sectionNum, "");
                    }
                    // If user switches to another role, clear any stored content so they only see new role's content.
                    $('a.menu-action[data-title="switchroleto,moodle"]').click(function() {
                        cleanUp(0, 1, 0);
                    });
                } else {
                    var pageContent = $("#page-content");
                    if (pageContent.length === 0) {
                        // Some themes e.g. RemUI do not have a #page-content div, so use #region-main.
                        pageContent = $("#region-main");
                    }
                    pageContent.on("click", ".tile", function () {
                        // Evict unused HTML content from session storage to reduce footprint (after a delay).
                        setTimeout(function () {
                            cleanUp(parseInt(storedContentDeleteMins), 0, MAX_SECTIONS_TO_STORE);
                        }, 2000);
                    });
                }
            });
        },

        storageEnabledSession: function () {
            return storageSetUp.Enabled.session;
        },
        storageEnabledLocal: function () {
            return storageSetUp.Enabled.local;
        },
        storagestorageSetUperence: function () {
            return storageSetUp.storageAllowed();
        },

        /**
         * Get the user's last visited section id for this course
         * @return {string|null} the section ID or null if none stored
         */
        getLastVisitedSection: function () {
            return storageSetUp.Enabled.local && localStorage.getItem(encodeLastVistedSectionKeyName());
        },

        /**
         * Retrieve HTML from session storage for this section
         * @param {number} courseId the id for this course
         * @param {number} sectionId id for this section
         * @return {String} the HTML
         */
        getCourseContent: function (courseId, sectionId) {
            return sessionStorage.getItem(encodeContentKeyName(sectionId));
        },

        /**
         * Check the age of any content we have stored for this course section
         * @param {number} courseId
         * @param {number} sectionId
         * @return {number|boolean} the age in seconds if we have content or false if none
         */
        getStoredContentAge: function (courseId, sectionId) {
            var storedTime = parseInt(
                sessionStorage.getItem(
                    encodeContentLastUpdatedKeyName(sectionId)
                )
            );
            if (storedTime) {
                return Math.round(Date.now() / 1000 - storedTime);
            } else {
                return false;
            }
        },

        /**
         * When user collapsed or expands section zero, record their choice in localStorage so
         * that it can be applied next time they visit
         * @param {string} status to be applied
         */
        setSecZeroCollapseStatus: function (status) {
            if (storageSetUp.Enabled.local && storageSetUp.storageAllowed()) {
                if (status === "collapsed") {
                    localStorage.removeItem(collapseSecZeroKey());
                } else {
                    localStorage.setItem(collapseSecZeroKey(), "1");
                }
            }
        },
        /**
         * Get the last status of section zero for the present course from localStorage
         * @returns {boolean} whether collapsed or not
         */
        getSecZeroCollapseStatus: function () {
            return !!localStorage.getItem(collapseSecZeroKey());
        },

        storeCourseContent: function (courseId, sectionId, html) {
            // Return object ("public") access to the "private" method above.
            storeCourseContent(courseId, sectionId, html);
        },

        cleanUpStorage: function () {
            // Return object ("public") access to the "private" method above (used when teacher edits course settings).
            clearAllStorage();
        },

        setLastVisitedSection: function (sectionNum) {
            // Return object ("public") access to the "private" method above.
            if (storageSetUp.storageAllowed()) {
                setLastVisitedSection(sectionNum);
            }
        }
    };

    return Module;
});