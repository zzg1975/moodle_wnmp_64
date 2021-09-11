<?php

class __Mustache_3103983c990ba3f1bc9f080384511acb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="admininfos">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.mydashboard_admin_header'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-md-3">
';
        $buffer .= $indent . '          <!-- small box -->
';
        $buffer .= $indent . '          <div class="small-box bg-1">
';
        $buffer .= $indent . '            <div class="inner">
';
        $buffer .= $indent . '              <h3>';
        $value = $this->resolveValue($context->find('totalusage'), $context);
        $buffer .= $value;
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '              <p>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCb88c013a3ab9066cc49e8f8910e8060($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="icon">
';
        $buffer .= $indent . '              <i class="slicon-drawer"></i>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="col-md-3">
';
        $buffer .= $indent . '          <!-- small box -->
';
        $buffer .= $indent . '          <div class="small-box bg-2">
';
        $buffer .= $indent . '            <div class="inner">
';
        $buffer .= $indent . '              <h3>';
        $value = $this->resolveValue($context->find('totalactiveusers'), $context);
        $buffer .= $value;
        $buffer .= ' / ';
        $value = $this->resolveValue($context->find('totalsuspendedusers'), $context);
        $buffer .= $value;
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '              <p>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9621e6615015f5f926f92b869558e099($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="icon">
';
        $buffer .= $indent . '              <i class="slicon-people"></i>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="col-md-3">
';
        $buffer .= $indent . '          <!-- small box -->
';
        $buffer .= $indent . '          <div class="small-box bg-3">
';
        $buffer .= $indent . '            <div class="inner">
';
        $buffer .= $indent . '              <h3>';
        $value = $this->resolveValue($context->find('totalcourses'), $context);
        $buffer .= $value;
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '              <p>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAe3ae0ac35ae30be5c6fb0ec1c545be7($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="icon">
';
        $buffer .= $indent . '              <i class="slicon-graduation"></i>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="col-md-3">
';
        $buffer .= $indent . '          <!-- small box -->
';
        $buffer .= $indent . '          <div class="small-box bg-4">
';
        $buffer .= $indent . '            <div class="inner">
';
        $buffer .= $indent . '              <h3>';
        $value = $this->resolveValue($context->find('onlineusers'), $context);
        $buffer .= $value;
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '              <p>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5463bc4d8544249e3659c950e22b7da9($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="icon">
';
        $buffer .= $indent . '              <i class="fa fa-plug"></i>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionCb88c013a3ab9066cc49e8f8910e8060(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'diskusage, theme_moove';
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
                
                $buffer .= 'diskusage, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9621e6615015f5f926f92b869558e099(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'totalusers, theme_moove';
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
                
                $buffer .= 'totalusers, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe3ae0ac35ae30be5c6fb0ec1c545be7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'totalcourses, theme_moove';
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
                
                $buffer .= 'totalcourses, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5463bc4d8544249e3659c950e22b7da9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'onlineusers, theme_moove';
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
                
                $buffer .= 'onlineusers, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
