<?php

class __Mustache_3f7b1a5fc4d0026cb101971f73332323 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="mb-1 mr-1 d-flex align-items-center">
';
        $buffer .= $indent . '    <div class="dropdown">
';
        $buffer .= $indent . '        <button id="sortingdropdown" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3a112d2e610d065e3998597fb898d52d($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionC8f92cfec4a6f722f7905c79d92497cf($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            <span class="d-sm-inline-block" data-active-item-text>
';
        $buffer .= $indent . '                ';
        // 'title' section
        $value = $context->find('title');
        $buffer .= $this->sectionBc40470c449060467eec912448315828($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        // 'lastaccessed' section
        $value = $context->find('lastaccessed');
        $buffer .= $this->sectionF3f3aa74c8b15b6cc5be300e2ed466b7($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        // 'shortname' section
        $value = $context->find('shortname');
        $buffer .= $this->section19ff670944ef62a2e5adac224ed2640b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <ul class="dropdown-menu" role="menu" data-show-active-item data-skip-active-class="true" aria-labelledby="sortingdropdown">
';
        $buffer .= $indent . '            <li>
';
        $buffer .= $indent . '                <a class="dropdown-item" href="#" data-filter="sort" data-pref="title" data-value="fullname" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9f2d8f6148f8584bb71ba4e618aa0cae($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" role="menuitem" ';
        // 'title' section
        $value = $context->find('title');
        $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section709d33c7e28f926cd84f2f03f3e646fd($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </li>
';
        // 'showsortbyshortname' section
        $value = $context->find('showsortbyshortname');
        $buffer .= $this->section446aa92fbe47735cb250797ed2152f4c($context, $indent, $value);
        $buffer .= $indent . '            <li>
';
        $buffer .= $indent . '                <a class="dropdown-item" href="#" data-filter="sort" data-pref="lastaccessed" data-value="ul.timeaccess desc" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8e9324585ac0a9296bbaa0b09356550e($context, $indent, $value);
        $buffer .= '" aria-controls="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" role="menuitem" ';
        // 'lastaccessed' section
        $value = $context->find('lastaccessed');
        $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '                    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1a697b98751f89fac729286365bfa495($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3a112d2e610d065e3998597fb898d52d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:sortingdropdown, block_myoverview ';
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
                
                $buffer .= ' aria:sortingdropdown, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8f92cfec4a6f722f7905c79d92497cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/sort_by ';
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
                
                $buffer .= ' t/sort_by ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section709d33c7e28f926cd84f2f03f3e646fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' title, block_myoverview ';
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
                
                $buffer .= ' title, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc40470c449060467eec912448315828(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} title, block_myoverview {{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section709d33c7e28f926cd84f2f03f3e646fd($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a697b98751f89fac729286365bfa495(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastaccessed, block_myoverview ';
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
                
                $buffer .= ' lastaccessed, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3f3aa74c8b15b6cc5be300e2ed466b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} lastaccessed, block_myoverview {{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section1a697b98751f89fac729286365bfa495($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section026dbc291571317d8752ffe75b4ac8a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' shortname, block_myoverview ';
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
                
                $buffer .= ' shortname, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19ff670944ef62a2e5adac224ed2640b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} shortname, block_myoverview {{/str}}';
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
                
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section026dbc291571317d8752ffe75b4ac8a2($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f2d8f6148f8584bb71ba4e618aa0cae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:title, block_myoverview ';
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
                
                $buffer .= ' aria:title, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc0c0b051caebb6243b5c2bd6d728967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="true"';
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
                
                $buffer .= 'aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA819223028284df72c7863b16dc198f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:shortname, block_myoverview ';
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
                
                $buffer .= ' aria:shortname, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section446aa92fbe47735cb250797ed2152f4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li>
                <a class="dropdown-item" href="#" data-filter="sort" data-pref="shortname" data-value="shortname" aria-label="{{#str}} aria:shortname, block_myoverview {{/str}}" aria-controls="courses-view-{{uniqid}}" role="menuitem" {{#shortname}}aria-current="true"{{/shortname}}>
                    {{#str}} shortname, block_myoverview {{/str}}
                </a>
            </li>
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
                
                $buffer .= $indent . '            <li>
';
                $buffer .= $indent . '                <a class="dropdown-item" href="#" data-filter="sort" data-pref="shortname" data-value="shortname" aria-label="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA819223028284df72c7863b16dc198f3($context, $indent, $value);
                $buffer .= '" aria-controls="courses-view-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" role="menuitem" ';
                // 'shortname' section
                $value = $context->find('shortname');
                $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section026dbc291571317d8752ffe75b4ac8a2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e9324585ac0a9296bbaa0b09356550e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:lastaccessed, block_myoverview ';
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
                
                $buffer .= ' aria:lastaccessed, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
