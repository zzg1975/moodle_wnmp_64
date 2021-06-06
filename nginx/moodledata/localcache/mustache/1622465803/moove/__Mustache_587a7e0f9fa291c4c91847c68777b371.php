<?php

class __Mustache_587a7e0f9fa291c4c91847c68777b371 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<table class="table table-striped">
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <tr>
';
        $buffer .= $indent . '            <th>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section6e0ee4084280946fe085d0ca9da22f92($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2df70cc599602086ede5e5df8d202bfc($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        // 'expressions' section
        $value = $context->find('expressions');
        $buffer .= $this->sectionD533078a01237440a4389029da772df9($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';

        return $buffer;
    }

    private function section6e0ee4084280946fe085d0ca9da22f92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'devicedetectregexexpression, admin';
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
                
                $buffer .= 'devicedetectregexexpression, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2df70cc599602086ede5e5df8d202bfc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'devicedetectregexvalue, admin';
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
                
                $buffer .= 'devicedetectregexvalue, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD533078a01237440a4389029da772df9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <tr>
                <td class="c{{index}}">
                    <input type="text" name="{{name}}[expression{{index}}]" class="form-control" value="{{expression}}">
                </td>
                <td class="c{{index}}">
                    <input type="text" name="{{name}}[value{{index}}]" class="form-control" value="{{value}}">
                </td>
            </tr>
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
                
                $buffer .= $indent . '            <tr>
';
                $buffer .= $indent . '                <td class="c';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <input type="text" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '[expression';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ']" class="form-control" value="';
                $value = $this->resolveValue($context->find('expression'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '                <td class="c';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <input type="text" name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '[value';
                $value = $this->resolveValue($context->find('index'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ']" class="form-control" value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                </td>
';
                $buffer .= $indent . '            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
