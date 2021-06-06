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
 * Strings for component 'tool_policy', language 'zh_cn', version '3.11'.
 *
 * @package     tool_policy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = '我确认，我收到了代表上述用户表示同意的请求。';
$string['acceptancenote'] = '备注';
$string['acceptancepolicies'] = '政策';
$string['acceptancessavedsucessfully'] = '协议已成功保存。';
$string['acceptancestatusaccepted'] = '接受';
$string['acceptancestatusacceptedbehalf'] = '代表用户接受';
$string['acceptancestatusdeclined'] = '拒绝';
$string['acceptancestatusdeclinedbehalf'] = '代表用户拒绝';
$string['acceptancestatusoverall'] = '全部';
$string['acceptancestatuspartial'] = '部分接受';
$string['acceptancestatuspending'] = '暂停';
$string['acceptanceusers'] = '用户';
$string['actions'] = '动作';
$string['activate'] = '将状态设置为“活跃”';
$string['activateconfirm'] = '<p>您将激活政策 <em>“{$a->name}”</em> 使版本<em>\'{$a->revision}\'</em> 为当前版本。</p><p>所有用户都必须同意这个新的政策版本才能使用这个站点。</p>';
$string['activateconfirmyes'] = '激活';
$string['activating'] = '激活一个政策';
$string['agreepolicies'] = '请同意以下政策';
$string['backtoprevious'] = '回到上一页';
$string['backtotop'] = '返回顶部';
$string['cachedef_policy_optional'] = '政策版本的可选/强制标志的缓存';
$string['consentbulk'] = '同意';
$string['consentpagetitle'] = '同意';
$string['contactdpo'] = '有关政策的任何问题，请与隐私官联系。';
$string['dataproc'] = '个人数据处理';
$string['declineacknowledgement'] = '我确认，我收到了代表上述用户拒绝同意的请求。';
$string['declinethepolicy'] = '拒绝用户同意';
$string['deleteconfirm'] = '<p>您确定要删除政策<em>“{$a->name}”</em>?</p><p>这个操作无法撤消。</p>';
$string['deleting'] = '删除一个版本';
$string['editingpolicydocument'] = '编辑政策';
$string['errorpolicyversioncompulsory'] = '强制政策不能拒绝！';
$string['errorpolicyversionnotfound'] = '没有任何具有此标识符的政策版本。';
$string['errorsaveasdraft'] = '局部改动不能保存为草稿';
$string['errorusercantviewpolicyversion'] = '用户无法访问此政策版本。';
$string['event_acceptance_created'] = '创建用户政策协议';
$string['event_acceptance_updated'] = '更新用户政策协议';
$string['filtercapabilityno'] = '权限：不能同意';
$string['filtercapabilityyes'] = '权限：可以同意';
$string['filterplaceholder'] = '搜索关键字或选择筛选器';
$string['filterpolicy'] = '政策：{$a}';
$string['filterrevision'] = '版本：{$a}';
$string['filterrevisionstatus'] = '版本：{$a->name} ({$a->status})';
$string['filterrole'] = '规则：{$a}';
$string['filters'] = '筛选器';
$string['filterstatusdeclined'] = '状态：拒绝';
$string['filterstatuspending'] = '状态：暂停';
$string['filterstatusyes'] = '状态：同意';
$string['guestconsent:continue'] = '继续';
$string['guestconsentmessage'] = '如果您继续浏览本网站，即表示您同意我们的政策:';
$string['iagree'] = '我同意{$a}';
$string['iagreetothepolicy'] = '同意';
$string['idontagree'] = '不，谢谢，我拒绝{$a}';
$string['inactivate'] = '将状态设置为“暂停”';
$string['inactivating'] = '暂停的政策';
$string['inactivatingconfirm'] = '<p>您将使政策<em>“{$a->name}（{$a->revision}）”</em>失效。</p>';
$string['inactivatingconfirmyes'] = '暂停';
$string['invalidversionid'] = '没有使用此标识符的政策！';
$string['irevokethepolicy'] = '撤销用户同意';
$string['listactivepolicies'] = '现行政策一览表';
$string['managepolicies'] = '管理政策';
$string['minorchange'] = '局部改动';
$string['minorchangeinfo'] = '局部改动不会改变政策的意义。如果编辑被标记为局部改动，则不需要用户再次同意政策。';
$string['movedown'] = '下移';
$string['moveup'] = '上移';
$string['mustagreetocontinue'] = '在继续之前，您需要确认所有这些政策。';
$string['newpolicy'] = '新政策';
$string['newversion'] = '新版本';
$string['noactivepolicies'] = '没有有效版本的政策。';
$string['nofiltersapplied'] = '没有应用的筛选器';
$string['nopermissiontoagreedocs'] = '不允许同意这些政策';
$string['nopermissiontoagreedocs_desc'] = '对不起，您没有同意这些政策所需的权限。<br />您将不能使用本网站，直到同意以下政策：';
$string['nopermissiontoagreedocsbehalf'] = '不允许代表该用户同意这些政策';
$string['nopermissiontoagreedocsbehalf_desc'] = '抱歉，您没有必要的权限代表{$a}同意以下政策：';
$string['nopermissiontoagreedocscontact'] = '如需进一步帮助，请联系';
$string['nopermissiontoviewpolicyversion'] = '您没有权限查看此政策版本。';
$string['nopolicies'] = '对于具有有效版本的注册用户，没有策略。';
$string['pluginname'] = '政策';
$string['policiesagreements'] = '政策和协议';
$string['policy:accept'] = '同意该政策';
$string['policy:acceptbehalf'] = '‎代表他人同意政策‎';
$string['policy:managedocs'] = '管理政策';
$string['policy:viewacceptances'] = '查看用户协议报表';
$string['policydocaudience'] = '用户同意';
$string['policydocaudience0'] = '所有用户';
$string['policydocaudience1'] = '通过身份验证的用户';
$string['policydocaudience2'] = '访客';
$string['policydoccontent'] = '完整的政策';
$string['policydochdrpolicy'] = '政策';
$string['policydochdrversion'] = '文档版本';
$string['policydocname'] = '名称';
$string['policydocoptional'] = '协议可选的';
$string['policydocoptionalno'] = '强制的';
$string['policydocoptionalyes'] = '可选的';
$string['policydocrevision'] = '版本';
$string['policydocsummary'] = '概要';
$string['policydocsummary_help'] = '该文本应该使用清晰的语言，以一种简化的、易于访问的形式提供政策的摘要。';
$string['policydoctype'] = '类型';
$string['policydoctype0'] = '网站政策';
$string['policydoctype1'] = '隐私政策';
$string['policydoctype2'] = '第三方政策';
$string['policydoctype99'] = '其他政策';
$string['policydocuments'] = '政策文档';
$string['policynamedversion'] = '政策 {$a->name} (版本 {$a->revision} - {$a->id})';
$string['policypriorityagreement'] = '在显示其他政策之前显示政策';
$string['policyversionacceptedinbehalf'] = '已代表您同意本政策。';
$string['policyversionacceptedinotherlang'] = '已以其他语言同意此政策版本。';
$string['previousversions'] = '{$a}先前的版本';
$string['privacy:metadata:acceptances'] = '有关用户所订立的政策协议的信息。';
$string['privacy:metadata:acceptances:lang'] = '表示同意时用于显示政策的语言。';
$string['privacy:metadata:acceptances:note'] = '用户在代表其他用户表示同意时添加的任何备注。';
$string['privacy:metadata:acceptances:policyversionid'] = '同意的政策的版本。';
$string['privacy:metadata:acceptances:status'] = '协议的状态。';
$string['privacy:metadata:acceptances:timecreated'] = '用户同意该政策的时间。';
$string['privacy:metadata:acceptances:timemodified'] = '用户更新其协议的时间。';
$string['privacy:metadata:acceptances:userid'] = '与本政策协议相关的用户。';
$string['privacy:metadata:acceptances:usermodified'] = '代表其他用户同意策略的用户。';
$string['privacy:metadata:subsystem:corefiles'] = '政策工具存储概要和完整政策中包含的文件。';
$string['privacy:metadata:versions'] = '政策版本信息。';
$string['privacy:metadata:versions:archived'] = '政策状态(有效或非暂停)。';
$string['privacy:metadata:versions:audience'] = '需要给予同意的用户类型。';
$string['privacy:metadata:versions:content'] = '此版本的政策的内容。';
$string['privacy:metadata:versions:contentformat'] = '内容字段的格式。';
$string['privacy:metadata:versions:name'] = '政策的名称。';
$string['privacy:metadata:versions:policyid'] = '与此版本关联的政策。';
$string['privacy:metadata:versions:revision'] = '此版本政策的修订本名称。';
$string['privacy:metadata:versions:summary'] = '本政策的概要。';
$string['privacy:metadata:versions:summaryformat'] = '概要字段的格式。';
$string['privacy:metadata:versions:timecreated'] = '此版本的政策创建的时间。';
$string['privacy:metadata:versions:timemodified'] = '此版本的政策更新的时间。';
$string['privacy:metadata:versions:type'] = '政策类型。';
$string['privacy:metadata:versions:usermodified'] = '修改政策的用户。';
$string['privacysettings'] = '隐私设置';
$string['readpolicy'] = '请阅读我们的{$a}';
$string['refertofullpolicytext'] = '请参考完整的{$a}，如果您想审查文本。';
$string['response'] = '回应';
$string['responseby'] = '回应人';
$string['responseon'] = '日期';
$string['revokeacknowledgement'] = '本人确认已收到要求撤销上述用户同意的请求。';
$string['save'] = '保存';
$string['saveasdraft'] = '保存为草稿';
$string['selectpolicyandversion'] = '使用上面的筛选器来选择政策和/或版本';
$string['selectuser'] = '选择用户{$a}';
$string['selectusersforconsent'] = '选择用户代表表示同意。';
$string['settodraft'] = '创建一个新草稿';
$string['status'] = '政策状态';
$string['status0'] = '草稿';
$string['status1'] = '有效';
$string['status2'] = '暂停';
$string['statusformtitleaccept'] = '接受政策';
$string['statusformtitledecline'] = '拒绝政策';
$string['statusformtitlerevoke'] = '撤回政策';
$string['statusinfo'] = '具有“有效”状态的政策要求用户在首次登录时或现有用户下次登录时都要表示同意。';
$string['steppolicies'] = '政策 {$a->numpolicy} / {$a->totalpolicies}';
$string['useracceptanceactionaccept'] = '接受';
$string['useracceptanceactionacceptone'] = '接受 {$a}';
$string['useracceptanceactionacceptpending'] = '‎接受暂停的政策';
$string['useracceptanceactiondecline'] = '拒绝';
$string['useracceptanceactiondeclineone'] = '拒绝 {$a}';
$string['useracceptanceactiondeclinepending'] = '‎拒绝暂停的政策';
$string['useracceptanceactiondetails'] = '详情';
$string['useracceptanceactionrevoke'] = '撤回';
$string['useracceptanceactionrevokeall'] = '撤回接受政策';
$string['useracceptanceactionrevokeone'] = '撤回接受{$a}';
$string['useracceptancecount'] = '{$a->agreedcount} /{$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = '用户协议';
$string['userpolicysettings'] = '政策';
$string['usersaccepted'] = '协议';
$string['viewarchived'] = '查看以前的版本';
$string['viewconsentpageforuser'] = '代表{$a}查看此页';
