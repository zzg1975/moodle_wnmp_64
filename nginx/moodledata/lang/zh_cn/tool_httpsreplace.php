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
 * Strings for component 'tool_httpsreplace', language 'zh_cn', version '3.11'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = '已完成';
$string['count'] = '嵌入内容项的数量';
$string['disclaimer'] = '我明白该操作的风险';
$string['doclink'] = 'HTTPS转换工具';
$string['doit'] = '执行转换';
$string['domain'] = '有问题的域名';
$string['domainexplain'] = '当站点从HTTP迁移到HTTPS时，所有嵌入的HTTP内容将停止工作。该工具允许您自动将HTTP内容转换为HTTPS。

在执行转换之前，将对内容进行扫描以查找转换后可能无法使用的所有URL。您可能要检查每个服务器都有可用的HTTPS，或查找替代资源。';
$string['domainexplainhelp'] = '这些域名在您的内容中找到，但似乎不支持HTTPS内容。切换到HTTPS后，对于使用安全的现代浏览器的用户，这些网站中包含的内容将不再显示在Moodle中。这些站点可能暂时或永久不可用，并且无法在这两种安全设置下使用。只有在查看了这些结果并确定此外部托管的内容是否为非必需内容之后，才继续进行。注意：无论如何，此内容在切换到HTTPS后将不再起作用。';
$string['httpwarning'] = '这个实例仍然在HTTP上运行。您仍然可以运行此工具，外部内容将更改为HTTPS，但内部内容将保持HTTP。在切换到HTTPS之后，需要再次运行此脚本以转换内部内容。';
$string['notimplemented'] = '抱歉，您的数据库驱动程序未实现此功能。';
$string['oktoprocede'] = '扫描发现您的内容没有问题。您可以继续升级任何HTTP内容以使用HTTPS。';
$string['pageheader'] = '将外部托管的内容URL升级到HTTPS';
$string['pluginname'] = 'HTTPS转换工具';
$string['privacy:metadata'] = 'HTTPS转换工具插件不存储任何个人数据。';
$string['replacing'] = '用HTTPS替换HTTP内容…';
$string['searching'] = '搜索 {$a}';
$string['takeabackupwarning'] = '警告：运行此工具后，更改将无法还原。建议您在继续操作之前进行站点备份，因为存在替换错误内容的小风险。';
$string['toolintro'] = '如果你打算把你的网站转换成HTTPS，你可以使用<a href="{$a}">HTTPS转换工具”</a>来将你的嵌入的内容转换成HTTPS。';
