<?php

class __Mustache_15f72270c524f27ae67eee83c39116b2 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="text-center pt-3 icon-size-4">';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</div>
';

        return $buffer;
    }
}
