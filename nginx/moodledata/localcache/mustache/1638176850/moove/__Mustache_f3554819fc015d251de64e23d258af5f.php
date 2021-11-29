<?php

class __Mustache_f3554819fc015d251de64e23d258af5f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'block5bae67694b90be293ad1fa0b805b5e64'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }


    public function block5bae67694b90be293ad1fa0b805b5e64($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('element.html'), $context);
        $buffer .= $value;
        $buffer .= '
';
    
        return $buffer;
    }
}
