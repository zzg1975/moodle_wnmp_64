<?php

class __Mustache_d78e9f271fb391a082b81be0b453578d extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_form/element-template')) {
            $context->pushBlockContext(array(
                'element' => array($this, 'blockF6e32f499a9564c58278131554b46974'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionEe8bc37a3660a120de5eb1e2c81d1001($context, $indent, $value);

        return $buffer;
    }

    private function sectionBd6d241829fcbe59e01506b6f6c8d128(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'readonly';
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
                
                $buffer .= 'readonly';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc48dcea9d2838da4d0362b228628420(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'is-invalid';
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
                
                $buffer .= 'is-invalid';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf9a15aa028c28bfdcd73726264e3628(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            autofocus aria-describedby="{{ element.iderror }}"
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
                
                $buffer .= $indent . '                            autofocus aria-describedby="';
                $value = $this->resolveValue($context->findDot('element.iderror'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1966ed63f39357352a1e773a9fe2c4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' passwordunmaskedithint, form ';
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
                
                $buffer .= ' passwordunmaskedithint, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7d3cdaa80a4fb55cbbbdcf6e8230551(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/passwordunmask-edit, core, {{# str }} passwordunmaskedithint, form {{/ str }}';
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
                
                $buffer .= ' t/passwordunmask-edit, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB1966ed63f39357352a1e773a9fe2c4a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0456df008114280c7908271e554ab4e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' passwordunmaskrevealhint, form ';
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
                
                $buffer .= ' passwordunmaskrevealhint, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD238d708b51d531766660a637c3be472(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/passwordunmask-reveal, core, {{# str }} passwordunmaskrevealhint, form {{/ str }}';
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
                
                $buffer .= ' t/passwordunmask-reveal, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0456df008114280c7908271e554ab4e3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF86965103a62cc37f20777605d623629(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' passwordunmaskinstructions, form ';
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
                
                $buffer .= ' passwordunmaskinstructions, form ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe8bc37a3660a120de5eb1e2c81d1001(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_form/passwordunmask\'], function(PasswordUnmask) {
    new PasswordUnmask("{{ element.id }}");
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
                
                $buffer .= $indent . 'require([\'core_form/passwordunmask\'], function(PasswordUnmask) {
';
                $buffer .= $indent . '    new PasswordUnmask("';
                $value = $this->resolveValue($context->findDot('element.id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '");
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockF6e32f499a9564c58278131554b46974($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <span data-passwordunmask="wrapper" data-passwordunmaskid="';
        $value = $this->resolveValue($context->findDot('element.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '            <span data-passwordunmask="editor">
';
        $buffer .= $indent . '                <input  type="hidden"
';
        $buffer .= $indent . '                        ';
        // 'element.frozen' section
        $value = $context->findDot('element.frozen');
        $buffer .= $this->sectionBd6d241829fcbe59e01506b6f6c8d128($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        ';
        // 'element.hardfrozen' inverted section
        $value = $context->findDot('element.hardfrozen');
        if (empty($value)) {
            
            $buffer .= ' name="';
            $value = $this->resolveValue($context->findDot('element.name'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"';
        }
        $buffer .= '
';
        $buffer .= $indent . '                        id="';
        $value = $this->resolveValue($context->findDot('element.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        value="';
        $value = $this->resolveValue($context->findDot('element.value'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        class="form-control d-inline-block ';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->sectionCc48dcea9d2838da4d0362b228628420($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        data-size="';
        $value = $this->resolveValue($context->findDot('element.size'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        // 'error' section
        $value = $context->find('error');
        $buffer .= $this->sectionEf9a15aa028c28bfdcd73726264e3628($context, $indent, $value);
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('attributes'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                        >
';
        $buffer .= $indent . '            </span>
';
        // 'element.frozen' inverted section
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            $buffer .= $indent . '            <a href="#" class="form-control" data-passwordunmask="edit" title="';
            $value = $this->resolveValue($context->find('edithint'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
        }
        $buffer .= $indent . '                <span data-passwordunmask="displayvalue">';
        if ($partial = $this->mustache->loadPartial('core_form/element-passwordunmask-fill')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= '</span>
';
        // 'element.frozen' inverted section
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            $buffer .= $indent . '                ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->sectionA7d3cdaa80a4fb55cbbbdcf6e8230551($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            </a>
';
        }
        $buffer .= $indent . '            <a href="#" data-passwordunmask="unmask" title="';
        $value = $this->resolveValue($context->find('unmaskhint'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionD238d708b51d531766660a637c3be472($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '            <span data-passwordunmask="instructions" class="form-text text-muted" style="display: none;">
';
        // 'element.frozen' inverted section
        $value = $context->findDot('element.frozen');
        if (empty($value)) {
            
            $buffer .= $indent . '                ';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionF86965103a62cc37f20777605d623629($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '        </span>
';
    
        return $buffer;
    }
}
