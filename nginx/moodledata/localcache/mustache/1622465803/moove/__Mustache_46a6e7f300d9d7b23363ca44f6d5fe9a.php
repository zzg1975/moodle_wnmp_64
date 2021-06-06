<?php

class __Mustache_46a6e7f300d9d7b23363ca44f6d5fe9a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'divider' inverted section
        $value = $context->find('divider');
        if (empty($value)) {
            
            // 'haschildren' section
            $value = $context->find('haschildren');
            $buffer .= $this->section7a0fa7573e547165b91ba85b77219fe6($context, $indent, $value);
            // 'haschildren' inverted section
            $value = $context->find('haschildren');
            if (empty($value)) {
                
                $buffer .= $indent . '<a class="nav-item nav-link" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" ';
                // 'title' section
                $value = $context->find('title');
                $buffer .= $this->section4b8b1d056248164fd07f210141302f45($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
            }
        }

        return $buffer;
    }

    private function section4b8b1d056248164fd07f210141302f45(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{{title}}}"';
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
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section949acfab51c23a4bc28d7c31c3422002(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="dropdown-divider"></div>
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
                
                $buffer .= $indent . '                <div class="dropdown-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97a96bd5ac4a61b3e7a4b268a0480dda(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{^divider}}
                <a class="dropdown-item" href="{{{url}}}" {{#title}}title="{{{title}}}"{{/title}}>{{text}}</a>
            {{/divider}}
            {{#divider}}
                <div class="dropdown-divider"></div>
            {{/divider}}
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
                
                // 'divider' inverted section
                $value = $context->find('divider');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <a class="dropdown-item" href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= $value;
                    $buffer .= '" ';
                    // 'title' section
                    $value = $context->find('title');
                    $buffer .= $this->section4b8b1d056248164fd07f210141302f45($context, $indent, $value);
                    $buffer .= '>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a>
';
                }
                // 'divider' section
                $value = $context->find('divider');
                $buffer .= $this->section949acfab51c23a4bc28d7c31c3422002($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a0fa7573e547165b91ba85b77219fe6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="dropdown nav-item">
    <a class="dropdown-toggle nav-link" id="drop-down-{{uniqid}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
        <i class="slicon-globe"></i>
    </a>
    <div class="dropdown-menu" aria-labelledby="drop-down-{{uniqid}}">
        {{#children}}
            {{^divider}}
                <a class="dropdown-item" href="{{{url}}}" {{#title}}title="{{{title}}}"{{/title}}>{{text}}</a>
            {{/divider}}
            {{#divider}}
                <div class="dropdown-divider"></div>
            {{/divider}}
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
                
                $buffer .= $indent . '<div class="dropdown nav-item">
';
                $buffer .= $indent . '    <a class="dropdown-toggle nav-link" id="drop-down-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
';
                $buffer .= $indent . '        <i class="slicon-globe"></i>
';
                $buffer .= $indent . '    </a>
';
                $buffer .= $indent . '    <div class="dropdown-menu" aria-labelledby="drop-down-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section97a96bd5ac4a61b3e7a4b268a0480dda($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
