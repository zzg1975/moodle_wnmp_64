<?php

class __Mustache_17a60a8fe48a55b6c727a8ec1b60e78f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'helpicon' section
        $value = $context->find('helpicon');
        $buffer .= $this->section24e84f6009cc54b84b541a6503464693($context, $indent, $value);
        if ($parent = $this->mustache->loadPartial('core/search_input')) {
            $buffer .= $parent->renderInternal($context, $indent);
        }

        return $buffer;
    }

    private function section24e84f6009cc54b84b541a6503464693(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{>core/help_icon}}
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
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
