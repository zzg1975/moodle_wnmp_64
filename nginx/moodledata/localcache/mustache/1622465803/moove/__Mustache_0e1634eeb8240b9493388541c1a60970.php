<?php

class __Mustache_0e1634eeb8240b9493388541c1a60970 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'block5e0c33dc785476d34cc89e0b6b1c7de6'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
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

    private function sectionD426c20329eabf0d2c83c3c218add982(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <optgroup label="{{text}}">
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
                
                $buffer .= $indent . '            <optgroup label="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
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

    private function sectionFf098a2f001a50efdd2fce0084b647ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option value="{{value}}" {{#selected}}selected{{/selected}} {{#disabled}}disabled{{/disabled}} {{{optionattributes}}}>{{{text}}}</option>
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
                $buffer .= ' ';
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

    private function sectionCd770c8e6fe0aba5825150db7d9d2103(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#text}}
            <optgroup label="{{text}}">
            {{/text}}
            {{#options}}
            <option value="{{value}}" {{#selected}}selected{{/selected}} {{#disabled}}disabled{{/disabled}} {{{optionattributes}}}>{{{text}}}</option>
            {{/options}}
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
                
                // 'text' section
                $value = $context->find('text');
                $buffer .= $this->sectionD426c20329eabf0d2c83c3c218add982($context, $indent, $value);
                // 'options' section
                $value = $context->find('options');
                $buffer .= $this->sectionFf098a2f001a50efdd2fce0084b647ea($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd5d48cc90540867adfcc07c8092f6db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            </optgroup>
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
                
                $buffer .= $indent . '            </optgroup>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE7b0419295591cd4a997af0baedd7083(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{text}}}';
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
                
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE52aced5f6df2756b9ef068f4e01a2c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#selected}}{{{text}}}{{/selected}}
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
                
                $buffer .= $indent . '            ';
                // 'selected' section
                $value = $context->find('selected');
                $buffer .= $this->sectionE7b0419295591cd4a997af0baedd7083($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5384af3de16cd87d495dd2b42b8b0289(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#options}}
            {{#selected}}{{{text}}}{{/selected}}
        {{/options}}
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
                
                // 'options' section
                $value = $context->find('options');
                $buffer .= $this->sectionE52aced5f6df2756b9ef068f4e01a2c0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a8a4c0967c3e79bfa12cb45fe10128e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#element.optiongroups}}
        {{#options}}
            {{#selected}}{{{text}}}{{/selected}}
        {{/options}}
        {{/element.optiongroups}}
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
                
                // 'element.optiongroups' section
                $value = $context->findDot('element.optiongroups');
                $buffer .= $this->section5384af3de16cd87d495dd2b42b8b0289($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block5e0c33dc785476d34cc89e0b6b1c7de6($context)
    {
        $indent = $buffer = '';
        // 'element.frozen' inverted section
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            $buffer .= $indent . '        <select class="form-control custom-select ';
            // 'error' section
            $value = $context->find('error');
            $buffer .= $this->sectionCc48dcea9d2838da4d0362b228628420($context, $indent, $value);
            $buffer .= '" name="';
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
            // 'element.optiongroups' section
            $value = $context->findDot('element.optiongroups');
            $buffer .= $this->sectionCd770c8e6fe0aba5825150db7d9d2103($context, $indent, $value);
            // 'text' section
            $value = $context->find('text');
            $buffer .= $this->sectionDd5d48cc90540867adfcc07c8092f6db($context, $indent, $value);
            $buffer .= $indent . '        </select>
';
        }
        // 'element.frozen' section
        $value = $context->findDot('element.frozen');
        $buffer .= $this->section9a8a4c0967c3e79bfa12cb45fe10128e($context, $indent, $value);
    
        return $buffer;
    }
}
