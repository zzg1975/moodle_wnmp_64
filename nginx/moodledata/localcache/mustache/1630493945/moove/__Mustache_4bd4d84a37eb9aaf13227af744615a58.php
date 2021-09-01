<?php

class __Mustache_4bd4d84a37eb9aaf13227af744615a58 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="form-item row" style="margin-bottom: 2em;">
';
        $buffer .= $indent . '    <div class="form-label col-sm-3 text-sm-right"></div>
';
        $buffer .= $indent . '    <div class="form-setting col-sm-9">
';
        // 'name' inverted section
        $value = $context->find('name');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section508df505f0fb02c9041c447e6451e102($context, $indent, $value);
            $buffer .= '
';
        }
        // 'name' section
        $value = $context->find('name');
        $buffer .= $this->section8db113f17c4121a2b3ec3ec49a1a9a01($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section508df505f0fb02c9041c447e6451e102(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contenthub:register, mod_hvp, {{ registrationurl }} ';
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
                
                $buffer .= ' contenthub:register, mod_hvp, ';
                $value = $this->resolveValue($context->find('registrationurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCbecc45fc479adcbf211e4e4b955f018(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{contactPerson}}</div>
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
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->find('contactPerson'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55c4e3c562a5cfa0531df36fdc74f179(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{email}}</div>
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
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->find('email'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5aeb578f1116d6f3884744dcc9d26e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{country}}</div>
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
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->find('country'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8fb26b32defe828a24b0925598f5f99b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{phone}}</div>
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
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->find('phone'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1431d6c402a06630224d840ba2942045(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contenthub:changesettings, mod_hvp, {{ registrationurl }} ';
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
                
                $buffer .= ' contenthub:changesettings, mod_hvp, ';
                $value = $this->resolveValue($context->find('registrationurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8db113f17c4121a2b3ec3ec49a1a9a01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div>
                <img src="{{logo}}" style="max-width: 5em; display: inline-block; vertical-align: top;" />
                <div style="display: inline-block">
                    <div>{{name}}</div>
                    {{#contactPerson}}
                        <div>{{contactPerson}}</div>
                    {{/contactPerson}}
                    {{#email}}
                        <div>{{email}}</div>
                    {{/email}}
                    <div>
                        {{address}} {{zip}} {{city}}
                    </div>
                    {{#country}}
                        <div>{{country}}</div>
                    {{/country}}
                    {{#phone}}
                        <div>{{phone}}</div>
                    {{/phone}}
                </div>
                <div style="margin-top: 1em">
                    {{# str}} contenthub:changesettings, mod_hvp, {{ registrationurl }} {{/str}}
                </div>
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
                
                $buffer .= $indent . '            <div>
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('logo'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" style="max-width: 5em; display: inline-block; vertical-align: top;" />
';
                $buffer .= $indent . '                <div style="display: inline-block">
';
                $buffer .= $indent . '                    <div>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                // 'contactPerson' section
                $value = $context->find('contactPerson');
                $buffer .= $this->sectionCbecc45fc479adcbf211e4e4b955f018($context, $indent, $value);
                // 'email' section
                $value = $context->find('email');
                $buffer .= $this->section55c4e3c562a5cfa0531df36fdc74f179($context, $indent, $value);
                $buffer .= $indent . '                    <div>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('address'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('zip'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('city'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                // 'country' section
                $value = $context->find('country');
                $buffer .= $this->sectionA5aeb578f1116d6f3884744dcc9d26e9($context, $indent, $value);
                // 'phone' section
                $value = $context->find('phone');
                $buffer .= $this->section8fb26b32defe828a24b0925598f5f99b($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div style="margin-top: 1em">
';
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section1431d6c402a06630224d840ba2942045($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
