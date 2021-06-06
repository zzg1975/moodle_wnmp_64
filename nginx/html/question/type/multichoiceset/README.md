All or Nothing Question type
----------------------------

This is a multiple-choice, multiple-response question type that was created by
Adriane Boyd (adrianeboyd@gmail.com), later maintained by Jean-Michel Vedrine (vedrine@vedrine.net)
and is now maintained by Eoin Campbell.

This version can be used with Moodle 3.x versions.

The official git repository of this question type is now https://github.com/ecampbell/moodle-qtype_multichoiceset

### Description:

The all or nothing question is adapted from the existing multichoice question.
The main difference from the standard Moodle multiple choice question type is
in the way that grading works.
The teacher editing interface is slightly modified as when creating the question, the teacher just
indicates which choices are correct.

### Grading:

In an all-or-nothing multiple choice question, a respondent can choose one or more answers.
If the chosen answers correspond exactly to the correct choices defined in the question, the respondent gets 100%.
If he/she chooses any incorrect choices or does not select all of the correct choices, the grade is 0%.
Before using this questiontype, teachers must really think if this grading is what they want.

### Installation

#### Installation from the Moodle plugins Directory (preferred method)
This question type is available at https://moodle.org/plugins/view/qtype_multichoiceset
Install like any other plugin.

#### Installation Using Git

To install using git, type this command in the root of your Moodle install:

    git clone git://github.com/ecampbell/moodle-qtype_multichoiceset.git question/type/multichoiceset
    echo '/question/type/multichoiceset' >> .git/info/exclude

#### Installation From Downloaded zip file

Alternatively, download the zip from:
  https://github.com/ecampbell/moodle-qtype_multichoiceset/archive/master.zip

unzip it into the question/type folder, and then rename the new folder to multichoiceset.
