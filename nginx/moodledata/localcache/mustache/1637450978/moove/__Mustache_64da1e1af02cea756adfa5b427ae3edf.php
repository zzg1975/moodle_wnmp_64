<?php

class __Mustache_64da1e1af02cea756adfa5b427ae3edf extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card activity-navigation">
';
        $buffer .= $indent . '    <div class="card-body">
';
        $buffer .= $indent . '        ';
        if ($parent = $this->mustache->loadPartial('core/columns-1to1to1')) {
            $context->pushBlockContext(array(
                'column1' => array($this, 'blockA61f1f8ab9737effde19196470e3a77d'),
                'column2' => array($this, 'blockF2088366309363d2eb59095e31123727'),
                'column3' => array($this, 'blockC3bc3785d98dfa579055d147b24ba10b'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section296e5d708316fdec84d1a11edaa264b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'prev_activity, theme_moove';
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
                
                $buffer .= 'prev_activity, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbd2e67f557a2f895a5068b741e77fab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="nav-guide">
                            {{#str}}prev_activity, theme_moove{{/str}}
                        </span>
                        {{> core/action_link }}
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
                
                $buffer .= $indent . '                        <span class="nav-guide">
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section296e5d708316fdec84d1a11edaa264b3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF38cbdd58a4e67e3cb86ecb5ee6001b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/url_select }}';
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
                
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section483a82fe29022a93013c7a6cf263e197(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next_activity, theme_moove';
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
                
                $buffer .= 'next_activity, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a82f126d45c1cb7ec9e2cd085efbf5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="nav-guide">
                            {{#str}}next_activity, theme_moove{{/str}}
                        </span>
                        {{> core/action_link }}
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
                
                $buffer .= $indent . '                        <span class="nav-guide">
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section483a82fe29022a93013c7a6cf263e197($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockA61f1f8ab9737effde19196470e3a77d($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <div id="prev-activity" class="float-left">
';
        // 'prevlink' section
        $value = $context->find('prevlink');
        $buffer .= $this->sectionDbd2e67f557a2f895a5068b741e77fab($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }

    public function blockF2088366309363d2eb59095e31123727($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '                <div class="mdl-align">
';
        $buffer .= $indent . '                    ';
        // 'activitylist' section
        $value = $context->find('activitylist');
        $buffer .= $this->sectionF38cbdd58a4e67e3cb86ecb5ee6001b3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }

    public function blockC3bc3785d98dfa579055d147b24ba10b($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '                <div id="next-activity" class="float-right">
';
        // 'nextlink' section
        $value = $context->find('nextlink');
        $buffer .= $this->section0a82f126d45c1cb7ec9e2cd085efbf5d($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }
}
