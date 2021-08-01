<?php

class __Mustache_cdda764736ffa16dac7d77364f36ab26 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="block-myoverview-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="block-myoverview block-cards" data-region="myoverview" role="navigation">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div data-region="filter" class="d-flex align-items-center flex-wrap" aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6dacaeff51ba425cb4a640a8ca853997($context, $indent, $value);
        $buffer .= '">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/nav-grouping-selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/nav-sort-selector')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        // 'displaydropdown' section
        $value = $context->find('displaydropdown');
        $buffer .= $this->section4e6f76c511878bfa40231982493bf2ad($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="container-fluid p-0">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/courses-view')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->section386b7d71bdc9db8625cd5cfe5736c587($context, $indent, $value);

        return $buffer;
    }

    private function section6dacaeff51ba425cb4a640a8ca853997(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria:controls, block_myoverview ';
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
                
                $buffer .= ' aria:controls, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e6f76c511878bfa40231982493bf2ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> block_myoverview/nav-display-selector }}
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
                
                if ($partial = $this->mustache->loadPartial('block_myoverview/nav-display-selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section386b7d71bdc9db8625cd5cfe5736c587(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(
[
    \'jquery\',
    \'block_myoverview/main\',
],
function(
    $,
    Main
) {
    var root = $(\'#block-myoverview-{{uniqid}}\');
    Main.init(root);
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
                
                $buffer .= $indent . 'require(
';
                $buffer .= $indent . '[
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'block_myoverview/main\',
';
                $buffer .= $indent . '],
';
                $buffer .= $indent . 'function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    Main
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var root = $(\'#block-myoverview-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\');
';
                $buffer .= $indent . '    Main.init(root);
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
