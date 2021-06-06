<?php

class __Mustache_a903b7c9bc258dc6d3bcac4985544f12 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="courses-view-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-region="courses-view"
';
        $buffer .= $indent . '    data-display="';
        $value = $this->resolveValue($context->find('view'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-grouping="';
        $value = $this->resolveValue($context->find('grouping'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-customfieldname="';
        $value = $this->resolveValue($context->find('customfieldname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-customfieldvalue="';
        $value = $this->resolveValue($context->find('customfieldvalue'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-sort="';
        $value = $this->resolveValue($context->find('sort'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-prev-display="';
        $value = $this->resolveValue($context->find('view'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-paging="';
        $value = $this->resolveValue($context->find('paging'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-nocoursesimg="';
        $value = $this->resolveValue($context->find('nocoursesimg'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-totalcoursecount="';
        $value = $this->resolveValue($context->find('totalcoursecount'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-displaycategories="';
        $value = $this->resolveValue($context->find('displaycategories'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div data-region="course-view-content">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/placeholders')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
