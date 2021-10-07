<?php

class __Mustache_413ae61803cfbb06ba7b6abccc19a1ce extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'settings' section
        $value = $context->find('settings');
        $buffer .= $this->section5fe57cdb74647ec5be265e8ff9863a6a($context, $indent, $value);

        return $buffer;
    }

    private function sectionE6c04fce2fea6762873e9c4a6436446c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' privacy, message ';
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
                
                $buffer .= ' privacy, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8066e0c6b8fb0c0ca2f106b49fc72a1f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' privacy_desc, message ';
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
                
                $buffer .= ' privacy_desc, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6259fc4cbb1fcf6ca3d9c71957a5159(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contactableprivacy, message ';
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
                
                $buffer .= ' contactableprivacy, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc27f92654a8e274b15772f87a029adb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="custom-control custom-radio mb-2">
                    <input
                        type="radio"
                        name="message_blocknoncontacts"
                        class="custom-control-input"
                        id="block-noncontacts-{{uniqid}}-{{value}}"
                        value="{{value}}"
                    >
                    <label class="custom-control-label ml-2" for="block-noncontacts-{{uniqid}}-{{value}}">
                        {{text}}
                    </label>
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
                
                $buffer .= $indent . '                <div class="custom-control custom-radio mb-2">
';
                $buffer .= $indent . '                    <input
';
                $buffer .= $indent . '                        type="radio"
';
                $buffer .= $indent . '                        name="message_blocknoncontacts"
';
                $buffer .= $indent . '                        class="custom-control-input"
';
                $buffer .= $indent . '                        id="block-noncontacts-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                    >
';
                $buffer .= $indent . '                    <label class="custom-control-label ml-2" for="block-noncontacts-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </label>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section536de0f92617de273ac3373d5c1904d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationpreferences, core_message ';
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
                
                $buffer .= ' notificationpreferences, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9cac6e41b8d2a2f3f442af8b75816dd0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' general, core ';
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
                
                $buffer .= ' general, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked';
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
                
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52fe934e9fc665fc68606e5d376063e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' useentertosend, core_message ';
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
                
                $buffer .= ' useentertosend, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fe57cdb74647ec5be265e8ff9863a6a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div data-region="settings" class="p-3">
    <h3 class="h6 font-weight-bold">{{#str}} privacy, message {{/str}}</h3>
    <p>{{#str}} privacy_desc, message {{/str}}</p>
    <div data-preference="blocknoncontacts" class="mb-3">
        <fieldset>
            <legend class="sr-only">{{#str}} contactableprivacy, message {{/str}}</legend>
            {{#privacy}}
                <div class="custom-control custom-radio mb-2">
                    <input
                        type="radio"
                        name="message_blocknoncontacts"
                        class="custom-control-input"
                        id="block-noncontacts-{{uniqid}}-{{value}}"
                        value="{{value}}"
                    >
                    <label class="custom-control-label ml-2" for="block-noncontacts-{{uniqid}}-{{value}}">
                        {{text}}
                    </label>
                </div>
            {{/privacy}}
        </fieldset>
    </div>

    <div class="hidden" data-region="notification-preference-container">
        <h3 class="mb-2 mt-4 h6 font-weight-bold">{{#str}} notificationpreferences, core_message {{/str}}</h3>
    </div>

    <h3 class="mb-2 mt-4 h6 font-weight-bold">{{#str}} general, core {{/str}}</h3>
    <div data-preference="entertosend">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="enter-to-send-{{uniqid}}" {{#entertosend}}checked{{/entertosend}}>
            <label class="custom-control-label" for="enter-to-send-{{uniqid}}">
                {{#str}} useentertosend, core_message {{/str}}
            </label>
        </div>
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
                
                $buffer .= $indent . '<div data-region="settings" class="p-3">
';
                $buffer .= $indent . '    <h3 class="h6 font-weight-bold">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE6c04fce2fea6762873e9c4a6436446c($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '    <p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8066e0c6b8fb0c0ca2f106b49fc72a1f($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '    <div data-preference="blocknoncontacts" class="mb-3">
';
                $buffer .= $indent . '        <fieldset>
';
                $buffer .= $indent . '            <legend class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF6259fc4cbb1fcf6ca3d9c71957a5159($context, $indent, $value);
                $buffer .= '</legend>
';
                // 'privacy' section
                $value = $context->find('privacy');
                $buffer .= $this->sectionAc27f92654a8e274b15772f87a029adb($context, $indent, $value);
                $buffer .= $indent . '        </fieldset>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="hidden" data-region="notification-preference-container">
';
                $buffer .= $indent . '        <h3 class="mb-2 mt-4 h6 font-weight-bold">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section536de0f92617de273ac3373d5c1904d0($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <h3 class="mb-2 mt-4 h6 font-weight-bold">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9cac6e41b8d2a2f3f442af8b75816dd0($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '    <div data-preference="entertosend">
';
                $buffer .= $indent . '        <div class="custom-control custom-switch">
';
                $buffer .= $indent . '            <input type="checkbox" class="custom-control-input" id="enter-to-send-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'entertosend' section
                $value = $context->find('entertosend');
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '            <label class="custom-control-label" for="enter-to-send-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section52fe934e9fc665fc68606e5d376063e6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </label>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
