<?php

class __Mustache_307a4daf0db86be5c420155f0c9377a7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="activity-information" data-activityname="';
        $value = $this->resolveValue($context->find('activityname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="activity-information">
';
        // 'hasdates' section
        $value = $context->find('hasdates');
        $buffer .= $this->section876dbafd03cea700a2cb1edcac937cfa($context, $indent, $value);
        // 'hascompletion' section
        $value = $context->find('hascompletion');
        $buffer .= $this->section027294a7ccf074b5428af2941aa055f3($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionC824aa815274c4e4bdbbcbc00e821a95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{>core_course/activity_date}}
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
                
                if ($partial = $this->mustache->loadPartial('core_course/activity_date')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section876dbafd03cea700a2cb1edcac937cfa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div data-region="activity-dates" class="mb-1">
        {{#activitydates}}
            {{>core_course/activity_date}}
        {{/activitydates}}
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
                
                $buffer .= $indent . '    <div data-region="activity-dates" class="mb-1">
';
                // 'activitydates' section
                $value = $context->find('activitydates');
                $buffer .= $this->sectionC824aa815274c4e4bdbbcbc00e821a95($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4d533f216f9622c64afd5d00c909083(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completionrequirements, core_course, {{activityname}}';
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
                
                $buffer .= 'completionrequirements, core_course, ';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7617b97f7288900b43ce269a2dba5d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> core_course/completion_automatic }}
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
                
                if ($partial = $this->mustache->loadPartial('core_course/completion_automatic')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3e3fd7accbb2dd7b9948c179816df9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                        {{#completiondetails}}
                            {{> core_course/completion_automatic }}
                        {{/completiondetails}}
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
                
                $buffer .= $indent . '                    <div class="automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB4d533f216f9622c64afd5d00c909083($context, $indent, $value);
                $buffer .= '">
';
                // 'completiondetails' section
                $value = $context->find('completiondetails');
                $buffer .= $this->sectionD7617b97f7288900b43ce269a2dba5d1($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e40cbd085cf0cdcb9a83a3f760ff857(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> core_course/completion_manual }}
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
                
                if ($partial = $this->mustache->loadPartial('core_course/completion_manual')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82b46537770c7fb25dc8ae31bf864e87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div data-region="completion-info">
                {{#isautomatic}}
                    <div class="automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                        {{#completiondetails}}
                            {{> core_course/completion_automatic }}
                        {{/completiondetails}}
                    </div>
                {{/isautomatic}}
                {{^isautomatic}}
                    {{#showmanualcompletion}}
                        {{> core_course/completion_manual }}
                    {{/showmanualcompletion}}
                {{/isautomatic}}
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
                
                $buffer .= $indent . '            <div data-region="completion-info">
';
                // 'isautomatic' section
                $value = $context->find('isautomatic');
                $buffer .= $this->sectionB3e3fd7accbb2dd7b9948c179816df9b($context, $indent, $value);
                // 'isautomatic' inverted section
                $value = $context->find('isautomatic');
                if (empty($value)) {
                    
                    // 'showmanualcompletion' section
                    $value = $context->find('showmanualcompletion');
                    $buffer .= $this->section6e40cbd085cf0cdcb9a83a3f760ff857($context, $indent, $value);
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section027294a7ccf074b5428af2941aa055f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#uservisible}}
            <div data-region="completion-info">
                {{#isautomatic}}
                    <div class="automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                        {{#completiondetails}}
                            {{> core_course/completion_automatic }}
                        {{/completiondetails}}
                    </div>
                {{/isautomatic}}
                {{^isautomatic}}
                    {{#showmanualcompletion}}
                        {{> core_course/completion_manual }}
                    {{/showmanualcompletion}}
                {{/isautomatic}}
            </div>
        {{/uservisible}}
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
                
                // 'uservisible' section
                $value = $context->find('uservisible');
                $buffer .= $this->section82b46537770c7fb25dc8ae31bf864e87($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
