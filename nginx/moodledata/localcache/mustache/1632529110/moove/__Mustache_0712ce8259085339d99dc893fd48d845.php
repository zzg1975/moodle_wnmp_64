<?php

class __Mustache_0712ce8259085339d99dc893fd48d845 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'blockC95ce70a052d006fdd055ae77a1257ad'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section59e829c12d13840fde249884ab54916d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <input type="hidden" name="{{element.nameraw}}" value="_qf__force_multiselect_submission">
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
                
                $buffer .= $indent . '            <input type="hidden" name="';
                $value = $this->resolveValue($context->findDot('element.nameraw'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" value="_qf__force_multiselect_submission">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4a4b7466157c81149be268515bda37c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'form-control';
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
                
                $buffer .= 'form-control';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc48dcea9d2838da4d0362b228628420(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'is-invalid';
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
                
                $buffer .= 'is-invalid';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section68b77dad2509079f30f242612e844ca4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'multiple';
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
                
                $buffer .= 'multiple';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9dd7416047d075236f0b76dd19c23540(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'size="{{element.size}}"';
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
                
                $buffer .= 'size="';
                $value = $this->resolveValue($context->findDot('element.size'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB837007b49426fd84d7b0ff91d1ffd2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                autofocus aria-describedby="{{element.iderror}}"
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
                
                $buffer .= $indent . '                autofocus aria-describedby="';
                $value = $this->resolveValue($context->findDot('element.iderror'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
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

    private function sectionC87198b06c7ce18b3aeed72afb34afb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled';
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
                
                $buffer .= 'disabled';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64258c92b05bf1d42baf77b6a8fad18f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option value="{{value}}" {{#selected}}selected{{/selected}} {{#disabled}}disabled{{/disabled}}
                {{{optionattributes}}}>{{{text}}}</option>
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
                $buffer .= ' ';
                // 'disabled' section
                $value = $context->find('disabled');
                $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('optionattributes'), $context);
                $buffer .= $value;
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a8744d33f40a52a82fb57457d7ab8d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{text}}}
                    {{^element.hardfrozen}}
                        <input type="hidden" name="{{element.name}}" value="{{value}}" id="{{element.id}}">
                    {{/element.hardfrozen}}
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
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '
';
                // 'element.hardfrozen' inverted section
                $value = $context->findDot('element.hardfrozen');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <input type="hidden" name="';
                    $value = $this->resolveValue($context->findDot('element.name'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" value="';
                    $value = $this->resolveValue($context->find('value'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" id="';
                    $value = $this->resolveValue($context->findDot('element.id'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ce61216d9a30c769b439099ef77387a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#selected}}
                    {{{text}}}
                    {{^element.hardfrozen}}
                        <input type="hidden" name="{{element.name}}" value="{{value}}" id="{{element.id}}">
                    {{/element.hardfrozen}}
                {{/selected}}
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
                
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->section4a8744d33f40a52a82fb57457d7ab8d9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9818bd21073ba0d36475f3552ad56945(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#element.options}}
                {{#selected}}
                    {{{text}}}
                    {{^element.hardfrozen}}
                        <input type="hidden" name="{{element.name}}" value="{{value}}" id="{{element.id}}">
                    {{/element.hardfrozen}}
                {{/selected}}
            {{/element.options}}
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
                
                // 'element.options' section
                $value = $context->findDot('element.options');
                $buffer .= $this->section7ce61216d9a30c769b439099ef77387a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockC95ce70a052d006fdd055ae77a1257ad($context)
    {
        $indent = $buffer = '';
        // 'element.frozen' inverted section
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            // 'element.multiple' section
            $value = $context->findDot('element.multiple');
            $buffer .= $this->section59e829c12d13840fde249884ab54916d($context, $indent, $value);
            $buffer .= $indent . '        <select class="';
            // 'element.multiple' inverted section
            $value = $context->findDot('element.multiple');
            if (empty($value)) {
                
                $buffer .= 'custom-select';
            }
            $buffer .= '
';
            $buffer .= $indent . '                       ';
            // 'element.multiple' section
            $value = $context->findDot('element.multiple');
            $buffer .= $this->sectionB4a4b7466157c81149be268515bda37c($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                       ';
            // 'error' section
            $value = $context->find('error');
            $buffer .= $this->sectionCc48dcea9d2838da4d0362b228628420($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '            name="';
            $value = $this->resolveValue($context->findDot('element.name'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '            id="';
            $value = $this->resolveValue($context->findDot('element.id'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '            ';
            // 'element.multiple' section
            $value = $context->findDot('element.multiple');
            $buffer .= $this->section68b77dad2509079f30f242612e844ca4($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            ';
            // 'element.size' section
            $value = $context->findDot('element.size');
            $buffer .= $this->section9dd7416047d075236f0b76dd19c23540($context, $indent, $value);
            $buffer .= '
';
            // 'error' section
            $value = $context->find('error');
            $buffer .= $this->sectionB837007b49426fd84d7b0ff91d1ffd2b($context, $indent, $value);
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->findDot('element.attributes'), $context);
            $buffer .= $value;
            $buffer .= ' >
';
            // 'element.options' section
            $value = $context->findDot('element.options');
            $buffer .= $this->section64258c92b05bf1d42baf77b6a8fad18f($context, $indent, $value);
            $buffer .= $indent . '        </select>
';
        }
        // 'element.frozen' section
        $value = $context->findDot('element.frozen');
        $buffer .= $this->section9818bd21073ba0d36475f3552ad56945($context, $indent, $value);
    
        return $buffer;
    }
}
