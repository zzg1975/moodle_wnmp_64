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
 * Strings for component 'treasurehunt', language 'zh_cn', version '3.11'.
 *
 * @package     treasurehunt
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitytoend'] = '先完成所选活动';
$string['activitytoend_help'] = '选择的活动必须在显示当前线索之前完成。对于要在列表中显示的课程活动，它必须在Moodle的配置、课程和活动本身中启用完成活动。';
$string['activitytoendovercome'] = '活动 \'<strong>{$a}</strong>\'战胜了';
$string['activitytoendwarning'] = '你必须先完成要解决的问题';
$string['actnotavailableyet'] = '这个活动还不可用';
$string['add'] = '添加';
$string['addingroad'] = '添加道路';
$string['addingstage'] = '添加阶段';
$string['addroad_tour'] = '在你的学生后面加一条或多条道路。';
$string['addsimplequestion'] = '添加简单的问题';
$string['addsimplequestion_help'] = '在显示这个阶段的线索之前添加一个简单的问题';
$string['addstage_tour'] = '每条道路必须有两个或两个以上的阶段。每一个阶段都提供了一个线索来找出下一个。';
$string['aerialmap'] = '空中';
$string['aerialview'] = '空中';
$string['allowattemptsfromdate'] = '允许尝试从';
$string['allowattemptsfromdate_help'] = '如果启用，学生将不能在此日期前玩游戏。如果不启用，学生们就可以马上开始玩了。';
$string['alwaysshowdescription'] = '总是显示描述';
$string['alwaysshowdescription_help'] = '如果被禁用，上面的“寻宝”描述只会让学生在“允许尝试”的日期看到。';
$string['answerwarning'] = '你必须先回答这个问题';
$string['areyousure'] = '你确定吗?';
$string['attempt'] = '尝试';
$string['attemptsdeleted'] = '寻宝游戏尝试删除了';
$string['autolocate_tour'] = '在玩的时候，你可以用这个按钮通过你的设备的GPS来定位。请允许在被询问时使用“位置”的权限。';
$string['availability'] = '可用性';
$string['back'] = '返回';
$string['backtocourse'] = '返回到课程';
$string['basemaps'] = '基于地图';
$string['cancel'] = '取消';
$string['changecamera'] = '切换相机';
$string['changetogroupmode'] = '游戏模式已经改变为小组游戏';
$string['changetoindividualmode'] = '游戏模式已经改变为个人游戏';
$string['changetoplaywithmove'] = '游戏模式已经改变为动态游戏';
$string['changetoplaywithoutmoving'] = '游戏模式已经变成了静态游戏';
$string['cleartreasurehunt'] = '重置该寻宝游戏';
$string['cleartreasurehunt_done'] = '该活动已被重置。所有参与者的活动都被删除了。';
$string['cleartreasurehuntconfirm'] = '当心这个动作。如果你继续，所有记录的活动都会被删除。通常，只有当你需要改变比赛道路或阶段的数量时，才需要这个动作，但是由于有人已经开始玩这个游戏了，这个动作就被阻止了。';
$string['configintro'] = '您在这里设置的值定义了在创建新寻宝时设置表单中使用的默认值。';
$string['configmaximumgrade'] = '寻宝成绩的默认成绩是不存在的。';
$string['confirm'] = '确认';
$string['confirmdeletestage'] = '成功地移除舞台';
$string['continue'] = '继续';
$string['correctanswer'] = '正确的答案。';
$string['customlayername'] = '图层标题';
$string['customlayername_help'] = '如果您使用自定义图层，需要使用标题才能显示在地图或用户中。 如果标题为空，则自定义图层将完全禁用。';
$string['customlayertype'] = '图层类型';
$string['customlayertype_help'] = '该图层可以是背景中唯一可见的，也可以在标准基本地图上分层显示。';
$string['customlayerwms'] = 'WMS服务';
$string['customlayerwms_help'] = '使用来自OGC WMS服务的地图图层。(例如 EUNIS Forest Ecosystems WMS 可以被定义为: WMS: <code style="overflow-wrap: break-word;word-wrap: break-word;">http://bio.discomap.eea.europa.eu/arcgis/services/Ecosystem/Ecosystems/MapServer/WMSServer</code> PARAMS: <code>LAYERS=4</code>)';
$string['custommapbaselayer'] = '该图像可以作为ADDITIONAL（额外)的地图背景';
$string['custommapimagefile'] = '给地图自定义图片';
$string['custommapimagefile_help'] = '上传分辨率较高的图像，并用投影坐标填充接下来的4个区域';
$string['custommapmaxlat'] = '北纬';
$string['custommapmaxlat_help'] = '图像中的北纬，使用 ”.” 作为小数点，数字低于85度并且大于南纬。';
$string['custommapmaxlon'] = '东经';
$string['custommapmaxlon_help'] = '图像中的东经 使用 ”.” 作为小数点，数字小于180度并且大于西经。';
$string['custommapminlat'] = '南纬';
$string['custommapminlat_help'] = '图像中的南纬，使用 ”.” 作为小数点，数字低于85度并且大于北纬。';
$string['custommapminlon'] = '西经';
$string['custommapminlon_help'] = '图像中的西经 使用 ”.” 作为小数点，数字小于180度并且大于东经。';
$string['custommapnongeographic'] = '图像不是地理图像';
$string['custommaponlybaselayer'] = '该图像仅用为地图背景';
$string['custommapoverlaylayer'] = '图像将呈现在标准地图上方';
$string['custommapping'] = '自定义地图';
$string['customwmsparams'] = 'WMS函数';
$string['customwmsparams_help'] = '这些参数定义了地图的外观。 格式遵循以下格式：“LAYERS =背景，街道; STYLES =蓝色，默认”(For example EUNIS Forest Ecosystems WMS can be configured by: WMS: <code style="overflow-wrap: break-word;word-wrap: break-word;">http://bio.discomap.eea.europa.eu/arcgis/services/Ecosystem/Ecosystems/MapServer/WMSServer</code> PARAMS: <code>LAYERS=4</code>)';
$string['cutoffdate'] = '截止日期';
$string['cutoffdate_help'] = '如果设置了，寻宝游戏在该日期之后将不会在没有扩展的情况下接受尝试。';
$string['cutoffdatefromdatevalidation'] = '截止日期必须在允许提交日期之后。';
$string['discoveredlocation'] = '发现的位置';
$string['donetutorial'] = '结束';
$string['editactivity_help'] = '您可以在<a href="http://juacas.github.io/moodle-mod_treasurehunt/create_activity.html">页面上查找关于创建藏宝活动的分步教程。</a>';
$string['editend_tour'] = '享受为您的学生们制作精彩的游戏！';
$string['editingroad'] = '编辑道路';
$string['editingstage'] = '编辑阶段';
$string['editingtreasurehunt'] = '编辑寻宝游戏';
$string['edition'] = '编辑面板';
$string['edition_help'] = '要启用几何图形创建和编辑面板你必须选择要编辑的阶段';
$string['editroad'] = '编辑道路';
$string['editstage'] = '编辑阶段';
$string['edittreasurehunt'] = '保存道路和阶段';
$string['errcorrectanswers'] = '你必须选择一个正确答案';
$string['errcorrectsetanswerblank'] = '正确答案设置了，但这个答案是空白的';
$string['erremptystage'] = '所有的阶段都必须至少有一个几何图形，这样道路才有效';
$string['errnocorrectanswers'] = '只能有一个正确答案';
$string['errnumeric'] = '必须输入一个有效的小数';
$string['error'] = '错误';
$string['errpenalizationexceed'] = '惩罚不能大于100';
$string['errpenalizationfall'] = '惩罚不能小于0';
$string['errsendinganswer'] = '当你发送答案的时候，道路已经更新了，再试一次';
$string['errsendinglocation'] = '当你发送位置的时候，道路已经更新了，再试一次';
$string['errvalidroad'] = '至少有两个阶段至少有一个几何图形，所以这条路是有效的';
$string['eventattemptsubmitted'] = '尝试提交了';
$string['eventattemptsucceded'] = '阶段已通过';
$string['eventhuntsucceded'] = '藏宝活动顺利结束';
$string['eventplayerentered'] = '玩家开始游戏';
$string['eventroadcreated'] = '道路创建了';
$string['eventroaddeleted'] = '道路删除了';
$string['eventroadupdated'] = '道路更新了';
$string['eventstagecreated'] = '阶段创建了';
$string['eventstagedeleted'] = '阶段删除了';
$string['eventstageupdated'] = '阶段更新了';
$string['exit'] = '返回到课程';
$string['failedlocation'] = '不可用的位置';
$string['faillocation'] = '这不是一个正确的地方';
$string['gamemodeinfo'] = '游戏模式： {$a}';
$string['gameupdatetime'] = '游戏更新时间';
$string['gameupdatetime_help'] = '一个用户的游戏更新和另一个用户之间的时间间隔。应该做出更大的、更少的更新请求，但是更多的时间可以用来报告可能的更改。它必须大于0秒，但是时间将被默认设置。';
$string['geolocation_needed'] = '要玩这个游戏，你需要地理定位。激活它到你的浏览器设置-地点设置-位置，移除这个地点的驱逐。当你的浏览器询问你是否想要分享你的位置时，请重新加载这个页面并回答“是”。';
$string['geolocation_needed_title'] = '这个应用程序需要地理定位。';
$string['grade_explaination_fromabsolutetime'] = '{$a->rawscore}-{$a->penalization}%:您在{$a->yourtime}结束了寻宝活动。最佳成绩是在{$a->besttime}。您罚分{$a->penalization}%是因为{$a->nolocationsfailed}错误位置和{$a->noanswersfailed}错误回答。';
$string['grade_explaination_fromposition'] = '{$a->rawscore}-{$a->penalization}%:您被发现{$a->nosuccessfulstages}阶段在位置{$a->position}。您罚分{$a->penalization}%是因为{$a->nolocationsfailed}错误位置和{$a->noanswersfailed}错误回答。';
$string['grade_explaination_fromstages'] = '{$a->rawscore}-{$a->penalization}%:您被发现{$a->nosuccessfulstages} 因为{$a->nostages}阶段。您罚分{$a->penalization}%是因为{$a->nolocationsfailed}错误位置和{$a->noanswersfailed}错误回答。';
$string['grade_explaination_fromtime'] = '{$a->rawscore}-{$a->penalization}%:你需要{$a->yourtime}时间来完成这次寻宝活动。最佳成绩的时间是{$a->besttime}。您罚分{$a->penalization}% 是因为{$a->nolocationsfailed} 错误位置和{$a->noanswersfailed} 错误回答。';
$string['grade_explaination_temporary'] = '未完成的寻宝活动，从阶段{$a->rawscore}-{$a->penalization}%:获得50%的分数:您被发现{$a->nosuccessfulstages}因为{$a->nostages}阶段。您罚分{$a->penalization}%是因为{$a->nolocationsfailed} 错误位置和{$a->noanswersfailed} 错误回答。';
$string['gradefromabsolutetime'] = '来自寻宝期间的成绩';
$string['gradefromposition'] = '来自定位的成绩';
$string['gradefromstages'] = '来自阶段的成绩';
$string['gradefromtime'] = '来自完成时间的成绩';
$string['grademethod'] = '计分方法';
$string['grademethod_help'] = '<P><B>来自阶段的成绩</B><P> <UL> <P>每个玩家(或团队)的分数按比例计算，当一个道路完全被解决时，计100%的分，当没有一个阶段被解决时，计0%的分。</UL> <P><B>来自寻宝期间的成绩</B><P> <UL> <P>寻宝者在短时间内结束了这条路，赢得了寻宝，并标记了最好的时间。时间是从开启这条道路的起始阶段开始计算的。这意味着参与者可以在不同的时刻玩。通过对完成时间的50%进行插值计算，最后得出100%的最佳完成时间。没有完成寻宝的寻宝者得到的分数是50分，根据所解决的分阶段计算。</UL> <P><B>来自完成时间的成绩</B><P> <UL> <P>第一个完成的寻宝者是获得寻宝的胜利者。假设每个寻宝者都同时玩。通过对完成时间的50%进行插值计算，最后得出100%的最佳完成时间。没有完成寻宝的寻宝者得到的分数是50分，根据所解决的分阶段计算。</UL> <P><B>来自位置的成绩</B><P> <UL> <P>分数是通过在排名中插入位置来计算的，第一个寻宝者的得分是100%，最后一个寻宝者的得分是50%。没有完成寻宝的玩家得到的分数低于50%，是根据所解决的阶段的数量计算的。</UL>';
$string['grademethodinfo'] = '评分方法:{ $a->type}。位置处罚:{$a->gradepenlocation } %。回答处罚:{$a->gradepenanswer } %';
$string['gradepenanswer'] = '对失败的惩罚';
$string['gradepenlocation'] = '定位失败的惩罚';
$string['gradepenlocation_help'] = '惩罚是用分数来表示的。举例来说，如果处罚是5.4，那么一个有3次失败的球员将会对他的分数进行处罚16.2%，也就是说，他将得到剩余的83.8%的分数。';
$string['gradesdeleted'] = '寻宝游戏的成绩删除了';
$string['gradingsummary'] = '评分汇总';
$string['group'] = '小组';
$string['groupactivityovercome'] = '{$a->user}在{$a->date}成功完成阶段{$a->position}的活动';
$string['groupid'] = '被分配到道路上的小组';
$string['groupid_help'] = '当游戏开始时，这个组的用户被分配到这条路上。如果只有一条路，而选定的选项是“没有”，那么活动中的所有参与者都将为它而战。';
$string['groupingid'] = '分配给该道路的组别';
$string['groupingid_help'] = '当游戏开始时，这个组别中的组被分配到这条道路上';
$string['groupinvalidroad'] = '{$a}被分配到一条无效的道路。';
$string['grouplocationfailed'] = '阶段{$a->position}的 {$a->user}在{$a->date}失败的位置。';
$string['grouplocationovercome'] = '阶段{$a->position}的 {$a->user}在{$a->date}成功的位置。';
$string['groupmode'] = '学生们在小组中玩';
$string['groupmultipleroads'] = '{$a} 有超过一条路被分配。';
$string['groups'] = '小组';
$string['huntcompleted'] = '你已经完成了该寻宝游戏';
$string['infovalidatelocation'] = '确认这个阶段的位置';
$string['invalidassignedroad'] = '指定的道路没有经过验证';
$string['invalroadid'] = '这条路没有经过验证';
$string['map_tour'] = '在这张地图中你可以管理一个有趣的定位游戏的所有组成部分！';
$string['modulename'] = '寻宝游戏';
$string['modulenameplural'] = '寻宝游戏';
$string['movingplay'] = '移动游戏';
$string['noattempts'] = '你还没有做任何尝试';
$string['notreasurehunts'] = '这个课程里没有寻宝游戏';
$string['nouserassigned'] = '没有用户分配到这条路';
$string['nousersprogress'] = '在这条道路上没有用户/组有进展。';
$string['overcomefirststage'] = '要发现第一个阶段，你应该从地图上的标记区域开始';
$string['playstagewithoutmoving'] = '发现的阶段不移动';
$string['playstagewithqr'] = '通过阅读这个二维码发现阶段';
$string['playwithoutmoving'] = '无移动的玩';
$string['pluginadministration'] = '寻宝游戏管理';
$string['pluginname'] = '寻宝游戏';
$string['question'] = '问题';
$string['removealltreasurehuntattempts'] = '删除所有寻宝游戏尝试';
$string['restrictionsdiscoverstage'] = '限制发现阶段';
$string['road'] = '道路';
$string['roadended'] = '这条路是完整的。恭喜你!你已经做过寻宝游戏了。你可以在地图上查看你的历史。';
$string['roadname'] = '道路名称';
$string['roads_tour'] = '在这个区域，你会发现你的游戏的不同道路。选择其中一个来编辑阶段阶段。';
$string['save_tour'] = '在画出你的位置后，别忘了保存你的修改。';
$string['saveemptyridle'] = '所有经过修改的阶段都必须有几何图形才能保存';
$string['scanQR_generatebutton'] = '生成一个二维码';
$string['scanQR_scanbutton'] = '扫描二维码';
$string['stageclue'] = '提示定位下一个阶段的线索';
$string['stageclue_help'] = '在这里你应该描述到达下一个地点的线索。如果是最后一个阶段，一定要留下一个反馈信息，表明寻宝游戏已经结束了。';
$string['stagename'] = '阶段名称';
$string['stages_tour'] = '在这一地区，你将找到所选道路的各个阶段。选择每个阶段，将其放大到地图中各个阶段的位置。';
$string['startfromhere'] = '你只能从这里开始';
$string['trackusers'] = '跟踪轨迹';
$string['trackviewer'] = '跟踪查看器';
$string['treasurehunt'] = '寻宝游戏';
$string['treasurehuntclosed'] = '这个寻宝游戏关闭于 {$a}';
$string['treasurehuntcloses'] = '寻宝游戏关闭了';
$string['treasurehuntcloseson'] = '这个寻宝游戏将于{$a}关闭';
$string['treasurehuntname'] = '寻宝游戏名称';
$string['treasurehuntnotavailable'] = '直到$a，寻宝游戏才会出现';
$string['treasurehuntopenedon'] = '该寻宝游戏开始于{$a}';
$string['treasurehuntopens'] = '寻宝游戏打开';
$string['usersprogress'] = '进步用户';
$string['validatelocation'] = '确认位置';
$string['warmatchanswer'] = '答案与这个问题不相符';
$string['warnqrscannersuccess'] = '这个寻宝活动包括了一个带有QRcode(二维码)的阶段{$a}。看起来你已经通过这个设备进行了一个二维码测试。';
$string['warnusersgroup'] = '以下用户属于多个组:$a，因此不能进行该活动。';
$string['warnusersgrouping'] = '下面的组属于多个分组:$a，因此不能进行该活动。';
$string['warnusersoutside'] = '下面的用户不属于任何组群:$a，因此不能进行该活动。';
$string['welcome_edit_tour'] = '欢迎来到我们的“寻宝游戏”的创作页面。';
$string['welcome_play_tour'] = '欢迎来到寻宝游戏。这是研究、追逐和赢得你的财富的主要界面。';
