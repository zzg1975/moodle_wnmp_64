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
 * Strings for component 'plagiarism_turnitinsim', language 'zh_cn', version '3.11'.
 *
 * @package     plagiarism_turnitinsim
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessoptions'] = '学生访问权限';
$string['accessoptions_help'] = '生成相似度报告后，学生将能够访问其提交文件的相似度报告。';
$string['accessstudents'] = '允许学生查看相似度报告';
$string['addtoindex'] = '为所有提交文件创建索引';
$string['code'] = '代码';
$string['connecttest'] = '测试Turnitin 连接';
$string['connecttestfailed'] = '连接测试失败。';
$string['connecttestsuccess'] = '连接测试成功';
$string['dbexport'] = '数据库导出';
$string['dbexporttable'] = '导出 {$a} 数据';
$string['defaultsettings'] = '默认设置';
$string['errorenabledfeatures'] = '无法获取已启用功能列表。';
$string['errorgettingsubmissioninfo'] = '尝试获取提交文件的信息时出错。';
$string['errorprocessingdeletedsubmission'] = '此提交文件属于已删除的作业，因此无法处理。';
$string['errortoolarge'] = '此文件超出了 {$a} 允许的最大大小，因此不会提交至 Turnitin';
$string['eulaaccept'] = '我接受 Turnitin EULA';
$string['eulaaccepted'] = '感谢您接受新版 Turnitin EULA。未来提交的所有文件将发送至 Turnitin 进行处理。';
$string['eulaalreadyaccepted'] = '您已接受最新版本的 Turnitin EULA。';
$string['euladecline'] = '我拒绝 Turnitin EULA';
$string['euladeclined'] = '由于您尚未接受 Turnitin 最终用户许可协议，因此您提交的文件将不会发送至 Turnitin。';
$string['eulaheader'] = 'Turnitin 最终用户许可协议';
$string['eulalink'] = '您必须接受 <a href="#" class="eula_link">Turnitin 最终用户许可协议</a>，才能将此提交文件发送至 Turnitin。';
$string['eulalinkgeneric'] = '如果您希望将未来提交的任何文件发送至 Turnitin，则必须接受 <a href="{$a}" target="_blank">Turnitin 最终用户许可协议</a>。';
$string['eulalinkmodal'] = '您必须接受 <a href="#" class="eula_link">Turnitin 最终用户许可协议</a>，才能将此提交文件发送至 Turnitin。';
$string['eulanotrequired'] = '您无需接受 Turnitin EULA。';
$string['excludebiblio'] = '参考书目';
$string['excludeoptions'] = '从相似度报告中排除';
$string['excludeoptions_help'] = '所选选项将不会在相似度报告中显示为匹配项。';
$string['excludequotes'] = '引用';
$string['faultcode'] = '故障代码';
$string['getwebhookfailure:message'] = '您在 Turnitin 上为抄袭插件注册的 Webhook 可能出现问题。计划的检查任务无法连接 Turnitin。请检查您的日志。';
$string['getwebhookfailure:subject'] = 'Turnitin webhook 检查失败';
$string['indexoptions'] = '创建提交文件的索引';
$string['indexoptions_help'] = '已创建索引的提交文件可用于在相似度报告中进行比较。';
$string['invalidtablename'] = '无法导出表 {$a}';
$string['line'] = '行';
$string['message'] = '消息';
$string['messageprovider:digital_receipt_instructor'] = 'Turnitin 导师数字收据';
$string['messageprovider:digital_receipt_student'] = 'Turnitin 学生数字收据';
$string['messageprovider:get_webhook_failure'] = 'Turnitin Webhook 检查失败';
$string['messageprovider:new_eula'] = 'Turnitin 新版本 EULA';
$string['neweula:message'] = 'Turnitin 发布了新版 EULA，有关更多信息请点击<a href="{$a}">此处</a>。';
$string['neweula:subject'] = 'Turnitin 新版 EULA 已发布';
$string['pluginname'] = 'Turnitin Integrity 插件';
$string['pluginsetup'] = '设置';
$string['privacy:metadata:plagiarism_turnitinsim_client'] = '要成功提交 Turnitin，需要在 Moodle 和 Turnitin 之间交换特定的用户数据。有关 Moodle 插件和 GDPR 的更多信息，请访问：https://help.turnitin.com/feedback-studio/moodle/moodle-plugins-and-gdpr.htm';
$string['privacy:metadata:plagiarism_turnitinsim_client:firstname'] = '在 Turnitin Viewer（Turnitin 查看器）启动时将用户的名字发送至 Turnitin，以便能够识别该用户。';
$string['privacy:metadata:plagiarism_turnitinsim_client:lastname'] = '在 Turnitin Viewer（Turnitin 查看器）启动时将用户的姓氏发送至 Turnitin，以便能够识别该用户。';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_content'] = '请注意，文件/提交文件的内容已发送至 Turnitin 进行处理。';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_filename'] = '已提交文件的名称已发送至 Turntin，便于识别该文件。';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_title'] = '提交文件的标题已发送至 Turntin，以便于识别。';
$string['privacy:metadata:plagiarism_turnitinsim_sub'] = '将 Moodle 提交文件链接至 Turnitin 提交文件的信息。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:identifier'] = 'Moodle 用于标识已提交文件的哈希。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:itemid'] = '用于标识相关模块类型的提交文件的 ID。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:overallscore'] = '提交文件的整体相似度得分。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:submittedtime'] = '指示何时将用户提交的文件发送至 Turnitin 的时间戳。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:turnitinid'] = 'Turnitin 引用提交文件时使用的 ID。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:userid'] = '已提交文件的用户 ID。';
$string['privacy:metadata:plagiarism_turnitinsim_users'] = '将 Moodle 用户链接到 Turnitin 用户的信息。';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaaccepted'] = '用户接受的最新版本 Turnitin EULA。';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedlang'] = '用户上次接受 Turnitin EULA 时使用的语言。';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedtime'] = '指示用户上次接受 Turnitin EULA 的时间戳。';
$string['privacy:metadata:plagiarism_turnitinsim_users:turnitinid'] = 'Turnitin 引用用户时使用的 ID。';
$string['privacy:metadata:plagiarism_turnitinsim_users:userid'] = '已提交文件的用户 ID。';
$string['queuedrafts'] = '处理提交的草稿';
$string['queuedrafts_help'] = '请注意，提交的草稿将不会在 Turnitin 中建立索引以用于检查目的';
$string['receiptsinstructor:message'] = '在课程 <strong>{$a->course_fullname}</strong> 中向模块 <strong>{$a->module_name}</strong> 提交的名为 <strong>{$a->submission_title}</strong> 的文件已发送至 Turnitin。<br /><br />提交 ID： <strong>{$a->submission_id}</strong><br />提交日期：<strong>{$a->submission_date}</strong>';
$string['receiptsinstructor:subject'] = '提交文件已发送至 Turnitin';
$string['receiptstudent:message'] = '尊敬的 {$a->firstname} {$a->lastname}：<br /><br />您在课程 <strong>{$a->course_fullname}</strong> 中向模块 <strong>{$a->module_name}</strong> 提交的文件 <strong>{$a->submission_title}</strong> 已于 {$a->submission_id}</strong> 成功提交至 Turnitin。您的提交 ID 为 <strong>{$a->submission_id}</strong>。<br /><br />感谢您使用 Turnitin，<br /><br />Turnitin 团队';
$string['receiptstudent:subject'] = '这是您的 Turnitin 数字收据';
$string['reportgen0'] = '立即';
$string['reportgen1'] = '立即且在截止日期重新生成';
$string['reportgen2'] = '截止日期';
$string['reportgenoptions'] = '生成相似度报告';
$string['reportgenoptions_help'] = '<strong>立即：</strong>将在提交文件后立即生成相似度报告。<br/><br/><strong>截止日期：</strong>仅在作业的截止日期生成相似度报告。<br/><br/><strong>立即且在截止日期：</strong>将在提交文件后立即生成相似度报告。将在作业的截止日期再次生成相似度报告。此选项可用于检查班级内是否存在相互抄袭的情况。';
$string['resubmittoturnitin'] = '重新提交至 Turnitin';
$string['savesuccess'] = '更改已保存';
$string['settingslearnmore'] = '了解有关 Turnitin 设置的更多信息';
$string['submissiondisplayerror:cannotextracttext'] = '报告不可用';
$string['submissiondisplayerror:cannotextracttext_help'] = '无法为此提交文件生成报告。这可能是因为此类型的文件无法生成报告或字数不够。';
$string['submissiondisplayerror:corruptfile'] = '损坏文件';
$string['submissiondisplayerror:corruptfile_help'] = '上传的文件似乎已损坏。';
$string['submissiondisplayerror:eulanotaccepted'] = '不接受 EULA';
$string['submissiondisplayerror:eulanotaccepted_help'] = '提交者必须接受 Turnitin EULA，才能检查提交文件的相似度。';
$string['submissiondisplayerror:filelocked'] = '文件已锁定';
$string['submissiondisplayerror:filelocked_help'] = '上传的文件需要密码才能打开。';
$string['submissiondisplayerror:generic'] = '文件未发送至 Turnitin';
$string['submissiondisplayerror:generic_help'] = '此文件尚未提交至 Turnitin，请咨询您的系统管理员';
$string['submissiondisplayerror:notsent'] = '文件未发送至 Turnitin';
$string['submissiondisplayerror:notsent_help'] = '此文件尚未提交至 Turnitin，这是因为提交时未启用 Turnitin，如果您愿意将其发送至 Turnitin，请修改或重新上传您的提交文件。';
$string['submissiondisplayerror:processingerror'] = '处理错误';
$string['submissiondisplayerror:processingerror_help'] = '处理提交文件时出现未指定错误。';
$string['submissiondisplayerror:toolarge'] = '文件过大';
$string['submissiondisplayerror:toolarge_help'] = '此文件太大，无法发送至 Turnitin。要检查原创性，请提交大小小于 100MB 的文件。';
$string['submissiondisplayerror:toolittletext'] = '没有足够的文字';
$string['submissiondisplayerror:toolittletext_help'] = '提交文件包含的字数不够生成相似度报告（提交文件必须包含至少 20 个词语）';
$string['submissiondisplayerror:toomanypages'] = '页数过多';
$string['submissiondisplayerror:toomanypages_help'] = '提交文件的页数过多，无法生成相似度报告（提交文件包含的页数不得超过 400 页）';
$string['submissiondisplayerror:toomuchtext'] = '字数过多';
$string['submissiondisplayerror:toomuchtext_help'] = '提交文件的字数过多，因此无法生成相似度报告（将提取的文字转换为 UTF-8 后，提交文件包含的字数必须少于 {$a}）';
$string['submissiondisplayerror:unknown'] = '提交时出错';
$string['submissiondisplayerror:unknown_help'] = '您提交的文件出现未知错误，并且此文件尚未提交至 Turnitin，请咨询您的系统管理员';
$string['submissiondisplayerror:unsupportedfiletype'] = '不受支持的文件类型';
$string['submissiondisplayerror:unsupportedfiletype_help'] = '上传的文件类型不受支持。';
$string['submissiondisplaystatus:awaitingeula'] = '正在等待 EULA';
$string['submissiondisplaystatus:cannotextracttext'] = '报告不可用';
$string['submissiondisplaystatus:error'] = '错误';
$string['submissiondisplaystatus:notsent'] = '未发送';
$string['submissiondisplaystatus:pending'] = '待处理';
$string['submissiondisplaystatus:queued'] = '已加入队列';
$string['submissiondisplaystatus:unknown'] = '未知错误';
$string['taskadminupdate'] = '上传 Turnitin Integrity 插件的本地配置';
$string['taskgetreportscores'] = '获取 Turnitin Integrity 插件的报告分数';
$string['taskoutputenabledfeaturesnotretrieved'] = '无法检索 Turnitin 启用的功能';
$string['taskoutputenabledfeaturesretrievalfailure'] = '调用 Turnitin 启用的功能失败';
$string['taskoutputenabledfeaturesretrieved'] = '已检索 Turnitin 启用的功能';
$string['taskoutputfailedconnection'] = '连接至 Turnitin API 时出现问题';
$string['taskoutputfailedcvlaunchurl'] = '针对提交 ID {$a} 从 Turnitin API 请求 Turnitin Viewer（Turnitin 查看器）URL 时出现问题';
$string['taskoutputfailedreportrequest'] = '为提交 ID {$a} 从 Turnitin API 请求原创性报告分数时出现问题';
$string['taskoutputfailedscorerequest'] = '为提交 ID {$a} 从 Turnitin API 请求原创性报告分数时出现问题';
$string['taskoutputfailedupload'] = '为提交 ID {$a} 上传文件至 Turnitin API 时出现问题';
$string['taskoutputfileuploaded'] = '上传至 Turnitin 的文件的提交 ID：{$a}';
$string['taskoutputlatesteulanotretrieved'] = '无法检索最新的 EULA 版本';
$string['taskoutputlatesteularetrievalfailure'] = '调用最新版本的 EULA 失败。';
$string['taskoutputlatesteularetrieved'] = '已检索 EULA 版本 {$a}。';
$string['taskoutputpluginnotconfigured'] = '由于未配置 Turnitin Integrity 插件，因此无法运行 {$a} 的任务。<br/>请转到“站点管理”中的“插件配置”页面以添加您的 Turnitin API 凭据。';
$string['taskoutputsubmissioncreated'] = '在 Turnitin 中创建的提交文件：{$a}';
$string['taskoutputsubmissionnotcreatedeula'] = '由于提交者尚未接受 EULA，因此无法在 Turnitin 中创建文件。';
$string['taskoutputsubmissionnotcreatedgeneral'] = '无法在 Turnitin 中创建提交文件。请查阅您的日志。';
$string['taskoutputwebhookcreated'] = 'Webhook  已创建。Turnitin 将向 {$a} 发送回拨';
$string['taskoutputwebhookcreationfailure'] = 'Webhook 创建请求失败。请查阅您的日志。';
$string['taskoutputwebhookdeleted'] = '已删除 Webhook {$a}。';
$string['taskoutputwebhookdeletefailure'] = '无法删除 Webhook。请查阅您的日志。';
$string['taskoutputwebhooknotcreated'] = '无法创建 Webhook。请查阅您的日志。';
$string['taskoutputwebhooknotdeleted'] = '无法删除 Webhook {$a}。';
$string['taskoutputwebhooknotretrieved'] = '无法检索 Webhook {$a}。将创建新的 Webhook';
$string['taskoutputwebhookretrievalfailure'] = 'Webhook {$a} 检索调用失败。';
$string['taskoutputwebhookretrieved'] = '已检索 Webhook {$a}。Webhook 处于活动状态。';
$string['tasksendqueuedsubmissions'] = '从 Turnitin Integrity 插件发送已加入队列的文件';
$string['turnitinapikey'] = 'Turnitin API Key';
$string['turnitinapiurl'] = 'Turnitin API URL';
$string['turnitinconfig'] = '插件配置';
$string['turnitinenablelogging'] = '启用诊断模式';
$string['turnitinenableremotelogging'] = '发送日志至 Turnitin';
$string['turnitinenableremotelogging_help'] = '日志将自动发送至 Turnitin 进行诊断。不会传输任何私人数据。我们建议将此设置保持在启用状态，以便在需要时我们能快速提供支持。但是，您仍然可以在 Moodle 环境中找到日志以手动发送至 Turnitin。';
$string['turnitinfeatures'] = 'Turnitin Integrity 功能';
$string['turnitinfeatures::eulanotrequired'] = '用户无需接受 Turnitin EULA';
$string['turnitinfeatures::eularequired'] = '所有用户都必须接受 Turnitin EULA';
$string['turnitinfeatures::header'] = 'Turnitin Integrity 功能';
$string['turnitinfeatures::moreinfo'] = '有关 Turnitin 提供的已启用功能和软件包的更多信息，请参阅 <a href="http://www.turnitin.com" target="_blank">http://www.turnitin.com</a>。';
$string['turnitinfeatures::repositories'] = '检查的资源库：';
$string['turnitinfeatures::viewoptions'] = 'Turnitin Viewer（Turnitin 查看器）选项：';
$string['turnitinhideidentity'] = '从 Turnitin 隐藏学生的身份';
$string['turnitinmodenabled'] = '为 {$a} 启用 Turnitin Integrity';
$string['turnitinpluginenabled'] = '启用 Turnitin';
$string['turnitinpluginsettings'] = 'Turnitin Integrity 插件设置';
$string['turnitinsim'] = 'Turnitin Integrity 插件';
$string['turnitinsim:enable'] = '启用 Turnitin Integrity';
$string['turnitinsim:viewfullreport'] = '查看原创性报告';
$string['turnitinsiminternet'] = '检查互联网内容';
$string['turnitinsimprivate'] = '检查私人内容';
$string['turnitinviewermatchsubinfo'] = '允许您机构内的导师查看内部匹配项的提交信息';
$string['turnitinviewersavechanges'] = '保存浏览者更改';
$string['turnitinviewerviewfullsource'] = '允许您机构内的导师查看内部匹配项的提交文件的完整文本';
$string['viewapilog'] = '从 {$a} 查看 API 徽标';
$string['viewerpermissionferpa'] = '下列权限会影响在整个机构中分享数据的方式。 这些数据由您的机构全权负责，因此在设置这些权限时，请考虑它们是否完全符合您机构有关学生记录的政策。';
$string['viewerpermissionoptions'] = '浏览者权限';
$string['viewlogs'] = '日志';
$string['webhook_description'] = '{$a} 的 Webhook';
$string['webhookincorrectsignature'] = '由于签名错误，因此 Webhook 回拨失败';
