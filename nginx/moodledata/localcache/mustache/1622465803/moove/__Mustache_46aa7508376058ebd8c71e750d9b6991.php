<?php

class __Mustache_46aa7508376058ebd8c71e750d9b6991 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'istrackeduser' section
        $value = $context->find('istrackeduser');
        $buffer .= $this->section7ca16026d194a568663299467e224f1b($context, $indent, $value);
        // 'istrackeduser' inverted section
        $value = $context->find('istrackeduser');
        if (empty($value)) {
            
            $buffer .= $indent . '    <button class="btn btn-outline-secondary" disabled>
';
            $buffer .= $indent . '        ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->section448e18140949629a4c17dbabe7973cbe($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '    </button>
';
        }
        $buffer .= $indent . '
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section69a568a86edbde42a3787f5075bc56a6($context, $indent, $value);

        return $buffer;
    }

    private function section9585d79f2064844c36246dac1d81a2a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}';
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
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $buffer .= 'aria-label="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1415cb41a4d751af24109d3b9d9f3694(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_manual:aria:done, course, {{activityname}} ';
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
                
                $buffer .= 'completion_manual:aria:done, course, ';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD996515ef1e1973f114653f57c3beaa6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completion_manual:done, core_course ';
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
                
                $buffer .= ' completion_manual:done, core_course ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3362f2dca86a977a5cba02873ce22832(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <button class="btn btn-outline-success" data-action="toggle-manual-completion" data-toggletype="manual:undo" data-cmid="{{cmid}}" data-activityname="{{activityname}}" data-withavailability="{{withavailability}}" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}{{!
        }}{{^accessibledescription}}{{!
            }}title="{{#str}}completion_manual:aria:done, course, {{activityname}} {{/str}}" {{!
            }}aria-label="{{#str}}completion_manual:aria:done, course, {{activityname}} {{/str}}" {{!
        }}{{/accessibledescription}}>
            <i class="fa fa-check" aria-hidden="true"></i> {{#str}} completion_manual:done, core_course {{/str}}
        </button>
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
                
                $buffer .= $indent . '        <button class="btn btn-outline-success" data-action="toggle-manual-completion" data-toggletype="manual:undo" data-cmid="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-activityname="';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-withavailability="';
                $value = $this->resolveValue($context->find('withavailability'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'accessibledescription' section
                $value = $context->find('accessibledescription');
                $buffer .= $this->section9585d79f2064844c36246dac1d81a2a2($context, $indent, $value);
                // 'accessibledescription' inverted section
                $value = $context->find('accessibledescription');
                if (empty($value)) {
                    
                    $buffer .= 'title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section1415cb41a4d751af24109d3b9d9f3694($context, $indent, $value);
                    $buffer .= '" ';
                    $buffer .= 'aria-label="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section1415cb41a4d751af24109d3b9d9f3694($context, $indent, $value);
                    $buffer .= '" ';
                }
                $buffer .= '>
';
                $buffer .= $indent . '            <i class="fa fa-check" aria-hidden="true"></i> ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD996515ef1e1973f114653f57c3beaa6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e716ec6364ba26d1c17de9b2a71fdf0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_manual:aria:markdone, course, {{activityname}} ';
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
                
                $buffer .= 'completion_manual:aria:markdone, course, ';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section448e18140949629a4c17dbabe7973cbe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completion_manual:markdone, core_course ';
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
                
                $buffer .= ' completion_manual:markdone, core_course ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8d81ce46680c43b1b484414f30b0b7e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <button class="btn btn-outline-secondary" data-action="toggle-manual-completion" data-toggletype="manual:mark-done" data-cmid="{{cmid}}" data-activityname="{{activityname}}" data-withavailability="{{withavailability}}" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}{{!
        }}{{^accessibledescription}}{{!
            }}title="{{#str}}completion_manual:aria:markdone, course, {{activityname}} {{/str}}" {{!
            }}aria-label="{{#str}}completion_manual:aria:markdone, course, {{activityname}} {{/str}}" {{!
        }}{{/accessibledescription}}>
            {{#str}} completion_manual:markdone, core_course {{/str}}
        </button>
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
                
                $buffer .= $indent . '        <button class="btn btn-outline-secondary" data-action="toggle-manual-completion" data-toggletype="manual:mark-done" data-cmid="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-activityname="';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-withavailability="';
                $value = $this->resolveValue($context->find('withavailability'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" ';
                // 'accessibledescription' section
                $value = $context->find('accessibledescription');
                $buffer .= $this->section9585d79f2064844c36246dac1d81a2a2($context, $indent, $value);
                // 'accessibledescription' inverted section
                $value = $context->find('accessibledescription');
                if (empty($value)) {
                    
                    $buffer .= 'title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section7e716ec6364ba26d1c17de9b2a71fdf0($context, $indent, $value);
                    $buffer .= '" ';
                    $buffer .= 'aria-label="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section7e716ec6364ba26d1c17de9b2a71fdf0($context, $indent, $value);
                    $buffer .= '" ';
                }
                $buffer .= '>
';
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section448e18140949629a4c17dbabe7973cbe($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ca16026d194a568663299467e224f1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#overallcomplete}}
        <button class="btn btn-outline-success" data-action="toggle-manual-completion" data-toggletype="manual:undo" data-cmid="{{cmid}}" data-activityname="{{activityname}}" data-withavailability="{{withavailability}}" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}{{!
        }}{{^accessibledescription}}{{!
            }}title="{{#str}}completion_manual:aria:done, course, {{activityname}} {{/str}}" {{!
            }}aria-label="{{#str}}completion_manual:aria:done, course, {{activityname}} {{/str}}" {{!
        }}{{/accessibledescription}}>
            <i class="fa fa-check" aria-hidden="true"></i> {{#str}} completion_manual:done, core_course {{/str}}
        </button>
    {{/overallcomplete}}
    {{#overallincomplete}}
        <button class="btn btn-outline-secondary" data-action="toggle-manual-completion" data-toggletype="manual:mark-done" data-cmid="{{cmid}}" data-activityname="{{activityname}}" data-withavailability="{{withavailability}}" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}{{!
        }}{{^accessibledescription}}{{!
            }}title="{{#str}}completion_manual:aria:markdone, course, {{activityname}} {{/str}}" {{!
            }}aria-label="{{#str}}completion_manual:aria:markdone, course, {{activityname}} {{/str}}" {{!
        }}{{/accessibledescription}}>
            {{#str}} completion_manual:markdone, core_course {{/str}}
        </button>
    {{/overallincomplete}}
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
                
                // 'overallcomplete' section
                $value = $context->find('overallcomplete');
                $buffer .= $this->section3362f2dca86a977a5cba02873ce22832($context, $indent, $value);
                // 'overallincomplete' section
                $value = $context->find('overallincomplete');
                $buffer .= $this->sectionA8d81ce46680c43b1b484414f30b0b7e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69a568a86edbde42a3787f5075bc56a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_course/manual_completion_toggle\'], toggle => {
    toggle.init()
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
                
                $buffer .= $indent . 'require([\'core_course/manual_completion_toggle\'], toggle => {
';
                $buffer .= $indent . '    toggle.init()
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
