<?php
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
 * This file contains the strings used by backup
 *
 * @package   core
 * @copyright 2010 Eloy
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['asyncbackupcomplete'] = 'The backup process has completed';
$string['asyncbackupcompletebutton'] = 'Continue';
$string['asyncbackupcompletedetail'] = 'The backup process has completed successfully. <br/> You can access the backup on the <a href="{$a}">restore page.</a>';
$string['asyncbackuperror'] = 'The backup process has failed';
$string['asyncbackuperrordetail'] = 'The backup process has failed. Please contact your system administrator.';
$string['asyncbackuppending'] = 'The backup process is pending';
$string['asyncbackupprocessing'] = 'The backup is in progress';
$string['asyncbadexecution'] = 'Bad backup controller execution. It is {$a} and should be 2.';
$string['asynccheckprogress'] = 'You can check the progress at any time on the <a href="{$a}">restore page</a>.';
$string['asyncgeneralsettings'] = 'Asynchronous backup/restore';
$string['asyncemailenable'] = 'Enable message notifications';
$string['asyncemailenabledetail'] = 'If enabled, users will receive a message when an asynchronous backup or restore completes.';
$string['asyncmessagebody'] = 'Message';
$string['asyncmessagebodydetail'] = 'Message to send when an asynchronous backup or restore completes.';
$string['asyncmessagebodydefault'] = 'Hi {user_firstname},<br/> Your {operation} (ID: {backupid}) has completed successfully. <br/><br/>You can access it here: {link}.';
$string['asyncmessagesubject'] = 'Subject';
$string['asyncmessagesubjectdetail'] = 'Message subject';
$string['asyncmessagesubjectdefault'] = 'Moodle {operation} completed successfully';
$string['asyncnowait'] = 'You don\'t need to wait here, as the process will continue in the background.';
$string['asyncprocesspending'] = 'Process pending';
$string['asyncrestorecomplete'] = 'The restore process has completed';
$string['asyncrestorecompletebutton'] = 'Continue';
$string['asyncrestorecompletedetail'] = 'The restore process has completed successfully. Clicking continue will take you to the <a href="{$a}">course for the restored item.</a>';
$string['asyncrestoreerror'] = 'The restore process has failed';
$string['asyncrestoreerrordetail'] = 'The restore process has failed. Please contact your system administrator.';
$string['asyncrestorepending'] = 'The restore process is pending';
$string['asyncrestoreprocessing'] = 'The restore is in progress';
$string['asyncreturn'] = 'Return to course';
$string['asyncrestoreinprogress'] = 'Restores in progress';
$string['asyncrestoreinprogress_help'] = 'Asynchronous course restores that are in progress are shown here.';
$string['autoactivedisabled'] = 'Disabled';
$string['autoactiveenabled'] = 'Enabled';
$string['autoactivemanual'] = 'Manual';
$string['autoactivedescription'] = 'Choose whether or not to do automated backups. If manual is selected automated backups will be possible only by through the automated backups CLI script. This can be done either manually on the command line or through cron.';
$string['automatedbackupschedule'] = 'Schedule';
$string['automatedbackupschedulehelp'] = 'Choose which days of the week to perform automated backups.';
$string['automatedbackupsinactive'] = 'Automated backups haven\'t been enabled by the site admin';
$string['automatedbackupstatus'] = 'Automated backup status';
$string['automateddeletedays'] = 'Delete backups older than';
$string['automatedmaxkept'] = 'Maximum number of backups kept';
$string['automatedmaxkepthelp'] = 'This specifies the maximum number of recent automated backups to be kept for each course. Older backups will be deleted automatically.';
$string['automatedminkept'] = 'Minimum number of backups kept';
$string['automatedminkepthelp'] = 'If backups older than a specified number of days are deleted, it can happen that an inactive course ends up with no backup. To prevent this, a minimum number of backups kept should be specified.';
$string['automatedsetup'] = 'Automated backup setup';
$string['automatedsettings'] = 'Automated backup settings';
$string['automatedstorage'] = 'Automated backup storage';
$string['automatedstoragehelp'] = 'Choose the location where you want backups to be stored when they are automatically created.';
$string['backupactivity'] = 'Backup activity: {$a}';
$string['backupcourse'] = 'Backup course: {$a}';
$string['backupcoursedetails'] = 'Course details';
$string['backupcoursesection'] = 'Section: {$a}';
$string['backupcoursesections'] = 'Course sections';
$string['backupdate'] = 'Date taken';
$string['backupdetails'] = 'Backup details';
$string['backupdetailsnonstandardinfo'] = 'The selected file is not a standard Moodle backup file. The restore process will try to convert the backup file into the standard format and then restore it.';
$string['backupformat'] = 'Format';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatunknown'] = 'Unknown format';
$string['backuplog'] = 'Technical information and warnings';
$string['backupmode'] = 'Mode';
$string['backupmode10'] = 'General';
$string['backupmode20'] = 'Import';
$string['backupmode30'] = 'Hub';
$string['backupmode40'] = 'Same site';
$string['backupmode50'] = 'Automated';
$string['backupmode60'] = 'Converted';
$string['backupmode70'] = 'Asynchronous';
$string['backupsection'] = 'Backup course section: {$a}';
$string['backupsettings'] = 'Backup settings';
$string['backupsitedetails'] = 'Site details';
$string['backupstage1action'] = 'Next';
$string['backupstage2action'] = 'Next';
$string['backupstage4action'] = 'Perform backup';
$string['backupstage8action'] = 'Continue';
$string['backupstage16action'] = 'Continue';
$string['backuptype'] = 'Type';
$string['backuptypeactivity'] = 'Activity';
$string['backuptypecourse'] = 'Course';
$string['backuptypesection'] = 'Section';
$string['backupversion'] = 'Backup version';
$string['cannotfindassignablerole'] = 'The {$a} role in the backup file cannot be mapped to any of the roles that you are allowed to assign.';
$string['choosefilefromcoursebackup'] = 'Course backup area';
$string['choosefilefromcoursebackup_help'] = 'Course backups made using default settings are stored here.';
$string['choosefilefromuserbackup'] = 'User private backup area';
$string['choosefilefromuserbackup_help'] = 'Backup files with anonymized user information are stored here.';
$string['choosefilefromactivitybackup'] = 'Activity backup area';
$string['choosefilefromactivitybackup_help'] = 'Activity backups made using default settings are stored here.';
$string['choosefilefromautomatedbackup'] = 'Automated backups';
$string['choosefilefromautomatedbackup_help'] = 'Contains automatically generated backups.';
$string['config_keep_groups_and_groupings'] = 'By default keep current groups and groupings.';
$string['config_keep_roles_and_enrolments'] = 'By default keep current roles and enrolments.';
$string['config_overwrite_conf'] = 'Allows user to overwrite the current course configuration';
$string['config_overwrite_course_fullname'] = 'By default overwrite course full name with the one from the backup file. This requires "Overwrite course configuration" to be checked and current user to have the capability to change course full name (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'By default overwrite course short name with the one from the backup file. This requires "Overwrite course configuration" to be checked and current user to have the capability to change course short name (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'By default overwrite course start date with the one from the backup file. This requires "Overwrite course configuration" to be checked and current user to have the capability to roll course dates on restore (moodle/restore:rolldates)';
$string['configgeneralactivities'] = 'Sets the default for including activities in a backup.';
$string['configgeneralbadges'] = 'Sets the default for including badges in a backup.';
$string['configgeneralanonymize'] = 'If enabled all information pertaining to users will be anonymised by default.';
$string['configgeneralblocks'] = 'Sets the default for including blocks in a backup.';
$string['configgeneralcalendarevents'] = 'Sets the default for including calendar events in a backup.';
$string['configgeneralcomments'] = 'Sets the default for including comments in a backup.';
$string['configgeneralcompetencies'] = 'Sets the default for including competencies in a backup.';
$string['configgeneralcontentbankcontent'] = 'Sets the default for including content bank content in a backup.';
$string['configgeneralfiles'] = 'Sets the default for including files in a backup. Please note: Disabling this setting will result in a backup which only includes references to files. This is not a problem if the backup is restored on the same site and the files have not been deleted according to the setting \'Clean up trash pool files\' (filescleanupperiod).';
$string['configgeneralfilters'] = 'Sets the default for including filters in a backup.';
$string['configgeneralhistories'] = 'Sets the default for including user history within a backup.';
$string['configgenerallogs'] = 'If enabled logs will be included in backups by default.';
$string['configgeneralquestionbank'] = 'If enabled the question bank will be included in backups by default. PLEASE NOTE: Disabling this setting will disable the backup of activities which use the question bank, such as the quiz.';
$string['configgeneralgroups'] = 'Sets the default for including groups and groupings in a backup.';
$string['configgeneralroleassignments'] = 'If enabled by default roles assignments will also be backed up.';
$string['configgeneralpermissions'] = 'If enabled the role permissions will be imported. This may override existing permissions for enrolled users.';
$string['configgeneraluserscompletion'] = 'If enabled user completion information will be included in backups by default.';
$string['configgeneralusers'] = 'Sets the default for whether to include users in backups.';
$string['configlegacyfiles'] = 'Sets the default for including legacy course files in a backup. Legacy course files are from versions of Moodle prior to 2.0.';
$string['configloglifetime'] = 'This specifies the length of time you want to keep backup logs information. Logs that are older than this age are automatically deleted. It is recommended to keep this value small, because backup logged information can be huge.';
$string['configrestoreactivities'] = 'Sets the default for restoring activities.';
$string['configrestorebadges'] = 'Sets the default for restoring badges.';
$string['configrestoreblocks'] = 'Sets the default for restoring blocks.';
$string['configrestorecalendarevents'] = 'Sets the default for restoring calendar events.';
$string['configrestorecomments'] = 'Sets the default for restoring comments.';
$string['configrestorecompetencies'] = 'Sets the default for restoring competencies.';
$string['configrestorecontentbankcontent'] = 'Sets the default for restoring content bank content.';
$string['configrestoreenrolments'] = 'Sets the default for restoring enrolment methods.';
$string['configrestorefilters'] = 'Sets the default for restoring filters.';
$string['configrestorehistories'] = 'Sets the default for restoring user history if it was included in the backup.';
$string['configrestorelogs'] = 'If enabled logs will be restored by default if they were included in the backup.';
$string['configrestoregroups'] = 'Sets the default for restoring groups and groupings if they were included in the backup.';
$string['configrestoreroleassignments'] = 'If enabled by default roles assignments will be restored if they were included in the backup.';
$string['configrestorepermissions'] = 'If enabled the role permissions will be restored. This may override existing permissions for enrolled users.';
$string['configrestoreuserscompletion'] = 'If enabled user completion information will be restored by default if it was included in the backup.';
$string['configrestoreusers'] = 'Sets the default for whether to restore users if they were included in the backup.';
$string['confirmcancel'] = 'Cancel backup';
$string['confirmcancelrestore'] = 'Cancel restore';
$string['confirmcancelimport'] = 'Cancel import';
$string['confirmcancelquestion'] = 'Are you sure you wish to cancel?
Any information you have entered will be lost.';
$string['confirmcancelyes'] = 'Cancel backup';
$string['confirmcancelno'] = 'Do not cancel';
$string['confirmnewcoursecontinue'] = 'New course warning';
$string['confirmnewcoursecontinuequestion'] = 'A temporary (hidden) course will be created by the course restoration process. To abort restoration click cancel. Do not close the browser while restoring.';
$string['copiesinprogress'] = 'This course has copies in progress. <a href="{$a}">View in progress copies.</a>';
$string['copycoursedesc'] = 'This course will be duplicated and put into the selected course category.';
$string['copycourseheading'] = 'Copy a course';
$string['copycoursetitle'] = 'Copy course: {$a}';
$string['copydest'] = 'Destination';
$string['copyingcourse'] = 'Course copying in progress';
$string['copyingcourseshortname'] = 'copying';
$string['copyfieldnotfound'] = 'A required field was not found';
$string['copyformfail'] = 'AJAX submission of course copy form has failed.';
$string['copyop'] = 'Current operation';
$string['copyprogressheading'] = 'Course copies in progress';
$string['copyprogressheading_help'] = 'This table shows the status of all of your unfinished course copies.';
$string['copyprogresstitle'] = 'Course copy progress';
$string['copyreturn'] = 'Copy and return';
$string['copysource'] = 'Source';
$string['copyview'] = 'Copy and view';
$string['coursecategory'] = 'Category the course will be restored into';
$string['courseid'] = 'Original ID';
$string['coursesettings'] = 'Course settings';
$string['coursetitle'] = 'Title';
$string['currentstage1'] = 'Initial settings';
$string['currentstage2'] = 'Schema settings';
$string['currentstage4'] = 'Confirmation and review';
$string['currentstage8'] = 'Perform backup';
$string['currentstage16'] = 'Complete';
$string['enableasyncbackup'] = 'Enable asynchronous backups';
$string['enableasyncbackup_help'] = 'If enabled, all backup and restore operations will be done asynchronously. This does not affect imports and exports. Asynchronous backups and restores allow users to do other operations while a backup or restore is in progress.';
$string['enterasearch'] = 'Enter a search';
$string['error_block_for_module_not_found'] = 'Orphan block instance (id: {$a->bid}) for course module (id: {$a->mid}) found. This block will not be backed up';
$string['error_course_module_not_found'] = 'Orphan course module (id: {$a}) found. This module will not be backed up.';
$string['errorcopyingbackupfile'] = "Failed to copy the backup file to the temporary folder before restoring.";
$string['errorfilenamerequired'] = 'You must enter a valid filename for this backup';
$string['errorfilenametoolong'] = 'The filename must be less than 255 characters in length.';
$string['errorfilenamemustbezip'] = 'The filename you enter must be a ZIP file and have the .mbz extension';
$string['errorminbackup20version'] = 'This backup file has been created with one development version of Moodle backup ({$a->backup}). Minimum required is {$a->min}. Cannot be restored.';
$string['errorinvalidformat'] = 'Unknown backup format';
$string['errorinvalidformatinfo'] = 'The selected file is not a valid Moodle backup file and can\'t be restored.';
$string['errorrestorefrontpagebackup'] = 'You can only restore front page backups on the front page';
$string['executionsuccess'] = 'The backup file was successfully created.';
$string['extractingbackupfileto'] = 'Extracting backup file to: {$a}';
$string['failed'] = 'Backup failed';
$string['filename'] = 'Filename';
$string['filealiasesrestorefailures'] = 'Aliases restore failures';
$string['filealiasesrestorefailuresinfo'] = 'Some aliases included in the backup file could not be restored. The following list contains their expected location and the source file they were referring to at the original site.';
$string['filealiasesrestorefailures_help'] = 'Aliases are symbolic links to other files, including those stored in external repositories. In some cases, Moodle cannot restore them - for example when restoring the backup at another site or when the referenced file does not exist.

More details and the actual reason of the failure can be found in the restore log file.';
$string['filealiasesrestorefailures_link'] = 'restore/filealiases';
$string['filereferencesincluded'] = 'File references to external contents are included in the backup file. These won\'t work if the backup is restored on a different site.';
$string['filereferencessamesite'] = 'The backup file is from this site, and so file references can be restored.';
$string['filereferencesnotsamesite'] = 'The backup file is from a different site, and so file references cannot be restored.';
$string['generalactivities'] = 'Include activities and resources';
$string['generalanonymize'] = 'Anonymise information';
$string['generalbackdefaults'] = 'General backup defaults';
$string['generalbadges'] = 'Include badges';
$string['generalblocks'] = 'Include blocks';
$string['generalcalendarevents'] = 'Include calendar events';
$string['generalcomments'] = 'Include comments';
$string['generalcompetencies'] = 'Include competencies';
$string['generalcontentbankcontent'] = 'Include content bank content';
$string['generalenrolments'] = 'Include enrolment methods';
$string['generalfiles'] = 'Include files';
$string['generalfilters'] = 'Include filters';
$string['generalhistories'] = 'Include histories';
$string['generalgradehistories'] = 'Include histories';
$string['generallegacyfiles'] = 'Include legacy course files';
$string['generallogs'] = 'Include logs';
$string['generalquestionbank'] = 'Include question bank';
$string['generalgroups'] = 'Include groups and groupings';
$string['generalrestoredefaults'] = 'General restore defaults';
$string['mergerestoredefaults'] = 'Restore defaults when merging into another course';
$string['replacerestoredefaults'] = 'Restore defaults when restoring into another course deleting contents';
$string['generalrestoresettings'] = 'General restore settings';
$string['generalroleassignments'] = 'Include role assignments';
$string['generalpermissions'] = 'Include permission overrides';
$string['generalsettings'] = 'General backup settings';
$string['generaluserscompletion'] = 'Include user completion information';
$string['generalusers'] = 'Include users';
$string['hidetypes'] = 'Hide type options';
$string['importgeneralsettings'] = 'General import defaults';
$string['importgeneralmaxresults'] = 'Maximum number of courses listed for import';
$string['importgeneralmaxresults_desc'] = 'This controls the number of courses that are listed during the first step of the import process';
$string['importgeneralduplicateadminallowed'] = 'Allow admin conflict resolution';
$string['importgeneralduplicateadminallowed_desc'] = 'If the site has an account with username \'admin\', then attempting to restore a backup file containing an account with username \'admin\' can cause a conflict. If this setting is enabled, the conflict will be resolved by changing the username in the backup file to \'admin_xyz\'.';
$string['importfile'] = 'Import a backup file';
$string['importbackupstage1action'] = 'Next';
$string['importbackupstage2action'] = 'Next';
$string['importbackupstage4action'] = 'Perform import';
$string['importbackupstage8action'] = 'Continue';
$string['importbackupstage16action'] = 'Continue';
$string['importcurrentstage0'] = 'Course selection';
$string['importcurrentstage1'] = 'Initial settings';
$string['importcurrentstage2'] = 'Schema settings';
$string['importcurrentstage4'] = 'Confirmation and review';
$string['importcurrentstage8'] = 'Perform import';
$string['importcurrentstage16'] = 'Complete';
$string['importrootsettings'] = 'Import settings';
$string['importsettings'] = 'General import settings';
$string['importsuccess'] = 'Import complete. Click continue to return to the course.';
$string['inprogress'] = 'Backup in progress';
$string['includeactivities'] = 'Include:';
$string['includeditems'] = 'Included items:';
$string['includesection'] = 'Section {$a}';
$string['includeuserinfo'] = 'User data';
$string['includefilereferences'] = 'File references to external contents';
$string['jumptofinalstep'] = 'Jump to final step';
$string['keep'] = 'Keep';
$string['locked'] = 'Locked';
$string['lockedbypermission'] = 'You don\'t have sufficient permissions to change this setting';
$string['lockedbyconfig'] = 'This setting has been locked by the default backup settings';
$string['lockedbyhierarchy'] = 'Locked by dependencies';
$string['loglifetime'] = 'Keep logs for';
$string['managefiles'] = 'Manage backup files';
$string['keptroles'] = 'Include role enrolments';
$string['keptroles_help'] = 'Users with the selected roles will be enrolled into the new course. No user data will be copied unless \'Include user data\' is enabled.';
$string['missingfilesinpool'] = 'Some files could not be saved during the backup, and so it will not be possible to restore them.';
$string['moodleversion'] = 'Moodle version';
$string['moreresults'] = 'There are too many results, enter a more specific search.';
$string['nomatchingcourses'] = 'There are no courses to display';
$string['norestoreoptions'] = 'There are no categories or existing courses you can restore to.';
$string['originalwwwroot'] = 'URL of backup';
$string['overwrite'] = 'Overwrite';
$string['pendingasyncdetail'] = 'Asynchronous backups only allow a user to have one pending backup for a resource at a time. <br/> Multiple asynchronous backups of the same resource can\'t be queued, as this would likely result in multiple backups with the same content.';
$string['pendingasyncdeletedetail'] = 'This course has an asynchronous backup pending. <br/> Courses can\'t be deleted until this backup finishes.';
$string['pendingasyncedit'] = 'There is a pending asynchronous backup for this course. Please do not edit this course until backup is complete.';
$string['pendingasyncerror'] = 'Backup pending for this resource';
$string['previousstage'] = 'Previous';
$string['preparingui'] = 'Preparing to display page';
$string['preparingdata'] = 'Preparing data';
$string['privacy:metadata:backup:detailsofarchive'] = 'This archive can contain various user data related to a course, such as grades, user enrolments and activity data.';
$string['privacy:metadata:backup:externalpurpose'] = 'The purpose of this archive is to store information related to a course, which may be restored in the future.';
$string['privacy:metadata:backup_controllers'] = 'The list of backup operations';
$string['privacy:metadata:backup_controllers:itemid'] = 'The ID of the course';
$string['privacy:metadata:backup_controllers:operation'] = 'The operation that was performed, eg. restore.';
$string['privacy:metadata:backup_controllers:timecreated'] = 'The time when the action was created';
$string['privacy:metadata:backup_controllers:timemodified'] = 'The time when the action was modified';
$string['privacy:metadata:backup_controllers:type'] = 'The type of the item being operated on, eg. activity.';
$string['qcategory2coursefallback'] = 'The questions category "{$a->name}", originally at system/course category context in backup file, will be created at course context by restore';
$string['qcategorycannotberestored'] = 'The questions category "{$a->name}" cannot be created by restore';
$string['question2coursefallback'] = 'The questions category "{$a->name}", originally at system/course category context in backup file, will be created at course context by restore';
$string['questionegorycannotberestored'] = 'The questions "{$a->name}" cannot be created by restore';
$string['restoreactivity'] = 'Restore activity';
$string['restorecourse'] = 'Restore course';
$string['restorecoursesettings'] = 'Course settings';
$string['restoredcourseid'] = 'Restored course ID: {$a}';
$string['restoreexecutionsuccess'] = 'The course was restored successfully, clicking the continue button below will take you to view the course you restored.';
$string['restorefileweremissing'] = 'Some files could not be restored because they were missing in the backup.';
$string['restorenewcoursefullname'] = 'New course name';
$string['restorenewcourseshortname'] = 'New course short name';
$string['restorenewcoursestartdate'] = 'New start date';
$string['restorerootsettings'] = 'Restore settings';
$string['restoresection'] = 'Restore section';
$string['restorestage1'] = 'Confirm';
$string['restorestage1action'] = 'Next';
$string['restorestage2'] = 'Destination';
$string['restorestage2action'] = 'Next';
$string['restorestage4'] = 'Settings';
$string['restorestage4action'] = 'Next';
$string['restorestage8'] = 'Schema';
$string['restorestage8action'] = 'Next';
$string['restorestage16'] = 'Review';
$string['restorestage16action'] = 'Perform restore';
$string['restorestage32'] = 'Process';
$string['restorestage32action'] = 'Continue';
$string['restorestage64'] = 'Complete';
$string['restorestage64action'] = 'Continue';
$string['restoretarget'] = 'Restore target';
$string['restoretocourse'] = 'Restore to course: ';
$string['restoretocurrentcourse'] = 'Restore into this course';
$string['restoretocurrentcourseadding'] = 'Merge the backup course into this course';
$string['restoretocurrentcoursedeleting'] = 'Delete the contents of this course and then restore';
$string['restoretoexistingcourse'] = 'Restore into an existing course';
$string['restoretoexistingcourseadding'] = 'Merge the backup course into the existing course';
$string['restoretoexistingcoursedeleting'] = 'Delete the contents of the existing course and then restore';
$string['restoretonewcourse'] = 'Restore as a new course';
$string['restoringcourse'] = 'Course restoration in progress';
$string['restoringcourseshortname'] = 'restoring';
$string['restorerolemappings'] = 'Restore role mappings';
$string['rootenrolmanual'] = 'Restore as manual enrolments';
$string['rootsettingcustomfield'] = 'Include custom fields';
$string['rootsettingenrolments'] = 'Include enrolment methods';
$string['rootsettingenrolments_always'] = 'Yes, always';
$string['rootsettingenrolments_never'] = 'No, restore users as manual enrolments';
$string['rootsettingenrolments_withusers'] = 'Yes, but only if users are included';
$string['rootsettings'] = 'Backup settings';
$string['rootsettingusers'] = 'Include enrolled users';
$string['rootsettinganonymize'] = 'Anonymize user information';
$string['rootsettingroleassignments'] = 'Include user role assignments';
$string['rootsettingpermissions'] = 'Include permission overrides';
$string['rootsettingactivities'] = 'Include activities and resources';
$string['rootsettingbadges'] = 'Include badges';
$string['rootsettingblocks'] = 'Include blocks';
$string['rootsettingcompetencies'] = 'Include competencies';
$string['rootsettingfilters'] = 'Include filters';
$string['rootsettingfiles'] = 'Include files';
$string['rootsettingcomments'] = 'Include comments';
$string['rootsettingcalendarevents'] = 'Include calendar events';
$string['rootsettingcontentbankcontent'] = 'Include content bank content';
$string['rootsettinguserscompletion'] = 'Include user completion details';
$string['rootsettingquestionbank'] = 'Include question bank';
$string['rootsettinglegacyfiles'] = 'Include legacy course files';
$string['rootsettinglogs'] = 'Include course logs';
$string['rootsettinggradehistories'] = 'Include grade history';
$string['rootsettinggroups'] = 'Include groups and groupings';
$string['rootsettingimscc1'] = 'Convert to IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Convert to IMS Common Cartridge 1.1';
$string['samesitenotification'] = 'This backup was created with only references to files, not the files themselves. Restoring will only work on this site.';
$string['sitecourseformatwarning'] = 'This is a front page backup, note that they can only be restored on the front page';
$string['storagecourseonly'] = 'Course backup filearea';
$string['storagecourseandexternal'] = 'Course backup filearea and the specified directory';
$string['storageexternalonly'] = 'Specified directory for automated backups';
$string['sectionincanduser'] = 'Included in backup along with user information';
$string['sectioninc'] = 'Included in backup (no user information)';
$string['sectionactivities'] = 'Activities';
$string['selectacategory'] = 'Select a category';
$string['selectacourse'] = 'Select a course';
$string['setting_course_fullname'] = 'Course name';
$string['setting_course_shortname'] = 'Course short name';
$string['setting_course_startdate'] = 'Course start date';
$string['setting_keep_roles_and_enrolments'] = 'Keep current roles and enrolments';
$string['setting_keep_groups_and_groupings'] = 'Keep current groups and groupings';
$string['setting_overwrite_conf'] = 'Overwrite course configuration';
$string['setting_overwrite_course_fullname'] = 'Overwrite course full name';
$string['setting_overwrite_course_shortname'] = 'Overwrite course short name';
$string['setting_overwrite_course_startdate'] = 'Overwrite course start date';
$string['showtypes'] = 'Show type options';
$string['skiphidden'] = 'Skip hidden courses';
$string['skiphiddenhelp'] = 'Choose whether or not to skip hidden courses';
$string['skipmodifdays'] = 'Skip courses not modified since';
$string['skipmodifdayshelp'] = 'Choose to skip courses that have not been modified since a number of days';
$string['skipmodifprev'] = 'Skip courses not modified since previous backup';
$string['skipmodifprevhelp'] = 'Choose whether to skip courses that have not been modified since the last automatic backup. This requires logging to be enabled.';
$string['status'] = 'Status';
$string['successful'] = 'Backup successful';
$string['successfulcopy'] = 'Copy successful';
$string['successfulrestore'] = 'Restore successful';
$string['timetaken'] = 'Time taken';
$string['title'] = 'Title';
$string['totalcategorysearchresults'] = 'Total categories: {$a}';
$string['totalcoursesearchresults'] = 'Total courses: {$a}';
$string['undefinedrolemapping'] = 'Role mapping undefined for \'{$a}\' archetype.';
$string['unnamedsection'] = 'Unnamed section';
$string['userdata'] = 'Include user data';
$string['userdata_help'] = 'If enabled, data such as forum posts, assignment submissions etc. will be copied into the new course for any users with a role selected in \'Include role enrolments\'.';
$string['userinfo'] = 'Userinfo';
$string['module'] = 'Module';
$string['morecoursesearchresults'] = 'More than {$a} courses found, showing first {$a} results';
$string['recyclebin_desc'] = 'Note that these settings will be also be used for the recycle bin.';
