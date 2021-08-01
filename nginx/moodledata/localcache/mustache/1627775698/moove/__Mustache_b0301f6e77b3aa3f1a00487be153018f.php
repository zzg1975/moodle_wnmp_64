<?php

class __Mustache_b0301f6e77b3aa3f1a00487be153018f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/accessibilitybar')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<nav class="fixed-top navbar navbar-light navbar-expand moodle-has-zindex">
';
        // 'hasdrawertoggle' section
        $value = $context->find('hasdrawertoggle');
        $buffer .= $this->sectionB2a9fe2f8a5c0e7dcb850e76f0483fd1($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= $value;
        $buffer .= '" class="navbar-brand ';
        // 'output.get_logo' section
        $value = $context->findDot('output.get_logo');
        $buffer .= $this->sectionE1b7734efa381e40cb6792ff2d8c4194($context, $indent, $value);
        $buffer .= '
';
        // 'output.get_logo' inverted section
        $value = $context->findDot('output.get_logo');
        if (empty($value)) {
            
            $buffer .= $indent . '            d-none d-sm-inline
';
        }
        $buffer .= $indent . '            ">
';
        // 'output.get_logo' section
        $value = $context->findDot('output.get_logo');
        $buffer .= $this->section1fc0d881e020b158a87e37b98adfd66f($context, $indent, $value);
        // 'output.get_logo' inverted section
        $value = $context->findDot('output.get_logo');
        if (empty($value)) {
            
            $buffer .= $indent . '            <span class="site-name d-none d-md-inline">';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= $value;
            $buffer .= '</span>
';
        }
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <ul class="navbar-nav d-none d-md-flex custom-menus">
';
        $buffer .= $indent . '        <!-- custom_menu -->
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        <!-- page_heading_menu -->
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.page_heading_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '    <ul class="nav navbar-nav ml-auto">
';
        $buffer .= $indent . '        <div class="d-none d-lg-block">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.search_box'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <li class="nav-item lang-menu">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.render_lang_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.user_menu'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</nav>
';

        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
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
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB88b20c96dd523877b35fd7e4389a3fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sidepanel, core';
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
                
                $buffer .= 'sidepanel, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2a9fe2f8a5c0e7dcb850e76f0483fd1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div data-region="drawer-toggle" class="d-inline-block mr-3 drawer-toggle">
            <button aria-expanded="{{#navdraweropen}}true{{/navdraweropen}}{{^navdraweropen}}false{{/navdraweropen}}" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav"><i class="slicon-menu"></i><span class="sr-only">{{#str}}sidepanel, core{{/str}}</span></button>
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
                
                $buffer .= $indent . '        <div data-region="drawer-toggle" class="d-inline-block mr-3 drawer-toggle">
';
                $buffer .= $indent . '            <button aria-expanded="';
                // 'navdraweropen' section
                $value = $context->find('navdraweropen');
                $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
                // 'navdraweropen' inverted section
                $value = $context->find('navdraweropen');
                if (empty($value)) {
                    
                    $buffer .= 'false';
                }
                $buffer .= '" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav"><i class="slicon-menu"></i><span class="sr-only">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB88b20c96dd523877b35fd7e4389a3fd($context, $indent, $value);
                $buffer .= '</span></button>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1b7734efa381e40cb6792ff2d8c4194(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-logo';
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
                
                $buffer .= 'has-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1fc0d881e020b158a87e37b98adfd66f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <span class="logo d-none d-sm-inline">
                <img src="{{output.get_logo}}" alt="{{sitename}}">
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
                
                $buffer .= $indent . '            <span class="logo d-none d-sm-inline">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->findDot('output.get_logo'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
