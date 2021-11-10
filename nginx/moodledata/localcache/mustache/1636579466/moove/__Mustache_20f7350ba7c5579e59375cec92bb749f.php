<?php

class __Mustache_20f7350ba7c5579e59375cec92bb749f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'isediting' inverted section
        $value = $context->find('isediting');
        if (empty($value)) {
            
            // 'usingjsnav' section
            $value = $context->find('usingjsnav');
            $buffer .= $this->section23c1383908b490e5e4d78e37c4a527f3($context, $indent, $value);
        }

        return $buffer;
    }

    private function section4bb47b8acbac151005ce4ccca4bf8081(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filter, format_tiles';
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
                
                $buffer .= 'filter, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e5c9d00bd84bb56a075c737d8f40872(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> format_tiles/filterbutton}}
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/filterbutton')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3b8c7f828ca0f692d81260dd5cb7343(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'all, format_tiles';
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
                
                $buffer .= 'all, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section776b312d4979732b4729cf1ec732e99c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="filterbuttons">
                            <span id="filterintro">
                                {{#pix}}filter, format_tiles{{/pix}}
                            </span>
                        {{#fiternumberedbuttons}}
                            {{> format_tiles/filterbutton}}
                        {{/fiternumberedbuttons}}
                        {{#fiteroutcomebuttons}}
                            {{> format_tiles/filterbutton}}
                        {{/fiteroutcomebuttons}}
                        <div id="filterbutton-all" class="filterbutton" data-buttonid="all" data-sections="[all]">
                            {{#str}}all, format_tiles{{/str}}
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
                
                $buffer .= $indent . '                    <div id="filterbuttons">
';
                $buffer .= $indent . '                            <span id="filterintro">
';
                $buffer .= $indent . '                                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section4bb47b8acbac151005ce4ccca4bf8081($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </span>
';
                // 'fiternumberedbuttons' section
                $value = $context->find('fiternumberedbuttons');
                $buffer .= $this->section8e5c9d00bd84bb56a075c737d8f40872($context, $indent, $value);
                // 'fiteroutcomebuttons' section
                $value = $context->find('fiteroutcomebuttons');
                $buffer .= $this->section8e5c9d00bd84bb56a075c737d8f40872($context, $indent, $value);
                $buffer .= $indent . '                        <div id="filterbutton-all" class="filterbutton" data-buttonid="all" data-sections="[all]">
';
                $buffer .= $indent . '                            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA3b8c7f828ca0f692d81260dd5cb7343($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3046aa34557c06a6fe90ef30daa5e32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> format_tiles/progress}}
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/progress')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39a4a43b9c356b38b56662a29d3b1e8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#has_filter_buttons}}
                    <div id="filterbuttons">
                            <span id="filterintro">
                                {{#pix}}filter, format_tiles{{/pix}}
                            </span>
                        {{#fiternumberedbuttons}}
                            {{> format_tiles/filterbutton}}
                        {{/fiternumberedbuttons}}
                        {{#fiteroutcomebuttons}}
                            {{> format_tiles/filterbutton}}
                        {{/fiteroutcomebuttons}}
                        <div id="filterbutton-all" class="filterbutton" data-buttonid="all" data-sections="[all]">
                            {{#str}}all, format_tiles{{/str}}
                        </div>
                    </div>
                {{/has_filter_buttons}}
                {{#overall_progress_indicator}}
                    {{> format_tiles/progress}}
                {{/overall_progress_indicator}}
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
                
                // 'has_filter_buttons' section
                $value = $context->find('has_filter_buttons');
                $buffer .= $this->section776b312d4979732b4729cf1ec732e99c($context, $indent, $value);
                // 'overall_progress_indicator' section
                $value = $context->find('overall_progress_indicator');
                $buffer .= $this->sectionC3046aa34557c06a6fe90ef30daa5e32($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85975d58685b8556af06e62144a90feb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="buttonhidesec0 open" id="buttonhidesec0"></div>
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
                
                $buffer .= '
';
                $buffer .= $indent . '                <div class="buttonhidesec0 open" id="buttonhidesec0"></div>
';
                $buffer .= $indent . '            ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section23c1383908b490e5e4d78e37c4a527f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="abovetiles">
        <div id="headerabovetiles" class="headerabovetiles" aria-hidden="true">
            {{#is_multi_section}}
                {{#has_filter_buttons}}
                    <div id="filterbuttons">
                            <span id="filterintro">
                                {{#pix}}filter, format_tiles{{/pix}}
                            </span>
                        {{#fiternumberedbuttons}}
                            {{> format_tiles/filterbutton}}
                        {{/fiternumberedbuttons}}
                        {{#fiteroutcomebuttons}}
                            {{> format_tiles/filterbutton}}
                        {{/fiteroutcomebuttons}}
                        <div id="filterbutton-all" class="filterbutton" data-buttonid="all" data-sections="[all]">
                            {{#str}}all, format_tiles{{/str}}
                        </div>
                    </div>
                {{/has_filter_buttons}}
                {{#overall_progress_indicator}}
                    {{> format_tiles/progress}}
                {{/overall_progress_indicator}}
            {{/is_multi_section}}
            {{^isediting}}{{#section_zero_show}}
                <div class="buttonhidesec0 open" id="buttonhidesec0"></div>
            {{/section_zero_show}}{{/isediting}}
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
                
                $buffer .= $indent . '    <div id="abovetiles">
';
                $buffer .= $indent . '        <div id="headerabovetiles" class="headerabovetiles" aria-hidden="true">
';
                // 'is_multi_section' section
                $value = $context->find('is_multi_section');
                $buffer .= $this->section39a4a43b9c356b38b56662a29d3b1e8b($context, $indent, $value);
                $buffer .= $indent . '            ';
                // 'isediting' inverted section
                $value = $context->find('isediting');
                if (empty($value)) {
                    
                    // 'section_zero_show' section
                    $value = $context->find('section_zero_show');
                    $buffer .= $this->section85975d58685b8556af06e62144a90feb($context, $indent, $value);
                }
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
