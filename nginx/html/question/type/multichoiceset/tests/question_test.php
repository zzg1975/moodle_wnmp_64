<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Unit tests for the multiple choice question definition classes.
 *
 * @package    qtype_multichoiceset
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/question/engine/tests/helpers.php');
require_once($CFG->dirroot . '/question/type/multichoiceset/tests/helper.php');


/**
 * Unit tests for the multiple choice all or nothing question definition class.
 *
 * @copyright  2009 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_multichoiceset_question_test extends advanced_testcase {
    /**
     * Get a test question.
     *
     * @param stdObject $which
     * @return qtype_multichoiceset_question the requested question object.
     */
    protected function get_test_multichoiceset_question($which = null) {
        return test_question_maker::make_question('multichoiceset', $which);
    }

    public function test_get_expected_data() {
        $question = $this->get_test_multichoiceset_question('two_of_four');
        $question->start_attempt(new question_attempt_step(), 1);

        $this->assertEquals(array('choice0' => PARAM_BOOL, 'choice1' => PARAM_BOOL,
                'choice2' => PARAM_BOOL, 'choice3' => PARAM_BOOL), $question->get_expected_data());
    }

    public function test_is_complete_response() {
        $question = $this->get_test_multichoiceset_question('two_of_four');
        $question->start_attempt(new question_attempt_step(), 1);

        $this->assertFalse($question->is_complete_response(array()));
        $this->assertFalse($question->is_complete_response(
                array('choice0' => '0', 'choice1' => '0', 'choice2' => '0', 'choice3' => '0')));
        $this->assertTrue($question->is_complete_response(array('choice1' => '1')));
        $this->assertTrue($question->is_complete_response(
                array('choice0' => '1', 'choice1' => '1', 'choice2' => '1', 'choice3' => '1')));
    }

    public function test_is_gradable_response() {
        $question = $this->get_test_multichoiceset_question('two_of_four');
        $question->start_attempt(new question_attempt_step(), 1);

        $this->assertFalse($question->is_gradable_response(array()));
        $this->assertFalse($question->is_gradable_response(
                array('choice0' => '0', 'choice1' => '0', 'choice2' => '0', 'choice3' => '0')));
        $this->assertTrue($question->is_gradable_response(array('choice1' => '1')));
        $this->assertTrue($question->is_gradable_response(
                array('choice0' => '1', 'choice1' => '1', 'choice2' => '1', 'choice3' => '1')));
    }

    public function test_grading() {
        $question = $this->get_test_multichoiceset_question('two_of_four');
        $question->shuffleanswers = false;
        $question->start_attempt(new question_attempt_step(), 1);

        $this->assertEquals(array(1, question_state::$gradedright),
                $question->grade_response(array('choice0' => '1', 'choice2' => '1')));
        $this->assertEquals(array(0, question_state::$gradedwrong),
                $question->grade_response(array('choice0' => '1')));
        $this->assertEquals(array(0, question_state::$gradedwrong),
                $question->grade_response(
                        array('choice0' => '1', 'choice1' => '1', 'choice2' => '1')));
        $this->assertEquals(array(0, question_state::$gradedwrong),
                $question->grade_response(array('choice1' => '1')));
    }

    public function test_get_correct_response() {
        $question = $this->get_test_multichoiceset_question('two_of_four');
        $question->shuffleanswers = false;
        $question->start_attempt(new question_attempt_step(), 1);

        $this->assertEquals(array('choice0' => '1', 'choice2' => '1'),
                $question->get_correct_response());
    }

    public function test_get_question_summary() {
        $mc = $this->get_test_multichoiceset_question('two_of_four');
        $mc->start_attempt(new question_attempt_step(), 1);

        $qsummary = $mc->get_question_summary();

        $this->assertRegExp('/' . preg_quote($mc->questiontext) . '/', $qsummary);
        foreach ($mc->answers as $answer) {
            $this->assertRegExp('/' . preg_quote($answer->answer) . '/', $qsummary);
        }
    }

    public function test_summarise_response() {
        $mc = $this->get_test_multichoiceset_question('two_of_four');
        $mc->shuffleanswers = false;
        $mc->start_attempt(new question_attempt_step(), 1);

        $summary = $mc->summarise_response(array('choice1' => 1, 'choice2' => 1),
                test_question_maker::get_a_qa($mc));

        $this->assertEquals('Two; Three', $summary);
    }

    public function test_classify_response() {
        $mc = $this->get_test_multichoiceset_question('two_of_four');
        $mc->shuffleanswers = false;
        $mc->start_attempt(new question_attempt_step(), 1);

        $this->assertEquals(array(
                    13 => new question_classified_response(13, 'One', 1.0),
                    14 => new question_classified_response(14, 'Two', 0.0),
                ), $mc->classify_response(array('choice0' => 1, 'choice1' => 1)));

        $this->assertEquals(array(), $mc->classify_response(array()));
    }
}
