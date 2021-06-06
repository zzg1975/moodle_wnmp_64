<?php

class __Mustache_7267262d48a85174cc1764f16a7e3568 extends Mustache_Template
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
        // 'section_zero_show' section
        $value = $context->find('section_zero_show');
        $buffer .= $this->section0b4a6feac14dc37682d7b2d1de08e2ed($context, $indent, $value);

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

    private function section1f9918798e1e8f8f38fa93a1a3197b47(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '            <a title="';
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
                $buffer .= $indent . '                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionD3d6ec313aa02bbf9f122227223575b8($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
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

    private function section857fd8d9b0f07d12804cf667668a5ca1(Mustache_Context $context, $indent, $value)
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
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a0a5b82ef5fb34b9207864ad048274a(Mustache_Context $context, $indent, $value)
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
                $buffer .= $this->section857fd8d9b0f07d12804cf667668a5ca1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC35fe5a297675b9a6752aac6fea75141(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('section_zero_add_cm_control_html'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b4a6feac14dc37682d7b2d1de08e2ed(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '    <li id="section-0" data-section="0" class="section main clearfix" role="region">
';
                $buffer .= $indent . '        <span class="hidden sectionname">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</span>
';
                // 'isediting' section
                $value = $context->find('isediting');
                $buffer .= $this->section1f9918798e1e8f8f38fa93a1a3197b47($context, $indent, $value);
                $buffer .= $indent . '        <div class="left side"></div>
';
                $buffer .= $indent . '        <div class="right side"></div>
';
                $buffer .= $indent . '        <div class="content">
';
                $buffer .= $indent . '            <div class="summary">';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '            <ul class="section img-text ';
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
                $buffer .= $indent . '                ';
                // 'useSubtiles' section
                $value = $context->find('useSubtiles');
                $buffer .= $this->sectionE37ab04d37766f3943a0e66ff186f071($context, $indent, $value);
                $buffer .= '">
';
                // 'content' section
                $value = $context->find('content');
                $buffer .= $this->section3a0a5b82ef5fb34b9207864ad048274a($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                // 'isediting' section
                $value = $context->find('isediting');
                $buffer .= $this->sectionC35fe5a297675b9a6752aac6fea75141($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
