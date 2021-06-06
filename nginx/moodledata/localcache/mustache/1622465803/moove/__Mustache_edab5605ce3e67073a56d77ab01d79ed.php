<?php

class __Mustache_edab5605ce3e67073a56d77ab01d79ed extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="quiz-timer-wrapper" class="mb-2">
';
        $buffer .= $indent . '    <div id="quiz-timer" class="quiz-timer-inner py-1 px-2 ml-auto" role="timer" aria-atomic="true" aria-relevant="text">
';
        $buffer .= $indent . '        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section605c3530ffa8db559e48f5f4f7f5cb5f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <span id="quiz-time-left"></span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section605c3530ffa8db559e48f5f4f7f5cb5f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timeleft, quiz ';
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
                
                $buffer .= ' timeleft, quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
