<?php

class __Mustache_731771c006a749a1065dacf94de1e131 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<select ';
        // 'allowmultiple' section
        $value = $context->find('allowmultiple');
        $buffer .= $this->sectionD6c4a65e3ee33426756af5fe9f354477($context, $indent, $value);
        $buffer .= ' ';
        $buffer .= 'data-field-name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= 'data-field-title="';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= 'data-allow-custom="';
        $value = $this->resolveValue($context->find('allowcustom'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= 'class="hidden" ';
        // 'filtertypeclass' section
        $value = $context->find('filtertypeclass');
        $buffer .= $this->section26268d4d7f55909db14f2dcb4714d60d($context, $indent, $value);
        $buffer .= '>
';
        // 'values' section
        $value = $context->find('values');
        $buffer .= $this->section0e389cfb5954ec34a1e86a0269a2b7c4($context, $indent, $value);
        $buffer .= $indent . '</select>
';

        return $buffer;
    }

    private function sectionD6c4a65e3ee33426756af5fe9f354477(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'multiple="multiple"';
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
                
                $buffer .= 'multiple="multiple"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section26268d4d7f55909db14f2dcb4714d60d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-filter-type-class="{{filtertypeclass}}" ';
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
                
                $buffer .= 'data-filter-type-class="';
                $value = $this->resolveValue($context->find('filtertypeclass'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e389cfb5954ec34a1e86a0269a2b7c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <option value="{{value}}">{{title}}</option>
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
                
                $buffer .= $indent . '        <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
