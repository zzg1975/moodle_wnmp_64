<?php

class __Mustache_a73c9d720e0342eb56e4838ae55cd2c5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="core_user-participantsfilter-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="filter-group my-2 p-2 bg-light border-radius border" data-table-region="';
        $value = $this->resolveValue($context->find('tableregionid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-table-course-id="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-filterverb="2">
';
        $buffer .= $indent . '    <div data-filterregion="filtermatch" class="hidden">
';
        $buffer .= $indent . '        <label for="core_user-local-participantsfilter-jointype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="my-0" aria-hidden="true">
';
        $buffer .= $indent . '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD726d422e05b9ff019af1cc6e7917cae($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </label>
';
        $buffer .= $indent . '        <select class="custom-select" data-filterfield="join" id="core_user-local-participantsfilter-jointype-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3fcbd86d9e2b384d8ce82b4f5cc07707($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <option value="0">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3c3ca954d361e33d388cf608d356b919($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '            <option value="1">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section38c54db526fff004e0d5a32f5c4dc410($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '            <option value="2" selected>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section80d34145344e498ce4a9c8a1badc3408($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '        </select>
';
        $buffer .= $indent . '        <span aria-hidden="true">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE82cb915ce4929c89886aa7e7f40ca93($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div data-filterregion="filters">
';
        if ($partial = $this->mustache->loadPartial('core_user/local/participantsfilter/filterrow')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="d-flex" data-filterregion="actions">
';
        $buffer .= $indent . '        &nbsp;
';
        $buffer .= $indent . '        <button type="button" class="btn btn-link text-reset" data-filteraction="add">
';
        $buffer .= $indent . '            <i class="fa fa-plus"></i><span class="pl-3">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section135e05079eff780fdefafb6322529077($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button data-filteraction="reset" type="button" class="btn btn-secondary ml-auto mr-2">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionBd320814b1fd5e3ea7ddb2d11add48f7($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        <button data-filteraction="apply" type="button" class="btn btn-primary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section804d77bea705d171d3d4bc26a005882b($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('core_user/local/participantsfilter/filtertypes')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionC203174791c97c07f1b563cd24f867f7($context, $indent, $value);

        return $buffer;
    }

    private function sectionD726d422e05b9ff019af1cc6e7917cae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'match, core_user';
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
                
                $buffer .= 'match, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3fcbd86d9e2b384d8ce82b4f5cc07707(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filtersetmatchdescription, core_user';
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
                
                $buffer .= 'filtersetmatchdescription, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c3ca954d361e33d388cf608d356b919(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'none';
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
                
                $buffer .= 'none';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38c54db526fff004e0d5a32f5c4dc410(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'any';
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
                
                $buffer .= 'any';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80d34145344e498ce4a9c8a1badc3408(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'all';
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
                
                $buffer .= 'all';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE82cb915ce4929c89886aa7e7f40ca93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'matchofthefollowing, core_user';
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
                
                $buffer .= 'matchofthefollowing, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section135e05079eff780fdefafb6322529077(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addcondition, core_user';
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
                
                $buffer .= 'addcondition, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd320814b1fd5e3ea7ddb2d11add48f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clearfilters, core_user';
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
                
                $buffer .= 'clearfilters, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section804d77bea705d171d3d4bc26a005882b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'applyfilters, core_user';
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
                
                $buffer .= 'applyfilters, core_user';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC203174791c97c07f1b563cd24f867f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_user/participantsfilter\'], function(ParticipantsFilter) {
    ParticipantsFilter.init(\'core_user-participantsfilter-{{uniqid}}\');
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
                
                $buffer .= $indent . 'require([\'core_user/participantsfilter\'], function(ParticipantsFilter) {
';
                $buffer .= $indent . '    ParticipantsFilter.init(\'core_user-participantsfilter-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
