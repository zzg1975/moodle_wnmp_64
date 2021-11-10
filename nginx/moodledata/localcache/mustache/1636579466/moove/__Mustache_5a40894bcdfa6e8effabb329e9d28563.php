<?php

class __Mustache_5a40894bcdfa6e8effabb329e9d28563 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core_form/element-text')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }
}
