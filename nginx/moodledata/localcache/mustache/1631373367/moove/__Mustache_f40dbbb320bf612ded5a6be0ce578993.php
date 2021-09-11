<?php

class __Mustache_f40dbbb320bf612ded5a6be0ce578993 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'section_zero_show' section
        $value = $context->find('section_zero_show');
        $buffer .= $this->sectionB45b8bf541a4ffd3082feae41d17fb0d($context, $indent, $value);

        return $buffer;
    }

    private function section16d92a0484aeead404018fc9fdfc347c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editsummary, core';
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
                
                $buffer .= 'editsummary, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3d6ec313aa02bbf9f122227223575b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/settings, core';
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
                
                $buffer .= 'i/settings, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfae1991762f11dde7931f139befaee9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a title="{{#str}}editsummary, core{{/str}}" href="{{{config.wwwroot}}}/course/editsection.php?id={{secid}}&sr={{tileid}}">
                    {{#pix}}i/settings, core{{/pix}}
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
                
                $buffer .= $indent . '                <a title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section16d92a0484aeead404018fc9fdfc347c($context, $indent, $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/editsection.php?id=';
                $value = $this->resolveValue($context->find('secid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&sr=';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionD3d6ec313aa02bbf9f122227223575b8($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC45b96b748d622f1dc023f0bfdc7c659(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'subtiles';
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
                
                $buffer .= 'subtiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE37ab04d37766f3943a0e66ff186f071(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#usesubtilesseczero}}subtiles{{/usesubtilesseczero}}';
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
                
                // 'usesubtilesseczero' section
                $value = $context->find('usesubtilesseczero');
                $buffer .= $this->sectionC45b96b748d622f1dc023f0bfdc7c659($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7cfc5adf2530f7257536fd955aa2215(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{>format_tiles/course_module}}
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/course_module')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section747b047642ad653485fef2f252c98aa6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#course_modules}}
                            {{>format_tiles/course_module}}
                        {{/course_modules}}
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
                
                // 'course_modules' section
                $value = $context->find('course_modules');
                $buffer .= $this->sectionC7cfc5adf2530f7257536fd955aa2215($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5dff923a172e9591f2089b3ecf99d6c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{section_zero_add_cm_control_html}}}
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
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('section_zero_add_cm_control_html'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6fdbc08f4e4e6f50143482be2f35124(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li id="section-0" data-section="0" class="section main clearfix" role="region">
            <span class="hidden sectionname">{{title}}</span>
            {{#isediting}}
                <a title="{{#str}}editsummary, core{{/str}}" href="{{{config.wwwroot}}}/course/editsection.php?id={{secid}}&sr={{tileid}}">
                    {{#pix}}i/settings, core{{/pix}}
                </a>
            {{/isediting}}
            <div class="left side"></div>
            <div class="right side"></div>
            <div class="content">
                <div class="summary">{{{summary}}}</div>
                <ul class="section img-text {{#usesubtilesseczero}}subtiles{{/usesubtilesseczero}}{{^usesubtilesseczero}}nosubtiles{{/usesubtilesseczero}}
                    {{#useSubtiles}}{{#usesubtilesseczero}}subtiles{{/usesubtilesseczero}}{{/useSubtiles}}">
                    {{#content}}
                        {{#course_modules}}
                            {{>format_tiles/course_module}}
                        {{/course_modules}}
                    {{/content}}
                </ul>
                {{#isediting}}
                    {{{section_zero_add_cm_control_html}}}
                {{/isediting}}
            </div>
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
                
                $buffer .= $indent . '        <li id="section-0" data-section="0" class="section main clearfix" role="region">
';
                $buffer .= $indent . '            <span class="hidden sectionname">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                // 'isediting' section
                $value = $context->find('isediting');
                $buffer .= $this->sectionAfae1991762f11dde7931f139befaee9($context, $indent, $value);
                $buffer .= $indent . '            <div class="left side"></div>
';
                $buffer .= $indent . '            <div class="right side"></div>
';
                $buffer .= $indent . '            <div class="content">
';
                $buffer .= $indent . '                <div class="summary">';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '                <ul class="section img-text ';
                // 'usesubtilesseczero' section
                $value = $context->find('usesubtilesseczero');
                $buffer .= $this->sectionC45b96b748d622f1dc023f0bfdc7c659($context, $indent, $value);
                // 'usesubtilesseczero' inverted section
                $value = $context->find('usesubtilesseczero');
                if (empty($value)) {
                    
                    $buffer .= 'nosubtiles';
                }
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                // 'useSubtiles' section
                $value = $context->find('useSubtiles');
                $buffer .= $this->sectionE37ab04d37766f3943a0e66ff186f071($context, $indent, $value);
                $buffer .= '">
';
                // 'content' section
                $value = $context->find('content');
                $buffer .= $this->section747b047642ad653485fef2f252c98aa6($context, $indent, $value);
                $buffer .= $indent . '                </ul>
';
                // 'isediting' section
                $value = $context->find('isediting');
                $buffer .= $this->sectionD5dff923a172e9591f2089b3ecf99d6c($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB45b8bf541a4ffd3082feae41d17fb0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#section_zero}}
        <li id="section-0" data-section="0" class="section main clearfix" role="region">
            <span class="hidden sectionname">{{title}}</span>
            {{#isediting}}
                <a title="{{#str}}editsummary, core{{/str}}" href="{{{config.wwwroot}}}/course/editsection.php?id={{secid}}&sr={{tileid}}">
                    {{#pix}}i/settings, core{{/pix}}
                </a>
            {{/isediting}}
            <div class="left side"></div>
            <div class="right side"></div>
            <div class="content">
                <div class="summary">{{{summary}}}</div>
                <ul class="section img-text {{#usesubtilesseczero}}subtiles{{/usesubtilesseczero}}{{^usesubtilesseczero}}nosubtiles{{/usesubtilesseczero}}
                    {{#useSubtiles}}{{#usesubtilesseczero}}subtiles{{/usesubtilesseczero}}{{/useSubtiles}}">
                    {{#content}}
                        {{#course_modules}}
                            {{>format_tiles/course_module}}
                        {{/course_modules}}
                    {{/content}}
                </ul>
                {{#isediting}}
                    {{{section_zero_add_cm_control_html}}}
                {{/isediting}}
            </div>
        </li>
    {{/section_zero}}
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
                
                // 'section_zero' section
                $value = $context->find('section_zero');
                $buffer .= $this->sectionF6fdbc08f4e4e6f50143482be2f35124($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
