<?php

class __Mustache_157ed2a47aaed53b355a70afb59ee1c5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="hidden" data-filterregion="filtertypedata">
';
        // 'filtertypes' section
        $value = $context->find('filtertypes');
        $buffer .= $this->sectionEc304ee008ae2394f80e74d0d009426b($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="hidden">
';
        $buffer .= $indent . '    <select disabled="disabled" data-filterfield="type" data-filterregion="filtertypelist">
';
        $buffer .= $indent . '        <option value="">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB35c829631908d0e4566cff258649931($context, $indent, $value);
        $buffer .= '</option>
';
        // 'filtertypes' section
        $value = $context->find('filtertypes');
        $buffer .= $this->section91eb73788b1536c87967f6cd275b91be($context, $indent, $value);
        $buffer .= $indent . '    </select>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionEc304ee008ae2394f80e74d0d009426b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core_user/local/participantsfilter/filtertype}}
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
                
                if ($partial = $this->mustache->loadPartial('core_user/local/participantsfilter/filtertype')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB35c829631908d0e4566cff258649931(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selectfiltertype, core_user';
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
                
                $buffer .= 'selectfiltertype, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91eb73788b1536c87967f6cd275b91be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <option value="{{name}}">{{title}}</option>
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
                $value = $this->resolveValue($context->find('name'), $context);
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
