<?php

class __Mustache_76737f411ff83651e965b26eebc5e500 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section17b793fe7b6be8852fb42faee20b26a2($context, $indent, $value);

        return $buffer;
    }

    private function section34d230fbb50114036014901b3c4d3ad1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ', {{{jsfunctionargs}}}';
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
                
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('jsfunctionargs'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63cdcc4042d402f56375f88923f80e84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            Y.on(\'{{event}}\', {{{jsfunction}}}, \'#{{id}}\', null{{#jsfunctionargs}}, {{{jsfunctionargs}}}{{/jsfunctionargs}});
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
                
                $buffer .= $indent . '            Y.on(\'';
                $value = $this->resolveValue($context->find('event'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', ';
                $value = $this->resolveValue($context->find('jsfunction'), $context);
                $buffer .= $value;
                $buffer .= ', \'#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\', null';
                // 'jsfunctionargs' section
                $value = $context->find('jsfunctionargs');
                $buffer .= $this->section34d230fbb50114036014901b3c4d3ad1($context, $indent, $value);
                $buffer .= ');
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17b793fe7b6be8852fb42faee20b26a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core/yui\'], function(Y) {
        {{#actions}}
            Y.on(\'{{event}}\', {{{jsfunction}}}, \'#{{id}}\', null{{#jsfunctionargs}}, {{{jsfunctionargs}}}{{/jsfunctionargs}});
        {{/actions}}
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
                
                $buffer .= $indent . '    require([\'core/yui\'], function(Y) {
';
                // 'actions' section
                $value = $context->find('actions');
                $buffer .= $this->section63cdcc4042d402f56375f88923f80e84($context, $indent, $value);
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
