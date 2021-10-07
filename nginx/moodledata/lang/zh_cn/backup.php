<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'backup', language 'zh_cn', version '3.11'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = '备份过程已完成';
$string['asyncbackupcompletebutton'] = '继续';
$string['asyncbackupcompletedetail'] = '备份过程已成功完成。<br/>您可以在<a href=“{$a}”>还原页面访问备份</a>';
$string['asyncbackuperror'] = '备份过程失败';
$string['asyncbackuperrordetail'] = '备份过程失败。请与系统管理员联系。';
$string['asyncbackuppending'] = '备份过程挂起';
$string['asyncbackupprocessing'] = '备份正在进行中';
$string['asyncbadexecution'] = '备份控制器执行错误。它是{$a}，应该是2。';
$string['asynccheckprogress'] = '您可以随时在<a href=“{$a}”>恢复页面上查看进度。';
$string['asyncemailenable'] = '启用消息通知';
$string['asyncemailenabledetail'] = '如果启用，则当异步备份或还原完成时，用户将收到一条消息。';
$string['asyncgeneralsettings'] = '异步备份/恢复';
$string['asyncmessagebody'] = '消息';
$string['asyncmessagebodydefault'] = '你好{user_firstname}，<br/>您的{operation}（ID:{backupid}）已成功完成。<br/><br/>您可以在此处访问：{link}。';
$string['asyncmessagebodydetail'] = '异步备份或还原完成时要发送的消息。';
$string['asyncmessagesubject'] = '主题';
$string['asyncmessagesubjectdefault'] = 'Moodle{operation}成功完成';
$string['asyncmessagesubjectdetail'] = '消息主题';
$string['asyncnowait'] = '您不需要在这里等待，因为该过程将在后台继续。';
$string['asyncprocesspending'] = '进程挂起';
$string['asyncrestorecomplete'] = '还原过程已完成';
$string['asyncrestorecompletebutton'] = '继续';
$string['asyncrestorecompletedetail'] = '还原过程已成功完成。单击“继续”将带您进入还原项目的<a href=“{$a}”>课程</a>';
$string['asyncrestoreerror'] = '还原过程失败';
$string['asyncrestoreerrordetail'] = '还原过程失败。请与系统管理员联系。';
$string['asyncrestoreinprogress'] = '正在进行恢复';
$string['asyncrestoreinprogress_help'] = '此处显示正在进行的异步进程恢复。';
$string['asyncrestorepending'] = '还原过程挂起';
$string['asyncrestoreprocessing'] = '还原正在进行中';
$string['asyncreturn'] = '返回到课程中';
$string['autoactivedescription'] = '选择是否进行自动备份。如果选择人工，那么只能通过命令行的自动备份脚本做自动备份。您可以在命令行或通过cron来调用。';
$string['autoactivedisabled'] = '禁用';
$string['autoactiveenabled'] = '启用';
$string['autoactivemanual'] = '人工';
$string['automatedbackupschedule'] = '时间表';
$string['automatedbackupschedulehelp'] = '选择每周的哪一天进行自动备份。';
$string['automatedbackupsinactive'] = '定时备份功能没有开启';
$string['automatedbackupstatus'] = '定时备份状态';
$string['automateddeletedays'] = '删除早于下列时间的备份：';
$string['automatedmaxkept'] = '备份保存的最大数目：';
$string['automatedmaxkepthelp'] = '此功能指定要保留每门课程最近自动备份的最大数目。旧的备份将被自动删除。';
$string['automatedminkept'] = '备份保存的最小数目：';
$string['automatedminkepthelp'] = '如果超过指定天数的备份被删除，有可能出现在不活跃的课程的备份被删光了的情况。为了防止这种情况，应该指定一个备份保存的最小数目。';
$string['automatedsettings'] = '定时备份设置';
$string['automatedsetup'] = '自动备份设置';
$string['automatedstorage'] = '自动备份存储';
$string['automatedstoragehelp'] = '选择自动备份文件的存储路径';
$string['backupactivity'] = '备份活动：{$a}';
$string['backupcourse'] = '备份课程：{$a}';
$string['backupcoursedetails'] = '课程细节';
$string['backupcoursesection'] = '小节：{$a}';
$string['backupcoursesections'] = '课程小节';
$string['backupdate'] = '备份时间';
$string['backupdetails'] = '备份细节';
$string['backupdetailsnonstandardinfo'] = '所选的文件不是标准的Moodle备份文件。恢复进程会尝试将它转换为标准格式再恢复。';
$string['backupformat'] = '格式';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = '不可识别的格式';
$string['backuplog'] = '技术信息与警告';
$string['backupmode'] = '方式';
$string['backupmode10'] = '普通';
$string['backupmode20'] = '导入';
$string['backupmode30'] = '中心';
$string['backupmode40'] = '相同网站';
$string['backupmode50'] = '自动';
$string['backupmode60'] = '转换';
$string['backupmode70'] = '异步';
$string['backupsection'] = '备份课程小节：{$a}';
$string['backupsettings'] = '备份设置';
$string['backupsitedetails'] = '网站细节';
$string['backupstage16action'] = '继续';
$string['backupstage1action'] = '下一步';
$string['backupstage2action'] = '下一步';
$string['backupstage4action'] = '开始备份';
$string['backupstage8action'] = '继续';
$string['backuptype'] = '类型';
$string['backuptypeactivity'] = '活动';
$string['backuptypecourse'] = '课程';
$string['backuptypesection'] = '主题';
$string['backupversion'] = '备份版本';
$string['cannotfindassignablerole'] = '备份文件中的角色“{$a}”不能映射到任何您可以分配的角色。';
$string['choosefilefromactivitybackup'] = '活动备份区';
$string['choosefilefromactivitybackup_help'] = '采用默认设置备份的备份文件会被保存在这里';
$string['choosefilefromautomatedbackup'] = '自动备份';
$string['choosefilefromautomatedbackup_help'] = '包含自动生成的备份。';
$string['choosefilefromcoursebackup'] = '课程备份区';
$string['choosefilefromcoursebackup_help'] = '使用缺省设置备份课程的备份文件会被保存到这里';
$string['choosefilefromuserbackup'] = '用户私人备份区';
$string['choosefilefromuserbackup_help'] = '包含了匿名化用户信息的备份文件会保存在这里。';
$string['config_keep_groups_and_groupings'] = '默认保留当前组和分组。';
$string['config_keep_roles_and_enrolments'] = '默认保留当前角色和选课。';
$string['config_overwrite_conf'] = '允许用户覆盖当前课程配置';
$string['config_overwrite_course_fullname'] = '默认用备份文件中的全名覆盖课程全名。需要已选定 "覆盖课程配置", 同时当前用户有权限更改课程全名 (moodle/课程: 更改命名)';
$string['config_overwrite_course_shortname'] = '默认用备份文件中的全名覆盖课程短名。需要已选定 "覆盖课程配置", 同时当前用户有权限更改课程短名 (moodle/课程: 更改短名)';
$string['config_overwrite_course_startdate'] = '默认用备份文件中的开始日期覆盖课程开始日期。需要已选定 "覆盖课程配置", 并且当前用户有权限还原课程日期 (moodle/还原: 还原日期)';
$string['configgeneralactivities'] = '缺省情况下，备份是否包含各种活动。';
$string['configgeneralanonymize'] = '如果激活，会默认将与用户有关的信息匿名化。';
$string['configgeneralbadges'] = '缺省情况下，备份包含奖章。';
$string['configgeneralblocks'] = '缺省情况下，备份是否包含各个版块。';
$string['configgeneralcalendarevents'] = '设置默认在备份中包括日历事件。';
$string['configgeneralcomments'] = '缺省情况下，备份是否包含评论。';
$string['configgeneralcompetencies'] = '设置默认在备份中包含能力。';
$string['configgeneralcontentbankcontent'] = '设置在备份中包含内容库内容的默认值。';
$string['configgeneralfiles'] = '设置备份中包含文件的默认值。请注意：禁用此设置将导致只包含对文件的引用的备份。如果备份在同一站点上还原，并且文件没有根据设置“清理垃圾桶文件”（filescanneupperiod）删除，则这不是问题。';
$string['configgeneralfilters'] = '缺省情况下，备份是否包含过滤器。';
$string['configgeneralgroups'] = '为包括在分组和备份中的分组设置默认值。';
$string['configgeneralhistories'] = '缺省情况下，备份是否包含用户的历史记录。';
$string['configgenerallogs'] = '如果激活，会默认将日志包含在备份中。';
$string['configgeneralpermissions'] = '如果启用，将导入角色权限。 这可能会覆盖注册用户的现有权限。';
$string['configgeneralquestionbank'] = '如果启用，默认备份题库。
请注意：若关闭，将不备份使用到题库的任何活动（如测验）。';
$string['configgeneralroleassignments'] = '如果激活，会默认备份角色分配情况。';
$string['configgeneralusers'] = '缺省情况下，备份是否包含用户。';
$string['configgeneraluserscompletion'] = '如果启用，会默认在备份中包含用户的课程完成信息。';
$string['configlegacyfiles'] = '设置在备份中包含旧课程文件的默认设置。 传统课程文件来自 Moodle 2.0 之前的版本。';
$string['configloglifetime'] = '这里设置将备份的日志信息保留多久。超过此期限的日志会被自动删除。建议把此值设得小一些，因为备份的日志可能会很大。';
$string['configrestoreactivities'] = '设置恢复活动的默认值。';
$string['configrestorebadges'] = '设置恢复奖章的默认值。';
$string['configrestoreblocks'] = '设置恢复版块的默认值。';
$string['configrestorecalendarevents'] = '设置恢复日历事件的默认值。';
$string['configrestorecomments'] = '设置恢复评论的默认值。';
$string['configrestorecompetencies'] = '设置恢复能力的默认值。';
$string['configrestorecontentbankcontent'] = '设置恢复内容库内容的默认值。';
$string['configrestoreenrolments'] = '设置恢复选课方法的默认值。';
$string['configrestorefilters'] = '设置恢复过滤器的默认值。';
$string['configrestoregroups'] = '设置还原组和分组 (如果它们包含在备份中) 的默认值。';
$string['configrestorehistories'] = '设置还原用户历史记录 (如果包含在备份中) 的默认值。';
$string['configrestorelogs'] = '如果启用，如果在备份中包含了日志，则默认恢复日志。';
$string['configrestorepermissions'] = '如果启用，角色权限将被恢复。 这可能会覆盖注册用户的现有权限。';
$string['configrestoreroleassignments'] = '如果启用，默认情况下包含在备份中的角色分配将被恢复。';
$string['configrestoreusers'] = '设置默认值，是否恢复包含在备份中的用户。';
$string['configrestoreuserscompletion'] = '如果启用，如果在备份中包含了用户课程完成信息，那么默认情况下将会恢复。';
$string['confirmcancel'] = '放弃备份';
$string['confirmcancelimport'] = '取消导入';
$string['confirmcancelno'] = '不取消';
$string['confirmcancelquestion'] = '您确定要放弃吗？
您输入的所有信息都将丢失。';
$string['confirmcancelrestore'] = '取消恢复';
$string['confirmcancelyes'] = '取消备份';
$string['confirmnewcoursecontinue'] = '新课程警告';
$string['confirmnewcoursecontinuequestion'] = '课程恢复过程中会创建一个临时（隐藏）课程。点击放弃按钮放弃恢复。恢复过程中不要关闭浏览器。';
$string['copiesinprogress'] = '这门课的副本正在进行中。<a href=“{$a}”>查看正在进行的副本</a>';
$string['copycoursedesc'] = '当前课程将被复制并放到选定的课程目录中';
$string['copycourseheading'] = '复制课程';
$string['copycoursetitle'] = '复制课程：{$a}';
$string['copydest'] = '目的地';
$string['copyfieldnotfound'] = '未找到必填字段';
$string['copyformfail'] = '当然，AJAX提交副本表单失败了。';
$string['copyingcourse'] = '正在复制课程';
$string['copyingcourseshortname'] = '复制';
$string['copyop'] = '当前操作';
$string['copyprogressheading'] = '正在制作课程副本';
$string['copyprogressheading_help'] = '此表显示所有未完成课程副本的状态。';
$string['copyprogresstitle'] = '课程复制进度';
$string['copyreturn'] = '复制并返回';
$string['copysource'] = '来源';
$string['copyview'] = '复制和查看';
$string['coursecategory'] = '此课程要恢复到的分类';
$string['courseid'] = '原ID';
$string['coursesettings'] = '课程设置';
$string['coursetitle'] = '标题';
$string['currentstage1'] = '初始设置';
$string['currentstage16'] = '完成';
$string['currentstage2'] = '架构设置';
$string['currentstage4'] = '确认和审核';
$string['currentstage8'] = '执行备份';
$string['enableasyncbackup'] = '启用异步备份';
$string['enableasyncbackup_help'] = '如果启用，所有备份和还原操作都将异步完成。这并不影响进出口。异步备份和还原允许用户在备份或还原过程中执行其他操作。';
$string['enterasearch'] = '键入并搜索';
$string['error_block_for_module_not_found'] = '在课程模块（ID：{$a->mid}）发现无主版块实例（ID：{$a->bid}）。不会备份此版块。';
$string['error_course_module_not_found'] = '发现无主课程模块（ID：{$a}）。不会备份此模块。';
$string['errorcopyingbackupfile'] = '在还原前无法将备份文件复制到临时文件夹。';
$string['errorfilenamemustbezip'] = '您输入的文件名必须是ZIP文件且扩展名为.mbz';
$string['errorfilenamerequired'] = '您必须输入一个有效的文件名';
$string['errorfilenametoolong'] = '文件名长度必须小于255个字符。';
$string['errorinvalidformat'] = '无法识别的备份格式';
$string['errorinvalidformatinfo'] = '所选文件不是有效的Moodle备份文件，不能恢复。';
$string['errorminbackup20version'] = '此备份文件由开发版的Moodle备份创建 ({$a->backup})。最低需求是{$a->min}。不能恢复。';
$string['errorrestorefrontpagebackup'] = '你只能在一个首页上恢复首页备份';
$string['executionsuccess'] = '成功建立备份文件。';
$string['extractingbackupfileto'] = '将备份文件解压到：{$a}';
$string['failed'] = '备份失败';
$string['filealiasesrestorefailures'] = '别名恢复失败';
$string['filealiasesrestorefailures_help'] = '别名是链接到其他文件的符号链接，包括存储在外部容器中的文件。在某些情况下，Moodle 不能恢复它们——例如，在另一个站点恢复此备份文件或引用的文件不存在在时。

在恢复日志文件里能找到更多的细节和失败的确切原因。';
$string['filealiasesrestorefailuresinfo'] = '备份文件里的一些别名不能恢复。下面列出了它们预期的位置，和它们在原始网站的源文件。';
$string['filename'] = '文件名';
$string['filereferencesincluded'] = '备份包中某些文件引用了外部内容，如果备份在其他站点上还原，它们将会无效。';
$string['filereferencesnotsamesite'] = '备份来自其他网站，因此文件引用不能恢复';
$string['filereferencessamesite'] = '备份来自同一网站，因此文件引用可以恢复';
$string['generalactivities'] = '包括活动和资源';
$string['generalanonymize'] = '匿名信息';
$string['generalbackdefaults'] = '备份默认设置';
$string['generalbadges'] = '包含奖章';
$string['generalblocks'] = '包括版块';
$string['generalcalendarevents'] = '包括日历事件';
$string['generalcomments'] = '包括评论';
$string['generalcompetencies'] = '包括能力';
$string['generalcontentbankcontent'] = '包括内容库内容';
$string['generalenrolments'] = '包括选课方法';
$string['generalfiles'] = '包括文件';
$string['generalfilters'] = '包括过滤器';
$string['generalgradehistories'] = '包括历史';
$string['generalgroups'] = '包含小组和大组';
$string['generalhistories'] = '包括历史';
$string['generallegacyfiles'] = '包括遗留课程文件';
$string['generallogs'] = '包括日志';
$string['generalpermissions'] = '包括权限覆盖';
$string['generalquestionbank'] = '包含题库';
$string['generalrestoredefaults'] = '常规恢复默认值';
$string['generalrestoresettings'] = '常规恢复设置';
$string['generalroleassignments'] = '包括角色分配';
$string['generalsettings'] = '一般备份设置';
$string['generalusers'] = '包括用户';
$string['generaluserscompletion'] = '包含用户课程完成信息';
$string['hidetypes'] = '隐藏类型选项';
$string['importbackupstage16action'] = '继续';
$string['importbackupstage1action'] = '下一步';
$string['importbackupstage2action'] = '下一步';
$string['importbackupstage4action'] = '执行导入';
$string['importbackupstage8action'] = '继续';
$string['importcurrentstage0'] = '课程选择';
$string['importcurrentstage1'] = '初始设置';
$string['importcurrentstage16'] = '完成';
$string['importcurrentstage2'] = '架构设置';
$string['importcurrentstage4'] = '确认和审核';
$string['importcurrentstage8'] = '执行导入';
$string['importfile'] = '导入一个备份文件';
$string['importgeneralduplicateadminallowed'] = '管理员账号冲突允许自动解决';
$string['importgeneralduplicateadminallowed_desc'] = '如果网站有一个用户名为’admin\'的账号，在尝试恢复一个含有‘admin\'同名用户的备份文件时，会产生冲突。如果启用此设置，冲突会通过修改备份文件中的’admin‘用户名为’admin_xyz‘的方式解决。';
$string['importgeneralmaxresults'] = '最多同时恢复课程数';
$string['importgeneralmaxresults_desc'] = '用来控制在恢复课程的第一步中显示课程数';
$string['importgeneralsettings'] = '常规恢复默认值';
$string['importrootsettings'] = '导入设置';
$string['importsettings'] = '常规导入设置';
$string['importsuccess'] = '导入完成。点继续返回到课程。';
$string['includeactivities'] = '包括：';
$string['includeditems'] = '包括项目：';
$string['includefilereferences'] = '文件引用了外部内容';
$string['includesection'] = '小节{$a}';
$string['includeuserinfo'] = '用户数据';
$string['inprogress'] = '正在备份';
$string['jumptofinalstep'] = '跳到最后一步';
$string['keep'] = '保留';
$string['keptroles'] = '包括角色注册';
$string['keptroles_help'] = '具有所选角色的用户将注册到新课程中。除非启用“包含用户数据”，否则不会复制任何用户数据。';
$string['locked'] = '锁定';
$string['lockedbyconfig'] = '此设置已被默认备份设置锁定';
$string['lockedbyhierarchy'] = '因依赖关系而锁定';
$string['lockedbypermission'] = '您没有更改此设置的权限';
$string['loglifetime'] = '保留日志多久';
$string['managefiles'] = '管理备份文件';
$string['mergerestoredefaults'] = '在合并到另一个课程时恢复的默认值';
$string['missingfilesinpool'] = '在备份过程中某些文件不能保存，因此也不可能恢复它们。';
$string['module'] = '模块';
$string['moodleversion'] = 'Moodle版本';
$string['morecoursesearchresults'] = '已找到课程多于{$a}，正在显示前{$a}门课程';
$string['moreresults'] = '搜索结果太多了，请输入更多特别的搜索词。';
$string['nomatchingcourses'] = '没有可显示的课程';
$string['norestoreoptions'] = '没有您可以恢复到的分类或已有课程。';
$string['originalwwwroot'] = '备份的URL';
$string['overwrite'] = '覆盖';
$string['pendingasyncdeletedetail'] = '本课程有一个异步备份挂起。<br/>在备份完成之前，无法删除课程。';
$string['pendingasyncdetail'] = '异步备份只允许用户一次对一个资源进行一次挂起的备份。<br/>同一资源的多个异步备份无法排队，因为这可能会导致具有相同内容的多个备份。';
$string['pendingasyncedit'] = '此课程有一个挂起的异步备份。在备份完成之前，请不要编辑此课程。';
$string['pendingasyncerror'] = '备份被挂起因为这个资源';
$string['preparingdata'] = '数据准备中';
$string['preparingui'] = '准备显示页面';
$string['previousstage'] = '上一步';
$string['privacy:metadata:backup:detailsofarchive'] = '此存档可以包含与课程相关的各种用户数据, 如成绩、用户注册和活动数据。';
$string['privacy:metadata:backup:externalpurpose'] = '此存档的目的是存储与课程相关的信息, 将来可能会还原该课程。';
$string['privacy:metadata:backup_controllers'] = '备份操作列表';
$string['privacy:metadata:backup_controllers:itemid'] = '课程编号';
$string['privacy:metadata:backup_controllers:operation'] = '已执行的操作 例如，恢复。';
$string['privacy:metadata:backup_controllers:timecreated'] = '操作创建时间';
$string['privacy:metadata:backup_controllers:timemodified'] = '操作修改时间';
$string['privacy:metadata:backup_controllers:type'] = '正在操作的对象的类型, 如，活动。';
$string['qcategory2coursefallback'] = '备份文件中的题目类别“{$a->name}”原来是在系统/课程级类别中，恢复后将建立在课程级类别';
$string['qcategorycannotberestored'] = '恢复过程中不能创建题目类别“{$a->name}”';
$string['question2coursefallback'] = '备份文件中的题目类别“{$a->name}”原来是在系统/课程级类别中，恢复后将建立在课程级类别';
$string['questionegorycannotberestored'] = '这些题目“{$a->name}”不能用还原来创建';
$string['recyclebin_desc'] = '这些设置也将应用于回收站';
$string['replacerestoredefaults'] = '当恢复到另一个删除内容的课程时，恢复的默认值';
$string['restoreactivity'] = '恢复活动';
$string['restorecourse'] = '恢复课程';
$string['restorecoursesettings'] = '课程设置';
$string['restoredcourseid'] = '恢复的课程 ID：{$a}';
$string['restoreexecutionsuccess'] = '课程已成功恢复。点击继续按钮浏览此课程。';
$string['restorefileweremissing'] = '某些文件不能恢复，因为该文件不在备份文件中。';
$string['restorenewcoursefullname'] = '新课程名';
$string['restorenewcourseshortname'] = '新课程简称';
$string['restorenewcoursestartdate'] = '新开始日期';
$string['restorerolemappings'] = '恢复角色映射';
$string['restorerootsettings'] = '恢复设置';
$string['restoresection'] = '恢复小节';
$string['restorestage1'] = '确认';
$string['restorestage16'] = '审核';
$string['restorestage16action'] = '开始恢复';
$string['restorestage1action'] = '下一步';
$string['restorestage2'] = '目标';
$string['restorestage2action'] = '下一步';
$string['restorestage32'] = '处理';
$string['restorestage32action'] = '继续';
$string['restorestage4'] = '设置';
$string['restorestage4action'] = '下一步';
$string['restorestage64'] = '完成';
$string['restorestage64action'] = '继续';
$string['restorestage8'] = '结构';
$string['restorestage8action'] = '下一步';
$string['restoretarget'] = '恢复目标';
$string['restoretocourse'] = '恢复到课程：';
$string['restoretocurrentcourse'] = '恢复到此课程';
$string['restoretocurrentcourseadding'] = '合并备份的课程到此课程';
$string['restoretocurrentcoursedeleting'] = '删除课程内容然后恢复';
$string['restoretoexistingcourse'] = '恢复到已有的课程';
$string['restoretoexistingcourseadding'] = '合并备份的课程到已有的课程';
$string['restoretoexistingcoursedeleting'] = '删除已有课程的内容然后恢复';
$string['restoretonewcourse'] = '恢复为一个新课程';
$string['restoringcourse'] = '课程正在恢复';
$string['restoringcourseshortname'] = '恢复中';
$string['rootenrolmanual'] = '恢复为人工选课';
$string['rootsettingactivities'] = '包括活动和资源';
$string['rootsettinganonymize'] = '匿名化用户信息';
$string['rootsettingbadges'] = '包含奖章';
$string['rootsettingblocks'] = '包括版块';
$string['rootsettingcalendarevents'] = '包括日历事件';
$string['rootsettingcomments'] = '包括评论';
$string['rootsettingcompetencies'] = '包含能力';
$string['rootsettingcontentbankcontent'] = '包括内容库内容';
$string['rootsettingcustomfield'] = '包括自定义字段';
$string['rootsettingenrolments'] = '包括选课方法';
$string['rootsettingenrolments_always'] = '是的，总是这样';
$string['rootsettingenrolments_never'] = '不，将用户恢复为人工选课';
$string['rootsettingenrolments_withusers'] = '是的，但是仅仅包括选课的用户';
$string['rootsettingfiles'] = '包括文件';
$string['rootsettingfilters'] = '包括过滤器';
$string['rootsettinggradehistories'] = '包括成绩历史';
$string['rootsettinggroups'] = '包含小组和大组';
$string['rootsettingimscc1'] = '转换到 IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = '转换到 IMS Common Cartridge 1.1';
$string['rootsettinglegacyfiles'] = '包括遗留课程文件';
$string['rootsettinglogs'] = '包括课程日志';
$string['rootsettingpermissions'] = '包括权限覆盖';
$string['rootsettingquestionbank'] = '包含题库';
$string['rootsettingroleassignments'] = '包括角色分配';
$string['rootsettings'] = '备份设置';
$string['rootsettingusers'] = '包括已选课用户';
$string['rootsettinguserscompletion'] = '包括用户学习进度细节';
$string['samesitenotification'] = '创建此备份时仅引用文件，而不是文件本身。恢复只能在此网站上工作。';
$string['sectionactivities'] = '活动';
$string['sectioninc'] = '包含在备份中（无用户信息）';
$string['sectionincanduser'] = '随用户信息一起包含在备份中';
$string['selectacategory'] = '选择一个分类';
$string['selectacourse'] = '选择一个课程';
$string['setting_course_fullname'] = '课程名';
$string['setting_course_shortname'] = '课程简称';
$string['setting_course_startdate'] = '课程开始日期';
$string['setting_keep_groups_and_groupings'] = '保留当前的小组和大组';
$string['setting_keep_roles_and_enrolments'] = '保留当前角色和选课';
$string['setting_overwrite_conf'] = '覆盖课程配置';
$string['setting_overwrite_course_fullname'] = '覆盖课程的全名';
$string['setting_overwrite_course_shortname'] = '覆盖课程简称';
$string['setting_overwrite_course_startdate'] = '覆盖课程开始日期';
$string['showtypes'] = '显示类型选项';
$string['sitecourseformatwarning'] = '这是一个首页备份，注意你只能在首页上恢复。';
$string['skiphidden'] = '忽略隐藏课程';
$string['skiphiddenhelp'] = '选择是否要忽略隐藏课程';
$string['skipmodifdays'] = '忽略有多少天没有更新的课程';
$string['skipmodifdayshelp'] = '选择是否要忽略已经有多少天没有更新的课程';
$string['skipmodifprev'] = '忽略从上次备份以来没有更新的课程';
$string['skipmodifprevhelp'] = '选择是否跳过从上次自动备份后没有修改的课程。需要启用日志功能。';
$string['status'] = '状态';
$string['storagecourseandexternal'] = '课程备份文件区和指定的目录';
$string['storagecourseonly'] = '课程备份文件区';
$string['storageexternalonly'] = '指定自动备份的目录';
$string['successful'] = '备份成功';
$string['successfulcopy'] = '复制成功';
$string['successfulrestore'] = '恢复成功';
$string['timetaken'] = '耗时';
$string['title'] = '标题';
$string['totalcategorysearchresults'] = '分类总数：{$a}';
$string['totalcoursesearchresults'] = '课程总数：{$a}';
$string['undefinedrolemapping'] = '未定义"{$A}" 结构原型的角色映射。';
$string['unnamedsection'] = '未命名的小节';
$string['userdata'] = '包含用户的数据';
$string['userdata_help'] = '如果启用，论坛帖子、作业提交等数据将被复制到新课程中，供在“包括角色注册”中选择角色的任何用户使用。';
$string['userinfo'] = '用户的信息';
