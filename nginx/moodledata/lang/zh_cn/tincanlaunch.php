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
 * Strings for component 'tincanlaunch', language 'zh_cn', version '3.11'.
 *
 * @package     tincanlaunch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apCreationFailed'] = '无法创建Watershed 活动提供商。';
$string['badarchive'] = '您必须提供有效的zip文件';
$string['badimsmanifestlocation'] = '找到了tincan.xml文件，但该文件不在zip文件的根目录中，请重新打包您的课程';
$string['badmanifest'] = '发现一些manifest错误：请参阅错误日志';
$string['behaviorheading'] = '模块行为';
$string['checkcompletion'] = '检查完成';
$string['completionexpiry'] = '到期';
$string['completionexpirygroup'] = '完成期限（天）';
$string['completionexpirygroup_help'] = '如果选中，则在查找完成时，系统将仅查看前X天存储在LRS中的数据。 对于以前已经完成但现在已经过期的学习者，它将取消完成的设置。';
$string['completionverb'] = '动词';
$string['completionverbgroup'] = '使用动词跟踪完成状态';
$string['completionverbgroup_help'] = '系统会在执行者是当前用户的情况下查找语句，对象是指定的活动ID，动词是此处设置的那个。 如果找到匹配的语句，则该活动将被标记为完成。';
$string['eventactivitycompleted'] = '活动已完成';
$string['eventactivitylaunched'] = '活动已启动';
$string['expirecredentials'] = '凭证过期';
$string['idmissing'] = '您必须指定一个course_module ID或一个实例ID';
$string['lrsdefaults'] = 'LRS默认设置';
$string['lrsheading'] = 'LRS设置';
$string['lrssettingdescription'] = '默认情况下，此活动使用在站点管理>插件>活动模块>Tin Can (xAPI) 启动链接中的全局LRS设置。 要更改当前活动的设置，请选择“解锁默认值”。';
$string['modulename'] = 'Tin Can (xAPI) 启动链接';
$string['modulename_help'] = '该插件允许启动Tin Can (xAPI) 内容，然后将其跟踪到独立的LRS。';
$string['modulenameplural'] = 'Tin Can (xAPI) 启动链接';
$string['nomanifest'] = '文件包错误-缺少tincan.xml';
$string['overridedefaults'] = '解锁默认值';
$string['overridedefaults_help'] = '允许活动拥有与系统默认LRS设置不同的LRS设置。';
$string['pluginadministration'] = 'Tin Can (xAPI) 启动链接管理';
$string['pluginname'] = 'Tin Can (xAPI) 启动链接';
$string['tincanactivityid'] = '活动ID';
$string['tincanactivityid_help'] = '正在启动主要活动的识别IRI。';
$string['tincanlaunch'] = 'Tin Can (xAPI) 启动链接';
$string['tincanlaunch:addinstance'] = '将新的Tin Can（xAPI）活动添加到课程';
$string['tincanlaunch_attempt'] = '新注册';
$string['tincanlaunch_completed'] = '已完成！';
$string['tincanlaunch_notavailable'] = '学习记录存储（LRS）不可用。 请与系统管理员联系。

如果您是系统管理员，请转至“站点管理员/开发/调试”，然后将“调试消息”设置为“ DEVELOPER”。 记录错误详细信息后，将其设置回NONE或MINIMAL。';
$string['tincanlaunch_progress'] = '尝试进行中。';
$string['tincanlaunch_regidempty'] = '找不到注册ID。 请关闭此窗口。';
$string['tincanlaunchcustomacchp'] = '自定义账号首页';
$string['tincanlaunchcustomacchp_help'] = '系统将结合使用该主页和用户个人资料字段的ID号来识别学习者。 如果没有为学习者输入ID号，则将通过电子邮件或账号来标识他们。 注意：如果学习者的ID发生变化，他们将无法访问与以前的ID相关的注册，并且课程完成数据可能会被重置。 LRS中的报告也可能会受到影响。';
$string['tincanlaunchlrsauthentication'] = 'LRS整合';
$string['tincanlaunchlrsauthentication_help'] = 'LRS整合';
$string['tincanlaunchlrsauthentication_option_0'] = '无';
$string['tincanlaunchlrsauthentication_option_1'] = 'Watershed';
$string['tincanlaunchlrsauthentication_option_2'] = 'Learning Locker V1';
$string['tincanlaunchlrsauthentication_watershedhelp'] = '注意：对于Watershed集成，活动提供商无需启用API访问权限。';
$string['tincanlaunchlrsauthentication_watershedhelp_label'] = 'Watershed集成';
$string['tincanlaunchlrsduration'] = '持续时间';
$string['tincanlaunchlrsduration_default'] = '9000';
$string['tincanlaunchlrsduration_help'] = '与“ LRS集成基本身份验证”一起使用。 请求LRS在指定时间内保持凭据有效。';
$string['tincanlaunchlrsendpoint'] = '端点';
$string['tincanlaunchlrsendpoint_help'] = 'LRS端点（例如http://lrs.example.com/endpoint/），必须包含尾部正斜杠。';
$string['tincanlaunchlrsfieldset'] = 'TinCan （xAPI) 启动链接活动设置的默认值';
$string['tincanlaunchlrsfieldset_help'] = '这些是创建新活动时在系统范围内使用的默认值。 每个活动都可以覆盖这些默认值并提供替代值。';
$string['tincanlaunchlrslogin_help'] = '您的LRS登录密钥。';
$string['tincanlaunchlrspass'] = '密码（密匙）';
$string['tincanlaunchlrspass_help'] = '您的LRS密码（密匙）。';
$string['tincanlaunchname'] = '启动链接名称';
$string['tincanlaunchname_help'] = '显示给用户的启动链接的名称。';
$string['tincanlaunchurl'] = '启动网址';
$string['tincanlaunchurl_help'] = '您要启动的Tin Can (xAPI) 启动链接活动的基础URL (例如： http://example.com/content/index.html)。';
$string['tincanlaunchuseactoremail'] = '通过电子邮件识别用户';
$string['tincanlaunchuseactoremail_help'] = '通过学习者的电子邮件地址来识别他们。';
$string['tincanlaunchviewfirstlaunched'] = '首次启动时间';
$string['tincanlaunchviewlastlaunched'] = '最后启动时间';
$string['tincanlaunchviewlaunchlink'] = '启动';
$string['tincanlaunchviewlaunchlinkheader'] = '课程链接';
$string['tincanmultipleregs'] = '允许多次注册。';
$string['tincanmultipleregs_help'] = '如果选择此选项，则允许学习者为该活动启动多个注册。 学习者始终可以返回到他们已经开始的所有注册，即使未选中此设置。';
$string['tincanpackage'] = 'Zip课件包';
$string['tincanpackage_help'] = '如果您有打包的xAPI课程，则可以在这里上传。 如果上传zip课件包，将使用zip中包含的tincan.xml文件中的数据自动填充上面的Launch URL和Activity ID字段。 您可以随时编辑这些设置，但除非您了解后果，否则请不要（直接或通过文件上传）更改Activity ID。';
$string['tincanpackagetext'] = '您可以直接填充启动URL和活动ID设置，也可以通过上载包含tincan.xml文件的zip包来填充。 tincan.xml中定义的启动URL可能指向zip包中的其他文件，也可能指向外部URL。 活动ID必须始终是完整的URL（或其他IRI）。';
$string['tincanpackagetitle'] = '启动设置';
