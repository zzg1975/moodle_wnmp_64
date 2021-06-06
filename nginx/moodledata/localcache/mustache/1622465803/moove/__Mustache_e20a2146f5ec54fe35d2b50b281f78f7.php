<?php

class __Mustache_e20a2146f5ec54fe35d2b50b281f78f7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<head><style>
';
        $buffer .= $indent . 'table {
';
        $buffer .= $indent . '    text-align: justify;
';
        $buffer .= $indent . '    margin-bottom: 1rem;
';
        $buffer .= $indent . '    margin-top: 1rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . 'table tr.when {
';
        $buffer .= $indent . '    background-color: #e9ecef;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . 'table th {
';
        $buffer .= $indent . '    padding: 1rem .75rem 1rem .75rem;
';
        $buffer .= $indent . '    font-weight: 400;
';
        $buffer .= $indent . '    font-size: larger;
';
        $buffer .= $indent . '    border-top: 1px solid #dee2e6;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . 'table td {
';
        $buffer .= $indent . '    padding: .75rem;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . 'table td.link {
';
        $buffer .= $indent . '    border-top: 1px solid #dee2e6;
';
        $buffer .= $indent . '    border-bottom: 1px solid #dee2e6;
';
        $buffer .= $indent . '}
';
        $buffer .= $indent . '</style></head>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA5ae532eb619f05d4ce8acff6e246686($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <br/><br/>
';
        $buffer .= $indent . '
';
        // 'activitiesdue' section
        $value = $context->find('activitiesdue');
        $buffer .= $this->section4d1feb34a113ed35a184c9288ef9ff82($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionA5ae532eb619f05d4ce8acff6e246686(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' youhaveupcomingactivitiesdueinfo, moodle, {{userfirstname}} ';
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
                
                $buffer .= ' youhaveupcomingactivitiesdueinfo, moodle, ';
                $value = $this->resolveValue($context->find('userfirstname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE78c37e9144bdeedd3c2b9a0adb70a03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{key}}, {{component}}, {{title}} {{alttext}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('alttext'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f1a3ee41f2f5ae3c6e0c7686088569d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#pix}} {{key}}, {{component}}, {{title}} {{alttext}} {{/pix}}
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
                
                $buffer .= $indent . '                            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionE78c37e9144bdeedd3c2b9a0adb70a03($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35b4da4091572ee83bb6da26a50e54c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' whendate, calendar, {{formattedtime}} ';
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
                
                $buffer .= ' whendate, calendar, ';
                $value = $this->resolveValue($context->find('formattedtime'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section54db231ccd3b48265a683efa528cec85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' coursetitle, moodle, {"course": "{{coursename}}" } ';
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
                
                $buffer .= ' coursetitle, moodle, {"course": "';
                $value = $this->resolveValue($context->find('coursename'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDcd24515123968186010e015d9488eb5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gotoactivity, calendar';
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
                
                $buffer .= ' gotoactivity, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d1feb34a113ed35a184c9288ef9ff82(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <table class="table upcoming-activity-due">
            <thead>
                <tr>
                    <th scope="col" class="h5">
                        {{#icon}}
                            {{#pix}} {{key}}, {{component}}, {{title}} {{alttext}} {{/pix}}
                        {{/icon}}
                        {{name}}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="when">
                    <td><strong>{{#str}} whendate, calendar, {{formattedtime}} {{/str}}</strong></td>
                </tr>
                <tr>
                    <td>{{#str}} coursetitle, moodle, {"course": "{{coursename}}" } {{/str}}</td>
                </tr>
                <tr>
                    <td class="link"><a href="{{url}}">{{#str}} gotoactivity, calendar{{/str}}</a></td>
                </tr>
            </tbody>
        </table>
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
                
                $buffer .= $indent . '        <table class="table upcoming-activity-due">
';
                $buffer .= $indent . '            <thead>
';
                $buffer .= $indent . '                <tr>
';
                $buffer .= $indent . '                    <th scope="col" class="h5">
';
                // 'icon' section
                $value = $context->find('icon');
                $buffer .= $this->section5f1a3ee41f2f5ae3c6e0c7686088569d($context, $indent, $value);
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </th>
';
                $buffer .= $indent . '                </tr>
';
                $buffer .= $indent . '            </thead>
';
                $buffer .= $indent . '            <tbody>
';
                $buffer .= $indent . '                <tr class="when">
';
                $buffer .= $indent . '                    <td><strong>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section35b4da4091572ee83bb6da26a50e54c7($context, $indent, $value);
                $buffer .= '</strong></td>
';
                $buffer .= $indent . '                </tr>
';
                $buffer .= $indent . '                <tr>
';
                $buffer .= $indent . '                    <td>';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section54db231ccd3b48265a683efa528cec85($context, $indent, $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                </tr>
';
                $buffer .= $indent . '                <tr>
';
                $buffer .= $indent . '                    <td class="link"><a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionDcd24515123968186010e015d9488eb5($context, $indent, $value);
                $buffer .= '</a></td>
';
                $buffer .= $indent . '                </tr>
';
                $buffer .= $indent . '            </tbody>
';
                $buffer .= $indent . '        </table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
