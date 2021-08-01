<?php

class __Mustache_a41324a7153b1929b47491ea4f3fd658 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'component' section
        $value = $context->find('component');
        $buffer .= $this->sectionCa852c20f92c3ffc41c1d76fe0b23ef2($context, $indent, $value);
        // 'component' inverted section
        $value = $context->find('component');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            $value = $this->resolveValue($context->find('displayvalue'), $context);
            $buffer .= $value;
            $buffer .= '
';
        }
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section0222f8826fac9ea0fb68574e331c740e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<img src="{{iconurl}}" class="iconlarge activityicon" alt="{{{modtitle}}}" role="presentation">';
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
                
                $buffer .= '<img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="iconlarge activityicon" alt="';
                $value = $this->resolveValue($context->find('modtitle'), $context);
                $buffer .= $value;
                $buffer .= '" role="presentation">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d531aa4621891223a040b8c852eb9de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{displayvalue}}}';
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
                
                $value = $this->resolveValue($context->find('displayvalue'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c28554a771b40d6d3168250ab1accf8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/editstring,core,{{{edithint}}}';
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
                
                $buffer .= 't/editstring,core,';
                $value = $this->resolveValue($context->find('edithint'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19ced0314a2a4078bb71e10503959c12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'core/inplace_editable\']);
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
                
                $buffer .= $indent . '        require([\'core/inplace_editable\']);
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa852c20f92c3ffc41c1d76fe0b23ef2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="inplaceeditable inplaceeditable-{{type}}" data-inplaceeditable="1" data-component="{{component}}" data-itemtype="{{itemtype}}" data-itemid="{{itemid}}" data-value="{{value}}" data-editlabel="{{editlabel}}" data-type="{{type}}" data-options="{{options}}">
        {{#iconurl}}<img src="{{iconurl}}" class="iconlarge activityicon" alt="{{{modtitle}}}" role="presentation">{{/iconurl}}
        {{^linkeverything}}{{{displayvalue}}}{{/linkeverything}}
        <a href="#" class="quickeditlink" data-inplaceeditablelink="1" title="{{edithint}}">
            {{#linkeverything}}{{{displayvalue}}}{{/linkeverything}}
            <span class="quickediticon visibleifjs">{{#pix}}t/editstring,core,{{{edithint}}}{{/pix}}</span>
        </a>
</span>
    {{#js}}
        require([\'core/inplace_editable\']);
    {{/js}}
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
                
                $buffer .= $indent . '    <span class="inplaceeditable inplaceeditable-';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-inplaceeditable="1" data-component="';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-itemtype="';
                $value = $this->resolveValue($context->find('itemtype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-itemid="';
                $value = $this->resolveValue($context->find('itemid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-editlabel="';
                $value = $this->resolveValue($context->find('editlabel'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-type="';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-options="';
                $value = $this->resolveValue($context->find('options'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '        ';
                // 'iconurl' section
                $value = $context->find('iconurl');
                $buffer .= $this->section0222f8826fac9ea0fb68574e331c740e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        ';
                // 'linkeverything' inverted section
                $value = $context->find('linkeverything');
                if (empty($value)) {
                    
                    $value = $this->resolveValue($context->find('displayvalue'), $context);
                    $buffer .= $value;
                }
                $buffer .= '
';
                $buffer .= $indent . '        <a href="#" class="quickeditlink" data-inplaceeditablelink="1" title="';
                $value = $this->resolveValue($context->find('edithint'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                // 'linkeverything' section
                $value = $context->find('linkeverything');
                $buffer .= $this->section5d531aa4621891223a040b8c852eb9de($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            <span class="quickediticon visibleifjs">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section2c28554a771b40d6d3168250ab1accf8($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '</span>
';
                // 'js' section
                $value = $context->find('js');
                $buffer .= $this->section19ced0314a2a4078bb71e10503959c12($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
