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
 * Strings for component 'local_amos', language 'zh_cn', version '3.11'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS是Automated Manipulation Of Strings（字符串自动处理）的缩写。它是Moodle字符串及其历史的中心容器。它跟踪Moodle代码中的英文字符串变化，收集翻译，处理日常翻译任务和生成由Moodle服务器分发的语言包。</p>
<p>参考<a href="http://docs.moodle.org/en/AMOS">AMOS文档</a>了解更多。</p>';
$string['amos'] = 'AMOS 翻译工具箱';
$string['amos:changecontriblang'] = '修改贡献字符串的语言';
$string['amos:commit'] = '将暂存的字符串提交到主容器';
$string['amos:execute'] = '执行给定的AMOS脚本';
$string['amos:importfile'] = '从上传文件导入并暂存翻译';
$string['amos:importstrings'] = '将字符串（包括英文原文）直接导入主容器';
$string['amos:manage'] = '管理 AMOS 入口';
$string['amos:stage'] = '使用AMOS翻译工具并暂存这些字符串';
$string['amos:stash'] = '将当前暂存的字符串永久保存到储藏室';
$string['amos:usegoogle'] = '使用 Google 翻译服务';
$string['commitbutton'] = '提交';
$string['commitkeepstaged'] = '保持字符串暂存状态';
$string['commitmessage'] = '提交信息';
$string['commitmessageempty'] = '请填写提交信息';
$string['commitstage'] = '提交暂存的字符串';
$string['commitstage_help'] = '永久保存AMOS容器中所有暂存的字符串。暂存区在提交前会被自动清理和与最新翻译同步。只有已提交的字符串被保存。也就是说，只有背景是绿色的翻译会被保存。提交后，暂存区会被清空。';
$string['committableall'] = '所有语言';
$string['committablenone'] = '没有可提交的语言——请联系AMOS管理员';
$string['componentsall'] = '全部';
$string['componentsnone'] = '无';
$string['componentsstandard'] = '标准';
$string['confirmaction'] = '此项操作不能被撤销。您确定一定以及肯定吗？';
$string['contribaccept'] = '接受';
$string['contribactions'] = '操作贡献的翻译';
$string['contribactions_help'] = '取决于您的权限和贡献翻译工作流程，您可以使用下面的部分动作：

* 应用 - 将贡献的翻译拷贝到您的暂存区，不修改贡献记录
* 分配给我 - 将您自己设为此贡献的责任人，由您负责评估和集成
* 重新分配 - 删除此贡献的责任人
* 开始评估 - 分配此新贡献给您自己，把它的状态设为”评估中“，并拷贝提交的翻译到您的暂存区
* 接受 - 标记此贡献为已接受
* 拒收 - 标记此贡献为已拒收。请在评论中说明原因。

贡献人会收到所有状态变化的通知邮件。';
$string['contribapply'] = '应用';
$string['contribassignee'] = '责任人';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = '分配给我';
$string['contribauthor'] = '作者';
$string['contribclosedno'] = '隐藏已处理的贡献';
$string['contribclosedyes'] = '显示已处理的贡献';
$string['contribcomponents'] = '组件';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = '没有收到任何贡献';
$string['contribincomingsome'] = '收到贡献（{$a}）';
$string['contriblanguage'] = '语言';
$string['contriblanguagebutton'] = '转换';
$string['contribnotifaccepted'] = '{$a->fullname} 已接受您贡献的翻译
#{$a->id} {$a->subject}

---------------------------------------------------------------------
贡献页面：{$a->contriburl}';
$string['contribnotifcommented'] = '{$a->fullname} 评论了此次翻译
#{$a->id} {$a->subject}
---------------------------------------------------------------------

{$a->message}

---------------------------------------------------------------------
贡献页面：{$a->contriburl}';
$string['contribnotifrejected'] = '{$a->fullname} 拒收了您贡献的翻译
#{$a->id} {$a->subject}

---------------------------------------------------------------------
贡献页面：{$a->contriburl}';
$string['contribreject'] = '拒收';
$string['contribresign'] = '取消分配';
$string['contribstaged'] = '暂存的{$a->author}的贡献 <a href="contrib.php?id={$a->id}">#{$a->id}</a>';
$string['contribstagedinfo'] = '暂存的贡献';
$string['contribstagedinfo_help'] = '暂存区包含由社区成员贡献的字符串。语言包维护人应评估它们，并设置它们的状态为“接受”（如果提交了）或“拒收”（如果出于某些原因，他们不能被包含在官方语言包中）。';
$string['contribstartreview'] = '开始评估';
$string['contribstatus'] = '状态';
$string['contribstatus0'] = '新的';
$string['contribstatus10'] = '评估中';
$string['contribstatus20'] = '拒收';
$string['contribstatus30'] = '接受';
$string['contribstatus_help'] = '贡献翻译工作流程包含下面的状态：

* 新的 - 此贡献已经提交，但还没被评估
* 评估中 - 此贡献已经分配给一名语言包维护人，并放入它的暂存区供评估
* 拒收 - 语言包维护人已拒收此贡献，并可能在评论中做了解释
* 接受 - 语言包维护人已经接受此贡献';
$string['contribstrings'] = '字符串';
$string['contribstringseq'] = '{$a->orig}个新的';
$string['contribstringsnone'] = '{$a->orig}（语言包中都已经翻译过了）';
$string['contribstringssome'] = '{$a->orig}（语言包中已经翻译了{$a->same}个）';
$string['contribsubject'] = '标题';
$string['contribsubmittednone'] = '没有已提交的贡献';
$string['contribsubmittedsome'] = '您的贡献（{$a}）';
$string['contribtimemodified'] = '修改于';
$string['contribute'] = '贡献';
$string['contributenow'] = '马上贡献！';
$string['contributestats'] = '目前已有<strong>{$a->count}</strong>条由社区翻译的字符串提交到 AMOS。';
$string['contributethanks'] = '非常感谢{$a->listcontributors}最近的贡献！';
$string['contributions'] = '贡献';
$string['creditscontact'] = '发送消息';
$string['creditscontributors'] = '其它贡献者';
$string['creditsmaintainedby'] = '维护人';
$string['creditsnomaintainer'] = '目前尚无维护人。<a href="{$a->url}">你来吧！</a>';
$string['creditsthanks'] = '在此，我们向所有为 Moodle 翻译做过贡献的人表示感谢。没有他们的工作，Moodle 就不可能传遍世界。';
$string['creditstitlelong'] = '语言包维护人和贡献人';
$string['creditstitleshort'] = '致谢';
$string['diff'] = '比较';
$string['diffstringmode'] = '切换 diff 模式';
$string['err_exception'] = '错误：{$a}';
$string['err_invalidlangcode'] = '无效的语言代码';
$string['err_parser'] = '解析错误：{$a}';
$string['filtercmp'] = '组件';
$string['filtercmp_desc'] = '显示这些组件的字符串';
$string['filtercmpnothingselected'] = '请选择组件';
$string['filterlng'] = '语言';
$string['filterlng_desc'] = '显示这些语言的翻译';
$string['filterlngnothingselected'] = '请选择语言';
$string['filtermis'] = '杂项';
$string['filtermis_desc'] = '字符串显示的其他条件';
$string['filtermisfhas'] = '只含已翻译字符串';
$string['filtermisfhlp'] = '只含帮助字符串';
$string['filtermisfmis'] = '只含未翻译或未更新的字符串';
$string['filtermisfout'] = '只含过期字符串';
$string['filtermisfstg'] = '只含暂存的字符串';
$string['filtersid'] = '字符串标识符';
$string['filtersid_desc'] = '字符串数组的下标';
$string['filtersidpartial'] = '部分匹配';
$string['filtertxt'] = '子字符串';
$string['filtertxt_desc'] = '字符串必须包含给定文本';
$string['filtertxtcasesensitive'] = '大小写敏感';
$string['filtertxtregex'] = '正则表达式';
$string['filterver'] = '版本';
$string['filterver_desc'] = '显示这些Moodle版本的字符串';
$string['filtervernothingselected'] = '请选择版本';
$string['googletranslate'] = '问 google';
$string['importfile'] = '从文件导入已翻译的字符串';
$string['importfile_help'] = '如果您是离线翻译的字符串，可以在这里把它们放入暂存区。

* 文件必须是合法的Moodle PHP字符串定义文件。Moodle的”/lang/en“目录下的文件都是例子。
* 文件名必须是字符串所属的组件的英文名（例如”moodle.php“、”assignment.php“或”enrol_manual.php“）。

文件中所有字符串都会按照所选的版本和语言放入暂存区。

将多个 PHP 文件放到一个 ZIP 文件中，可以同时处理。';
$string['language'] = '语言';
$string['languages'] = '语言';
$string['languagesall'] = '全部';
$string['languagesnone'] = '无';
$string['log'] = '日志';
$string['logfilterbranch'] = '版本';
$string['logfiltercommithash'] = 'git哈希值';
$string['logfiltercommitmsg'] = '提交信息包含';
$string['logfiltercommits'] = '提交过滤器';
$string['logfiltercommittedafter'] = '提交晚于';
$string['logfiltercommittedbefore'] = '提交早于';
$string['logfiltercomponent'] = '组件';
$string['logfilterlang'] = '语言';
$string['logfiltershow'] = '显示过滤后的提交和字符串';
$string['logfiltersource'] = '源';
$string['logfiltersourceamos'] = 'amos（基于web的翻译器）';
$string['logfiltersourceautomerge'] = '自动合并（从另一分支拷贝的翻译）';
$string['logfiltersourcebot'] = '机器人（用脚本执行的批量操作）';
$string['logfiltersourcecommitscript'] = 'commitscript（提交信息中有AMOScript）';
$string['logfiltersourcefixdrift'] = '修正漂移（已修正的AMOS-git漂移）';
$string['logfiltersourcegit'] = 'git（Moodle源代码和1.x包的git镜像）';
$string['logfiltersourceimport'] = '导入（导入第三方插件的字符串）';
$string['logfiltersourcerevclean'] = 'revclean（反向清理过程）';
$string['logfilterstringid'] = '字符串标识符';
$string['logfilterstrings'] = '字符串过滤器';
$string['logfilterusergrp'] = '提交人';
$string['logfilterusergrpor'] = '或';
$string['maintainers'] = '维护人';
$string['markuptodate'] = '此翻译是与时俱进的';
$string['markuptodatelabel'] = '标记为已更新';
$string['morefilteringoptions'] = '更多选项';
$string['newlanguage'] = '新语言';
$string['nodiffs'] = '未发现不同';
$string['nofiletoimport'] = '请提供一个供导入的文件。';
$string['nologsfound'] = '没有符合条件的字符串，请修改过滤条件';
$string['nostringsfound'] = '没有符合条件的字符串';
$string['nostringtoimport'] = '文件里没有合法的字符串。请确认文件名和文件格式正确。';
$string['nothingtostage'] = '此操作未返回任何可以暂存的字符串。';
$string['novalidzip'] = '无法解压此ZIP文件。';
$string['numofcommitsabovelimit'] = '经提交过滤器过滤，找到{$a->found}次提交，使用{$a->limit}个最近的';
$string['numofcommitsunderlimit'] = '经提交过滤器过滤，找到{$a->found}次提交';
$string['numofmatchingstrings'] = '其中，{$a->commits}次提交的{$a->strings}次修改符合字符串过滤器';
$string['outdatednotcommitted'] = '旧字符串';
$string['outdatednotcommitted_help'] = 'AMOS检测到此字符串可能有些旧了，因为在上次翻译后，它的英文版有过修改。请重新评估此翻译。';
$string['outdatednotcommittedwarning'] = '旧的';
$string['ownstashactions'] = '储藏室动作';
$string['ownstashactions_help'] = '* 应用 - 把已翻译的字符串从储藏室拷贝到暂存区，但不修改储藏室。如果暂存区里已经有该字符串，会被储藏室里的覆盖。
* 弹出 - 把已翻译的字符串从储藏室移动到暂存区，并从储藏室删除（相当于应用+删除）
* 删除 - 删除放到储藏室的字符串。
* 提交 - 打开一个提交储藏室给官方语言维护人的表单，这样他们就可以将您的贡献放入官方语言包。';
$string['ownstashes'] = '您的储藏室';
$string['ownstashes_help'] = '这是您所有储藏室的列表。';
$string['ownstashesnone'] = '没建任何自己的储藏室';
$string['permalink'] = '永久链接';
$string['placeholder'] = '占位符';
$string['placeholder_help'] = '占位符是字符串中一些特殊语句，类似”{$a}“或”{$a->something}“。在字符串最终被显示时，它们会被替换为另一个值。

一定要将它们原封不动地从原始字符串里拷贝。不要翻译它们！';
$string['placeholderwarning'] = '有占位符的字符串';
$string['pluginclasscore'] = '核心子系统';
$string['pluginclassnonstandard'] = '非标准插件';
$string['pluginclassstandard'] = '标准插件';
$string['pluginname'] = 'AMOS';
$string['presetcommitmessage'] = '由 {$a->author} 贡献的翻译#{$a->id}';
$string['presetcommitmessage2'] = '从{$a->source}分支合并缺失的字符串到{$a->target}分支';
$string['presetcommitmessage3'] = '修正{$a->versiona}和{$a->versionb}之间的差异';
$string['privileges'] = '您的特权';
$string['privilegesnone'] = '对公共信息，你有只读权限。';
$string['processing'] = '处理中…';
$string['quicklinks'] = '快速链接';
$string['quicklinks_amos'] = 'AMOS 翻译器';
$string['quicklinks_forum'] = '翻译讨论区';
$string['quicklinks_manual'] = '用户手册';
$string['quicklinks_newcomers'] = '新手上路';
$string['requestactions'] = '动作';
$string['requestactions_help'] = '* 申请 - 从推送请求中复制已翻译的字符串到自己的暂存区。如果这个字符串已经在暂存区中了，就覆盖重写它。
* 隐藏 - 屏蔽这个推送请求使得您不会再看到它了。';
$string['savefilter'] = '保存过滤器设置';
$string['script'] = 'AMOS脚本';
$string['script_help'] = 'AMOS脚本是针对字符串容器的一系列指令。';
$string['scriptexecute'] = '执行并暂存结果';
$string['sourceversion'] = '源版本';
$string['stage'] = '暂存区';
$string['stageactions'] = '暂存区动作';
$string['stageactions_help'] = '* 编辑已暂存字符串 - 修改翻译器过滤器的设置，只显示已暂存的翻译。
* 清理不可提交的字符串 - 从暂存区删除所有不允许提交的翻译。在提交前，暂存区会被自动清理。
* 重新对齐 - 从暂存区删除所有没修改的翻译，或者比容器中的当前翻译旧的翻译。在提交前，暂存区会被自动对齐。
* 清空暂存区 - 清空暂存区后，其内的所有翻译都再也找不回来了。';
$string['stageedit'] = '编辑已暂存的字符串';
$string['stageprune'] = '清理不可提交的';
$string['stagerebase'] = '重新对齐';
$string['stagestringsnocommit'] = '暂存区有{$a->staged}个字符串';
$string['stagestringsnone'] = '暂存区没有字符串';
$string['stagestringssome'] = '暂存区共有{$a->staged}个字符串，其中{$a->committable}个可以提交';
$string['stagesubmit'] = '提交给维护人';
$string['stagetoolopen'] = '前往暂存区';
$string['stagetranslation'] = '翻译';
$string['stagetranslation_help'] = '显示要提交的已暂存的翻译。单元格背景色的含义：

* 绿色 - 您新翻译了该字符串。您可以提交这条翻译。
* 黄色 - 您修改了该字符串的翻译。您可以提交这条翻译。
* 蓝色 - 您修改过或新翻译了该字符串，但您不能将它提交到对应的语言包。
* 无色 - 暂存的翻译和当前翻译是完全一样的，所以不会被提交。';
$string['stageunstageall'] = '清空暂存区';
$string['stashactions'] = '储藏室动作';
$string['stashactions_help'] = '储藏室是当前暂存区的一个快照。可以将储藏室提交给官方语言包维护人，由它将其放入语言包。';
$string['stashapply'] = '应用';
$string['stashautosave'] = '自动保存的备份储藏室';
$string['stashautosave_help'] = '这个储藏室包含您的暂存区最新的快照。在某些情况下，比如不小心清空了暂存区，可以用它做备份。点击”应用“可以拷贝储藏室中的所有字符串到暂存区中（如果字符串已在暂存区中，会被覆盖）。';
$string['stashcomponents'] = '<span>组件：</span> {$a}';
$string['stashdrop'] = '丢弃';
$string['stashes'] = '储藏室';
$string['stashlanguages'] = '<span>语言：</span> {$a}';
$string['stashpop'] = '弹出';
$string['stashpush'] = '把暂存区中所有字符串放入一个新的储藏室';
$string['stashstrings'] = '<span>字符串个数：</span> {$a}';
$string['stashsubmit'] = '提交给维护人';
$string['stashsubmitdetails'] = '提交细节';
$string['stashsubmitmessage'] = '消息';
$string['stashsubmitsubject'] = '主题';
$string['stashtitle'] = '储藏室标题';
$string['stashtitledefault'] = '半成品 - {$a->time}';
$string['stringhistory'] = '历史';
$string['strings'] = '字符串数';
$string['submitting'] = '提交一个贡献';
$string['submitting_help'] = '这会将翻译的字符串发送给官方语言维护人。他们会将您的贡献放入暂存区，评估，并最后提交。请留下一些信息，描述一下您的翻译和您为什么希望您的贡献被接受。';
$string['targetversion'] = '目标版本';
$string['timeline'] = '时间线';
$string['translatortool'] = '翻译器';
$string['translatortoolopen'] = '打开 AMOS 翻译器';
$string['translatortranslation'] = '翻译';
$string['translatortranslation_help'] = '点击单元格，立即变为输入框。输入翻译并点击单元格以外的地方，就将翻译放入了暂存区。单元格的背景色含义：

* 绿色 - 此字符串已经被翻译过了。您可以进行最终修改。
* 黄色 - 此字符串可能有些旧了。在上次翻译后，英文版可能有修改。
* 红色 - 此字符串还未被翻译。
* 蓝色 - 您已经修改了翻译，它现在被暂存了。
* 灰色 - 不能用 AMOS 翻译此字符串。例如 Moodle 1.9 的字符串就只能用传统的 CVS 编辑。

语言包维护人在他们可以提交的单元格右上角可以看到一个红色小标记。';
$string['typecontrib'] = '非标准插件';
$string['typecore'] = '核心子系统';
$string['typestandard'] = '标准插件';
$string['unableenfixaddon'] = '只有标准插件可以使用英文修复';
$string['unableenfixcountries'] = '国家名拷贝自 ISO 3166-1';
$string['unstage'] = '删除暂存';
$string['unstageconfirm'] = '真的？';
$string['unstaging'] = '删除中';
$string['version'] = '版本';
