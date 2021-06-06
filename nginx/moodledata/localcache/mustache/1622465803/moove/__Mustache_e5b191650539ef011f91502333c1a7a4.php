<?php

class __Mustache_e5b191650539ef011f91502333c1a7a4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'prefix' section
        $value = $context->find('prefix');
        $buffer .= $this->section7e518caad6d2508f3d4ab9b7a186f310($context, $indent, $value);
        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= $value;
        $buffer .= '
';

        return $buffer;
    }

    private function section7e518caad6d2508f3d4ab9b7a186f310(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{prefix}}} ';
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
                
                $value = $this->resolveValue($context->find('prefix'), $context);
                $buffer .= $indent . $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
