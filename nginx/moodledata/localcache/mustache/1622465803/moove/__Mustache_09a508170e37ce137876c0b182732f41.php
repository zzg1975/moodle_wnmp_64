<?php

class __Mustache_09a508170e37ce137876c0b182732f41 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<ul class="list-group metismenu">
';
        // 'flatnavigation' section
        $value = $context->find('flatnavigation');
        $buffer .= $this->sectionB9dafd6a99b1c7165d59ce468793f083($context, $indent, $value);
        $buffer .= $indent . '</ul>';

        return $buffer;
    }

    private function section59e6fe2eddaf2efb31df90c9cd4d553f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        </ul>
        <ul class="list-group metismenu">
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
                
                $buffer .= $indent . '        </ul>
';
                $buffer .= $indent . '        <ul class="list-group metismenu">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section807f30e0679d80e18434668ba332b78c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active font-weight-bold';
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
                
                $buffer .= 'active font-weight-bold';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd44a6a3dad61a163d437b77717f7915(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{^is_section}}
                <li class="list-group-item list-group-item-action {{#isactive}}active font-weight-bold{{/isactive}}" data-key="{{key}}">
                    <a href="{{{action}}}">
                        <span class="text m-l-{{get_indent}}">{{{text}}}</span>
                    </a>
                </li>
        {{/is_section}}
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
                
                // 'is_section' inverted section
                $value = $context->find('is_section');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="list-group-item list-group-item-action ';
                    // 'isactive' section
                    $value = $context->find('isactive');
                    $buffer .= $this->section807f30e0679d80e18434668ba332b78c($context, $indent, $value);
                    $buffer .= '" data-key="';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                    <a href="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= $value;
                    $buffer .= '">
';
                    $buffer .= $indent . '                        <span class="text m-l-';
                    $value = $this->resolveValue($context->find('get_indent'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                    </a>
';
                    $buffer .= $indent . '                </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe9955ab2a0642065d5e708bf9e87436(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/folder';
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
                
                $buffer .= 'i/folder';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0278d58ea702d38f29e1c8528357c3db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#pix}}i/folder{{/pix}}
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
                
                $buffer .= $indent . '                        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionDe9955ab2a0642065d5e708bf9e87436($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section787bd6514bd6b5bfa9b78614ba700a11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{^is_section}}
                            <li class="list-group-item list-group-item-action {{#isactive}}active font-weight-bold{{/isactive}}" data-key="{{key}}">
                                <a class="list-group-item list-group-item-action {{#isactive}}active font-weight-bold{{/isactive}}" href="{{{action}}}">
                                    <span class="text">{{{text}}}</span>
                                </a>
                            </li>
                        {{/is_section}}
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
                
                // 'is_section' inverted section
                $value = $context->find('is_section');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            <li class="list-group-item list-group-item-action ';
                    // 'isactive' section
                    $value = $context->find('isactive');
                    $buffer .= $this->section807f30e0679d80e18434668ba332b78c($context, $indent, $value);
                    $buffer .= '" data-key="';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                                <a class="list-group-item list-group-item-action ';
                    // 'isactive' section
                    $value = $context->find('isactive');
                    $buffer .= $this->section807f30e0679d80e18434668ba332b78c($context, $indent, $value);
                    $buffer .= '" href="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= $value;
                    $buffer .= '">
';
                    $buffer .= $indent . '                                    <span class="text">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                                </a>
';
                    $buffer .= $indent . '                            </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9dafd6a99b1c7165d59ce468793f083(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#showdivider}}
        </ul>
        <ul class="list-group metismenu">
    {{/showdivider}}
    {{#action}}
        {{^is_section}}
                <li class="list-group-item list-group-item-action {{#isactive}}active font-weight-bold{{/isactive}}" data-key="{{key}}">
                    <a href="{{{action}}}">
                        <span class="text m-l-{{get_indent}}">{{{text}}}</span>
                    </a>
                </li>
        {{/is_section}}
    {{/action}}
    {{^action}}
            <li class="list-group-item" data-key="{{key}}">
                <a class="m-l-{{get_indent}} has-arrow" href="javascript:void(0);">
                    {{#is_section}}
                        {{#pix}}i/folder{{/pix}}
                    {{/is_section}}
                    <span class="text">{{{text}}}</span>
                </a>
                <ul>
                    {{#children}}
                        {{^is_section}}
                            <li class="list-group-item list-group-item-action {{#isactive}}active font-weight-bold{{/isactive}}" data-key="{{key}}">
                                <a class="list-group-item list-group-item-action {{#isactive}}active font-weight-bold{{/isactive}}" href="{{{action}}}">
                                    <span class="text">{{{text}}}</span>
                                </a>
                            </li>
                        {{/is_section}}
                    {{/children}}
                </ul>
            </li>
    {{/action}}
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
                
                // 'showdivider' section
                $value = $context->find('showdivider');
                $buffer .= $this->section59e6fe2eddaf2efb31df90c9cd4d553f($context, $indent, $value);
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionEd44a6a3dad61a163d437b77717f7915($context, $indent, $value);
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <li class="list-group-item" data-key="';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                <a class="m-l-';
                    $value = $this->resolveValue($context->find('get_indent'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= ' has-arrow" href="javascript:void(0);">
';
                    // 'is_section' section
                    $value = $context->find('is_section');
                    $buffer .= $this->section0278d58ea702d38f29e1c8528357c3db($context, $indent, $value);
                    $buffer .= $indent . '                    <span class="text">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                </a>
';
                    $buffer .= $indent . '                <ul>
';
                    // 'children' section
                    $value = $context->find('children');
                    $buffer .= $this->section787bd6514bd6b5bfa9b78614ba700a11($context, $indent, $value);
                    $buffer .= $indent . '                </ul>
';
                    $buffer .= $indent . '            </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
