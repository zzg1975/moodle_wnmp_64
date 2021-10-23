<?php

class __Mustache_1ff92e075206819b4113eaa53bb561ce extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<a href="#previous" data-action="previous-user">';
        $value = $this->resolveValue($context->find('larrow'), $context);
        $buffer .= $value;
        $buffer .= '</a>
';
        $buffer .= $indent . '    <span data-region="input-field">
';
        $buffer .= $indent . '        <select data-action="change-user" data-currentuserid="';
        $value = $this->resolveValue($context->find('currentuserid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-assignmentid="';
        $value = $this->resolveValue($context->find('assignmentid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-groupid="';
        $value = $this->resolveValue($context->find('groupid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"></select>
';
        $buffer .= $indent . '    </span>
';
        $buffer .= $indent . '<a href="#next" data-action="next-user">';
        $value = $this->resolveValue($context->find('rarrow'), $context);
        $buffer .= $value;
        $buffer .= '</a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<br>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<span data-region="user-count">
';
        $buffer .= $indent . '    <small>
';
        $buffer .= $indent . '        <span data-region="user-count-summary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0020318c935939c95fb0d36e79b8cb7c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </small>
';
        $buffer .= $indent . '</span>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div data-region="configure-filters" id="filter-configuration-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="card card-large p-2">
';
        $buffer .= $indent . '    <form>
';
        $buffer .= $indent . '        <span class="row px-3 py-1">
';
        $buffer .= $indent . '            <label class="text-right w-25 p-2 m-0" for="filter-general-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section11e2858d03ffd227f47f4f19b293f73e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </label>
';
        $buffer .= $indent . '            <select name="filter" class="custom-select w-50" id="filter-general-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'filters' section
        $value = $context->find('filters');
        $buffer .= $this->sectionB67615b88d9aaad175b567ed1a2a20aa($context, $indent, $value);
        $buffer .= $indent . '            </select>
';
        $buffer .= $indent . '        </span>
';
        // 'hasmarkingallocation' section
        $value = $context->find('hasmarkingallocation');
        $buffer .= $this->section51b2bd84ee90e277e2be6a7e7ddb373a($context, $indent, $value);
        // 'hasmarkingworkflow' section
        $value = $context->find('hasmarkingworkflow');
        $buffer .= $this->section32ae60e5708c1f2bd14debd330e9de1c($context, $indent, $value);
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<a href="#" data-region="user-filters" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBaf6094422528beb51f5cf06b766d123($context, $indent, $value);
        $buffer .= '" aria-expanded="false" aria-controls="filter-configuration-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <span class="accesshide">
';
        // 'filters' section
        $value = $context->find('filters');
        $buffer .= $this->section51c5bdfe04b6d9a48916d63c05fd8b3c($context, $indent, $value);
        // 'filters' inverted section
        $value = $context->find('filters');
        if (empty($value)) {
            
            $buffer .= $indent . '            ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section91121b875b722b6742bc4932aadc1793($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '    </span>
';
        $buffer .= $indent . '    ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionFaec89d37ccdced2a9ac2bb07df6e146($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</a>
';

        return $buffer;
    }

    private function section0020318c935939c95fb0d36e79b8cb7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'xofy, mod_assign, { "x": "{{index}}", "y": "{{count}}" }';
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
                
                $buffer .= 'xofy, mod_assign, { "x": "';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '", "y": "';
                $value = $this->resolveValue($context->find('count'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" }';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11e2858d03ffd227f47f4f19b293f73e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filter, mod_assign';
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
                
                $buffer .= 'filter, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC877874b20aed109ed5be9bdc0ef9c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected"';
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
                
                $buffer .= 'selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB67615b88d9aaad175b567ed1a2a20aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <option value="{{key}}" {{#active}}selected="selected"{{/active}} > {{name}} </option>
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
                
                $buffer .= $indent . '                <option value="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'active' section
                $value = $context->find('active');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= ' > ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' </option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6fe9c78e700902b90128736393bd53f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'markerfilter, mod_assign';
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
                
                $buffer .= 'markerfilter, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51b2bd84ee90e277e2be6a7e7ddb373a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="row px-3 py-1">
            <label class="text-right w-25 p-2 m-0" for="filter-marker-{{uniqid}}">
                {{#str}}markerfilter, mod_assign{{/str}}
            </label>
            <select name="markerfilter" class="custom-select w-50" id="filter-marker-{{uniqid}}">
            {{#markingallocationfilters}}
                <option value="{{key}}" {{#active}}selected="selected"{{/active}} > {{name}} </option>
            {{/markingallocationfilters}}
            </select>
        </span>
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
                
                $buffer .= $indent . '        <span class="row px-3 py-1">
';
                $buffer .= $indent . '            <label class="text-right w-25 p-2 m-0" for="filter-marker-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6fe9c78e700902b90128736393bd53f7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </label>
';
                $buffer .= $indent . '            <select name="markerfilter" class="custom-select w-50" id="filter-marker-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'markingallocationfilters' section
                $value = $context->find('markingallocationfilters');
                $buffer .= $this->sectionB67615b88d9aaad175b567ed1a2a20aa($context, $indent, $value);
                $buffer .= $indent . '            </select>
';
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d52b32a6141e2a0a08221846e69769c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'workflowfilter, mod_assign';
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
                
                $buffer .= 'workflowfilter, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32ae60e5708c1f2bd14debd330e9de1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="row px-3 py-1">
            <label class="text-right w-25 p-2 m-0" for="filter-workflow-{{uniqid}}">
                {{#str}}workflowfilter, mod_assign{{/str}}
            </label>
            <select name="workflowfilter" class="custom-select w-50" id="filter-workflow-{{uniqid}}">
            {{#markingworkflowfilters}}
                <option value="{{key}}" {{#active}}selected="selected"{{/active}} > {{name}} </option>
            {{/markingworkflowfilters}}
            </select>
        </span>
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
                
                $buffer .= $indent . '        <span class="row px-3 py-1">
';
                $buffer .= $indent . '            <label class="text-right w-25 p-2 m-0" for="filter-workflow-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0d52b32a6141e2a0a08221846e69769c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </label>
';
                $buffer .= $indent . '            <select name="workflowfilter" class="custom-select w-50" id="filter-workflow-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'markingworkflowfilters' section
                $value = $context->find('markingworkflowfilters');
                $buffer .= $this->sectionB67615b88d9aaad175b567ed1a2a20aa($context, $indent, $value);
                $buffer .= $indent . '            </select>
';
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBaf6094422528beb51f5cf06b766d123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'changefilters, mod_assign';
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
                
                $buffer .= 'changefilters, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51c5bdfe04b6d9a48916d63c05fd8b3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{filtername}}
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
                $value = $this->resolveValue($context->find('filtername'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91121b875b722b6742bc4932aadc1793(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nofilters, mod_assign';
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
                
                $buffer .= 'nofilters, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFaec89d37ccdced2a9ac2bb07df6e146(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/filter';
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
                
                $buffer .= 'i/filter';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
