<?php

class __Mustache_d160ac113be7ddb74d5e9502eb606e0d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li id="section-';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-section="';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="section main clearfix" role="region"
';
        $buffer .= $indent . '    aria-label="';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="content">
';
        // 'hidden_section' section
        $value = $context->find('hidden_section');
        $buffer .= $this->section48ea386d4b8fe4941f0f746b03fa1622($context, $indent, $value);
        $buffer .= $indent . '        <div class="left side"></div>
';
        $buffer .= $indent . '        <div class="right side"></div>
';
        // 'hidden_section' inverted section
        $value = $context->find('hidden_section');
        if (empty($value)) {
            
            // 'from_ajax' inverted section
            $value = $context->find('from_ajax');
            if (empty($value)) {
                
                if ($partial = $this->mustache->loadPartial('format_tiles/single_section_nav')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
            }
            // 'from_ajax' section
            $value = $context->find('from_ajax');
            $buffer .= $this->sectionE1556d413e9b08baedab4dcdbe817852($context, $indent, $value);
            // 'hastilephoto' inverted section
            $value = $context->find('hastilephoto');
            if (empty($value)) {
                
                $buffer .= $indent . '                <div class="tileiconcontainer" id="tileicon_single_';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                ';
                // 'isediting' section
                $value = $context->find('isediting');
                $buffer .= $this->section9fc266ce1b91eb575591832fb89bdb0d($context, $indent, $value);
                $buffer .= '>
';
                if ($partial = $this->mustache->loadPartial('format_tiles/tileicon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
            }
            $buffer .= $indent . '
';
            // 'hastilephoto' section
            $value = $context->find('hastilephoto');
            $buffer .= $this->sectionE2082cf5ff570012b45b0905f3c8a6b8($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '            <div class="pagesechead">
';
            $buffer .= $indent . '                <div class="sectiontitlecontainer">
';
            $buffer .= $indent . '                    <div class="sectiontitle" id="sectiontitle';
            $value = $this->resolveValue($context->find('tileid'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '" tabindex="3">
';
            $buffer .= $indent . '                        <h2>';
            // 'isediting' section
            $value = $context->find('isediting');
            $buffer .= $this->section9fcff15626d63e0deda9271ecf0b048b($context, $indent, $value);
            // 'isediting' inverted section
            $value = $context->find('isediting');
            if (empty($value)) {
                
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
            }
            $buffer .= '</h2>
';
            $buffer .= $indent . '                        ';
            // 'hidden' section
            $value = $context->find('hidden');
            $buffer .= $this->section32a70a1e9f830c8a3dd5fd05c1e40813($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('availabilitymessage'), $context);
            $buffer .= $value;
            $buffer .= '
';
            $buffer .= $indent . '            <div class="summary';
            // 'visible' inverted section
            $value = $context->find('visible');
            if (empty($value)) {
                
                $buffer .= ' dimmed';
            }
            $buffer .= '">';
            $value = $this->resolveValue($context->find('summary'), $context);
            $buffer .= $value;
            $buffer .= '</div>
';
            // 'isediting' section
            $value = $context->find('isediting');
            $buffer .= $this->section83cde679414d33ed6a19374fa9265781($context, $indent, $value);
            $buffer .= $indent . '            <ul class="section img-text ';
            // 'useSubtiles' inverted section
            $value = $context->find('useSubtiles');
            if (empty($value)) {
                
                $buffer .= 'no';
            }
            $buffer .= 'subtiles">
';
            // 'course_modules' section
            $value = $context->find('course_modules');
            $buffer .= $this->sectionD4a91d048ce350be4e669b5c28011949($context, $indent, $value);
            // 'useSubtiles' section
            $value = $context->find('useSubtiles');
            $buffer .= $this->section4ae1fc165147b59a85408c3c66466bed($context, $indent, $value);
            $buffer .= $indent . '            </ul>
';
            $buffer .= $indent . '
';
            // 'isediting' section
            $value = $context->find('isediting');
            $buffer .= $this->section8ead20d8bc8e6826856cde3e4dc97371($context, $indent, $value);
            // 'from_ajax' inverted section
            $value = $context->find('from_ajax');
            if (empty($value)) {
                
                // 'single_sec_content_is_long' section
                $value = $context->find('single_sec_content_is_long');
                $buffer .= $this->section0cb9bdf33b2b5eaa80cf4e00d43d9a9b($context, $indent, $value);
            }
            $buffer .= $indent . '
';
            // 'completion_help' section
            $value = $context->find('completion_help');
            $buffer .= $this->section9c65ee63ee05bceb1c2d0ec9a181507b($context, $indent, $value);
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</li>';

        return $buffer;
    }

    private function section31ae0fbdc439c6d3e86010ee0fe2597e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notavailable';
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
                
                $buffer .= 'notavailable';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48ea386d4b8fe4941f0f746b03fa1622(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#str}}notavailable{{/str}}
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
                
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section31ae0fbdc439c6d3e86010ee0fe2597e($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe7cbd9c9dac158cc537b0cead9e16c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'close, format_tiles';
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
                
                $buffer .= 'close, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9de0cc86ce9bf58c0c382a47b9cf6593(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'close, format_tiles, {{#str}}close, format_tiles{{/str}}';
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
                
                $buffer .= 'close, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFe7cbd9c9dac158cc537b0cead9e16c8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
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
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78f50f53d43e23f2e4064014fd464cc6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pencil, format_tiles, {{#str}}edit{{/str}}';
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
                
                $buffer .= 'pencil, format_tiles, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9fb29627e42bac884d76e6f9e0089a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{^isediting}}
                            <a class="sectionbutton pull-right" id="editsectiontbtn-{{tileid}}"
                               href="{{{ config.wwwroot }}}/course/view.php?id={{courseid}}&section={{tileid}}&sesskey={{sesskey}}&edit=on">
                            {{#pix}}pencil, format_tiles, {{#str}}edit{{/str}}{{/pix}}
                            </a>
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
                    
                    $buffer .= $indent . '                            <a class="sectionbutton pull-right" id="editsectiontbtn-';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                               href="';
                    $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                    $buffer .= $value;
                    $buffer .= '/course/view.php?id=';
                    $value = $this->resolveValue($context->find('courseid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '&section=';
                    $value = $this->resolveValue($context->find('tileid'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '&sesskey=';
                    $value = $this->resolveValue($context->find('sesskey'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '&edit=on">
';
                    $buffer .= $indent . '                            ';
                    // 'pix' section
                    $value = $context->find('pix');
                    $buffer .= $this->section78f50f53d43e23f2e4064014fd464cc6($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                            </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1556d413e9b08baedab4dcdbe817852(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="sectionbuttons">
                        <span class="sectionbutton closesectionbtn pull-right" id="closesectionbtn-{{tileid}}"
                              title="{{#str}}close, format_tiles{{/str}}" tabindex="3" data-section="{{tileid}}">
                            {{#pix}}close, format_tiles, {{#str}}close, format_tiles{{/str}}{{/pix}}
                        </span>
                    {{#canedit}}
                        {{^isediting}}
                            <a class="sectionbutton pull-right" id="editsectiontbtn-{{tileid}}"
                               href="{{{ config.wwwroot }}}/course/view.php?id={{courseid}}&section={{tileid}}&sesskey={{sesskey}}&edit=on">
                            {{#pix}}pencil, format_tiles, {{#str}}edit{{/str}}{{/pix}}
                            </a>
                        {{/isediting}}
                    {{/canedit}}
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
                
                $buffer .= $indent . '                <div class="sectionbuttons">
';
                $buffer .= $indent . '                        <span class="sectionbutton closesectionbtn pull-right" id="closesectionbtn-';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                              title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionFe7cbd9c9dac158cc537b0cead9e16c8($context, $indent, $value);
                $buffer .= '" tabindex="3" data-section="';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section9de0cc86ce9bf58c0c382a47b9cf6593($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                // 'canedit' section
                $value = $context->find('canedit');
                $buffer .= $this->sectionF9fb29627e42bac884d76e6f9e0089a2($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
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

    private function section9fc266ce1b91eb575591832fb89bdb0d(Mustache_Context $context, $indent, $value)
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
                $buffer .= $indent . '                     data-original-title="';
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

    private function section673ab855fc7c1a54ffb6756fd3478aae(Mustache_Context $context, $indent, $value)
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
                $buffer .= $indent . '                         data-original-title="';
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
                $buffer .= $indent . '                        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA62f73f040b1bda14e15588d05f9b362(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="tileiconcontainer hasphoto" id="tileicon_{{tileid}}"
                        {{#isediting}}data-toggle="tooltip" data-placement="left"
                         data-original-title="{{^allowphototiles}}{{#str}}picknewicon, format_tiles{{/str}}{{/allowphototiles}}{{#allowphototiles}}{{#str}}picknewiconphoto, format_tiles{{/str}}{{/allowphototiles}}"
                        {{/isediting}}>

                        {{>format_tiles/tilebarphoto}}
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
                
                $buffer .= $indent . '                    <div class="tileiconcontainer hasphoto" id="tileicon_';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        ';
                // 'isediting' section
                $value = $context->find('isediting');
                $buffer .= $this->section673ab855fc7c1a54ffb6756fd3478aae($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '
';
                if ($partial = $this->mustache->loadPartial('format_tiles/tilebarphoto')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2082cf5ff570012b45b0905f3c8a6b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#isediting}}
                    <div class="tileiconcontainer hasphoto" id="tileicon_{{tileid}}"
                        {{#isediting}}data-toggle="tooltip" data-placement="left"
                         data-original-title="{{^allowphototiles}}{{#str}}picknewicon, format_tiles{{/str}}{{/allowphototiles}}{{#allowphototiles}}{{#str}}picknewiconphoto, format_tiles{{/str}}{{/allowphototiles}}"
                        {{/isediting}}>

                        {{>format_tiles/tilebarphoto}}
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
                
                // 'isediting' section
                $value = $context->find('isediting');
                $buffer .= $this->sectionA62f73f040b1bda14e15588d05f9b362($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9fcff15626d63e0deda9271ecf0b048b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{inplace_editable_title}}}';
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
                
                $value = $this->resolveValue($context->find('inplace_editable_title'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32a70a1e9f830c8a3dd5fd05c1e40813(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="icon20" id="hiddeneye" title="Hidden"></span>';
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
                
                $buffer .= '<span class="icon20" id="hiddeneye" title="Hidden"></span>';
                $context->pop();
            }
        }
    
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

    private function section05cebe9407e8c890f1f96a414f0f7fb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    i/settings, core';
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
                $buffer .= $indent . '                    i/settings, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83cde679414d33ed6a19374fa9265781(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a title="{{#str}}editsummary, core{{/str}}"
                   href="{{{config.wwwroot}}}/course/editsection.php?id={{secid}}&sr={{tileid}}">{{#pix}}
                    i/settings, core{{/pix}}
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
                $buffer .= '"
';
                $buffer .= $indent . '                   href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= $value;
                $buffer .= '/course/editsection.php?id=';
                $value = $this->resolveValue($context->find('secid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '&sr=';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section05cebe9407e8c890f1f96a414f0f7fb1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4a91d048ce350be4e669b5c28011949(Mustache_Context $context, $indent, $value)
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
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ae1fc165147b59a85408c3c66466bed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="activity subtile spacer" aria-hidden="true"></li>
                    <li class="activity subtile spacer" aria-hidden="true"></li>
                    <li class="activity subtile spacer" aria-hidden="true"></li>
                    <li class="activity subtile spacer" aria-hidden="true"></li>
                    <li class="activity subtile spacer" aria-hidden="true"></li>
                    <li class="activity subtile spacer" aria-hidden="true"></li>
                    <li class="activity subtile spacer" aria-hidden="true"></li>
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
                
                $buffer .= $indent . '                    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '                    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '                    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '                    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '                    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '                    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $buffer .= $indent . '                    <li class="activity subtile spacer" aria-hidden="true"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ead20d8bc8e6826856cde3e4dc97371(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{single_sec_add_cm_control_html}}}
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
                $value = $this->resolveValue($context->find('single_sec_add_cm_control_html'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0cb9bdf33b2b5eaa80cf4e00d43d9a9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{!repeat nav arrows at bottom of page if it is long}}
                    {{>format_tiles/single_section_nav}}
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
                
                if ($partial = $this->mustache->loadPartial('format_tiles/single_section_nav')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a932fd645fc57de911376c50792641f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'yourprogress, completion';
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
                
                $buffer .= 'yourprogress, completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe6d1ca3794975639c9883cdbaddeabf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_help, format_tiles';
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
                
                $buffer .= 'completion_help, format_tiles';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section140d3900a806887f1155d1216da95f3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'help, core, {{alt}}';
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
                
                $buffer .= 'help, core, ';
                $value = $this->resolveValue($context->find('alt'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c65ee63ee05bceb1c2d0ec9a181507b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <span class="completionhelp pull-right">{{#str}}yourprogress, completion{{/str}}
                    <a id="completionhelp_{{tileid}}" class="btn btn-link p-a-0 progresshelp" role="button"
                       data-container="body" data-toggle="popover"
                       data-placement="left" data-content="{{#str}}completion_help, format_tiles{{/str}}"
                       data-html="true" tabindex="-1" data-trigger="focus">
                        {{#pix}}help, core, {{alt}}{{/pix}}
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
                
                $buffer .= $indent . '                <span class="completionhelp pull-right">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section1a932fd645fc57de911376c50792641f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    <a id="completionhelp_';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="btn btn-link p-a-0 progresshelp" role="button"
';
                $buffer .= $indent . '                       data-container="body" data-toggle="popover"
';
                $buffer .= $indent . '                       data-placement="left" data-content="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionCe6d1ca3794975639c9883cdbaddeabf($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                       data-html="true" tabindex="-1" data-trigger="focus">
';
                $buffer .= $indent . '                        ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section140d3900a806887f1155d1216da95f3a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
