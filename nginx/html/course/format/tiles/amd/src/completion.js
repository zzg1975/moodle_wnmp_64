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

/* eslint space-before-function-paren: 0 */

/**
 * Load the format_tiles JavaScript for the course edit settings page /course/edit.php?id=xxx
 *
 * @module      format_tiles
 * @package     course/format
 * @subpackage  tiles
 * @copyright   2018 David Watson {@link http://evolutioncode.uk}
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define(["jquery", "core/templates", "core/config", "core/ajax", "format_tiles/completion"],
    function ($, Templates, config, ajax) {
        "use strict";

        var courseId;
        var strings = {};
        var useTooltips = false;
        var dataKeys = {
            cmid: "data-cmid",
            numberComplete: "data-numcomplete",
            numberOutOf: "data-numoutof",
            section: "data-section"
        };
        var Selector = {
            launchModuleModal: '[data-action="launch-tiles-module-modal"]',
            launchResourceModal: '[data-action="launch-tiles-resource-modal"]',
            pageContent: "#page-content",
            regionMain: "#region-main",
            resourceModule: '.activity.resource',
            completeonevent: ".completeonevent",
            completeonview: ".completeonview",
            activity: "li.activity",
            section: "li.section.main",
            togglecompletion: "form.togglecompletion",
            tileId: "#tile-",
            progressIndicatorId: '#tileprogress-',
            tile: '.tile',
            spacer: '.spacer',
            availabilityinfo: '.availabilityinfo',
            sectionId: '#section-'
        };

        var Icon = {
            completionYes: 'completion-icon-y',
            completionNo: 'completion-icon-n'
        };

        // This will be populated on init with the items which we treat as labels.
        // I.e. which we ignore for completion tracking.
        var noCompletionTrackingMods = [];

        /**
         * When toggleCompletionTiles() makes an AJAX call it needs to send some data
         * and this helps assemble the data
         * @param {number} tileId which tile is this for
         * @param {number} numComplete how many items has the user completed
         * @param {number} outOf how many items are there to complete
         * @param {boolean} asPercent should we show this as a percentage
         * @returns {{}}
         */
        var progressTemplateData = function (tileId, numComplete, outOf, asPercent) {
            var data = {
                tileid: tileId,
                numComplete: numComplete,
                numOutOf: outOf,
                showAsPercent: asPercent,
                percent: Math.round(numComplete / outOf * 100),
                percentCircumf: 106.8,
                percentOffset: Math.round(((outOf - numComplete) / outOf) * 106.8),
                isComplete: false,
                isSingleDigit: false,
                hastilephoto: $(Selector.tileId + tileId).hasClass("phototile"),
            };
            if (tileId === 0) {
                data.isOverall = 1;
            } else {
                data.isOverall = 0;
            }
            if (numComplete >= outOf) {
                data.isComplete = true;
            }
            if (data.percent < 10) {
                data.isSingleDigit = true;
            }
            return data;
        };

        /**
         * When a progress change happens, e.g. an item is marked as complete or not, this fires.
         * It changes the current tile's progress up or down by 1 according to the progressChange arg.
         * It then does the same for the course's overall progress indicator.
         * @param {int} sectionNum the number of this tile/section.
         * @param {object} tileProgressIndicator the indicator for this tile
         * @param {int} progressChange the amount we are changing e.g. +1 or -1
         */
        var changeProgressIndicators = function(sectionNum, tileProgressIndicator, progressChange) {
            // TODO use the new web service get_section_information to get value so we know it's correct.
            // This can also handle updating the competion status instead of core below.
            if (tileProgressIndicator.attr(dataKeys.numberComplete) === 0 && progressChange < 0) {
                // If we are already at zero, do not reduce.  May happen rarely if user presses repeatedly.
                // Will not cause a long term issue as will be resolved when user refreshes page.
                return;
            }
            // Get the tile's new progress value.
            var newTileProgressValue = Math.min(
                parseInt(tileProgressIndicator.attr(dataKeys.numberComplete)) + progressChange,
                tileProgressIndicator.attr(dataKeys.numberOutOf)
            );
            // Get the new overall progress value.
            var overallProgressIndicator = $("#tileprogress-0");
            var newOverallProgressValue = Math.min(
                parseInt(overallProgressIndicator.attr(dataKeys.numberComplete)) + progressChange,
                overallProgressIndicator.attr(dataKeys.numberOutOf)
            );

            // Render and replace the progress indicator for *this tile*.
            Templates.render("format_tiles/progress", progressTemplateData(
                sectionNum,
                newTileProgressValue,
                tileProgressIndicator.attr(dataKeys.numberOutOf),
                tileProgressIndicator.hasClass("percent")
            )).done(function (html) {
                // Need to repeat jquery selector as it is being replaced (replacwith).
                tileProgressIndicator.replaceWith(html);
                if (useTooltips) {
                    try {
                        $(Selector.progressIndicatorId + sectionNum).tooltip();
                    } catch (err) {
                        require(["core/log"], function(log) {
                            log.debug(err);
                        });
                    }
                }
            });

            // Render and replace the *overall* progress indicator for the *whole course*.
            Templates.render("format_tiles/progress", progressTemplateData(
                0,
                newOverallProgressValue,
                overallProgressIndicator.attr(dataKeys.numberOutOf),
                true
            )).done(function (html) {
                $("#tileprogress-0").replaceWith(html).fadeOut(0).animate({opacity: 1}, 500);
            });
        };

        /**
         * When a user clicks a completion tracking checkbox in this format, pass the click through to core
         * This is partly based on the core functionality in completion.js but is included here as otherwise clicks on
         * check boxes added dynamically after page load are not detected
         * @param {object} form the form and check box
         */
        var toggleCompletionTiles = function (form) {
            // Get the existing completion state for this completion form.
            // For PDFs there will be two forms - one in the section and one within the modal - grab both with class.
            var cmid = form.attr(dataKeys.cmid);
            var completionState = $("#completionstate_" + cmid);
            var data = {
                id: cmid,
                completionstate: parseInt(completionState.attr("value")),
                fromajax: 1,
                sesskey: config.sesskey
            };
            if (useTooltips) {
                try {
                    form.tooltip('hide');
                } catch (err) {
                    require(["core/log"], function(log) {
                        log.debug(err);
                    });
                }
            }

            var url = config.wwwroot + "/course/togglecompletion.php";
            $.post(url, data, function (returnData, status) {
                if (status === "success" && returnData === "OK") {
                    var progressChange;
                    var completionImage = $(".completion_img_" + cmid);
                    if (completionState.attr("value") === "1") {
                        // We have checked a progress box.
                        // Change check box(es) to ticked,
                        // And set the value(s) to zero so that if re-clicked, goes back to unchecked.
                        $("#completion_dynamic_change").attr("value", 0);
                        completionState.attr("value", 0);
                        progressChange = +1;
                        completionImage.addClass(Icon.completionYes).removeClass(Icon.completionNo);
                        $(".complete-y-" + cmid).fadeIn(200).fadeOut(1000);
                    } else {
                        // We have un-checked a progress box.
                        $("#completion_dynamic_change").attr("value", 1);
                        completionState.attr("value", 1);
                        progressChange = -1;
                        $(".complete-n-" + cmid).fadeIn(200).fadeOut(1000);
                        completionImage.addClass(Icon.completionNo).removeClass(Icon.completionYes);
                    }
                    if (!completionState.closest(Selector.activity).is(
                        // If the activity is not one of the mods we ignore for completion tracking e.g. label.
                        noCompletionTrackingMods.map(function(cls) {
                            return "." + cls;
                        }).join(','))
                    ) {
                        // We do not do this for labels, as they are not included in completion tracking.
                        changeProgressIndicators(
                            form.attr(dataKeys.section),
                            $(Selector.progressIndicatorId + form.attr(dataKeys.section)),
                            progressChange
                        );
                        require(["format_tiles/browser_storage"], function(storage) {
                            storage.storeCourseContent(courseId, form.attr("data-section"), "");
                        });
                    }
                }
            })
                .fail(function () {
                    throw new Error("Failed to register completion change with server");
                });
        };

        /**
         * When automatic completion tracking is being used, on modal launch we need to:
         * - change the completion icon to complete.
         * - recalculate the % complete for this tile and overall.
         * We do not need to notify the server that the item is complete.
         * This is because that is already covered when course_mod_modal calls log_mod_view().
         * I.e. we just update the UI here because the data is handled elsewhere.
         * @param {object} activity the activity which contains the completion icon
         */
        var markAsAutoCompleteInUI = function(activity) {
            var sectionNum = activity.closest(Selector.section).attr('data-section');
            if (activity.hasClass("completeonview")) {
                var completionIcon = activity.find('.completion-icon');
                var parent = completionIcon.closest(".completioncheckbox");
                if (parent.attr('data-ismanual') === "0" && parent.attr('data-completionstate') === "0") {
                    completionIcon.addClass(Icon.completionYes).removeClass(Icon.completionNo);
                    parent.attr('data-completionstate', 1);
                    parent.attr('data-original-title', strings.completeauto);
                    if (useTooltips) {
                        try {
                            parent.tooltip();
                        } catch (err) {
                            require(["core/log"], function(log) {
                                log.debug(err);
                            });
                        }
                    }
                    changeProgressIndicators(sectionNum, $(Selector.progressIndicatorId + sectionNum), 1);
                }
            }
            // Even if it is not a "complete on view" activity, clear UI storage so that when user returns it is correct.
            require(["format_tiles/browser_storage"], function (storage) {
                storage.storeCourseContent(courseId, sectionNum, "");
            });
        };

        /**
         * Sometimes we must check the availability and completion status of/some all tiles using AJAX.
         * This might happen if for example a tile expands and some embedded activities are then complete.
         * Other tiles might use the completion of a previous tile for their availability.
         * This especially applies if teh H5P filter is being used to display embedded H5P in labels.
         * @param {Number[]} sectionNums
         */
        var updateTileInformation = function (sectionNums) {
            if (sectionNums === undefined) {
                // Use all sections if no arg.
                sectionNums = $(Selector.tile).not(Selector.spacer).map((i, t) => {
                    return parseInt($(t).attr('data-section'));
                }).toArray();
            }
            ajax.call([{
                methodname: "format_tiles_get_section_information",
                args: {
                    courseid: courseId,
                    sectionnums: sectionNums
                }
            }]).forEach(promise => {
                promise
                    .then(res => {
                        res.sections.forEach(sec => {
                            const tile = $(Selector.tileId + sec.sectionnum);

                            // If this tile is now unrestricted / visible, give it the right classes.
                            if (sec.isavailable && tile.hasClass('tile-restricted')) {
                                tile.removeClass('tile-restricted');
                            } else if (!sec.isavailable) {
                                tile.addClass('tile-restricted');
                            }
                            if (sec.isclickable && !tile.hasClass('tile-clickable')) {
                                tile.addClass('tile-clickable');
                            } else if (!sec.isclickable && tile.hasClass('tile-clickable')) {
                                tile.removeClass('tile-clickable');
                            }

                            // Now re-render the progress indicator if necessary with correct data.
                            const progressIndicator = $(Selector.progressIndicatorId + sec.sectionnum);
                            if (progressIndicator.attr('data-numcomplete') !== undefined
                                && progressIndicator.attr('data-numcomplete') !== sec.numcomplete.toString()) {
                                Templates.render("format_tiles/progress", progressTemplateData(
                                    sec.sectionnum,
                                    sec.numcomplete,
                                    sec.numoutof,
                                    progressIndicator.hasClass("percent")
                                )).done(function (html) {
                                    // Need to repeat jquery selector as it is being replaced (replacwith).
                                    progressIndicator.replaceWith(html);
                                    if (useTooltips) {
                                        try {
                                            $(Selector.progressIndicatorId + sec.sectionnum).tooltip();
                                        } catch (err) {
                                            require(["core/log"], function(log) {
                                                log.debug(err);
                                            });
                                        }
                                    }
                                });
                            }

                            // Finally change or re-render the availability message if necessary.
                            const availabilityInfoDiv = tile.find(Selector.availabilityinfo);
                            if (availabilityInfoDiv.length > 0 && sec.isavailable && !sec.availabilitymessage) {
                                // Display no message any more.
                                availabilityInfoDiv.fadeOut();
                            } else if (!sec.isavailable && sec.availabilitymessage) {
                                // Sec is not available and we have a message to display.
                                if (availabilityInfoDiv.length > 0) {
                                    availabilityInfoDiv.html = 'NEW' + sec.availabilitymessage;
                                    availabilityInfoDiv.fadeIn();
                                } else {
                                    Templates.render("format_tiles/availability_info", {
                                        availabilitymessage: sec.availabilitymessage,
                                        visible: true
                                    }).done(function (html) {
                                        // Need to repeat jquery selector as it is being replaced (replacwith).
                                        progressIndicator.replaceWith(html);
                                        if (useTooltips) {
                                            try {
                                                $(Selector.progressIndicatorId + sec.sectionnum).tooltip();
                                            } catch (err) {
                                                require(["core/log"], function(log) {
                                                    log.debug(err);
                                                });
                                            }
                                        }
                                    });
                                }
                            }
                        });
                    })
                    .catch(err => {
                        require(["core/log"], function(log) {
                            log.debug(
                                "Failed to get section information to check completion status of section"
                            );
                            log.debug(err);
                        });
                    });
            });
        };

        return {
            init: function (courseIdInit, strCompleteAuto, labelLikeCourseMods, useTooltipsInit) {
                courseId = courseIdInit;
                useTooltips = useTooltipsInit === '1';
                $(document).ready(function () {
                    noCompletionTrackingMods = JSON.parse(labelLikeCourseMods);
                    strings.completeauto = strCompleteAuto;
                    // Trigger toggle completion event if check box is clicked.
                    // Included like this so that later dynamically added boxes are covered.
                    $("body").on("click", Selector.togglecompletion, function (e) {
                        // Send the toggle to the database and change the displayed icon.
                        e.preventDefault();
                        toggleCompletionTiles($(e.currentTarget));
                    });

                    var pageContent = $("#page-content");
                    if (pageContent.length === 0) {
                        // Some themes e.g. RemUI do not have a #page-content div, so use #region-main.
                        pageContent = $("#region-main");
                    }
                    pageContent
                        .on("click", Selector.launchModuleModal + ", " + Selector.launchResourceModal, function (e) {
                            var clickedActivity = $(e.currentTarget).closest(Selector.activity);
                            if (clickedActivity.hasClass("completeonview")) {
                                markAsAutoCompleteInUI(clickedActivity);
                            }
                        });
                    $(Selector.pageContent)
                        .on("click", Selector.completeonevent + ", " + Selector.completeonview, function (e) {
                            // For items which are auto complete on view or event, but don't launch in a modal e.g. Quiz.
                            // We just clear the UI storage so that when user returns to this page, new completion state shows.
                            var sectionNum = $(e.currentTarget).closest(Selector.section).attr('data-section');
                            require(["format_tiles/browser_storage"], function(storage) {
                                storage.storeCourseContent(courseId, sectionNum, "");
                            });
                        });
                });
            },
            // Allow this to be accessed from elsewhere e.g. format_tiles module.
            markAsAutoCompleteInUI: function(courseIdInit, activity) {
                courseId = courseIdInit;
                markAsAutoCompleteInUI(activity);
            },
            updateTileInformation: function(sectionNumbers) {
                try {
                    updateTileInformation(sectionNumbers);
                } catch (err) {
                    require(["core/log"], function(log) {
                        log.debug(err);
                    });
                }
            }
        };
    }
);
