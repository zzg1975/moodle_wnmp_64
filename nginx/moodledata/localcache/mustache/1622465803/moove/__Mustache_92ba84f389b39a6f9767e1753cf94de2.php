<?php

class __Mustache_92ba84f389b39a6f9767e1753cf94de2 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="mt-2 position-relative" data-region="random-question-preview-container">
';
        $buffer .= $indent . '    <div data-region="question-count-container"></div>
';
        $buffer .= $indent . '    <div data-region="question-list-container"></div>
';
        if ($partial = $this->mustache->loadPartial('core/overlay_loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
