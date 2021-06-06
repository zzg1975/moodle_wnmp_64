@qtype @qtype_multichoiceset
Feature: Test creating a All-or-Nothing Multiple Choice question
  As a teacher
  In order to test my students
  I need to be able to create a All-or-Nothing Multiple Choice question

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email               |
      | teacher1 | T1        | Teacher1 | teacher1@moodle.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
    And I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration

  Scenario: Create a All-or-Nothing Multiple Choice question
    When I add a "All-or-Nothing Multiple Choice" question filling the form with:
      | Question name            | All-or-nothing-001                 |
      | Question text            | Find the capital cities in Europe. |
      | General feedback         | Paris and London                   |
      | Choice 1                 | Tokyo                              |
      | Choice 2                 | Spain                              |
      | Choice 3                 | London                             |
      | Choice 4                 | Barcelona                          |
      | Choice 5                 | Paris                              |
      | id_correctanswer_0       | 0                                  |
      | id_correctanswer_1       | 0                                  |
      | id_correctanswer_2       | 1                                  |
      | id_correctanswer_3       | 0                                  |
      | id_correctanswer_4       | 1                                  |
      | Hint 1                   | First hint                         |
      | Hint 2                   | Second hint                        |
    Then I should see "All-or-nothing-001"
