<?php

class __Mustache_c127835e9b4d401057512c39f8fb7723 extends Mustache_Template
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
        // 'hasSpacersBefore' section
        $value = $context->find('hasSpacersBefore');
        $buffer .= $this->sectionB2c01ed1ce65302ae9a4e0310cb3aea3($context, $indent, $value);
        $buffer .= $indent . '<li class="activity';
        // 'useSubtiles' section
        $value = $context->find('useSubtiles');
        $buffer .= $this->section2d27b91210ff8de6b029b43ef3b78f4a($context, $indent, $value);
        $buffer .= ' ';
        // 'is_label' section
        $value = $context->find('is_label');
        $buffer .= $this->sectionAdbb3e8fb8d9e12dfc943036d55e1abb($context, $indent, $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('modname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' modtype_';
        $value = $this->resolveValue($context->find('modname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('modResourceType'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        // 'clickable' inverted section
        $value = $context->find('clickable');
        if (empty($value)) {
            
            $buffer .= ' unclickable ';
        }
        $buffer .= ' launch-tiles-';
        $value = $this->resolveValue($context->find('launchtype'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    id="module-';
        $value = $this->resolveValue($context->find('cmid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-modtype="';
        $value = $this->resolveValue($context->find('modname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        // 'modResourceType' section
        $value = $context->find('modResourceType');
        $buffer .= $this->sectionF39ab10ee4fd4a02d0b2db2f33707498($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    tabindex="3"
';
        $buffer .= $indent . '    data-cmid="';
        $value = $this->resolveValue($context->find('cmid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-modinstance="';
        $value = $this->resolveValue($context->find('modinstance'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    ';
        // 'pluginfileUrl' section
        $value = $context->find('pluginfileUrl');
        $buffer .= $this->section4ebdfb24b53620ca72357a474fb68167($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    ';
        // 'secondaryurl' section
        $value = $context->find('secondaryurl');
        $buffer .= $this->section2944f109ddae4cf5da0ad67e0ddae28d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    data-title="';
        $value = $this->resolveValue($context->find('modtitle'), $context);
        $buffer .= $value;
        $buffer .= '">
';
        $buffer .= $indent . '    <div';
        // 'useSubtiles' section
        $value = $context->find('useSubtiles');
        $buffer .= $this->sectionDd9fcc61a401622a057a8f80db96d9a4($context, $indent, $value);
        $buffer .= ' ';
        // 'useSubtiles' inverted section
        $value = $context->find('useSubtiles');
        if (empty($value)) {
            
            $buffer .= ' class="mod-indent-outer"';
        }
        $buffer .= '>
';
        // 'useSubtiles' inverted section
        $value = $context->find('useSubtiles');
        if (empty($value)) {
            
            // 'indentlevel' section
            $value = $context->find('indentlevel');
            $buffer .= $this->section78fe3d118b008bf163f165d7386e412d($context, $indent, $value);
        }
        $buffer .= $indent . '        <div class="';
        // 'is_label' inverted section
        $value = $context->find('is_label');
        if (empty($value)) {
            
            $buffer .= 'activityinstance';
        }
        $buffer .= '">
';
        // 'is_label' section
        $value = $context->find('is_label');
        $buffer .= $this->section5f4bc5873e5d8594ce6cf4730cbbe523($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'is_label' inverted section
        $value = $context->find('is_label');
        if (empty($value)) {
            
            // 'useSubtiles' section
            $value = $context->find('useSubtiles');
            $buffer .= $this->sectionB82d99aad5e9660b7be69cc0128e7bef($context, $indent, $value);
            $buffer .= $indent . '
';
            // 'useSubtiles' inverted section
            $value = $context->find('useSubtiles');
            if (empty($value)) {
                
                // 'isediting' section
                $value = $context->find('isediting');
                $buffer .= $this->section1200b7294208e5cf17097058fccd70f0($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'isediting' inverted section
                $value = $context->find('isediting');
                if (empty($value)) {
                    
                    // 'clickable' section
                    $value = $context->find('clickable');
                    $buffer .= $this->section21edb41a9341ea880ed460cdc37c795e($context, $indent, $value);
                    $buffer .= $indent . '
';
                    // 'clickable' inverted section
                    $value = $context->find('clickable');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                            <span class="instancename">
';
                        $buffer .= $indent . '                                <img src="';
                        $value = $this->resolveValue($context->find('iconurl'), $context);
                        $buffer .= call_user_func($this->mustache->getEscape(), $value);
                        $buffer .= '" class="iconlarge activityicon" alt="';
                        $value = $this->resolveValue($context->find('modtitle'), $context);
                        $buffer .= $value;
                        $buffer .= '"
';
                        $buffer .= $indent . '                                     role="presentation">
';
                        $buffer .= $indent . '                                <span class="activitytitle">';
                        $value = $this->resolveValue($context->find('modtitle'), $context);
                        $buffer .= $value;
                        $buffer .= '</span>
';
                        $buffer .= $indent . '                            </span>
';
                    }
                    $buffer .= $indent . '
';
                    $buffer .= $indent . '                        ';
                    $value = $this->resolveValue($context->find('afterlink'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                }
            }
            $buffer .= $indent . '
';
            $buffer .= $indent . '                <div class="contentafterlink">
';
            // 'availabilitymessage' section
            $value = $context->find('availabilitymessage');
            $buffer .= $this->section65dee348c814458ded02cf3a547cef55($context, $indent, $value);
            $buffer .= $indent . '                </div>
';
        }
        $buffer .= $indent . '
';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->section0fb10ff98ddfd8f52dd739430a311331($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <span class="actions">
';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->section7299d491f3190cd72ed47f4daeec0685($context, $indent, $value);
        // 'completionInUseForCm' section
        $value = $context->find('completionInUseForCm');
        $buffer .= $this->sectionEca63854fab80c6d9a23ec73a10190a9($context, $indent, $value);
        $buffer .= $indent . '    </span>
';
        // 'useSubtiles' inverted section
        $value = $context->find('useSubtiles');
        if (empty($value)) {
            
            // 'showdescription' section
            $value = $context->find('showdescription');
            $buffer .= $this->section66385cf2a7e6b1c780975f079531c84c($context, $indent, $value);
        }
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function sectionB2c01ed1ce65302ae9a4e0310cb3aea3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^isediting}}
        <li class="subtile spacer" aria-hidden="true"></li>
        <li class="subtile spacer" aria-hidden="true"></li>
        <li class="subtile spacer" aria-hidden="true"></li>
        <li class="subtile spacer" aria-hidden="true"></li>
        <li class="subtile spacer" aria-hidden="true"></li>
        <li class="subtile spacer" aria-hidden="true"></li>
        <li class="subtile spacer" aria-hidden="true"></li>
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
                    
                    $buffer .= $indent . '        <li class="subtile spacer" aria-hidden="true"></li>
';
                    $buffer .= $indent . '        <li class="subtile spacer" aria-hidden="true"></li>
';
                    $buffer .= $indent . '        <li class="subtile spacer" aria-hidden="true"></li>
';
                    $buffer .= $indent . '        <li class="subtile spacer" aria-hidden="true"></li>
';
                    $buffer .= $indent . '        <li class="subtile spacer" aria-hidden="true"></li>
';
                    $buffer .= $indent . '        <li class="subtile spacer" aria-hidden="true"></li>
';
                    $buffer .= $indent . '        <li class="subtile spacer" aria-hidden="true"></li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d27b91210ff8de6b029b43ef3b78f4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^is_label}} subtile{{/is_label}}';
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
                
                // 'is_label' inverted section
                $value = $context->find('is_label');
                if (empty($value)) {
                    
                    $buffer .= ' subtile';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdbb3e8fb8d9e12dfc943036d55e1abb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fullwidth';
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
                
                $buffer .= 'fullwidth';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF39ab10ee4fd4a02d0b2db2f33707498(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '_{{{modResourceType}}}';
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
                
                $buffer .= '_';
                $value = $this->resolveValue($context->find('modResourceType'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ebdfb24b53620ca72357a474fb68167(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-url="{{{pluginfileUrl}}}"';
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
                
                $buffer .= 'data-url="';
                $value = $this->resolveValue($context->find('pluginfileUrl'), $context);
                $buffer .= $value;
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2944f109ddae4cf5da0ad67e0ddae28d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-url-secondary="{{{secondaryurl}}}"';
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
                
                $buffer .= 'data-url-secondary="';
                $value = $this->resolveValue($context->find('secondaryurl'), $context);
                $buffer .= $value;
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd9fcc61a401622a057a8f80db96d9a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{^is_label}} class="subtile_inner"{{/is_label}}';
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
                
                // 'is_label' inverted section
                $value = $context->find('is_label');
                if (empty($value)) {
                    
                    $buffer .= ' class="subtile_inner"';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78fe3d118b008bf163f165d7386e412d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="mod-indent mod-indent-{{indentlevel}}"></div>
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
                
                $buffer .= $indent . '                <div class="mod-indent mod-indent-';
                $value = $this->resolveValue($context->find('indentlevel'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f734471980666a0cf1dcfb6a2048cac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{! clickable really means user is allowed to see content - }}
                    <span class="label_content {{extraclasses}}"
                          id="label_content_{{cmid}}">{{{content}}}</span>
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
                
                $buffer .= $indent . '                    <span class="label_content ';
                $value = $this->resolveValue($context->find('extraclasses'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                          id="label_content_';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50d2a9731e675691899097cbc3c1dab7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                   {{{availabilitymessage}}}
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
                
                $buffer .= $indent . '                   ';
                $value = $this->resolveValue($context->find('availabilitymessage'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f4bc5873e5d8594ce6cf4730cbbe523(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#clickable}}
                    {{! clickable really means user is allowed to see content - }}
                    <span class="label_content {{extraclasses}}"
                          id="label_content_{{cmid}}">{{{content}}}</span>
                {{/clickable}}
                {{#availabilitymessage}}
                   {{{availabilitymessage}}}
                {{/availabilitymessage}}
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
                
                // 'clickable' section
                $value = $context->find('clickable');
                $buffer .= $this->section9f734471980666a0cf1dcfb6a2048cac($context, $indent, $value);
                // 'availabilitymessage' section
                $value = $context->find('availabilitymessage');
                $buffer .= $this->section50d2a9731e675691899097cbc3c1dab7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section224fcb7cf4159064d497e0a981a86dfb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-action="launch-tiles-{{launchtype}}"';
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
                
                $buffer .= ' data-action="launch-tiles-';
                $value = $this->resolveValue($context->find('launchtype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section273e59c43d0e5b2f7c59e7bcf7ed52f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="{{extraclasses}}"';
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
                
                $buffer .= 'class="';
                $value = $this->resolveValue($context->find('extraclasses'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8079a232f2689150b9ed74b56af63dab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <h4 class="activitytitle">
                                            <a {{#extraclasses}}class="{{extraclasses}}"{{/extraclasses}} href="{{{url}}}" data-title="{{{modtitle}}}">
                                                {{{modtitle}}}
                                            </a>
                                        </h4>
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
                
                $buffer .= $indent . '                                        <h4 class="activitytitle">
';
                $buffer .= $indent . '                                            <a ';
                // 'extraclasses' section
                $value = $context->find('extraclasses');
                $buffer .= $this->section273e59c43d0e5b2f7c59e7bcf7ed52f7($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" data-title="';
                $value = $this->resolveValue($context->find('modtitle'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('modtitle'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                                            </a>
';
                $buffer .= $indent . '                                        </h4>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF45e9a6285a5e3baaa5576fec4dc137c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' onclick="{{onclick}}"';
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
                
                $buffer .= ' onclick="';
                $value = $this->resolveValue($context->find('onclick'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3323e12614a92b82e903d0ec3831ef7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#isEmbeddedResource}}
                                        <h4 class="activitytitle">
                                            <a {{#extraclasses}}class="{{extraclasses}}"{{/extraclasses}} href="{{{url}}}" data-title="{{{modtitle}}}">
                                                {{{modtitle}}}
                                            </a>
                                        </h4>
                                    {{/isEmbeddedResource}}

                                    {{^isEmbeddedResource}}
                                    <h4 class="activitytitle">
                                        <a {{#extraclasses}}class="{{extraclasses}}"{{/extraclasses}}
                                            {{#onclick}} onclick="{{onclick}}"{{/onclick}} href="{{url}}">{{{modtitle}}}</a>
                                    </h4>
                                    {{/isEmbeddedResource}}
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
                
                // 'isEmbeddedResource' section
                $value = $context->find('isEmbeddedResource');
                $buffer .= $this->section8079a232f2689150b9ed74b56af63dab($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'isEmbeddedResource' inverted section
                $value = $context->find('isEmbeddedResource');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    <h4 class="activitytitle">
';
                    $buffer .= $indent . '                                        <a ';
                    // 'extraclasses' section
                    $value = $context->find('extraclasses');
                    $buffer .= $this->section273e59c43d0e5b2f7c59e7bcf7ed52f7($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                            ';
                    // 'onclick' section
                    $value = $context->find('onclick');
                    $buffer .= $this->sectionF45e9a6285a5e3baaa5576fec4dc137c($context, $indent, $value);
                    $buffer .= ' href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('modtitle'), $context);
                    $buffer .= $value;
                    $buffer .= '</a>
';
                    $buffer .= $indent . '                                    </h4>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14525c229236b068d5de55af1e5e6a87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="clickable-region" href="{{url}}" data-action="launch-tiles-{{launchtype}}"{{#onclick}} onclick="{{onclick}}"{{/onclick}}></a>';
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
                
                $buffer .= '<a class="clickable-region" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-action="launch-tiles-';
                $value = $this->resolveValue($context->find('launchtype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                // 'onclick' section
                $value = $context->find('onclick');
                $buffer .= $this->sectionF45e9a6285a5e3baaa5576fec4dc137c($context, $indent, $value);
                $buffer .= '></a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf7c49e9cd2cf649137eb056fb1e64b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{>format_tiles/inplace_editable}}
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/inplace_editable')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1200b7294208e5cf17097058fccd70f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>
                            {{#modtitle_inplaceeditable}}
                                {{>format_tiles/inplace_editable}}
                            {{/modtitle_inplaceeditable}}
                            {{^modtitle_inplaceeditable}}
                                {{{modtitle}}}
                            {{/modtitle_inplaceeditable}}
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
                
                $buffer .= $indent . '                        <div>
';
                // 'modtitle_inplaceeditable' section
                $value = $context->find('modtitle_inplaceeditable');
                $buffer .= $this->sectionEf7c49e9cd2cf649137eb056fb1e64b7($context, $indent, $value);
                // 'modtitle_inplaceeditable' inverted section
                $value = $context->find('modtitle_inplaceeditable');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                ';
                    $value = $this->resolveValue($context->find('modtitle'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                }
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB82d99aad5e9660b7be69cc0128e7bef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="activitytype">{{modnameDisplay}}</div>
                    {{^isediting}}
                        <div class="instancename"{{#clickable}} data-action="launch-tiles-{{launchtype}}"{{/clickable}}>
                                {{#clickable}}
                                    {{#isEmbeddedResource}}
                                        <h4 class="activitytitle">
                                            <a {{#extraclasses}}class="{{extraclasses}}"{{/extraclasses}} href="{{{url}}}" data-title="{{{modtitle}}}">
                                                {{{modtitle}}}
                                            </a>
                                        </h4>
                                    {{/isEmbeddedResource}}

                                    {{^isEmbeddedResource}}
                                    <h4 class="activitytitle">
                                        <a {{#extraclasses}}class="{{extraclasses}}"{{/extraclasses}}
                                            {{#onclick}} onclick="{{onclick}}"{{/onclick}} href="{{url}}">{{{modtitle}}}</a>
                                    </h4>
                                    {{/isEmbeddedResource}}
                                {{/clickable}}
                                {{^clickable}}
                                    <h4 class="activitytitle">{{{modtitle}}}</h4>
                                {{/clickable}}
                        </div>
                        {{#clickable}}<a class="clickable-region" href="{{url}}" data-action="launch-tiles-{{launchtype}}"{{#onclick}} onclick="{{onclick}}"{{/onclick}}></a>{{/clickable}}
                    {{/isediting}}

                    {{#isediting}}
                        <div>
                            {{#modtitle_inplaceeditable}}
                                {{>format_tiles/inplace_editable}}
                            {{/modtitle_inplaceeditable}}
                            {{^modtitle_inplaceeditable}}
                                {{{modtitle}}}
                            {{/modtitle_inplaceeditable}}
                        </div>
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
                
                $buffer .= $indent . '                    <div class="activitytype">';
                $value = $this->resolveValue($context->find('modnameDisplay'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                // 'isediting' inverted section
                $value = $context->find('isediting');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <div class="instancename"';
                    // 'clickable' section
                    $value = $context->find('clickable');
                    $buffer .= $this->section224fcb7cf4159064d497e0a981a86dfb($context, $indent, $value);
                    $buffer .= '>
';
                    // 'clickable' section
                    $value = $context->find('clickable');
                    $buffer .= $this->section3323e12614a92b82e903d0ec3831ef7d($context, $indent, $value);
                    // 'clickable' inverted section
                    $value = $context->find('clickable');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                                    <h4 class="activitytitle">';
                        $value = $this->resolveValue($context->find('modtitle'), $context);
                        $buffer .= $value;
                        $buffer .= '</h4>
';
                    }
                    $buffer .= $indent . '                        </div>
';
                    $buffer .= $indent . '                        ';
                    // 'clickable' section
                    $value = $context->find('clickable');
                    $buffer .= $this->section14525c229236b068d5de55af1e5e6a87($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '
';
                // 'isediting' section
                $value = $context->find('isediting');
                $buffer .= $this->section1200b7294208e5cf17097058fccd70f0($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBda1d41ac4f0589d0b8e77141133252d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-action="launch-tiles-resource-modal"';
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
                
                $buffer .= ' data-action="launch-tiles-resource-modal"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76acb5fa3922dd7bc2a3e08065778ac1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                               data-action="launch-tiles-module-modal"';
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
                $buffer .= $indent . '                               data-action="launch-tiles-module-modal"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD11d8da38dfbda79677e06bbd8bde0a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#isEmbeddedResource}} data-action="launch-tiles-resource-modal"{{/isEmbeddedResource}}{{#isEmbeddedModule}}
                               data-action="launch-tiles-module-modal"{{/isEmbeddedModule}}';
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
                
                // 'isEmbeddedResource' section
                $value = $context->find('isEmbeddedResource');
                $buffer .= $this->sectionBda1d41ac4f0589d0b8e77141133252d($context, $indent, $value);
                // 'isEmbeddedModule' section
                $value = $context->find('isEmbeddedModule');
                $buffer .= $this->section76acb5fa3922dd7bc2a3e08065778ac1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10d95753bccd8157f4c5dc6b807928ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{#clickable}}{{#isEmbeddedResource}} data-action="launch-tiles-resource-modal"{{/isEmbeddedResource}}{{#isEmbeddedModule}}
                               data-action="launch-tiles-module-modal"{{/isEmbeddedModule}}{{/clickable}}{{#onclick}} onclick="{{onclick}}"{{/onclick}}';
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
                
                $buffer .= ' ';
                // 'clickable' section
                $value = $context->find('clickable');
                $buffer .= $this->sectionD11d8da38dfbda79677e06bbd8bde0a1($context, $indent, $value);
                // 'onclick' section
                $value = $context->find('onclick');
                $buffer .= $this->sectionF45e9a6285a5e3baaa5576fec4dc137c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21edb41a9341ea880ed460cdc37c795e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a href="{{url}}"{{#clickable}} {{#clickable}}{{#isEmbeddedResource}} data-action="launch-tiles-resource-modal"{{/isEmbeddedResource}}{{#isEmbeddedModule}}
                               data-action="launch-tiles-module-modal"{{/isEmbeddedModule}}{{/clickable}}{{#onclick}} onclick="{{onclick}}"{{/onclick}}{{/clickable}}
                               data-title="{{{modtitle}}}" class="instancename {{{extraclasses}}}"  data-action="launch-tiles-{{launchtype}}">
                                <img src="{{iconurl}}" class="iconlarge activityicon" alt="{{{modtitle}}}"
                                     role="presentation">
                                <span class="activitytitle">{{{modtitle}}}</span>
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
                
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                // 'clickable' section
                $value = $context->find('clickable');
                $buffer .= $this->section10d95753bccd8157f4c5dc6b807928ee($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                               data-title="';
                $value = $this->resolveValue($context->find('modtitle'), $context);
                $buffer .= $value;
                $buffer .= '" class="instancename ';
                $value = $this->resolveValue($context->find('extraclasses'), $context);
                $buffer .= $value;
                $buffer .= '"  data-action="launch-tiles-';
                $value = $this->resolveValue($context->find('launchtype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="iconlarge activityicon" alt="';
                $value = $this->resolveValue($context->find('modtitle'), $context);
                $buffer .= $value;
                $buffer .= '"
';
                $buffer .= $indent . '                                     role="presentation">
';
                $buffer .= $indent . '                                <span class="activitytitle">';
                $value = $this->resolveValue($context->find('modtitle'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $buffer .= $indent . '                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section202ddf415c0b16d57cf30d451735d5e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{availabilitymessage}}}';
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
                
                $value = $this->resolveValue($context->find('availabilitymessage'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section680f1bfca898780f1dc82acf50370830(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>format_tiles/availability_info}}';
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/availability_info')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65dee348c814458ded02cf3a547cef55(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#stealth}}{{{availabilitymessage}}}{{/stealth}}
                        {{^useSubtiles}}{{{availabilitymessage}}}{{/useSubtiles}}
                        {{^stealth}}{{#useSubtiles}}{{>format_tiles/availability_info}}{{/useSubtiles}}{{/stealth}}
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
                // 'stealth' section
                $value = $context->find('stealth');
                $buffer .= $this->section202ddf415c0b16d57cf30d451735d5e5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                // 'useSubtiles' inverted section
                $value = $context->find('useSubtiles');
                if (empty($value)) {
                    
                    $value = $this->resolveValue($context->find('availabilitymessage'), $context);
                    $buffer .= $value;
                }
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                // 'stealth' inverted section
                $value = $context->find('stealth');
                if (empty($value)) {
                    
                    // 'useSubtiles' section
                    $value = $context->find('useSubtiles');
                    $buffer .= $this->section680f1bfca898780f1dc82acf50370830($context, $indent, $value);
                }
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fb10ff98ddfd8f52dd739430a311331(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="subtilecontrols">
                    {{{cmmove}}}
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
                
                $buffer .= $indent . '                <span class="subtilecontrols">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('cmmove'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7299d491f3190cd72ed47f4daeec0685(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
             {{{cmeditmenu}}}
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
                
                $buffer .= $indent . '             ';
                $value = $this->resolveValue($context->find('cmeditmenu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46289a91226fcda96eda5480230f4192(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{>format_tiles/completion_icon}}
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/completion_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9639804c86ed4ba005b4d2abd3477e79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{^is_label}}
                    {{#completionenabled}}
                        {{>format_tiles/completion_icon}}
                    {{/completionenabled}}
                {{/is_label}}
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
                
                // 'is_label' inverted section
                $value = $context->find('is_label');
                if (empty($value)) {
                    
                    // 'completionenabled' section
                    $value = $context->find('completionenabled');
                    $buffer .= $this->section46289a91226fcda96eda5480230f4192($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcac6146e1cd8256e1efad43ae96bde5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>format_tiles/completion_icon}}
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/completion_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEca63854fab80c6d9a23ec73a10190a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{! completion is enabled for this course module}}
        {{! we only want to display a completion icon if we are using subtiles but this item is not a label,}}
        {{! or we are not using sub tiles.  This is because in subtiles format, labels are only}}
        {{! used to divide activity sub tiles }}
            {{#useSubtiles}}
                {{^is_label}}
                    {{#completionenabled}}
                        {{>format_tiles/completion_icon}}
                    {{/completionenabled}}
                {{/is_label}}
            {{/useSubtiles}}
            {{^useSubtiles}}
                {{#completionenabled}}
                    {{>format_tiles/completion_icon}}
                {{/completionenabled}}
            {{/useSubtiles}}
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
                
                // 'useSubtiles' section
                $value = $context->find('useSubtiles');
                $buffer .= $this->section9639804c86ed4ba005b4d2abd3477e79($context, $indent, $value);
                // 'useSubtiles' inverted section
                $value = $context->find('useSubtiles');
                if (empty($value)) {
                    
                    // 'completionenabled' section
                    $value = $context->find('completionenabled');
                    $buffer .= $this->sectionFcac6146e1cd8256e1efad43ae96bde5($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66385cf2a7e6b1c780975f079531c84c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="contentafterlink">
                <div class="no-overflow">
                    {{{description}}}
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
                
                $buffer .= $indent . '            <div class="contentafterlink">
';
                $buffer .= $indent . '                <div class="no-overflow">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
