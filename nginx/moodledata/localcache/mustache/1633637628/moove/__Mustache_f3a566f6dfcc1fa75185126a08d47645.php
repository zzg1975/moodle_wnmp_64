<?php

class __Mustache_f3a566f6dfcc1fa75185126a08d47645 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="row progressbar_container">
';
        $buffer .= $indent . '    <div class="col-md-6 push-md-3">
';
        $buffer .= $indent . '        <p id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_status" class="text-xs-center"></p>
';
        $buffer .= $indent . '        <progress id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_bar" class="progress progress-striped progress-animated" value="0" max="100"></progress>
';
        $buffer .= $indent . '        <p id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_estimate" class="text-xs-center"></p>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script type="text/javascript">
';
        $buffer .= $indent . '(function() {
';
        $buffer .= $indent . '    var el = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '\'),
';
        $buffer .= $indent . '        progressBar = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_bar\'),
';
        $buffer .= $indent . '        statusIndicator = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_status\'),
';
        $buffer .= $indent . '        estimateIndicator = document.getElementById(\'';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '_estimate\');
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    el.addEventListener(\'update\', function(e) {
';
        $buffer .= $indent . '        var msg = e.detail.message,
';
        $buffer .= $indent . '            percent = e.detail.percent,
';
        $buffer .= $indent . '            estimate = e.detail.estimate;
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        statusIndicator.textContent = msg;
';
        $buffer .= $indent . '        progressBar.setAttribute(\'value\', Math.round(percent));
';
        $buffer .= $indent . '        if (percent === 100) {
';
        $buffer .= $indent . '            progressBar.classList.add(\'progress-success\');
';
        $buffer .= $indent . '            estimateIndicator.textContent = \'100%\';
';
        $buffer .= $indent . '        } else {
';
        $buffer .= $indent . '            if (estimate) {
';
        $buffer .= $indent . '                estimateIndicator.textContent = estimate + \' - \' + percent + \'%\';
';
        $buffer .= $indent . '            } else {
';
        $buffer .= $indent . '                estimateIndicator.textContent = \'\' + percent + \'%\';
';
        $buffer .= $indent . '            }
';
        $buffer .= $indent . '            progressBar.classList.remove(\'progress-success\');
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '})();
';
        $buffer .= $indent . '</script>
';

        return $buffer;
    }
}
