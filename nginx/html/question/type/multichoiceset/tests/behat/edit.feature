@qtype @qtype_multichoiceset
Feature: Test editing a All-or-Nothing Multiple Choice question
  As a teacher
  In order to be able to update my All-or-Nothing Multiple Choice question
  I need to edit them

  Background:
    Given the following "users" exist:
      | username | firstname | lastname | email                |
      | teacher1 | T1        | Teacher1 | teacher1@example.com |
    And the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1        | 0        |
    And the following "course enrolments" exist:
      | user     | course | role           |
      | teacher1 | C1     | editingteacher |
    And the following "question categories" exist:
      | contextlevel | reference | name           |
      | Course       | C1        | Test questions |
    And the following "questions" exist:
      | questioncategory | qtype          | name                        | template    |
      | Test questions   | multichoiceset | All-or-nothing for editing  | two_of_four |
    And I log in as "teacher1"
    And I am on "Course 1" course homepage
    And I navigate to "Question bank" in current page administration

  Scenario: Edit a All-or-Nothing Multiple Choice question
    When I click on "Edit" "link" in the "All-or-nothing for editing" "table_row"
    And I follow "Edit question"
    And I set the following fields to these values:
      | Question name | |
    And I press "id_submitbutton"
    Then I should see "You must supply a value here."
    When I set the following fields to these values:
      | Question name | Edited All-or-nothing name |
    And I press "id_submitbutton"
    Then I should see "Edited All-or-nothing name"
