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
 * Strings for component 'fileconverter_googledrive', language 'zh_cn', version '3.11'.
 *
 * @package     fileconverter_googledrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['disabled'] = '无效';
$string['issuer'] = 'OAuth 2 服务';
$string['issuer_help'] = '用于访问Google Drive的OAuth 2服务。';
$string['pluginname'] = 'Google Drive';
$string['privacy:metadata:fileconverter_googledrive:externalpurpose'] = '此信息发送到Google Drive API，以便将文件转换为其他格式。该文件暂时保存在Google Drive上，并在转换完成后删除。';
$string['privacy:metadata:fileconverter_googledrive:filecontent'] = '文件的内容。';
$string['privacy:metadata:fileconverter_googledrive:filemimetype'] = '文件的MIME类型。';
$string['privacy:metadata:fileconverter_googledrive:params'] = '传递给Google Drive API的查询参数。';
$string['test_conversion'] = '测试文档转换';
$string['test_conversionnotready'] = '此文档转换器配置不正确。';
$string['test_conversionready'] = '此文档转换器配置正确。';
$string['test_converter'] = '测试此转换器是否正常工作。';
$string['test_issuerinvalid'] = '文档转换器设置中的OAuth服务设置为无效值。';
$string['test_issuernotconnected'] = '文档转换器设置中设置的OAuth服务未连接系统帐户。';
$string['test_issuernotenabled'] = '文档转换器设置中设置的OAuth服务未启用。';
$string['test_issuernotset'] = '需要在文档转换器设置中设置OAuth服务。';
