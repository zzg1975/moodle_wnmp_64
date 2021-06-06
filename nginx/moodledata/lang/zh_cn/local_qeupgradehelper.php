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
 * Strings for component 'local_qeupgradehelper', language 'zh_cn', version '3.11'.
 *
 * @package     local_qeupgradehelper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '动作';
$string['alreadydone'] = '所有一切都转换完毕';
$string['areyousure'] = '您确定吗？';
$string['areyousuremessage'] = '您想升级课程{$a->shortname}的测验“{$a->name}”中的{$a->numtoconvert}次试答吗？';
$string['areyousureresetmessage'] = '课程{$a->shortname}下的测验“{$a->name}”有{$a->totalattempts}次试答，其中{$a->convertedattempts}次是从旧系统升级的。其中有{$a->resettableattempts}次可以被重置，方便重新转换。您想这么做吗？';
$string['attemptstoconvert'] = '需要转换的试答';
$string['backtoindex'] = '回到主页';
$string['conversioncomplete'] = '转换结束';
$string['convertattempts'] = '转换试答';
$string['convertedattempts'] = '已转换试答';
$string['convertquiz'] = '转换试答…';
$string['cronenabled'] = '启用cron';
$string['croninstructions'] = '在部分升级之后，您可以让cron自动完成剩下的升级任务。Cron会在设置的时间段（服务器的本地时间）内运行。每次cron运行时，都会处理处理几条试答，直到时限用尽，然后再等到下一次cron时运行。即使您设置了cron，它也可能什么都不做，除非它检测到向2.1的主要升级已经完成。';
$string['cronprocesingtime'] = '每次cron处理时间';
$string['cronsetup'] = '配置cron';
$string['cronsetup_desc'] = '您可以配置cron，让它自动完成测验试答数据的升级。';
$string['cronstarthour'] = '开始时间';
$string['cronstophour'] = '结束时间';
$string['extracttestcase'] = '析出测试用例';
$string['extracttestcase_desc'] = '用数据库中的例子数据创建测试用例，用来测试升级。';
$string['gotoindex'] = '返回到可升级的测验列表';
$string['gotoquizreport'] = '前往此测验的报告，检查此次升级';
$string['gotoresetlink'] = '前往可重置的测验列表';
$string['includedintheupgrade'] = '包含在升级中？';
$string['invalidquizid'] = '无效的测验id。此测验不存在，或者它没有可转换的试卷。';
$string['listpreupgrade'] = '列出测验和试答';
$string['listpreupgrade_desc'] = '会显示系统的所有测验，及它们有多少次试答，帮助您了解有多少升级工作要做。';
$string['listpreupgradeintro'] = '这是升级您网站时需要处理的试答数量。如果有几万个，不用担心。更应该考虑的，是升级会花多久。';
$string['listtodo'] = '列出仍需升级的测验';
$string['listtodo_desc'] = '将显示一个报表，包含系统中所有有试答且需要升级到新试题引擎的测验。';
$string['listtodointro'] = '这是所有有试答且需要转换的测验。您可以点击链接转换试答。';
$string['listupgraded'] = '列出可重置的已升级测验';
$string['listupgraded_desc'] = '将显示一个报表，包含系统中所有试答已升级，但旧数据还存在的测验。可以重置并重设这些测验的升级。';
$string['listupgradedintro'] = '这是全部有试卷且已升级的测验，但旧数据仍被保留，所以可以重置并重新升级它们。';
$string['noquizattempts'] = '您的网站没有任何测验被试答！';
$string['nothingupgradedyet'] = '没有可重置的已升级试答';
$string['notupgradedsiterequired'] = '此脚本只能在网站升级前使用。';
$string['numberofattempts'] = '测验试答数';
$string['oldsitedetected'] = '此网站还没有升级到新试题引擎。';
$string['outof'] = '{$a->total}中的{$a->some}次';
$string['pluginname'] = '试题引擎升级助手';
$string['pretendupgrade'] = '模拟运行一次试答升级';
$string['pretendupgrade_desc'] = '升级做三件事：从数据库加载已存在的数据；转换数据；将转换过的数据写入数据库。此脚本测试此过程中的前两步。';
$string['questionsessions'] = '试题会话';
$string['quizid'] = '测验id';
$string['quizupgrade'] = '测验升级状态';
$string['quizzesthatcanbereset'] = '下列测验有转换过的试答，而且您可以重置';
$string['quizzestobeupgraded'] = '所有有试答的测验';
$string['quizzeswithunconverted'] = '下列测验有需要转换的试答';
$string['resetcomplete'] = '重置结束';
$string['resetquiz'] = '重置试答…';
$string['resettingquizattempts'] = '正重置测验试答';
$string['resettingquizattemptsprogress'] = '重置试答 {$a->done} / {$a->outof}';
$string['upgradedsitedetected'] = '看到此条信息，说明此站已经升级到了新的试题引擎。';
$string['upgradedsiterequired'] = '此脚本只能在已经升级过的网站使用。';
$string['upgradingquizattempts'] = '正升级课程{$a->shortname}的测验“{$a->name}”中的试答';
$string['veryoldattemtps'] = '在从 Moodle 1.4 升级到 Moodle 1.5 的过程中，您的网站有 {$a} 次试卷没有被正确更新。这些试卷会在主升级之前被处理。您要对额外消耗的时间有心理准备。';
