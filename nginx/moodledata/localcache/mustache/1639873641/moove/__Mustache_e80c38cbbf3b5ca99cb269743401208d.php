<?php

class __Mustache_e80c38cbbf3b5ca99cb269743401208d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '<textarea id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '[text]" class="form-control" rows="';
        $value = $this->resolveValue($context->find('rows'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" cols="';
        $value = $this->resolveValue($context->find('cols'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" spellcheck="true" ';
        // 'changelistener' section
        $value = $context->find('changelistener');
        $buffer .= $this->section6e4351019e9febf675107827fa7051c4($context, $indent, $value);
        $buffer .= '>';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</textarea>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div>
';
        // 'hasformats' section
        $value = $context->find('hasformats');
        $buffer .= $this->section7d907978e72275cf8292e945f0679b3c($context, $indent, $value);
        // 'hasformats' inverted section
        $value = $context->find('hasformats');
        if (empty($value)) {
            
            $buffer .= $indent . '        <input name="';
            $value = $this->resolveValue($context->find('name'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '[format]" id="menu';
            $value = $this->resolveValue($context->find('name'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= 'format" type="hidden" value="';
            $value = $this->resolveValue($context->find('format'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"/>
';
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section6e4351019e9febf675107827fa7051c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' onblur="{{onblur}}"
    onchange="{{onchange}}" ';
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
                
                $buffer .= ' onblur="';
                $value = $this->resolveValue($context->find('onblur'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '    onchange="';
                $value = $this->resolveValue($context->find('onchange'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
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
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82169a754a9a3db8f010819a4d49a73c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option value="{{value}}" {{#selected}}selected{{/selected}}>{{text}}</option>
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
                
                $buffer .= $indent . '            <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d907978e72275cf8292e945f0679b3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <select name="{{name}}[format]" id="menu{{name}}format" class="custom-select">
        {{#formats}}
            <option value="{{value}}" {{#selected}}selected{{/selected}}>{{text}}</option>
        {{/formats}}
        </select>
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
                
                $buffer .= $indent . '        <select name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '[format]" id="menu';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'format" class="custom-select">
';
                // 'formats' section
                $value = $context->find('formats');
                $buffer .= $this->section82169a754a9a3db8f010819a4d49a73c($context, $indent, $value);
                $buffer .= $indent . '        </select>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
