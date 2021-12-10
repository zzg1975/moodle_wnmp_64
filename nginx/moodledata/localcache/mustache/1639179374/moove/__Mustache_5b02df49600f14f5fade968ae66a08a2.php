<?php

class __Mustache_5b02df49600f14f5fade968ae66a08a2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="d-flex p-2 align-items-center">
';
        $buffer .= $indent . '    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section90c3e2f09f9135ab908454d2e6d60d5b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <span class="ml-1" data-region="message-selected-court">1</span>
';
        $buffer .= $indent . '    <button type="button" class="ml-auto close" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9a2ea9d448b950c6ba5068f1d0ea6171($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        data-action="cancel-edit-mode">
';
        $buffer .= $indent . '            <span aria-hidden="true">&times;</span>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section90c3e2f09f9135ab908454d2e6d60d5b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' messagesselected:, core_message ';
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
                
                $buffer .= ' messagesselected:, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a2ea9d448b950c6ba5068f1d0ea6171(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cancelselection, core_message ';
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
                
                $buffer .= ' cancelselection, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
