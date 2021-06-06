<?php

class __Mustache_2db836f4f937ffc86b6c83af543f34a9 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->find('fromname'), $context);
        $buffer .= $indent . $value;
        $buffer .= '
';

        return $buffer;
    }
}
