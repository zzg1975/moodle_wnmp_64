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
 * Strings for component 'scheduler', language 'zh_cn', version '3.11'.
 *
 * @package     scheduler
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '活动';
$string['actions'] = '活动';
$string['addappointment'] = '添加一位新学员';
$string['addcommands'] = '添加一个空位';
$string['addondays'] = '添加一个预约';
$string['addsession'] = '重复添加空位';
$string['addsingleslot'] = '添加单一空位';
$string['addslot'] = '您可以随时添加更多的可预约空位';
$string['addstudenttogroup'] = '将此学生添加至预约群组';
$string['allappointments'] = '全部预约';
$string['allononepage'] = '单页显示全部空位';
$string['allowgroup'] = '未包含的空位-点击修改';
$string['alreadyappointed'] = '无法安排预约，所有空位已满';
$string['appointagroup_help'] = '请选择为自己或小组安排预约';
$string['appointforgroup'] = '为他人添加预约: {$a}';
$string['appointingstudent'] = '预约空位';
$string['appointingstudentinnew'] = '预约新的空位';
$string['appointment'] = '预约';
$string['appointmentmode'] = '设置预约模式';
$string['appointmentmode_help'] = '<p>您可以在此选择设置接受预约的控制变量。</p>
<p><ul>
<li><strong>"<emph>n</emph> 预约表预约"：</strong> 学生仅能在此项活动中预约固定次数。 即便老师将预约请求标记为“已接受”，他们也不能进行更多预约。学生只有将旧的“已接受”预约记录删除，方可重新进行预约</li>
<li><strong>"<emph>n</emph> 逐次预约"：</strong> 学生可以预约固定次数。一旦预约的会议结束并且教师曾将学生的预约标记为“已接受”，那么学生即可进行更多预约。不管何时，学生仅能选择。<emph>n</emph> "开放" (未接受）空位。
</li>
</ul>
</p>';
$string['appointmentno'] = '预约 {$a}';
$string['appointments'] = '预约';
$string['appointmentsgrouped'] = '以空位分组预约';
$string['appointmentsummary'] = '与 {$a->teacher} 老师 {$a->startdate} 的预约将在 {$a->starttime} 开始至 {$a->endtime} 结束';
$string['appointsolo'] = '只有我';
$string['appointsomeone'] = '添加新的预约';
$string['attendable'] = '可加入';
$string['attendablelbl'] = '全部参与预约的学生';
$string['attended'] = '已加入';
$string['attendedlbl'] = '参加学生数';
$string['attendedslots'] = '已被占空位';
$string['availableslots'] = '可用空位';
$string['availableslotsall'] = '全部空位';
$string['availableslotsnotowned'] = '不拥有';
$string['availableslotsowned'] = '拥有';
$string['bookslot'] = '预约空位';
$string['bookwithteacher'] = '教师';
$string['bookwithteacher_help'] = '为预约选择一位教师';
$string['break'] = '在空位之间暂停';
$string['breaknotnegative'] = '休息时长不能为负值';
$string['canbook1appointment'] = '在此预约表中您可再预约一次';
$string['canbooknappointments'] = '在此预约表中您可以再预约 {$a} 次';
$string['canbooknofurtherappointments'] = '在本预约表中您不能预约更多会面';
$string['canbooksingleappointment'] = '在本预约表中您可以预约1次会面';
$string['canbookunlimitedappointments'] = '在本预约表中您可以预约任意次数会面';
$string['cancelbooking'] = '取消预约';
$string['chooseexisting'] = '选择既有的';
$string['choosingslotstart'] = '选择开始时间';
$string['choosingslotstart_help'] = '更改（或选择）会面开始时间。如果此预约会面与其他空位有冲突，将会提示，选择替代有冲突的预约，则新预约的全部设置将覆盖既有预约。';
$string['comments'] = '评论';
$string['complete'] = '已预约';
$string['conflictingslots'] = '有冲突';
$string['contentformat'] = '格式';
$string['contentformat_help'] = '<p>以下是三项输出格式选择，
     区别在于如何处理空位对应多个预约
     <dl>
         <dt>每个空位一行</dt>:
         <dd>
            此输出文件将每个空位对应一行，如果一个空位包含多项预约，则以“多项”代替学生姓名等内容。
         </dd>
         <dt>每个预约一行</dt>:
         <dd>
             此输出文件将每个预约对应一行，如果一个空位包含多项预约，那么将在列表中反复显示多次 。
         </dd>
         <dt>用空位将预约分组</dt>:
         <dd>
             所有一个空位对应的预约作为一组，以空位标题显示。由于列数不固定，此格式输出为 CSV格式时可能出错。
         </dd>
    </dl>
  你可以点击“预览”查看选项效果</p>';
$string['course'] = '课程';
$string['createexport'] = '生成输出文件';
$string['csvfieldseparator'] = 'CSV 字段分离器';
$string['csvformat'] = 'CSV';
$string['cumulatedduration'] = '总计预约会面时间';
$string['datatoinclude'] = '包含的数据';
$string['datatoinclude_help'] = '选择输出需要包含的字段。每个字段将在输出文件中显示为一列。';
$string['date'] = '日期';
$string['datelist'] = '总览';
$string['defaultslotduration'] = '缺省空位时间';
$string['defaultslotduration_help'] = '您所设置的默认预约会面时长（以分钟计）';
$string['deleteallslots'] = '删除全部空位';
$string['deleteallunusedslots'] = '删除无效空位';
$string['deletecommands'] = '删除空位';
$string['deletemyslots'] = '删除我的全部空位';
$string['deleteselection'] = '删除所选空位';
$string['deletetheseslots'] = '删除这些空位';
$string['deleteunusedslots'] = '删除我的无效空位';
$string['department'] = '从哪里？';
$string['disengage'] = '放弃我的预约会面';
$string['displayfrom'] = '向学生展示预约从';
$string['distributetoslot'] = '向全组分发';
$string['divide'] = '划分为多个空位';
$string['duration'] = '持续时间';
$string['durationrange'] = '空位持续时间必须在 {$a->min} 与 {$a->max} 分钟之间。';
$string['email_applied_html'] = '<p> {$a->date}  {$a->time}的预约已生效<br/>
预约者为学生 <a href="{$a->attendee_url}">{$a->attendee}</a>

课程为<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>在<a href="{$a->site_url}">{$a->site}</a>网站查看标题为 "<em>{$a->module}</em>" 的预约表。</p>';
$string['email_applied_plain'] = '{$a->date}  {$a->time}的预约会面已生效。
预约者为学生 {$a->attendee}

课程为{$a->course_short}: {$a->course}

在 {$a->site} 查看标题为 "{$a->module}" 的预约表。';
$string['email_applied_subject'] = '{$a->course_short}：新的预约会面';
$string['email_cancelled_html'] = '<p>您 <strong>{$a->date}</strong>  <strong>{$a->time}</strong>的预约<br/>
参与学生为 <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong> </p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>在<strong><a href="{$a->site_url}">{$a->site}</a></strong>查看标题为 "<em>{$a->module}</em>" 的预约表 </p>

<p><strong><span class="error">已经被取消或改期</span></strong>。</p>';
$string['email_cancelled_plain'] = '您  {$a->date}  {$a->time}的预约
参与学生为 {$a->attendee}

课程为{$a->course_short} : {$a->course}

在 {$a->site} 查看标题为 "{$a->module}" 的预约表。

已经被取消或改期。';
$string['email_cancelled_subject'] = '{$a->course_short}: 预约会面被学生取消或改期。';
$string['email_reminder_html'] = '<p>您有一个即将到来的预约会面在 <strong>{$a->date}</strong>
 <strong>{$a->time}</strong>至 <strong>{$a->endtime}</strong><br/>
参与者为 <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong>.</p>

<p>地点在 <strong>{$a->location}</strong></p>';
$string['email_reminder_plain'] = '你有一个即将到来的预约会面
在 {$a->date}  {$a->time} 到 {$a->endtime}
参加者包括 {$a->attendant}.

地点位于： {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: 预约会面提醒';
$string['email_teachercancelled_html'] = '<p>您 <strong>{$a->date}</strong>  <strong>{$a->time} </strong>,<br/>
与 {$a->staffrole} <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong> 的预约会面</p>

课程为：<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>在 <strong><a href="{$a->site_url}">{$a->site}</a></strong>查看标题为 "<em>{$a->module}</em>" 的日程表</p>

<p><strong><span class="error">被取消</span></strong>，请重新申请空位</p>';
$string['email_teachercancelled_plain'] = '您 {$a->date} at {$a->time}
与 {$a->staffrole} {$a->attendant} 的预约会面，课程为：

{$a->course_short}: {$a->course}

在{$a->site}日程表 "{$a->module}"

已经被取消，请重新申请空位。';
$string['email_teachercancelled_subject'] = '{$a->course_short}：预约会面被教师取消。';
$string['emailreminder'] = '电子邮件提醒';
$string['emailreminderondate'] = '电子邮件提醒';
$string['end'] = '结束';
$string['enddate'] = '重复空位直至';
$string['event_appointmentlistviewed'] = '预约表预约清单已阅';
$string['event_bookingadded'] = '预约表预约已添加';
$string['event_bookingformviewed'] = '预约表预约表格已阅';
$string['event_bookingremoved'] = '预约表预约已改期';
$string['everyone'] = '大家';
$string['excelformat'] = 'Excel';
$string['exclusive'] = '独家的';
$string['exclusivity'] = '独家';
$string['exclusivity_help'] = '<p>您可以对给定的空位设置一个学生数量限制</p>
<p>设置为1(默认值) 意味着仅对一名学生开放。</p>
<p>设置为3则意味着预约空位最多可以有3名学生预约。 </p>
<p>关闭此选项，预约学生数量无上限限制。</p>';
$string['exclusivityoverload'] = '空位有 {$a} 已预约学生，大于设置数量上限。';
$string['exclusivitypositive'] = '每个空位需要填写一个或多个学生';
$string['explaingeneralconfig'] = '这些设置仅能由网站管理员设置并应用到全部预约表中。';
$string['export'] = '输出';
$string['exporthdr'] = '输出预约会面及预约空位';
$string['field-attended'] = '已参加';
$string['field-date'] = '日期';
$string['field-endtime'] = '结束时间';
$string['field-grade'] = '等级';
$string['field-location'] = '地点';
$string['field-maxstudents'] = '最大学生数量';
$string['field-slotnotes'] = '空位注释';
$string['field-starttime'] = '开始时间';
$string['field-studentemail'] = '学生电子邮件';
$string['field-studentfirstname'] = '学生名';
$string['field-studentfullname'] = '学生全名';
$string['field-studentidnumber'] = '学生ID号';
$string['field-studentlastname'] = '学生姓';
$string['field-studentusername'] = '学生用户名';
$string['fileformat'] = '文件格式';
$string['fileformat_help'] = '下列文件格式可用：
     <ul>
          <li>CSV文件格式。 数值分隔符默认为逗号，可在下面选择。
               CSV文件格式可以被大多数表格软件识别；</li>
          <li>微软 Excel (Excel 2007 格式);</li>
          <li>Open Document 电子表格 (ODS);</li>
          <li>HTML 格式 - 以网页形式显示输出表格。
                能使用浏览器的打印功能进行打印。</li>
          <li>PDF 格式。您可以选择横向或者纵向打印方向</li>
     </ul>';
$string['finalgrade'] = '最高等级';
$string['firstslotavailable'] = '第一个空位将在{$a}开放';
$string['forbidgroup'] = '分小组选择空位 - 点击修改';
$string['forcewhenoverlap'] = '冲突时强制';
$string['forcewhenoverlap_help'] = '<h3>当空位冲突时强制建立新空位</h3>
<p>此设置决定了当新建空位与既有空位互相冲突时如何处理</p>
<p>打开时，既有空位被删除，新建空位被保留。</p>
<p>关闭时，既有空位被保留，新建空位<em>不会<em>被创建。</p>';
$string['forcourses'] = '选择课程中的学生';
$string['friday'] = '星期五';
$string['generalconfig'] = '普通设置';
$string['grade'] = '等级';
$string['gradeingradebook'] = '成绩册中的等级';
$string['gradingstrategy'] = '分级策略';
$string['gradingstrategy_help'] = '在预约表中，学生可以有多个预约会面，请选择等级是如何被区分的。
    成绩册可显示学生应达到的 <ul><li>最差级别或者显示</li><li>最优级别</li></ul> that the';
$string['group'] = '小组';
$string['groupbookings'] = '以小组方式预约';
$string['groupbookings_help'] = '容许学生为全部小组成员预约。
(请注意，这与“分组模式”不同，分组模式用来控制学生们能看到的空位。)';
$string['groupbreakdown'] = '通过小组规模';
$string['groupmodeyourgroups'] = '分组模式: {$a->groupmode}。 只有在 {$a->grouplist}的学生可以跟您预约会面。';
$string['groupmodeyourgroupsempty'] = '分组模式: {$a->groupmode}。您不是任何一个小组的成员，因此学生们无法跟您预约会面。';
$string['groupscheduling'] = '开启分组预约';
$string['groupscheduling_desc'] = '容许小组统一预约。
(与全局选项不同，“小组预约”选项必须在每个预约表中单独设置。)';
$string['groupsession'] = '小组学期';
$string['groupsize'] = '小组规模';
$string['guardtime'] = '小组时间';
$string['guardtime_help'] = '“锁定时间”设置避免学生在临近预约会面时修改他们的预约会面。
<p>如果锁定时间选项打开，且被设为2小时，则预约会面前2小时内，学生不能预约空位，也无法放弃他们的预约。</p>';
$string['guestscantdoanything'] = '访客不可进行修改';
$string['howtoaddstudents'] = '为帮组学生们进行全球范围内的预约表预约， 请使用模块角色设置。
<br/>您可以选择使用模块角色定义来决定参加预约的学生。';
$string['htmlformat'] = 'HTML';
$string['ignoreconflicts'] = '忽略预约冲突';
$string['ignoreconflicts_help'] = '勾选此框， 则空位将被改期至所选的日期和时间，即使那个时间段有其他已存在的空位。这可能会导致一些老师和学生产生冲突的预约会面，因此请慎重选择。';
$string['includeemptyslots'] = '包括未使用的空位';
$string['includeslotsfor'] = '包括空位';
$string['incourse'] = '在课程中';
$string['introduction'] = '介绍';
$string['isnonexclusive'] = '非独家的';
$string['landscape'] = '横向显示';
$string['lengthbreakdown'] = '通过空位持续时间显示';
$string['limited'] = '限制 ({$a} 剩余)';
$string['location'] = '地点';
$string['location_help'] = '指定会面地点';
$string['markasseennow'] = '现在设置为已接受';
$string['markseen'] = '当您确定与一个学生的预约后，请点击头像旁的勾选框将预约会面设置为“已接受”';
$string['maxgrade'] = '接受最高等级';
$string['maxstudentlistsize'] = '学生列表的最大长度';
$string['maxstudentlistsize_desc'] = '准备预约的学生列表的最大长度在教师视图中显示。超过此数值的学生名单将不再显示。';
$string['maxstudentsperslot'] = '每个空位可接受的最多学生。';
$string['maxstudentsperslot_desc'] = '小组空位 / 非独家空位可以最多支持此数量的学生。请注意空位另外的设置“无上限”也总是被选择。';
$string['meangrade'] = '选择最低等级';
$string['meetingwith'] = '预约会面与您的';
$string['meetingwithplural'] = '预约会面与您的';
$string['minutes'] = '分钟';
$string['minutesperslot'] = '每个空位时间';
$string['missingstudents'] = '{$a} 名学生仍需要预约会面。';
$string['missingstudentsmany'] = '{$a} 名学生仍需要预约会面。由于数量原因没有显示。';
$string['mode'] = '模式';
$string['modeappointments'] = '预约会面';
$string['modeintro'] = '学生可注册';
$string['modeoneatatime'] = '逐次';
$string['modeoneonly'] = '在本预约表';
$string['modulename'] = '预约表';
$string['modulename_help'] = '预约表活动帮你安排与学生的预约会面。

教师指定预约会面时间，然后学生在moodle中进行选择。教师在记录会面结果 - 可通过等级控制 - 在预约表中。

支持小组预约；每个空位可以被数个学生申请，同时也支持由整个团队统一预约。';
$string['modulenameplural'] = '预约表';
$string['monday'] = '星期一';
$string['multiple'] = '（多个）';
$string['myappointments'] = '我的预约会面';
$string['myself'] = '我自己';
$string['name'] = '预约会面名';
$string['needteachers'] = '由于此课程无教师因此无法添加会面';
$string['negativerange'] = '范围不可为负值。';
$string['never'] = '从不';
$string['noappointments'] = '无预约会面';
$string['noexistingstudents'] = '无学生需要安排预约';
$string['nogroups'] = '无小组需要安排预约';
$string['noresults'] = '没有结果';
$string['noschedulers'] = '无预约表';
$string['noslots'] = '无预约空位可用。';
$string['noslotsavailable'] = '目前无空位可以预约。';
$string['noslotsopennow'] = '目前无空位开放预约';
$string['nostudents'] = '没有学生被安排预约';
$string['nostudenttobook'] = '没有学生可以预约';
$string['note'] = '等级';
$string['noteacherforslot'] = '空位没有可用教师';
$string['noteachershere'] = '没有可用教师';
$string['notenoughplaces'] = '对不起，空位中没有足够的可用预约。';
$string['notifications'] = '注意事项';
$string['notifications_help'] = '当此选项';
$string['notseen'] = '没有被接受';
$string['now'] = '现在';
$string['occurrences'] = '发生';
$string['odsformat'] = '操作性数据存储';
$string['on'] = '在';
$string['onedaybefore'] = '空位开始前一天';
$string['onelineperappointment'] = '每行一个预约';
$string['onelineperslot'] = '每行一个空位';
$string['oneslotadded'] = '已添加一个空位';
$string['oneweekbefore'] = '空位开始前一周';
$string['onthemorningofappointment'] = '在预约会面开始当天早晨';
$string['options'] = '选项';
$string['otherstudents'] = '其他参加者';
$string['overall'] = '总的来说';
$string['overlappings'] = '一些其他预约有冲突';
$string['pageperteacher'] = '每个 {$a}一页';
$string['pagination'] = '页码';
$string['pagination_help'] = '请选择是否为每位教师创建独立的页面
在EXCEL和ODS文件各种中，这些页面与工作表一一对应。';
$string['pdfformat'] = 'PDF';
$string['pdforientation'] = 'PDF文件方向';
$string['pluginadministration'] = '预约表管理';
$string['pluginname'] = '预约表';
$string['portrait'] = '个人简介';
$string['preview'] = '预览';
$string['previewlimited'] = '（预览仅能显示 {$a} 行。）';
$string['registeredlbl'] = '学生已预约';
$string['reminder'] = '提醒';
$string['resetappointments'] = '删除预约会面和等级';
$string['resetslots'] = '删除预约会面空位';
$string['return'] = '回到课程';
$string['revoke'] = '撤销预约会面';
$string['saturday'] = '星期六';
$string['save'] = '保存';
$string['savechoice'] = '保存我的选择';
$string['saveseen'] = '被接受';
$string['schedule'] = '预约';
$string['scheduleappointment'] = '为 {$a} 预约';
$string['schedulecancelled'] = '{$a} : 您的预约会面被取消或改期了';
$string['schedulegroups'] = '按照小组方式预约';
$string['scheduleinnew'] = '新建空位并预约';
$string['scheduleinslot'] = '在空位中预约';
$string['scheduler'] = '预约器';
$string['scheduler:addinstance'] = '添加新预约器';
$string['scheduler:appoint'] = '预约';
$string['scheduler:attend'] = '照看学生';
$string['scheduler:canscheduletootherteachers'] = '为其他同事安排预约会面';
$string['scheduler:canseeotherteachersbooking'] = '查看并浏览其他老师的预约';
$string['scheduler:disengage'] = '这个能力没有任何用处';
$string['scheduler:manage'] = '编辑您的空位和预约会面';
$string['scheduler:manageallappointments'] = '编辑全部预约数据';
$string['scheduler:seeotherstudentsbooking'] = '查看此空位下其他学生的预约';
$string['scheduler:seeotherstudentsresults'] = '查看其他空位下学生预约情况';
$string['scheduler:seeoverviewoutsideactivity'] = '使用总览视图查看当前预约活动之外的空位';
$string['schedulestudents'] = '通过学生预约';
$string['scopemenu'] = '在 {$a} 中显示空位';
$string['scopemenuself'] = '在 {$a} 中显示我的空位';
$string['seen'] = '已接受';
$string['selectedtoomany'] = '您选择了过多的空位。您的选择不能超过 {$a}个。';
$string['sepcolon'] = '冒号';
$string['sepcomma'] = '逗号';
$string['sepsemicolon'] = '分号';
$string['septab'] = '标签';
$string['showemailplain'] = '用文本方式显示电子邮件地址';
$string['showemailplain_desc'] = '以教师看到的页面中，将学生的电子邮件地址显示为文本格式并在后面追加邮件地址链接。';
$string['showparticipants'] = '显示参与者';
$string['slot'] = '空位';
$string['slot_is_just_in_use'] = '抱歉，此预约会面刚刚被另外的学生选择！请重试。';
$string['slotdatetime'] = '{$a->shortdatetime} 的 {$a->duration} 分钟';
$string['slotdescription'] = '{$a->status} 在 {$a->startdate} 从 {$a->starttime} 到 {$a->endtime} 位于 {$a->location} 和 {$a->facilitator}。';
$string['slots'] = '空位';
$string['slotsadded'] = '{$a} 空位已添加';
$string['slottype'] = '空位类型';
$string['slotupdated'] = '空位已更新';
$string['slotwarning'] = '<strong>警告： </strong>此空位改期后与下列空位存在冲突。如果您无论如何都要改期请勾选“忽略预约冲突”。';
$string['staffbreakdown'] = '被 {$a}';
$string['staffrolename'] = '教师的角色名';
$string['staffrolename_help'] = '照看学生的角色之标签。这个标签不必然为“”教师“”';
$string['start'] = '开始';
$string['startpast'] = '您不能提交一个已过期的预约空位';
$string['statistics'] = '统计资料';
$string['student'] = '学生';
$string['studentbreakdown'] = '被学生';
$string['studentcomments'] = '学生注释';
$string['studentdetails'] = '学生细节';
$string['studentmultiselect'] = '在这个空位中，每个学生只能被选择一次';
$string['studentnotes'] = '您对预约会面的注释';
$string['students'] = '学生';
$string['sunday'] = '星期日';
$string['tab-otherappointments'] = '此学生的全部预约会面';
$string['tab-otherstudents'] = '此空位中的学生';
$string['tab-thisappointment'] = '本预约会面';
$string['teacher'] = '教师';
$string['teachersmenu'] = '为 {$a} 显示空位';
$string['thiscourse'] = '此课程';
$string['thisscheduler'] = '此预约会面';
$string['thissite'] = '全部网站';
$string['thursday'] = '星期四';
$string['totalgrade'] = '全部等级';
$string['tuesday'] = '星期二';
$string['unattended'] = '没有参加';
$string['unlimited'] = '无限制';
$string['unregisteredlbl'] = '没有预约的学生';
$string['upcomingslots'] = '即将到来的空位';
$string['updategrades'] = '更新等级';
$string['updatesingleslot'] = '空白';
$string['wednesday'] = '星期三';
$string['welcomebackstudent'] = '您可以点击下方相应的”预约空位“按钮预约额外的空位';
$string['welcomenewstudent'] = '下表显示一个预约会面所有可用的预约。点击相应的“预约空位”按钮做出选择。如果您稍后需要做出修改，请重新访问本页。';
$string['welcomenewteacher'] = '请点击下列按钮添加预约空位';
$string['what'] = '什么？';
$string['whathappened'] = '发生了什么？';
$string['whatresulted'] = '结果是什么？';
$string['when'] = '什么时间？';
$string['where'] = '什么地点？';
$string['who'] = '与谁一起？';
$string['whosthere'] = '谁在那里？';
$string['xdaysbefore'] = '空位前 {$a} 天。';
$string['xweeksbefore'] = '空位前 {$a} 周。';
$string['yesallgroups'] = '是的，为全部组。';
$string['yesingrouping'] = '是的，在组 {$a} 中。';
$string['yourappointmentnote'] = '在您眼中的评论';
$string['yourslotnotes'] = '会议的评论';
$string['yourtotalgrade'] = '您在这次活动中的全部等级是 <strong>{$a}</strong>。';
