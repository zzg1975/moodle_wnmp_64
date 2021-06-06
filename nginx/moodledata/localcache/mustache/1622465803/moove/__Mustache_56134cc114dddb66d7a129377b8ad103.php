<?php

class __Mustache_56134cc114dddb66d7a129377b8ad103 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
';
        $buffer .= $indent . '    <div class="hidden" data-region="content-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_settings_body_content')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div data-region="placeholder-container">
';
        if ($partial = $this->mustache->loadPartial('core_message/message_drawer_view_settings_body_placeholder')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
