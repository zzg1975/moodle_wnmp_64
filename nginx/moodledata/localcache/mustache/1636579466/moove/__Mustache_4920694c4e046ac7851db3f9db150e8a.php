<?php

class __Mustache_4920694c4e046ac7851db3f9db150e8a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core/chooser')) {
            $buffer .= $partial->renderInternal($context);
        }
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section4a7d0e5429c9d83f46754fc787b3e5eb($context, $indent, $value);

        return $buffer;
    }

    private function section4a7d0e5429c9d83f46754fc787b3e5eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'core/yui\'
], function(Y) {
    Y.use(\'moodle-question-chooser\', function() {
        M.question.init_chooser();
    });
});
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'core/yui\'
';
                $buffer .= $indent . '], function(Y) {
';
                $buffer .= $indent . '    Y.use(\'moodle-question-chooser\', function() {
';
                $buffer .= $indent . '        M.question.init_chooser();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
