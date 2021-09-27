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
 * Strings for component 'reservation', language 'zh_cn', version '3.11'.
 *
 * @package     reservation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addparticipant'] = '添加预约请求';
$string['after10min'] = '事件开始10分钟后';
$string['after12h'] = '事件开始12小时后';
$string['after1d'] = '事件开始1天后';
$string['after1h'] = '事件开始1小时后';
$string['after1w'] = '事件开始1周后';
$string['after2d'] = '事件开始2天后';
$string['after2h'] = '事件开始2小时后';
$string['after2w'] = '事件开始2周后';
$string['after30min'] = '事件开始30分钟后';
$string['after3w'] = '事件开始3周后';
$string['after4h'] = '事件开始4小时后';
$string['after4w'] = '事件开始4周后';
$string['after5min'] = '事件开始5分钟后';
$string['after6h'] = '事件开始6小时后';
$string['alreadybooked'] = '事件成功了';
$string['alreadyoverbooked'] = '已列入等待清单中';
$string['atstart'] = '事件开始时';
$string['autohide'] = '自动隐藏预约清单';
$string['availablerequests'] = '可用位置';
$string['badcourse'] = '课程不存在';
$string['badparent'] = '此预约关联到另一个现在尚未恢复的预约。该关联已经被移除。如果需要请手动重新关联';
$string['badsection'] = '课程 "{$a}"中不存在此小节';
$string['badteachers'] = '没有找到指定教师的电子邮件({$a})';
$string['badteachersmail'] = '指定教师的电子邮件 ({$a}) 不存在';
$string['badtimeclose'] = '关闭时间不合理';
$string['badtimeend'] = '结束时间不合理';
$string['badtimeopen'] = '开放时间不合理';
$string['badtimestart'] = '开始时间不合理';
$string['by'] = 'by';
$string['bydate'] = '事件日期';
$string['byname'] = '名字';
$string['bysection'] = '主题/周';
$string['cancelledon'] = '取消于';
$string['cancellersmail'] = '已取消源于 \'{$a->reservation}\'. reservation 的预约';
$string['cancellersmailhtml'] = '已取消源于<em>{$a->reservation}</em>.reservation 的预约';
$string['checkclashes'] = '检查地点和时间冲突';
$string['clashesfound'] = '某些地点和时间有冲突';
$string['clashesreport'] = '冲突报表';
$string['cleanview'] = '仅看当前预约的';
$string['close'] = '关闭';
$string['closed'] = '已关闭';
$string['completionreserved'] = '学生必须进行预约以完成此活动';
$string['config'] = '预约设置';
$string['configautohide'] = '此处定义什么时候预约必须在预约清单中隐藏 (mod/reservation/index.php). 它的用处在于使用公开的预约清单时，显示 一个干净的清单。';
$string['configcheckclashes'] = '用来设置是否在预选编辑页启用"检查时间和地点冲突"按钮。';
$string['configconnectto'] = '定义这个模块在搜索预约时关联到何处';
$string['configdownload'] = '此处定义所有预约和预约清单下载的默认文件格式。';
$string['configevents'] = '此处设置定义每一个预约都会生成的事件';
$string['configfields'] = '此处设置定义预约表中显示哪些字段';
$string['configlocations'] = '在这一页面你可以管理该Moodle网站的标准地点';
$string['configmanualusers'] = '此处定义在手动管理预约人时，什么样的用户清单会在下拉菜单中列出。';
$string['configmaxoverbook'] = '此处定义超额预约的最大比例';
$string['configmaxrequests'] = '用来设置在预选编辑页中的下拉菜单的限制。';
$string['configminduration'] = '此处显示事件的最小持续时间。它用于检查没有结束日间的事件的时间和地点的可用性';
$string['confignotifies'] = '此处设置定义什么样的通知必须发出';
$string['configoverbookstep'] = '此处定义超额预约的步进百分比值。Smaller step, greater granularity';
$string['configpubliclists'] = '此处定义预约清单是否公开（无需登录即可查看）';
$string['configsortby'] = '此处定义预约清单如何排序。';
$string['configsublimits'] = '在预约编辑页定义 the number of sublimits rules';
$string['configupload'] = '通过上传文本(text）文件来生成多个预约';
$string['confirmdelete'] = '确定要删除选定的预约请求？';
$string['connectedto'] = '预约关联到';
$string['connectto'] = '可关联的预约源于';
$string['crontask'] = '发送预约和请求评分邮件';
$string['description'] = '描述';
$string['downloadas'] = '默认下载格式';
$string['duration10h'] = '10小时';
$string['duration10min'] = '10分钟';
$string['duration11h'] = '11小时';
$string['duration12h'] = '12小时';
$string['duration15min'] = '15分钟';
$string['duration20min'] = '20分钟';
$string['duration2h'] = '2小时';
$string['duration30min'] = '30分钟';
$string['duration3h'] = '3小时';
$string['duration45min'] = '45分钟';
$string['duration4h'] = '4小时';
$string['duration5h'] = '5小时';
$string['duration5min'] = '5分钟';
$string['duration60min'] = '60分钟';
$string['duration6h'] = '6小时';
$string['duration7h'] = '7小时';
$string['duration8h'] = '8小时';
$string['duration90min'] = '90分钟';
$string['duration9h'] = '9小时';
$string['enablenote'] = '允许用户注记';
$string['equal'] = '等于';
$string['err_sublimitsgreater'] = '提交的数量超过了最大允许的请求数量';
$string['err_timeendlower'] = '事件结束日期早于开始日期';
$string['err_timeopengreater'] = '预约开始日期晚于结束日期';
$string['eventevent'] = '生成一个课程预约事件（从开始日期到结束日期）';
$string['eventreminder'] = '{$a} （已保留预约）';
$string['eventrequestadded'] = '已添加预约请求';
$string['eventrequestcancelled'] = '已取消预约请求';
$string['eventrequestdeleted'] = '已删除预约请求';
$string['events'] = '日历事件';
$string['eventsettings'] = '事件设置';
$string['explainconfig'] = '管理员可以定义预约模块的全局设置';
$string['fields'] = '显示字段';
$string['fullview'] = '察看包括已删除的预约';
$string['gradedmail'] = '{$a->teacher} 已经对你的预约进行了反馈 \'{$a->reservation}\'

你可以在这里察看：

    {$a->url}';
$string['gradedmailhtml'] = '{$a->teacher} 已经对你的预约进行了反馈 \'<i>{$a->reservation}</i>\'<br /><br />
你可以在这里察看 <a href=\\"{$a->url}\\">here</a>.';
$string['importreservations'] = '导入多个预约';
$string['invalidreservationid'] = '错误的预约ID';
$string['justbooked'] = '已为你预定: {$a}';
$string['justoverbooked'] = '已为你超额预定： {$a}';
$string['linenumber'] = '#';
$string['listafterclose'] = '预约已关闭的预约请求清单';
$string['listalways'] = '全部预约请求清单';
$string['location'] = '地点';
$string['locations'] = '管理地点';
$string['locationslist'] = '地点列表';
$string['mail'] = '预约 \'{$a->reservation}\' 已关闭。

你可在此下载预约清单：

    {$a->url}';
$string['mailhtml'] = '预约 <em>{$a->reservation}</em> 已经关闭。<br /><br />
你可在此下载预约清单： <a href="{$a->url}">这里</a>.';
$string['mailrequest'] = '预约 \'{$a->reservation}\' 已经关闭。

在此获取你的预约号：

    {$a->url}';
$string['mailrequesthtml'] = '预约 <em>{$a->reservation}</em> 已经关闭。<br /><br />
在此获取你的预约号：<a href="{$a->url}">点这里</a>.';
$string['manage'] = '管理';
$string['manualusers'] = 'Manual reserve show users of';
$string['maxoverbook'] = '最大超额预约比例';
$string['maxrequest'] = '最大预约数量';
$string['message'] = '发给参与者的信息';
$string['minduration'] = '事件最小持续时间';
$string['modulename'] = '预约';
$string['modulename_help'] = '<p>这个活动的主要目标是安排实验环节和考试，但可以用于任何你想安排的事。</p><p>教师可以定义每一个事件、日期、预约的可用位置数量、开放和关闭日期。<br />预约活动可以有级别。<br />学生可预定或取消一个位置，添加预定的注释。</p><p>事件开始后，教师可以评定（分级）事件。学生会收到邮件通知。</p><p>预约清单可以多种格式下载。</p>';
$string['modulenameplural'] = '预约';
$string['newlocation'] = '新地点';
$string['noclashcheck'] = '未打开冲突检查。请联系站点管理员。';
$string['noclashes'] = '没有地点和时间冲突';
$string['nocourseswithnsections'] = '未找到课程 with {$a} sections';
$string['nolimit'] = '无预约限制';
$string['nomorerequest'] = '没有位置了';
$string['none'] = '没有关于预约顺序的信息';
$string['nooverbook'] = '不允许超额预约';
$string['noparent'] = '没有';
$string['noreservations'] = '没有可以显示的预约';
$string['note'] = '注释';
$string['noteachers'] = '没有可选的教师';
$string['notequal'] = '不等于';
$string['noterequired'] = '请在此输入预约时必须提供的说明';
$string['notgraded'] = '未评分';
$string['notifies'] = '通知已发送';
$string['notifycancellers'] = '成功取消预约后通知取消者';
$string['notifygrades'] = '预约分级后通知学生';
$string['notifyoverbookers'] = '当学生成为常规预约人时，通知他们有超额预约';
$string['notifyreservers'] = '成功预约后通知预约者';
$string['notifystudents'] = '通知学生预约期已关闭';
$string['notifyteachers'] = '通知教师预约期已关闭';
$string['notopened'] = '未开放';
$string['notreserved'] = '未预约';
$string['novalues'] = '此字段没有合适的值';
$string['number'] = '预约号';
$string['numberafterclose'] = '预约关闭后的预约请求号';
$string['numberalways'] = '任何时间下的预约请求号';
$string['optional'] = '选项';
$string['otherlocation'] = '其他指定地点';
$string['overbook'] = '超额预约';
$string['overbookonly'] = '仅超额预约位置可用';
$string['overbookstep'] = '超额预约step';
$string['overview'] = '总览';
$string['parent'] = '关联这个预约到';
$string['pluginadministration'] = '预约管理';
$string['pluginname'] = '预约';
$string['privacy:metadata:reservation_note'] = '保存预约请求的用户注释';
$string['privacy:metadata:reservation_note:note'] = '预约请求的用户注释';
$string['privacy:metadata:reservation_request'] = '保存预约请求的用户数据';
$string['privacy:metadata:reservation_request:grade'] = '用户预约请求等级';
$string['privacy:metadata:reservation_request:grader'] = '分等（评分）人的ID';
$string['privacy:metadata:reservation_request:mailed'] = '分级邮件通知状态';
$string['privacy:metadata:reservation_request:reservationid'] = '预约ID';
$string['privacy:metadata:reservation_request:timecancelled'] = '取消请求的时间和日期';
$string['privacy:metadata:reservation_request:timecreated'] = '生成请求的时间和日期';
$string['privacy:metadata:reservation_request:timegraded'] = '分级请求的日期和时间';
$string['privacy:metadata:reservation_request:userid'] = '用户ID';
$string['publiclists'] = '预约公开清单';
$string['requestoverview'] = '预约请求总览';
$string['requests'] = '请求';
$string['required'] = '请求';
$string['reservation:addinstance'] = '添加新的预约';
$string['reservation:downloadrequests'] = '可下载预约请求清单';
$string['reservation:grade'] = '可设置级别';
$string['reservation:manage'] = '可管理预约';
$string['reservation:manualdelete'] = '可删除其他用户预约请求';
$string['reservation:manualreserve'] = '可提交其他用户预约请求';
$string['reservation:reserve'] = '可提交自己的预约请求';
$string['reservation:uploadreservations'] = '可上传预约';
$string['reservation:view'] = '可察看预约';
$string['reservation:viewnote'] = '可察看预约注释';
$string['reservation:viewrequest'] = '可察看预约清单';
$string['reservation_listing'] = '索引页面设置';
$string['reservation_other'] = '其他设置';
$string['reservation_settings'] = '编辑设置';
$string['reservation_view'] = '查看页面设置';
$string['reservationcancelled'] = '预约已取消';
$string['reservationclosed'] = '预约已关闭';
$string['reservationdenied'] = '预约未接受';
$string['reservationevent'] = '从开始到结束生成一个课程事件（预约期）';
$string['reservationnotopened'] = '预约尚未开放';
$string['reservations'] = '预约';
$string['reservationsettings'] = '预约设置';
$string['reserve'] = '预约';
$string['reservecancel'] = '取消预约';
$string['reserved'] = '已保留';
$string['reservedon'] = '预约于';
$string['reservedonconnected'] = '已经成功预约在关联的预约事件: {$a}';
$string['reserversmail'] = '已保留 \'{$a->reservation}\' 预约。';
$string['reserversmailhtml'] = '已保留 <em>{$a->reservation}</em> 预约。';
$string['resetreservation'] = '移除全部预约';
$string['save'] = '保存分级（评定）';
$string['search:activity'] = '预约-活动信息';
$string['selectvalue'] = '选择一个允许的值';
$string['showrequest'] = '用户可察看预约请求清单';
$string['showuserrequest'] = '用户可察看';
$string['sortby'] = '预约清单排序是按';
$string['status'] = '预约状态';
$string['sublimit'] = '提交 {$a}';
$string['sublimitrules'] = '提交要求';
$string['sublimits'] = '预约提交';
$string['timeclose'] = '预约结束于';
$string['timeend'] = '结束日期';
$string['timeopen'] = '预约开始于';
$string['timestart'] = '开始日期';
$string['tools'] = '预约工具';
$string['upload'] = '预约上传';
$string['upload_help'] = '<p>可使用文本文件上传预约。文本文件格式要求如下：</p><ul><li>一行仅有一个记录</li><li>每个记录包含用逗号或其他分隔符分开的数据</li><li>第一行包含定义文件其余内容格式的字段名列表</li><li>必须的字段名是section, name and timestart</li><li>可选的字段名是course, intro, teachers, timeend, grade, timeopen, timeclose, maxrequest</li><li>如果没有指定课程，则在上传预览时必须 选择一个课程</li></ul>';
$string['uploadreservations'] = '上传预约';
$string['uploadreservationspreview'] = '预览上传的预约';
$string['uploadreservationsresult'] = '预约上传结果';
$string['useralreadybooked'] = '用户已预定';
$string['userevent'] = '当用户预约时生成一个从开始到结束时间段的用户事件';
$string['with'] = '和';
$string['withselected'] = '和选择的';
$string['yourgrade'] = '你的预约级别是： {$a->grade}/{$a->maxgrade}';
$string['yournote'] = '你的注释';
$string['yourscale'] = '你的预约级别是： {$a}';
