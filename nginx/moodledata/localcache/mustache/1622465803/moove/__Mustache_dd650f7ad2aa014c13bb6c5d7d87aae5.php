<?php

class __Mustache_dd650f7ad2aa014c13bb6c5d7d87aae5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav>
';
        $buffer .= $indent . '    <ol class="breadcrumb">
';
        // 'get_items' section
        $value = $context->find('get_items');
        $buffer .= $this->section47da3de96be8d95edf653263a2daa4d9($context, $indent, $value);
        $buffer .= $indent . '    </ol>
';
        $buffer .= $indent . '</nav>
';

        return $buffer;
    }

    private function sectionD354c672815be9693153e2ed645cc2eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{get_title}}"';
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
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('get_title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59f5db9588e52d4def1b65e5de737a97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="breadcrumb-item"><a href="{{{action}}}" {{#get_title}}title="{{get_title}}"{{/get_title}}>{{{text}}}</a></li>
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
                
                $buffer .= $indent . '                <li class="breadcrumb-item"><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                // 'get_title' section
                $value = $context->find('get_title');
                $buffer .= $this->sectionD354c672815be9693153e2ed645cc2eb($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47da3de96be8d95edf653263a2daa4d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#has_action}}
                <li class="breadcrumb-item"><a href="{{{action}}}" {{#get_title}}title="{{get_title}}"{{/get_title}}>{{{text}}}</a></li>
            {{/has_action}}
            {{^has_action}}
                <li class="breadcrumb-item"><span class="no-link">{{{text}}}</span></li>
            {{/has_action}}
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
                
                // 'has_action' section
                $value = $context->find('has_action');
                $buffer .= $this->section59f5db9588e52d4def1b65e5de737a97($context, $indent, $value);
                // 'has_action' inverted section
                $value = $context->find('has_action');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="breadcrumb-item"><span class="no-link">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span></li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
