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
 * Strings for component 'quizaccess_proctoring', language 'zh_cn', version '3.11'.
 *
 * @package     quizaccess_proctoring
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '行动';
$string['additionalsettingspagetitle'] = '所有监视日志';
$string['buttonlabel:deletebutton'] = '删除图像';
$string['camhtml'] = '<div class="camera"> <video width="100" id="video">视频流不可用。</video></div> <canvas id="canvas" style="display:none;"> </canvas> <img style="display:none;" id="photo" alt="屏幕截图将显示在此框中。"/>';
$string['coursenameheader'] = '课程名称';
$string['dateverified'] = '日期和时间';
$string['eprotroringreports'] = '监视报告的对象：';
$string['eprotroringreportsdesc'] = '在本报告中，您将找到考试期间拍摄的所有学生图像。现在，您可以验证他们的身份，如他们的个人资料图片和网络摄像头照片。';
$string['event:screenshotcreated'] = '创建了一个新的屏幕截图';
$string['event:screenshotupdated'] = '屏幕截图已更新';
$string['event:takescreenshot'] = '截屏';
$string['execute_facematch_task'] = '执行人脸匹配任务';
$string['initiate_facematch_task'] = '启动面部匹配任务';
$string['mainsettingspagebtn'] = '监视设置';
$string['modal:disabled'] = '禁用';
$string['modal:displaysurface'] = '显示表面：';
$string['modal:facevalidation'] = '面部验证：';
$string['modal:pending'] = '挂起';
$string['modal:sharescreenbtn'] = '分享屏幕';
$string['modal:sharescreenstate'] = '分享屏幕状态:';
$string['modal:validateface'] = '验证人脸识别';
$string['name'] = '学生名字';
$string['notpermissionreport'] = '已为您禁用监视报告。';
$string['notrequired'] = '不需要的';
$string['openwebcam'] = '允许您的网络摄像头和共享屏幕继续';
$string['picturesreport'] = '查看监视报告';
$string['picturesusedreport'] = '这是测验中拍摄的照片。';
$string['pluginname'] = '监视';
$string['privacy:core_files'] = '测验访问监视网络摄像头图片';
$string['privacy:metadata'] = '我们不与第三方共享任何个人数据。';
$string['privacy:metadata:core_files'] = '测验访问存储用户在测验尝试期间由网络摄像头拍摄的图片。';
$string['privacy:metadata:courseid'] = '使用监视的课程的ID。';
$string['privacy:metadata:quizaccess_proctoring_logs'] = 'Moodle测验访问存储用户图片的监视日志表。';
$string['privacy:metadata:quizid'] = '使用监视的测验的ID。';
$string['privacy:metadata:status'] = '监视的状态。';
$string['privacy:metadata:webcampicture'] = '监视拍摄的照片的名称。';
$string['privacy:quizaccess_proctoring_logs'] = '测验访问监视日志';
$string['proctoring:getcamshots'] = '监视获取网络摄像头照片';
$string['proctoring:sendcamshot'] = '监视发送网络摄像头照片';
$string['proctoring:viewreport'] = '监视视图报告';
$string['proctoringheader'] = '<strong>若要继续此测验尝试，您必须打开网络摄像头，它将在测验期间随机拍摄您的一些照片。</strong>';
$string['proctoringlabel'] = '我同意验证过程。';
$string['proctoringrequired'] = '网络摄像机身份验证';
$string['proctoringrequired_help'] = '如果启用此选项，学生将无法开始尝试，直到他们勾选了一个复选框，确认他们了解网络摄像头的政策。';
$string['proctoringrequiredoption'] = '必须在开始尝试之前确认';
$string['proctoringstatement'] = '此考试需要屏幕共享和网络摄像头访问。<br/>（请共享屏幕并允许网络摄像头访问）。';
$string['quizaccess_proctoring'] = '测验访问监视';
$string['quiznameheader'] = '测验名称';
$string['reportidheader'] = '日志ID';
$string['screenhtml'] = '<span><video style="display: none" width="100" id="video-screen" autoplay></video></span><canvas id="canvas-screen" style="display:none;"></canvas><img id="photo-screen" alt="图片将显示在此框中。" style="display:none;"/><span class="output-screen" style="display:none;"></span><span id="log-screen" style="display:none;"></span>';
$string['screenshots'] = '屏幕截图';
$string['setting:aws_key'] = 'AWS Key';
$string['setting:aws_keydesc'] = '人脸识别服务的AWS Key。';
$string['setting:aws_secret'] = 'AWS secret';
$string['setting:aws_secretdesc'] = '人脸识别服务的AWS secret';
$string['setting:bs_api'] = 'BS服务API';
$string['setting:bs_apidesc'] = 'BS服务api端点。';
$string['setting:bs_apitoken'] = 'BS令牌';
$string['setting:bs_apitokendesc'] = '用于BS面匹配服务的API令牌。';
$string['setting:camshotdelay'] = '摄像机拍摄之间的延迟（以秒为单位）。';
$string['setting:camshotdelay_desc'] = '给定值为每次拍摄之间的延迟（以秒为单位）';
$string['setting:camshotwidth'] = '以像素为单位的相机快照图像的宽度。';
$string['setting:camshotwidth_desc'] = '给定的值将是摄影机快照的宽度。图像高度将缩放到该值';
$string['setting:externalpage'] = '外部页面';
$string['setting:facematch'] = '每次测验中进行面部匹配次数';
$string['setting:facematchdesc'] = '每个测验的脸匹配数。（-1表示全部检查）';
$string['setting:fc_method'] = '面部匹配法（BS/AWS）';
$string['setting:fc_methoddesc'] = '匹配面部的服务。（值：AWS/BS）。';
$string['setting:fcthreshold'] = '面匹配阈值百分比。';
$string['setting:fcthresholddesc'] = '面部匹配阈值百分比。';
$string['setting:proctoringreconfigureproctoring'] = '自动配置监视';
$string['setting:proctoringreconfigureproctoring_desc'] = '如果启用，导航到测验的用户将拍摄网络摄像头照片';
$string['settings:deleteallconfirm'] = '你真的要删除所有测验的所有图像吗。';
$string['settings:deleteallformlabel'] = '单击删除所有图像按钮将删除所有测验的所有图像。';
$string['settings:deleteallsuccess'] = '已成功删除所有图像。';
$string['settings:enablescreenshot'] = '为测验启用屏幕截图。';
$string['settings:enablescreenshot_desc'] = '为测验启用屏幕截图。';
$string['settings:fcheckquizstart'] = '在测验开始时验证人脸ID';
$string['settings:fcheckquizstart_desc'] = '在测验开始时验证面部ID[如果“是”，用户必须验证面部ID才能开始测验]。';
$string['settings:screenshareenable'] = '启用屏幕共享';
$string['settings:screenshareenable_desc'] = '启用屏幕共享[如果“是”，用户屏幕截图将与网络摄像头图片一起发送]。';
$string['settings:updatesuccess'] = '已成功更新监视的设置。';
$string['settingscontroll:deleteall'] = '清除所有程序数据';
$string['settingscontroll:save'] = '保存设置';
$string['settingserror:formcancelled'] = '您取消了表单提交。';
$string['settingserror:imagedelay'] = '摄像机拍摄之间的延迟只能是整数';
$string['settingserror:imagewidth'] = '相机拍摄图像的宽度只能是整数';
$string['status'] = '验证状态';
$string['summarypagedesc'] = '在本报告中，您将看到课程和测验的监视报告摘要。您可以删除与测验和课程相关的所有数据。它将删除图像文件和日志。';
$string['timemodified'] = '最后修改';
$string['warning:cameraallowwarning'] = '请允许摄像机进入。';
$string['warninglabel'] = '警告';
$string['webcampicture'] = '拍摄的照片';
$string['youmustagree'] = '在继续之前，您必须同意验证您的身份。';
