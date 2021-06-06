<?php

class __Mustache_d111e6030d19d4290e12447f6fe91c9d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-selectgroups')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
