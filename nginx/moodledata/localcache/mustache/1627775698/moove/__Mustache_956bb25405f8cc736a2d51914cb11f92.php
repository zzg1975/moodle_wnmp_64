<?php

class __Mustache_956bb25405f8cc736a2d51914cb11f92 extends Mustache_Template
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
        $buffer .= $indent . '<li id="section-';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="section main ';
        // 'hidden' section
        $value = $context->find('hidden');
        $buffer .= $this->section4858eb985bfdb74523c1ae0e6196d23e($context, $indent, $value);
        // 'isactive' section
        $value = $context->find('isactive');
        $buffer .= $this->section16880f7a319f46b0bd91615f4e3be3ae($context, $indent, $value);
        $buffer .= 'clearfix';
        // 'restricted' section
        $value = $context->find('restricted');
        $buffer .= $this->section9b6b7f1c4ea0a7e0c4b315c5dbdb62a3($context, $indent, $value);
        // 'hastilephoto' section
        $value = $context->find('hastilephoto');
        $buffer .= $this->sectionD27432dd52ebb326f8f1e3f61815a210($context, $indent, $value);
        $buffer .= ' collapsed"
';
        $buffer .= $indent . '    role="region" data-section="';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-true-sectionid="';
        $value = $this->resolveValue($context->find('secid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-sectionid="';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" aria-label="';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= $value;
        $buffer .= '">
';
        $buffer .= $indent . '    <span class="hidden sectionname">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '    <div class="left side">';
        $value = $this->resolveValue($context->find('leftcontent'), $context);
        $buffer .= $value;
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="right side">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('rightcontent'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->section9dd158017151498c952e7a0b73c5be05($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="content">
';
        $buffer .= $indent . '        <div class="tile_bar narrow" data-section="';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'hastilephoto' inverted section
        $value = $context->find('hastilephoto');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="tileiconcontainer" id="tileicon_';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"
';
            $buffer .= $indent . '                    ';
            // 'isediting' section
            $value = $context->find('isediting');
            $buffer .= $this->section5882b3df0c572de61db395fd1efc55f0($context, $indent, $value);
            $buffer .= '>
';
            if ($partial = $this->mustache->loadPartial('format_tiles/tileicon')) {
                $buffer .= $partial->renderInternal($context, $indent . '                        ');
            }
            $buffer .= $indent . '                </div>
';
        }
        // 'hastilephoto' section
        $value = $context->find('hastilephoto');
        $buffer .= $this->section39f0859af83016dd0dbc5ba4ee8bce03($context, $indent, $value);
        // 'isediting' inverted section
        $value = $context->find('isediting');
        if (empty($value)) {
            
            $buffer .= $indent . '                <span class="tile_bar_text">
';
            $buffer .= $indent . '                  <span class="tile-textinner';
            $value = $this->resolveValue($context->find('titleclass'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '" id="tileTextin-';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
            $buffer .= $indent . '                    ';
            // 'title' section
            $value = $context->find('title');
            $buffer .= $this->section6b576fa5b059fb1123b9dc614865d73f($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                  </span>
';
            $buffer .= $indent . '              </span>
';
        }
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->section36b17c39ef11a18469f8dc9076f99aab($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->sectionF2b25b29f213b75d1929fd1b76c21aaf($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section4858eb985bfdb74523c1ae0e6196d23e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidden ';
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
                
                $buffer .= 'hidden ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section16880f7a319f46b0bd91615f4e3be3ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'current ';
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
                
                $buffer .= 'current ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b6b7f1c4ea0a7e0c4b315c5dbdb62a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tile_bar_restricted';
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
                
                $buffer .= ' tile_bar_restricted';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD27432dd52ebb326f8f1e3f61815a210(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' phototilebar';
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
                
                $buffer .= ' phototilebar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9dd158017151498c952e7a0b73c5be05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{section_edit_control}}}';
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
                
                $value = $this->resolveValue($context->find('section_edit_control'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa52e14d9db90ec37b236f39dc78c82e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'picknewicon, format_tiles';
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
                
                $buffer .= 'picknewicon, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF32f5bbcf6805d6f2767abe2a98bfa4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'picknewiconphoto, format_tiles';
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
                
                $buffer .= 'picknewiconphoto, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section366205ecbdff702f963ebbfc675cc9be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}picknewiconphoto, format_tiles{{/str}}';
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
                $buffer .= $this->sectionF32f5bbcf6805d6f2767abe2a98bfa4d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5882b3df0c572de61db395fd1efc55f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-toggle="tooltip" data-placement="left"
                        data-original-title="{{^allowphototiles}}{{#str}}picknewicon, format_tiles{{/str}}{{/allowphototiles}}{{#allowphototiles}}{{#str}}picknewiconphoto, format_tiles{{/str}}{{/allowphototiles}}"
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
                
                $buffer .= 'data-toggle="tooltip" data-placement="left"
';
                $buffer .= $indent . '                        data-original-title="';
                // 'allowphototiles' inverted section
                $value = $context->find('allowphototiles');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionFa52e14d9db90ec37b236f39dc78c82e($context, $indent, $value);
                }
                // 'allowphototiles' section
                $value = $context->find('allowphototiles');
                $buffer .= $this->section366205ecbdff702f963ebbfc675cc9be($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                     ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8794fee4bfb710cd7a0a00419caa5b3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'data-toggle="tooltip" data-placement="left"
                      data-original-title="{{^allowphototiles}}{{#str}}picknewicon, format_tiles{{/str}}{{/allowphototiles}}{{#allowphototiles}}{{#str}}picknewiconphoto, format_tiles{{/str}}{{/allowphototiles}}"
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
                
                $buffer .= 'data-toggle="tooltip" data-placement="left"
';
                $buffer .= $indent . '                      data-original-title="';
                // 'allowphototiles' inverted section
                $value = $context->find('allowphototiles');
                if (empty($value)) {
                    
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->sectionFa52e14d9db90ec37b236f39dc78c82e($context, $indent, $value);
                }
                // 'allowphototiles' section
                $value = $context->find('allowphototiles');
                $buffer .= $this->section366205ecbdff702f963ebbfc675cc9be($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39f0859af83016dd0dbc5ba4ee8bce03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="tileiconcontainer hasphoto" id="tileicon_{{tileid}}"
                {{#isediting}}data-toggle="tooltip" data-placement="left"
                      data-original-title="{{^allowphototiles}}{{#str}}picknewicon, format_tiles{{/str}}{{/allowphototiles}}{{#allowphototiles}}{{#str}}picknewiconphoto, format_tiles{{/str}}{{/allowphototiles}}"
                {{/isediting}}>
                    {{>format_tiles/tilebarphoto}}
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
                
                $buffer .= $indent . '                <span class="tileiconcontainer hasphoto" id="tileicon_';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                ';
                // 'isediting' section
                $value = $context->find('isediting');
                $buffer .= $this->section8794fee4bfb710cd7a0a00419caa5b3f($context, $indent, $value);
                $buffer .= '>
';
                if ($partial = $this->mustache->loadPartial('format_tiles/tilebarphoto')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b576fa5b059fb1123b9dc614865d73f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h3 id="tileText-{{tileid}}">{{{title}}}</h3>';
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
                
                $buffer .= '<h3 id="tileText-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '</h3>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD44735bb46c7c26ca90a9ba3bacaa65e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hidden, format_tiles';
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
                
                $buffer .= 'hidden, format_tiles';
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

    private function section5e7c999a421bea017be116c8476d664a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a class="expand-collapse-sec collapse-section pull-right" data-toggle="tooltip" data-placement="right" data-original-title="{{#str}}collapse, format_tiles{{/str}}"
                       data-section="{{tileid}}" href="{{{config.wwwroot}}}/course/view.php?id={{courseid}}&expand=-1#section-{{tileid}}" id="collapse{{tileid}}">
                      </span>
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
                
                $buffer .= $indent . '                    <a class="expand-collapse-sec collapse-section pull-right" data-toggle="tooltip" data-placement="right" data-original-title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section80c2c27771a3358240d693d9f51b565b($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                       data-section="';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/view.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&expand=-1#section-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" id="collapse';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                      </span>
';
                $buffer .= $indent . '                    </a>
';
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

    private function section36b17c39ef11a18469f8dc9076f99aab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="tile_bar_text" tabindex="3">
                    {{{inplace_editable_title}}}
                </span>

                <div class="icon20 pull-right" id="hiddeneye{{tileid}}" title="{{#str}}hidden, format_tiles{{/str}}"></div>
                {{#is_expanded}}
                    <a class="expand-collapse-sec collapse-section pull-right" data-toggle="tooltip" data-placement="right" data-original-title="{{#str}}collapse, format_tiles{{/str}}"
                       data-section="{{tileid}}" href="{{{config.wwwroot}}}/course/view.php?id={{courseid}}&expand=-1#section-{{tileid}}" id="collapse{{tileid}}">
                      </span>
                    </a>
                {{/is_expanded}}
                {{^is_expanded}}
                    <a class="expand-collapse-sec expand-section pull-right" data-toggle="tooltip" data-placement="right" data-original-title="{{#str}}expand, format_tiles{{/str}}"
                       data-true-sectionid="{{secid}}" data-section="{{tileid}}" id="expand{{tileid}}"
                       href="{{{config.wwwroot}}}/course/view.php?id={{courseid}}&expand={{tileid}}#section-{{tileid}}">
                    </a>
                {{/is_expanded}}
                <div class="section-summary-activities pull-right"><small>{{{activity_summary}}}</small></div>
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
                
                $buffer .= $indent . '                <span class="tile_bar_text" tabindex="3">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('inplace_editable_title'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="icon20 pull-right" id="hiddeneye';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD44735bb46c7c26ca90a9ba3bacaa65e($context, $indent, $value);
                $buffer .= '"></div>
';
                // 'is_expanded' section
                $value = $context->find('is_expanded');
                $buffer .= $this->section5e7c999a421bea017be116c8476d664a($context, $indent, $value);
                // 'is_expanded' inverted section
                $value = $context->find('is_expanded');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <a class="expand-collapse-sec expand-section pull-right" data-toggle="tooltip" data-placement="right" data-original-title="';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section3c7f89162282c2ef7fdbadc4c3b09f4b($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                       data-true-sectionid="';
                    $value = $this->resolveValue($context->find('secid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-section="';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" id="expand';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                       href="';
                    $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                    $buffer .= $value;
                    $buffer .= '/course/view.php?id=';
                    $value = $this->resolveValue($context->find('courseid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '&expand=';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '#section-';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                    </a>
';
                }
                $buffer .= $indent . '                <div class="section-summary-activities pull-right"><small>';
                $value = $this->resolveValue($context->find('activity_summary'), $context);
                $buffer .= $value;
                $buffer .= '</small></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6f4d8337157f0d74441f54739f9caa4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tileoutofsequence, format_tiles';
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
                
                $buffer .= 'tileoutofsequence, format_tiles';
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

    private function section01e9b3ce636a86178f21325406efbe2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="alert alert-danger" class="sequence-warning">
                    {{#str}}tileoutofsequence, format_tiles{{/str}}
                    <a class="btn btn-secondary" title="{{#str}}fixproblems, format_tiles{{/str}}"
                       href="{{{config.wwwroot}}}/course/format/tiles/teachertools.php?id={{courseid}}&action=reordersections&sesskey={{sesskey}}">
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
                
                $buffer .= $indent . '                <div class="alert alert-danger" class="sequence-warning">
';
                $buffer .= $indent . '                    ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD6f4d8337157f0d74441f54739f9caa4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <a class="btn btn-secondary" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF7c5ac04ed666e8fd1363f3b0e132990($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                       href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/format/tiles/teachertools.php?id=';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&action=reordersections&sesskey=';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF7c5ac04ed666e8fd1363f3b0e132990($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64e78f41b56a7c3fd5c26d4552e86f63(Mustache_Context $context, $indent, $value)
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
                    $buffer .= $partial->renderInternal($context, $indent . '                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0858fe18a3b3013190f2de69e868f22(Mustache_Context $context, $indent, $value)
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
                $buffer .= $this->section64e78f41b56a7c3fd5c26d4552e86f63($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1624fa5ba4eb8317798f4ecbeac89370(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="display: none;"';
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
                
                $buffer .= ' style="display: none;"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2b25b29f213b75d1929fd1b76c21aaf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#numberisoutofsequence}}
                <div class="alert alert-danger" class="sequence-warning">
                    {{#str}}tileoutofsequence, format_tiles{{/str}}
                    <a class="btn btn-secondary" title="{{#str}}fixproblems, format_tiles{{/str}}"
                       href="{{{config.wwwroot}}}/course/format/tiles/teachertools.php?id={{courseid}}&action=reordersections&sesskey={{sesskey}}">
                        {{#str}}fixproblems, format_tiles{{/str}}
                    </a>
                </div>
            {{/numberisoutofsequence}}
            <div class="summary">{{{section_summary}}}</div>
            <div class="section_availability">
                {{{availabilitymessage}}}
            </div>
            <div id="section-{{tileid}}-content">
                <ul class="section img-text {{^useSubtiles}}no{{/useSubtiles}}subtiles">
                    {{#is_expanded}}
                            {{#course_modules}}
                                {{>format_tiles/course_module}}
                            {{/course_modules}}
                    {{/is_expanded}}
                </ul>
                <div class="mod-chooser-outer"{{#hideaddcmcontrol}} style="display: none;"{{/hideaddcmcontrol}}>{{{single_sec_add_cm_control_html}}}</div>
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
                
                // 'numberisoutofsequence' section
                $value = $context->find('numberisoutofsequence');
                $buffer .= $this->section01e9b3ce636a86178f21325406efbe2c($context, $indent, $value);
                $buffer .= $indent . '            <div class="summary">';
                $value = $this->resolveValue($context->find('section_summary'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '            <div class="section_availability">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('availabilitymessage'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div id="section-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-content">
';
                $buffer .= $indent . '                <ul class="section img-text ';
                // 'useSubtiles' inverted section
                $value = $context->find('useSubtiles');
                if (empty($value)) {
                    
                    $buffer .= 'no';
                }
                $buffer .= 'subtiles">
';
                // 'is_expanded' section
                $value = $context->find('is_expanded');
                $buffer .= $this->sectionB0858fe18a3b3013190f2de69e868f22($context, $indent, $value);
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '                <div class="mod-chooser-outer"';
                // 'hideaddcmcontrol' section
                $value = $context->find('hideaddcmcontrol');
                $buffer .= $this->section1624fa5ba4eb8317798f4ecbeac89370($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('single_sec_add_cm_control_html'), $context);
                $buffer .= $value;
                $buffer .= '</div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
