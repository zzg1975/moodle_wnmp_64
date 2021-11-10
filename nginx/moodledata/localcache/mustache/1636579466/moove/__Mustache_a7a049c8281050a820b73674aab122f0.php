<?php

class __Mustache_a7a049c8281050a820b73674aab122f0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<a class="tilebarphoto ';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->section4fde1966070028aa38167f1bcbedcc80($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    ';
        // 'isediting' section
        $value = $context->find('isediting');
        $buffer .= $this->sectionA911883fe1f400a2f9ddc47fb6e0427d($context, $indent, $value);
        $buffer .= ' id="tileicon_';
        $value = $this->resolveValue($context->find('tileid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '   data-imagetype="';
        // 'isdraftfile' section
        $value = $context->find('isdraftfile');
        $buffer .= $this->section6101f1d6daa084e424a485160d916e86($context, $indent, $value);
        // 'isdraftfile' inverted section
        $value = $context->find('isdraftfile');
        if (empty($value)) {
            
            $buffer .= 'tilephoto';
        }
        $buffer .= '"
';
        $buffer .= $indent . '   href="';
        $value = $this->resolveValue($context->find('phototileediturl'), $context);
        $buffer .= $value;
        $buffer .= '" style="background-image: url(';
        $value = $this->resolveValue($context->find('phototileurl'), $context);
        $buffer .= $value;
        $buffer .= ');"></a>';

        return $buffer;
    }

    private function section4fde1966070028aa38167f1bcbedcc80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' launchiconpicker';
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
                
                $buffer .= ' launchiconpicker';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA911883fe1f400a2f9ddc47fb6e0427d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' data-section="{{tileid}}" data-true-sectionid="{{secid}}"';
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
                
                $buffer .= ' data-section="';
                $value = $this->resolveValue($context->find('tileid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-true-sectionid="';
                $value = $this->resolveValue($context->find('secid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6101f1d6daa084e424a485160d916e86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'draftfile';
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
                
                $buffer .= 'draftfile';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
