<?php

class __Mustache_694c7205ea115ca88c4c4b95d9ee5253 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'hasblocks' section
        $value = $context->find('hasblocks');
        $buffer .= $this->section915075f77edb144b2c29a4608ca41162($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        // 'hasdrawertoggle' section
        $value = $context->find('hasdrawertoggle');
        $buffer .= $this->section6360be102b8627a2cc3b8b2290dfd1f8($context, $indent, $value);
        $buffer .= $indent . '</div><!-- Ends .page-wrapper -->
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_moove/footer')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionD2a92cc87a355d005535de41d7d75635($context, $indent, $value);

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

    private function section89a4d91d43d7d0570773cd005ef1160f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showhideblocks, theme_moove ';
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
                
                $buffer .= ' showhideblocks, theme_moove ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section915075f77edb144b2c29a4608ca41162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <i id="sidepreopen-control"
            aria-expanded="{{#draweropenright}}true{{/draweropenright}}{{^draweropenright}}false{{/draweropenright}}"
            aria-controls="sidepre-blocks"
            data-action="toggle-drawer"
            data-side="right"
            data-preference="sidepre-open"
            title="{{#str}} showhideblocks, theme_moove {{/str}}">
        </i>

        <section id="sidepre-blocks" data-region="blocks-column" class="hidden-print">
            {{{ sidepreblocks }}}
        </section>
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
                
                $buffer .= $indent . '        <i id="sidepreopen-control"
';
                $buffer .= $indent . '            aria-expanded="';
                // 'draweropenright' section
                $value = $context->find('draweropenright');
                $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
                // 'draweropenright' inverted section
                $value = $context->find('draweropenright');
                if (empty($value)) {
                    
                    $buffer .= 'false';
                }
                $buffer .= '"
';
                $buffer .= $indent . '            aria-controls="sidepre-blocks"
';
                $buffer .= $indent . '            data-action="toggle-drawer"
';
                $buffer .= $indent . '            data-side="right"
';
                $buffer .= $indent . '            data-preference="sidepre-open"
';
                $buffer .= $indent . '            title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section89a4d91d43d7d0570773cd005ef1160f($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '        </i>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <section id="sidepre-blocks" data-region="blocks-column" class="hidden-print">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '        </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6360be102b8627a2cc3b8b2290dfd1f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_moove/nav-drawer }}
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
                
                if ($partial = $this->mustache->loadPartial('theme_moove/nav-drawer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2a92cc87a355d005535de41d7d75635(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/loader\']);

require([\'theme_boost/drawer\'], function(mod) {
    mod.init();
});

require([\'theme_moove/metismenu\', \'jquery\'], function(metisMenu, $) {
    $(".metismenu").metisMenu();
});

require([], function() {
    var iconsearch = document.querySelector(\'.moove-search-input .slicon-magnifier\');
    var btnclosesearch = document.querySelector(\'.search-input-form .close-search\');
    var searchinputform = document.querySelector(\'.moove-search-input\');

    if (iconsearch) {

        var togglesearchinputform = function() {
            searchinputform.classList.toggle(\'expanded\');
        }

        iconsearch.onclick = togglesearchinputform;
        btnclosesearch.onclick = togglesearchinputform;
    }
});

require([\'theme_moove/accessibilitybar\'], function(bar) {
    bar.init();
});

require([\'theme_moove/themesettings\'], function(themesettings) {
    themesettings.init();
});

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
                
                $buffer .= $indent . 'require([\'theme_boost/loader\']);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'require([\'theme_boost/drawer\'], function(mod) {
';
                $buffer .= $indent . '    mod.init();
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'require([\'theme_moove/metismenu\', \'jquery\'], function(metisMenu, $) {
';
                $buffer .= $indent . '    $(".metismenu").metisMenu();
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'require([], function() {
';
                $buffer .= $indent . '    var iconsearch = document.querySelector(\'.moove-search-input .slicon-magnifier\');
';
                $buffer .= $indent . '    var btnclosesearch = document.querySelector(\'.search-input-form .close-search\');
';
                $buffer .= $indent . '    var searchinputform = document.querySelector(\'.moove-search-input\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    if (iconsearch) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var togglesearchinputform = function() {
';
                $buffer .= $indent . '            searchinputform.classList.toggle(\'expanded\');
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        iconsearch.onclick = togglesearchinputform;
';
                $buffer .= $indent . '        btnclosesearch.onclick = togglesearchinputform;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'require([\'theme_moove/accessibilitybar\'], function(bar) {
';
                $buffer .= $indent . '    bar.init();
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'require([\'theme_moove/themesettings\'], function(themesettings) {
';
                $buffer .= $indent . '    themesettings.init();
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
