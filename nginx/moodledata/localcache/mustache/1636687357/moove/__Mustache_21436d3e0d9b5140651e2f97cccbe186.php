<?php

class __Mustache_21436d3e0d9b5140651e2f97cccbe186 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'shoulddisplaymarketing' section
        $value = $context->find('shoulddisplaymarketing');
        $buffer .= $this->section8a4ee795144396fda162b2c69fe7ff75($context, $indent, $value);

        return $buffer;
    }

    private function section6515921ebed09b30647fa476eebd4abf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'readmore, theme_moove';
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
                
                $buffer .= 'readmore, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f4fe2bc944f363a2a09ff405971ac93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="btn btn-primary" href="{{{ marketing1url }}}">{{#str}}readmore, theme_moove{{/str}}</a>';
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
                
                $buffer .= '<a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->find('marketing1url'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6515921ebed09b30647fa476eebd4abf($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6fd7a0f111ca78bee30ac856fb4e5353(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="btn btn-primary" href="{{{ marketing2url }}}">{{#str}}readmore, theme_moove{{/str}}</a>';
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
                
                $buffer .= '<a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->find('marketing2url'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6515921ebed09b30647fa476eebd4abf($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb00b7a84c8e09f2d546a371733f6276(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="btn btn-primary" href="{{{ marketing3url }}}">{{#str}}readmore, theme_moove{{/str}}</a>';
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
                
                $buffer .= '<a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->find('marketing3url'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6515921ebed09b30647fa476eebd4abf($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB3803e1ec613ca0d75241a8d76e470ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="btn btn-primary" href="{{{ marketing4url }}}">{{#str}}readmore, theme_moove{{/str}}</a>';
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
                
                $buffer .= '<a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->find('marketing4url'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6515921ebed09b30647fa476eebd4abf($context, $indent, $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a4ee795144396fda162b2c69fe7ff75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="frontpage-marketing">
        <div class="container">
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <img src="{{{ marketing1icon }}}" />
                        <h2>{{{ marketing1heading }}}</h2>
                        <h3>{{{ marketing1subheading }}}</h3>
                        <p>{{{ marketing1content }}}</p>
                        {{#marketing1url}}<a class="btn btn-primary" href="{{{ marketing1url }}}">{{#str}}readmore, theme_moove{{/str}}</a>{{/marketing1url}}
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="{{{ marketing2icon }}}" />
                        <h2>{{{ marketing2heading }}}</h2>
                        <h3>{{{ marketing2subheading }}}</h3>
                        <p>{{{ marketing2content }}}</p>
                        {{#marketing2url}}<a class="btn btn-primary" href="{{{ marketing2url }}}">{{#str}}readmore, theme_moove{{/str}}</a>{{/marketing2url}}
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="{{{ marketing3icon }}}" />
                        <h2>{{{ marketing3heading }}}</h2>
                        <h3>{{{ marketing3subheading }}}</h3>
                        <p>{{{ marketing3content }}}</p>
                        {{#marketing3url}}<a class="btn btn-primary" href="{{{ marketing3url }}}">{{#str}}readmore, theme_moove{{/str}}</a>{{/marketing3url}}
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="{{{ marketing4icon }}}" />
                        <h2>{{{ marketing4heading }}}</h2>
                        <h3>{{{ marketing4subheading }}}</h3>
                        <p>{{{ marketing4content }}}</p>
                        {{#marketing4url}}<a class="btn btn-primary" href="{{{ marketing4url }}}">{{#str}}readmore, theme_moove{{/str}}</a>{{/marketing4url}}
                    </div>
                </div>
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
                
                $buffer .= $indent . '    <div class="frontpage-marketing">
';
                $buffer .= $indent . '        <div class="container">
';
                $buffer .= $indent . '            <div class="card-deck">
';
                $buffer .= $indent . '                <div class="card">
';
                $buffer .= $indent . '                    <div class="card-body">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('marketing1icon'), $context);
                $buffer .= $value;
                $buffer .= '" />
';
                $buffer .= $indent . '                        <h2>';
                $value = $this->resolveValue($context->find('marketing1heading'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '                        <h3>';
                $value = $this->resolveValue($context->find('marketing1subheading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('marketing1content'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                        ';
                // 'marketing1url' section
                $value = $context->find('marketing1url');
                $buffer .= $this->section1f4fe2bc944f363a2a09ff405971ac93($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="card">
';
                $buffer .= $indent . '                    <div class="card-body">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('marketing2icon'), $context);
                $buffer .= $value;
                $buffer .= '" />
';
                $buffer .= $indent . '                        <h2>';
                $value = $this->resolveValue($context->find('marketing2heading'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '                        <h3>';
                $value = $this->resolveValue($context->find('marketing2subheading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('marketing2content'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                        ';
                // 'marketing2url' section
                $value = $context->find('marketing2url');
                $buffer .= $this->section6fd7a0f111ca78bee30ac856fb4e5353($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="card">
';
                $buffer .= $indent . '                    <div class="card-body">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('marketing3icon'), $context);
                $buffer .= $value;
                $buffer .= '" />
';
                $buffer .= $indent . '                        <h2>';
                $value = $this->resolveValue($context->find('marketing3heading'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '                        <h3>';
                $value = $this->resolveValue($context->find('marketing3subheading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('marketing3content'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                        ';
                // 'marketing3url' section
                $value = $context->find('marketing3url');
                $buffer .= $this->sectionEb00b7a84c8e09f2d546a371733f6276($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="card">
';
                $buffer .= $indent . '                    <div class="card-body">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('marketing4icon'), $context);
                $buffer .= $value;
                $buffer .= '" />
';
                $buffer .= $indent . '                        <h2>';
                $value = $this->resolveValue($context->find('marketing4heading'), $context);
                $buffer .= $value;
                $buffer .= '</h2>
';
                $buffer .= $indent . '                        <h3>';
                $value = $this->resolveValue($context->find('marketing4subheading'), $context);
                $buffer .= $value;
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('marketing4content'), $context);
                $buffer .= $value;
                $buffer .= '</p>
';
                $buffer .= $indent . '                        ';
                // 'marketing4url' section
                $value = $context->find('marketing4url');
                $buffer .= $this->sectionB3803e1ec613ca0d75241a8d76e470ce($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
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
