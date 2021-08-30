var that = this;
var result = {

    componentInit: function() {

        // This.question should be provided to us here.
        // This.question.html (string) is the main source of data, presumably prepared by the renderer.
        // There are also other useful objects with question like infoHtml which is used by the
        // page to display the question state, but with which we need do nothing.
        // This code just prepares bits of this.question.html storing it in the question object ready for
        // passing to the template (multichoiceset.html).
        // Note this is written in 'standard' javascript rather than ES6. Both work.

        if (!this.question) {
            return that.CoreQuestionHelperProvider.showComponentError(that.onAbort);
        }

        // Create a temporary div to ease extraction of parts of the provided html.
        var div = document.createElement('div');
        div.innerHTML = this.question.html;

        // Replace Moodle's correct/incorrect classes, feedback and icons with mobile versions.
        that.CoreQuestionHelperProvider.replaceCorrectnessClasses(div);
        that.CoreQuestionHelperProvider.replaceFeedbackClasses(div);

        // Get useful parts of the provided question html data.
        var questiontext = div.querySelector('.qtext');
        var prompt = div.querySelector('.prompt');
        var answeroptions = div.querySelector('.answer');

        // Add the useful parts back into the question object ready for rendering in the template.
        this.question.text = questiontext.innerHTML;
        // Without the question text there is no point in proceeding.
        if (typeof this.question.text === 'undefined') {
            return that.CoreQuestionHelperProvider.showComponentError(that.onAbort);
        }
        if (prompt !== null) {
            this.question.prompt = prompt.innerHTML;
        }

        var options = [];
        var divs = answeroptions.querySelectorAll('div[class^=r]'); // Only get the answer options divs (class="r0...").
        divs.forEach(function(d, i) {
            // Each answer option contains all the data for presentation, it just needs extracting.
            var checkbox = d.querySelector('input[type=checkbox]');
            var feedbackDiv = d.querySelector('div.core-question-feedback-container');
            var labelId = checkbox.getAttribute('aria-labelledby');
            var labelElement = labelId ? d.querySelector('#' + labelId.replace(/:/g, '\\:')) : undefined;
            if (!labelElement) {
                // Not found, use the format used in older Moodle versions.
                labelElement = d.querySelector('label');
            }

            var label = labelElement.innerHTML;
            var name = checkbox.getAttribute('name');
            var checked = (checkbox.getAttribute('checked') ? true : false);
            var disabled = (d.querySelector('input').getAttribute('disabled') === 'disabled' ? true : false);
            var feedback = (feedbackDiv ? feedbackDiv.innerHTML : '');
            var qclass = d.getAttribute('class') || '';
            var iscorrect = qclass.indexOf('core-question-answer-correct') >= 0 ? 1 :
                (qclass.indexOf('core-question-answer-incorrect') >= 0 ? 0 : undefined);
            options.push({text: label, name: name, checked: checked, disabled: disabled, feedback: feedback, qclass: qclass,
                iscorrect: iscorrect});
        });
        this.question.options = options;

        return true;
    }
};

// This next line is required as is (because of an eval step that puts this result object into the global scope).
result;