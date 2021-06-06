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
 * Strings for component 'quizaccess_ipaddresslist', language 'zh_cn', version '3.11'.
 *
 * @package     quizaccess_ipaddresslist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubnet'] = '添加地址';
$string['allowedsubnets'] = '允许的地址';
$string['allowedsubnets_help'] = '测验被限制在指定的地址(根据用户的IP地址)访问。允许的地址列表和相应的IP子网由管理员设定。选择一个不在此列表中的。';
$string['editsubnet'] = '编辑地址';
$string['managesubnets'] = '地址管理';
$string['pluginname'] = '使用IP地址列表的测验访问规则';
$string['subnet'] = 'IP子网';
$string['subnet_help'] = '<p>指定逗号分隔的部分或全部的IP地址列表</p>
<p>例如:</p>
<ul>
<li>192.168.10.1</li>
<li>192.168.</li>
<li>231.54.211.0/20</li>
<li>231.3.56.10-20</li>
<li>192.168.10.1,192.168.,231.54.211.0/20,231.3.56.10-20</li>
</ul>';
$string['subnetwrong'] = '这个测验只能从指定的地址访问，你的电脑没有在允许的列表中。';
