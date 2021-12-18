<?php

class __Mustache_7cfc6171865de02e94cfa705a96e9bad extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="hover-tooltip-container">
';
        $buffer .= $indent . '    ';
        $blockFunction = $context->findInBlock('anchor');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    <div class="hover-tooltip">
';
        $buffer .= $indent . '        ';
        $blockFunction = $context->findInBlock('tooltip');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        }
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
