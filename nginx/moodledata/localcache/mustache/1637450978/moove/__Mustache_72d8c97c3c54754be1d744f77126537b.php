<?php

class __Mustache_72d8c97c3c54754be1d744f77126537b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<ul class="nav nav-tabs" role="tablist">
';
        $buffer .= $indent . '<!-- First the top most node and immediate children -->
';
        $buffer .= $indent . '    <li class="nav-item">
';
        $buffer .= $indent . '        <a class="nav-link active" href="#link';
        $value = $this->resolveValue($context->findDot('node.key'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-toggle="tab" role="tab" aria-selected="true">';
        $value = $this->resolveValue($context->findDot('node.text'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    </li>
';
        $buffer .= $indent . '<!-- Now the first level children with sub nodes -->
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->section52efcfcf26d6f4b3dd0c4411009c7a74($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="tab-content mt-3">
';
        $buffer .= $indent . '    <div class="tab-pane active" id="link';
        $value = $this->resolveValue($context->findDot('node.key'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" role="tabpanel">
';
        $buffer .= $indent . '        <div class="container">
';
        $buffer .= $indent . '            <div class="row">
';
        $buffer .= $indent . '                <div class="col-sm-3">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col">
';
        $buffer .= $indent . '                    <ul class="list-unstyled">
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->sectionE267c06f2090a763a8d9f5b3e72f5008($context, $indent, $value);
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->section67903123cbc15f822e0ddc78e4d3ddfd($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->sectionDe20497c9057b681085b2bfc75eb8adf($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section1bf10c8e96e836c32889fed875aff2ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{^is_short_branch}}
                <li class="nav-item">
                    <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab" aria-selected="false" tabindex="-1">{{text}}</a>
                </li>
            {{/is_short_branch}}
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
                
                // 'is_short_branch' inverted section
                $value = $context->find('is_short_branch');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="nav-item">
';
                    $buffer .= $indent . '                    <a class="nav-link" href="#link';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-toggle="tab" role="tab" aria-selected="false" tabindex="-1">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a>
';
                    $buffer .= $indent . '                </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6becb6bf0b06f421b1f7d1db19981f87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#display}}
            {{^is_short_branch}}
                <li class="nav-item">
                    <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab" aria-selected="false" tabindex="-1">{{text}}</a>
                </li>
            {{/is_short_branch}}
        {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->section1bf10c8e96e836c32889fed875aff2ea($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52efcfcf26d6f4b3dd0c4411009c7a74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#children.count}}
        {{#display}}
            {{^is_short_branch}}
                <li class="nav-item">
                    <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab" aria-selected="false" tabindex="-1">{{text}}</a>
                </li>
            {{/is_short_branch}}
        {{/display}}
    {{/children.count}}
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
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->section6becb6bf0b06f421b1f7d1db19981f87($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc392130f2bf2711ee960d73aad40d3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <li><a href="{{{action}}}">{{text}}</a></li>
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
                
                $buffer .= $indent . '                                    <li><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE267c06f2090a763a8d9f5b3e72f5008(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{^children.count}}
                                {{#display}}
                                    <li><a href="{{{action}}}">{{text}}</a></li>
                                {{/display}}
                            {{/children.count}}
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
                
                // 'children.count' inverted section
                $value = $context->findDot('children.count');
                if (empty($value)) {
                    
                    // 'display' section
                    $value = $context->find('display');
                    $buffer .= $this->sectionEc392130f2bf2711ee960d73aad40d3e($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a94d8da24d2b62547a5dc6f95f3758e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4><a href="{{action}}">{{text}}</a></h4>';
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
                
                $buffer .= '<h4><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b906c06553db3566a6b2b7a89666b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{> core/settings_link_page_single }}
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
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA45707198a4fb18ddb839df4a37db5a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                    {{^action}}<h4>{{text}}</h4>{{/action}}
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{> core/settings_link_page_single }}
                                        {{/children}}
                                    </ul>
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
                
                $buffer .= $indent . '                            <hr>
';
                $buffer .= $indent . '                            <div class="row">
';
                $buffer .= $indent . '                                <div class="col-sm-3">
';
                $buffer .= $indent . '                                    ';
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->section4a94d8da24d2b62547a5dc6f95f3758e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    ';
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="col">
';
                $buffer .= $indent . '                                    <ul class="list-unstyled">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->sectionAd3b906c06553db3566a6b2b7a89666b($context, $indent, $value);
                $buffer .= $indent . '                                    </ul>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91051c4da86f44006b3ea8c93df04f20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#is_short_branch}}
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                    {{^action}}<h4>{{text}}</h4>{{/action}}
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{> core/settings_link_page_single }}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                        {{/is_short_branch}}
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
                
                // 'is_short_branch' section
                $value = $context->find('is_short_branch');
                $buffer .= $this->sectionA45707198a4fb18ddb839df4a37db5a8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2a894a3d54281df405d43c957741954(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#children.count}}
                        {{#is_short_branch}}
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                    {{^action}}<h4>{{text}}</h4>{{/action}}
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{> core/settings_link_page_single }}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                        {{/is_short_branch}}
                    {{/children.count}}
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
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->section91051c4da86f44006b3ea8c93df04f20($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67903123cbc15f822e0ddc78e4d3ddfd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#display}}
                    {{#children.count}}
                        {{#is_short_branch}}
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                    {{^action}}<h4>{{text}}</h4>{{/action}}
                                </div>
                                <div class="col">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{> core/settings_link_page_single }}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                        {{/is_short_branch}}
                    {{/children.count}}
                {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->sectionB2a894a3d54281df405d43c957741954($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2036dd12bd1df7c6c8d9f8331d25e4d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        {{^children.count}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/children.count}}
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
                
                // 'children.count' inverted section
                $value = $context->findDot('children.count');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                            <li><a href="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= $value;
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a></li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2051869608def53993eed4f4ff0eb451(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#display}}
                                        {{^children.count}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/children.count}}
                                    {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->section2036dd12bd1df7c6c8d9f8331d25e4d0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2636ed0abcb943510fd2f38963a0af5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{> core/settings_link_page_single }}
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
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF686948499df685bde0e653db03c25ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4>{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
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
                
                $buffer .= $indent . '                                <hr>
';
                $buffer .= $indent . '                                <div class="row">
';
                $buffer .= $indent . '                                    <div class="col-sm-3">
';
                $buffer .= $indent . '                                        ';
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->section4a94d8da24d2b62547a5dc6f95f3758e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        ';
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                    <div class="col-sm-9">
';
                $buffer .= $indent . '                                        <ul class="list-unstyled">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->sectionE2636ed0abcb943510fd2f38963a0af5($context, $indent, $value);
                $buffer .= $indent . '                                        </ul>
';
                $buffer .= $indent . '                                    </div>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF96d600828e638be47fa64955b660691(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#children.count}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4>{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/children.count}}
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
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionF686948499df685bde0e653db03c25ea($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56704c6bed3b45f54ebacadfdd1f1d1f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#display}}
                            {{#children.count}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4>{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/children.count}}
                        {{/display}}
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
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->sectionF96d600828e638be47fa64955b660691($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5961a756fff3db9a1c2c3462964fb56(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="tab-pane" id="link{{key}}" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                            {{^action}}<h4>{{text}}</h4>{{/action}}
                        </div>
                        <div class="col-sm-9">
                            <ul class="list-unstyled">
                                {{#children}}
                                    {{#display}}
                                        {{^children.count}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/children.count}}
                                    {{/display}}
                                {{/children}}
                            </ul>
                        </div>
                    </div>
                    {{#children}}
                        {{#display}}
                            {{#children.count}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4>{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/children.count}}
                        {{/display}}
                    {{/children}}
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
                
                $buffer .= $indent . '            <div class="tab-pane" id="link';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" role="tabpanel">
';
                $buffer .= $indent . '                <div class="container">
';
                $buffer .= $indent . '                    <div class="row">
';
                $buffer .= $indent . '                        <div class="col-sm-3">
';
                $buffer .= $indent . '                            ';
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->section4a94d8da24d2b62547a5dc6f95f3758e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-sm-9">
';
                $buffer .= $indent . '                            <ul class="list-unstyled">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section2051869608def53993eed4f4ff0eb451($context, $indent, $value);
                $buffer .= $indent . '                            </ul>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section56704c6bed3b45f54ebacadfdd1f1d1f($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe20497c9057b681085b2bfc75eb8adf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#children.count}}
            <div class="tab-pane" id="link{{key}}" role="tabpanel">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                            {{^action}}<h4>{{text}}</h4>{{/action}}
                        </div>
                        <div class="col-sm-9">
                            <ul class="list-unstyled">
                                {{#children}}
                                    {{#display}}
                                        {{^children.count}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/children.count}}
                                    {{/display}}
                                {{/children}}
                            </ul>
                        </div>
                    </div>
                    {{#children}}
                        {{#display}}
                            {{#children.count}}
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        {{#action}}<h4><a href="{{action}}">{{text}}</a></h4>{{/action}}
                                        {{^action}}<h4>{{text}}</h4>{{/action}}
                                    </div>
                                    <div class="col-sm-9">
                                        <ul class="list-unstyled">
                                            {{#children}}
                                                {{> core/settings_link_page_single }}
                                            {{/children}}
                                        </ul>
                                    </div>
                                </div>
                            {{/children.count}}
                        {{/display}}
                    {{/children}}
                </div>
            </div>
        {{/children.count}}
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
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionE5961a756fff3db9a1c2c3462964fb56($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
