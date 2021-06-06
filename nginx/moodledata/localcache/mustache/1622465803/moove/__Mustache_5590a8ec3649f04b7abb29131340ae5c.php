<?php

class __Mustache_5590a8ec3649f04b7abb29131340ae5c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        // 'from_ajax' inverted section
        $value = $context->find('from_ajax');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('format_tiles/above_tiles')) {
                $buffer .= $partial->renderInternal($context, $indent . '    ');
            }
        }
        $buffer .= $indent . '
';
        // 'userdisabledjsnav' section
        $value = $context->find('userdisabledjsnav');
        $buffer .= $this->sectionD6e0ef865227b247d23fca7651bb3a1c($context, $indent, $value);
        // 'userdisabledjsnav' inverted section
        $value = $context->find('userdisabledjsnav');
        if (empty($value)) {
            
            $buffer .= $indent . '    <noscript>
';
            // 'jsSessionDisabled' inverted section
            $value = $context->find('jsSessionDisabled');
            if (empty($value)) {
                
                $buffer .= $indent . '            <div id="jswarning" class="alert alert-warning">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDecedda471c2f91523a6c12bcddd8088($context, $indent, $value);
                $buffer .= '
';
                // 'showJScancelLink' section
                $value = $context->find('showJScancelLink');
                $buffer .= $this->sectionE05491a01f3c6dbc96caf58c8a260a06($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
            }
            $buffer .= $indent . '    </noscript>
';
        }
        $buffer .= $indent . '
';
        // 'showinitialpageloadingicon' section
        $value = $context->find('showinitialpageloadingicon');
        $buffer .= $this->section1bfcb77927832110c534508ad8f97359($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->section38436ad486f7b298c63c84a800added6($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<ul class="tiles" id="multi_section_tiles">
';
        // 'section_zero' section
        $value = $context->find('section_zero');
        $buffer .= $this->section4c1d3768542fa54e7195fdad27a41834($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'tiles' section
        $value = $context->find('tiles');
        $buffer .= $this->section3b2f33b67653a90a908eecc0ac37e385($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'isediting' inverted section
        $value = $context->find('isediting');
        if (empty($value)) {
            
            $buffer .= $indent . '        <li class="tile spacer" aria-hidden="true"></li>
';
            $buffer .= $indent . '        <li class="tile spacer" aria-hidden="true"></li>
';
            $buffer .= $indent . '        <li class="tile spacer" aria-hidden="true"></li>
';
            $buffer .= $indent . '        <li class="tile spacer" aria-hidden="true"></li>
';
            $buffer .= $indent . '        <li class="tile spacer" aria-hidden="true"></li>
';
            $buffer .= $indent . '        <li class="tile spacer" aria-hidden="true"></li>
';
            $buffer .= $indent . '        <li class="tile spacer" aria-hidden="true" id="lasttile"></li>
';
            $buffer .= $indent . '
';
            // 'tiles' section
            $value = $context->find('tiles');
            $buffer .= $this->sectionBae3e64f387951a8821370f5d65a270a($context, $indent, $value);
        }
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '
';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->section0653a63fef7c938f951a20c0dd45b155($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->section524f033b5f9b6b397dc3cd6ca5f804c8($context, $indent, $value);

        return $buffer;
    }

    private function sectionB1f1d43d9ea221cc1b9e0e9af0455c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'jsdeactivated, format_tiles';
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
                
                $buffer .= 'jsdeactivated, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDff063d08d44c0983d0b33a1cae0075b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'reactivate, format_tiles';
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
                
                $buffer .= 'reactivate, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6e0ef865227b247d23fca7651bb3a1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="jswarning" class="alert alert-info">
        {{#str}}jsdeactivated, format_tiles{{/str}}
        <a href="{{{config.wwwroot}}}/course/view.php?id={{courseid}}&stopjsnav=1">({{#str}}reactivate, format_tiles{{/str}})</a>
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
                
                $buffer .= $indent . '    <div id="jswarning" class="alert alert-info">
';
                $buffer .= $indent . '        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB1f1d43d9ea221cc1b9e0e9af0455c9b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&stopjsnav=1">(';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDff063d08d44c0983d0b33a1cae0075b($context, $indent, $value);
                $buffer .= ')</a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDecedda471c2f91523a6c12bcddd8088(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nojswarning, format_tiles';
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
                
                $buffer .= 'nojswarning, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD51d65c127ff43f47a73c0e2d242ee17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'refresh';
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
                
                $buffer .= 'refresh';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE05491a01f3c6dbc96caf58c8a260a06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a href="{{{config.wwwroot}}}/course/view.php?id={{courseid}}&canceljssession=1">{{#str}}refresh{{/str}}</a>
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
                
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&canceljssession=1">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD51d65c127ff43f47a73c0e2d242ee17($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA479fe30e60574f2e07fae4fa02f070e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clickiffailstoload, format_tiles';
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
                
                $buffer .= 'clickiffailstoload, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1bfcb77927832110c534508ad8f97359(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a id="page-loading-icon" href="{{config.wwwroot}}/course/view.php?id={{courseid}}&skipcheck=1">
        <div class="text-center mt-5">
        {{> format_tiles/loading}}
            <div class="text-center" style="text-decoration: none;"><small>{{#str}}clickiffailstoload, format_tiles{{/str}}</small></div>
        </div>
    </a>
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
                
                $buffer .= $indent . '    <a id="page-loading-icon" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&skipcheck=1">
';
                $buffer .= $indent . '        <div class="text-center mt-5">
';
                if ($partial = $this->mustache->loadPartial('format_tiles/loading')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '            <div class="text-center" style="text-decoration: none;"><small>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA479fe30e60574f2e07fae4fa02f070e($context, $indent, $value);
                $buffer .= '</small></div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3836fa4534569de4e484f61b0f12e38b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'expandall, format_tiles';
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
                
                $buffer .= 'expandall, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c7f89162282c2ef7fdbadc4c3b09f4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'expand, format_tiles';
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
                
                $buffer .= 'expand, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5c5c2aa9c90964ade75b62b94668847(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'collapsesections, format_tiles';
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
                
                $buffer .= 'collapsesections, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section80c2c27771a3358240d693d9f51b565b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'collapse, format_tiles';
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
                
                $buffer .= 'collapse, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE93ce9915ed94439dee1b8d805763ae3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tilesoutofsequencewarning, format_tiles';
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
                
                $buffer .= 'tilesoutofsequencewarning, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7f8d7ba8978afaa0db5e0f28a5cc100f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <a href="#section-{{sectionnum}}" data-expected-section="{{expectedsectionnum}}">
                            {{sectionname}}
                        </a>
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
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <a href="#section-';
                $value = $this->resolveValue($context->find('sectionnum'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-expected-section="';
                $value = $this->resolveValue($context->find('expectedsectionnum'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('sectionname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7c5ac04ed666e8fd1363f3b0e132990(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fixproblems, format_tiles';
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
                
                $buffer .= 'fixproblems, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section666f5410554ea32303e8d7a307e2a197(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="alert alert-danger" id="warning-outofsequence">
            {{#str}}tilesoutofsequencewarning, format_tiles{{/str}}
            <ul>
                {{#outofsequencetilewarnings}}
                    <li>
                        <a href="#section-{{sectionnum}}" data-expected-section="{{expectedsectionnum}}">
                            {{sectionname}}
                        </a>
                {{/outofsequencetilewarnings}}
            </ul>
            <a class="btn btn-secondary" title="{{#str}}fixproblems, format_tiles{{/str}}"
               href="{{{config.wwwroot}}}/course/format/tiles/teachertools.php?courseid={{courseid}}&action=reordersections&sesskey={{sesskey}}">
                {{#str}}fixproblems, format_tiles{{/str}}
            </a>
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
                
                $buffer .= $indent . '        <div class="alert alert-danger" id="warning-outofsequence">
';
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE93ce9915ed94439dee1b8d805763ae3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            <ul>
';
                // 'outofsequencetilewarnings' section
                $value = $context->find('outofsequencetilewarnings');
                $buffer .= $this->section7f8d7ba8978afaa0db5e0f28a5cc100f($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '            <a class="btn btn-secondary" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF7c5ac04ed666e8fd1363f3b0e132990($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '               href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/format/tiles/teachertools.php?courseid=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&action=reordersections&sesskey=';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF7c5ac04ed666e8fd1363f3b0e132990($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38436ad486f7b298c63c84a800added6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="expand-collapse-all-btns">
        <a class="btn btn-secondary" data-action="expand-all" title="{{#str}}expandall, format_tiles{{/str}}"
           href="{{{config.wwwroot}}}/course/view.php?id={{courseid}}&expanded=1" id="expand-all-btn">
        {{#pix}}expand, format_tiles{{/pix}}&nbsp;{{#str}}expandall, format_tiles{{/str}}
        </a>
        <a class="btn btn-secondary" data-action="collaspse-all" title="{{#str}}collapsesections, format_tiles{{/str}}"
            href="{{{config.wwwroot}}}/course/view.php?id={{courseid}}&expanded=-1" id="collapse-all-btn">
        {{#pix}}collapse, format_tiles{{/pix}}&nbsp;{{#str}}collapsesections, format_tiles{{/str}}
        </a>
    </div>
    {{#hasoutofsequencetiles}}
        <div class="alert alert-danger" id="warning-outofsequence">
            {{#str}}tilesoutofsequencewarning, format_tiles{{/str}}
            <ul>
                {{#outofsequencetilewarnings}}
                    <li>
                        <a href="#section-{{sectionnum}}" data-expected-section="{{expectedsectionnum}}">
                            {{sectionname}}
                        </a>
                {{/outofsequencetilewarnings}}
            </ul>
            <a class="btn btn-secondary" title="{{#str}}fixproblems, format_tiles{{/str}}"
               href="{{{config.wwwroot}}}/course/format/tiles/teachertools.php?courseid={{courseid}}&action=reordersections&sesskey={{sesskey}}">
                {{#str}}fixproblems, format_tiles{{/str}}
            </a>
        </div>
    {{/hasoutofsequencetiles}}
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
                
                $buffer .= $indent . '    <div class="expand-collapse-all-btns">
';
                $buffer .= $indent . '        <a class="btn btn-secondary" data-action="expand-all" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3836fa4534569de4e484f61b0f12e38b($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '           href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&expanded=1" id="expand-all-btn">
';
                $buffer .= $indent . '        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section3c7f89162282c2ef7fdbadc4c3b09f4b($context, $indent, $value);
                $buffer .= '&nbsp;';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3836fa4534569de4e484f61b0f12e38b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '        <a class="btn btn-secondary" data-action="collaspse-all" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB5c5c2aa9c90964ade75b62b94668847($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '            href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&expanded=-1" id="collapse-all-btn">
';
                $buffer .= $indent . '        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section80c2c27771a3358240d693d9f51b565b($context, $indent, $value);
                $buffer .= '&nbsp;';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB5c5c2aa9c90964ade75b62b94668847($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </div>
';
                // 'hasoutofsequencetiles' section
                $value = $context->find('hasoutofsequencetiles');
                $buffer .= $this->section666f5410554ea32303e8d7a307e2a197($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c1d3768542fa54e7195fdad27a41834(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> format_tiles/section_zero}}
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/section_zero')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13b72e7e3d4575ae3b950aee3ee14bce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> format_tiles/multi_section_tilebar}}
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/multi_section_tilebar')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b2f33b67653a90a908eecc0ac37e385(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{^isediting}}
            {{> format_tiles/multi_section_tile}}
        {{/isediting}}
        {{#isediting}}
            {{> format_tiles/multi_section_tilebar}}
        {{/isediting}}
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
                
                // 'isediting' inverted section
                $value = $context->find('isediting');
                if (empty($value)) {
                    
                    if ($partial = $this->mustache->loadPartial('format_tiles/multi_section_tile')) {
                        $buffer .= $partial->renderInternal($context, $indent . '            ');
                    }
                }
                // 'isediting' section
                $value = $context->find('isediting');
                $buffer .= $this->section13b72e7e3d4575ae3b950aee3ee14bce($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBae3e64f387951a8821370f5d65a270a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="section main moveablesection" style="display: none;" id="section-{{tileid}}"
                data-section="{{tileid}}"></li>
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
                
                $buffer .= $indent . '            <li class="section main moveablesection" style="display: none;" id="section-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                data-section="';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDda1663cb38c01c6db4078a7e7dcdfe1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addsections, format_tiles';
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
                
                $buffer .= 'addsections, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE08fd2f56477bb6b1091fe1690cda64e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/switch_plus, core, {{#str}}addsections, format_tiles{{/str}}';
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
                
                $buffer .= 't/switch_plus, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDda1663cb38c01c6db4078a7e7dcdfe1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0653a63fef7c938f951a20c0dd45b155(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span id="changenumsections">
        <a data-add-sections="{{#str}}addsections, format_tiles{{/str}}" class="pull-right mt-3" href="{{{ config.wwwroot }}}/course/changenumsections.php?courseid={{courseid}}&sesskey={{sesskey}}&insertsection=0&sectionreturn=0">
            {{#pix}}t/switch_plus, core, {{#str}}addsections, format_tiles{{/str}}{{/pix}} {{#str}}addsections, format_tiles{{/str}}
        </a>
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
                
                $buffer .= $indent . '    <span id="changenumsections">
';
                $buffer .= $indent . '        <a data-add-sections="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDda1663cb38c01c6db4078a7e7dcdfe1($context, $indent, $value);
                $buffer .= '" class="pull-right mt-3" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/changenumsections.php?courseid=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&sesskey=';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&insertsection=0&sectionreturn=0">
';
                $buffer .= $indent . '            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionE08fd2f56477bb6b1091fe1690cda64e($context, $indent, $value);
                $buffer .= ' ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDda1663cb38c01c6db4078a7e7dcdfe1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section524f033b5f9b6b397dc3cd6ca5f804c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^from_ajax}}
        {{activity_clipboard}}
    {{/from_ajax}}
    {{{course_activity_clipboard}}}
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
                
                // 'from_ajax' inverted section
                $value = $context->find('from_ajax');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        ';
                    $value = $this->resolveValue($context->find('activity_clipboard'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('course_activity_clipboard'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
