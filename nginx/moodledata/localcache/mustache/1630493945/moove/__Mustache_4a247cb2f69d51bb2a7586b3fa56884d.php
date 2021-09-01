<?php

class __Mustache_4a247cb2f69d51bb2a7586b3fa56884d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'numbersfrontpage' section
        $value = $context->find('numbersfrontpage');
        $buffer .= $this->sectionE75ddb9d3d997ea9d9e15c6d74c0cc59($context, $indent, $value);

        return $buffer;
    }

    private function section062d6ae81277ed8ff9fc446bac0788aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' frontpagenumbersome, theme_moove ';
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
                
                $buffer .= ' frontpagenumbersome, theme_moove ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6bbe26b51e195e82a597f3e16eab7925(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' frontpagenumbernumbers, theme_moove ';
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
                
                $buffer .= ' frontpagenumbernumbers, theme_moove ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD76a24be531d9339b0c063685b2bf812(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' frontpagenumberusers, theme_moove ';
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
                
                $buffer .= ' frontpagenumberusers, theme_moove ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0caa40769b5c09f848fd6d53f3947c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' frontpagenumbercourses, theme_moove ';
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
                
                $buffer .= ' frontpagenumbercourses, theme_moove ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0d9ba9018e4f67b23191720e274d3ca9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' frontpagenumberactivities, theme_moove ';
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
                
                $buffer .= ' frontpagenumberactivities, theme_moove ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE75ddb9d3d997ea9d9e15c6d74c0cc59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="container-fluid frontpage-numbers">
        <div class="row">
            <div class="col-md-3">
                <h2><p>{{#str}} frontpagenumbersome, theme_moove {{/str}}</p>{{#str}} frontpagenumbernumbers, theme_moove {{/str}}</h2>
            </div>

            <div class="col-md-3 number">
                <span class="fa fa-user-circle fa-4x"></span>
                <h3>{{{ numberusers }}}</h3>
                <hr />
                <p>{{#str}} frontpagenumberusers, theme_moove {{/str}}</p>
            </div>

            <div class="col-md-3 number">
                <span class="fa fa-graduation-cap fa-4x"></span>
                <h3>{{{ numbercourses }}}</h3>
                <hr />
                <p>{{#str}} frontpagenumbercourses, theme_moove {{/str}}</p>
            </div>

            <div class="col-md-3 number">
                <span class="fa fa-puzzle-piece fa-4x"></span>
                <h3>{{{ numberactivities }}}</h3>
                <hr />
                <p>{{#str}} frontpagenumberactivities, theme_moove {{/str}}</p>
            </div>
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
                
                $buffer .= $indent . '    <div class="container-fluid frontpage-numbers">
';
                $buffer .= $indent . '        <div class="row">
';
                $buffer .= $indent . '            <div class="col-md-3">
';
                $buffer .= $indent . '                <h2><p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section062d6ae81277ed8ff9fc446bac0788aa($context, $indent, $value);
                $buffer .= '</p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6bbe26b51e195e82a597f3e16eab7925($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="col-md-3 number">
';
                $buffer .= $indent . '                <span class="fa fa-user-circle fa-4x"></span>
';
                $buffer .= $indent . '                <h3>';
                $value = $this->resolveValue($context->find('numberusers'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                <hr />
';
                $buffer .= $indent . '                <p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD76a24be531d9339b0c063685b2bf812($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="col-md-3 number">
';
                $buffer .= $indent . '                <span class="fa fa-graduation-cap fa-4x"></span>
';
                $buffer .= $indent . '                <h3>';
                $value = $this->resolveValue($context->find('numbercourses'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                <hr />
';
                $buffer .= $indent . '                <p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD0caa40769b5c09f848fd6d53f3947c9($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="col-md-3 number">
';
                $buffer .= $indent . '                <span class="fa fa-puzzle-piece fa-4x"></span>
';
                $buffer .= $indent . '                <h3>';
                $value = $this->resolveValue($context->find('numberactivities'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                <hr />
';
                $buffer .= $indent . '                <p>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0d9ba9018e4f67b23191720e274d3ca9($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
