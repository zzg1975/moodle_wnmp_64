<?php

class __Mustache_7124868532629ab34a5df128156d26dd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'overview.messageurl' section
        $value = $context->findDot('overview.messageurl');
        $buffer .= $this->sectionB277f671d6fd9fcae02f25075c91035b($context, $indent, $value);

        return $buffer;
    }

    private function sectionA66c69093db49656d03b61ec97795dc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' seeall, core_message ';
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
                
                $buffer .= ' seeall, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB277f671d6fd9fcae02f25075c91035b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div data-region="view-overview" class="text-center">
        <a href="{{overview.messageurl}}">
            {{#str}} seeall, core_message {{/str}}
        </a>
    </div>
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
                
                $buffer .= $indent . '    <div data-region="view-overview" class="text-center">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->findDot('overview.messageurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA66c69093db49656d03b61ec97795dc2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
