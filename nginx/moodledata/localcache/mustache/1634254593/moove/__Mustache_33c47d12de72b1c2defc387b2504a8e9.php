<?php

class __Mustache_33c47d12de72b1c2defc387b2504a8e9 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '    <span class="badge badge-info rounded mb-1">';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    <span class="badge badge-info rounded mb-1">';
        $value = $this->resolveValue($context->find('datestring'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
