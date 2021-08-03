<?php

class __Mustache_191ec5cec1e821a6fe05117a879a07fd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="nav-drawer" data-region="drawer" class="hidden-print moodle-has-zindex ';
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'closed';
        }
        $buffer .= '" aria-hidden="';
        // 'navdraweropen' section
        $value = $context->find('navdraweropen');
        $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'true';
        }
        $buffer .= '" tabindex="-1">
';
        if ($partial = $this->mustache->loadPartial('theme_moove/flat_navigation')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="nav-drawer-footer">
';
        $buffer .= $indent . '    <span id="themesettings-control">
';
        $buffer .= $indent . '        <i title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionEd19d427a5353ce4d81237efed8ecbb1($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '           class="fa fa-universal-access">
';
        $buffer .= $indent . '        </i>
';
        $buffer .= $indent . '        <span class="text">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionEd19d427a5353ce4d81237efed8ecbb1($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </span>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
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
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd19d427a5353ce4d81237efed8ecbb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'themesettingstitle, theme_moove';
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
                
                $buffer .= 'themesettingstitle, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
