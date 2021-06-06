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
 * Strings for component 'mlbackend_php', language 'zh_cn', version '3.11'.
 *
 * @package     mlbackend_php
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errorcantloadmodel'] = '模型文件{$a}不存在。在使用该模型进行预测之前，该模型应该经过训练。';
$string['errorlowscore'] = '该评估模型的预测精度不是很高，因此一些预测可能不精确。模型得分={$a->score}，最低得分={$a->minscore}';
$string['errornotenoughdata'] = '没有足够的数据使用时间分割方法来评估这个模型。';
$string['errornotenoughdatadev'] = '评估结果差异太大。建议收集更多的数据以确保模型是有效的。评估结果标准偏差={$a->deviation}，最大推荐性标准偏差={$a->accepteddeviation}';
$string['errorphp7required'] = 'PHP机器学习后端需要PHP 7';
$string['pluginname'] = '机器学习PHP后端';
