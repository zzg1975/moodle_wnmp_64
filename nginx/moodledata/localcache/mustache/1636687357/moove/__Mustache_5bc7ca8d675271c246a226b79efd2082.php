<?php

class __Mustache_5bc7ca8d675271c246a226b79efd2082 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="accessibilitybar" class="fixed-top">
';
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <div class="bars">
';
        $buffer .= $indent . '            <div class="fontsize">
';
        $buffer .= $indent . '                <span>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section21d9b7b6dedab94ec6c633401a6f4837($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                <ul>
';
        $buffer .= $indent . '                    <li><a class="btn btn-default" data-action="decrease" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section69f88b70b0536a07a67b3eb0399634a4($context, $indent, $value);
        $buffer .= '" id="fontsize_dec">A-</a></li>
';
        $buffer .= $indent . '                    <li><a class="btn btn-default" data-action="reset" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA7e96f726748159e46666ecb0b64838e($context, $indent, $value);
        $buffer .= '" id="fontsize_reset">A</a></li>
';
        $buffer .= $indent . '                    <li><a class="btn btn-default" data-action="increase" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE9994ec8084d5f35ab90b37d3cc82e25($context, $indent, $value);
        $buffer .= '" id="fontsize_inc">A+</a></li>
';
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="sitecolor">
';
        $buffer .= $indent . '                <span>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9e64b98750a6a38f1b91587686c59b56($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                <ul>
';
        $buffer .= $indent . '                    <li><a class="btn btn-default" data-action="reset" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionDa8c31b89409c814976de215a7faaa68($context, $indent, $value);
        $buffer .= '" id="sitecolor_color1">R</a></li>
';
        $buffer .= $indent . '                    <li><a class="btn btn-default" data-action="sitecolor-color-2" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section11cb3ea410277d2a7abb527d3d73cb93($context, $indent, $value);
        $buffer .= '" id="sitecolor_color2">A</a></li>
';
        $buffer .= $indent . '                    <li><a class="btn btn-default" data-action="sitecolor-color-3" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8519c81bda020ffb0046beee7ffcfefa($context, $indent, $value);
        $buffer .= '" id="sitecolor_color3">A</a></li>
';
        $buffer .= $indent . '                    <li><a class="btn btn-default" data-action="sitecolor-color-4" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAc866160ce1a045b6b333a3c43b60a78($context, $indent, $value);
        $buffer .= '" id="sitecolor_color4">A</a></li>
';
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section21d9b7b6dedab94ec6c633401a6f4837(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'accessibilityfontsize, theme_moove';
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
                
                $buffer .= 'accessibilityfontsize, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69f88b70b0536a07a67b3eb0399634a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'accessibilitydecreasefont, theme_moove';
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
                
                $buffer .= 'accessibilitydecreasefont, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7e96f726748159e46666ecb0b64838e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'accessibilityresetfont, theme_moove';
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
                
                $buffer .= 'accessibilityresetfont, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9994ec8084d5f35ab90b37d3cc82e25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'accessibilityincreasefont, theme_moove';
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
                
                $buffer .= 'accessibilityincreasefont, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e64b98750a6a38f1b91587686c59b56(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'accessibilitysitecolor, theme_moove';
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
                
                $buffer .= 'accessibilitysitecolor, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa8c31b89409c814976de215a7faaa68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'accessibilityresetsitecolor, theme_moove';
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
                
                $buffer .= 'accessibilityresetsitecolor, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11cb3ea410277d2a7abb527d3d73cb93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'accessibilitysitecolor2, theme_moove';
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
                
                $buffer .= 'accessibilitysitecolor2, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8519c81bda020ffb0046beee7ffcfefa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'accessibilitysitecolor3, theme_moove';
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
                
                $buffer .= 'accessibilitysitecolor3, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc866160ce1a045b6b333a3c43b60a78(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'accessibilitysitecolor4, theme_moove';
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
                
                $buffer .= 'accessibilitysitecolor4, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
