<?php

class __Mustache_4b089c4b47d0287c4fdee68a7b01a8f4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_lazy_load_list')) {
            $context->pushBlockContext(array(
                'emptymessage' => array($this, 'block7e160eadb080c8e119f7bf6f23ac7536'),
                'placeholder' => array($this, 'block7bb01590f3774e04ca45a01d25d3b5cd'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function section2b767af6e1d621ba662cc2f533844b46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nocontactsgetstarted, core_message ';
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
                
                $buffer .= $indent . ' nocontactsgetstarted, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06e52d376ed57e7561d3b88db56aaf42(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> core_message/message_drawer_contacts_list_item_placeholder }}
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
                
                if ($partial = $this->mustache->loadPartial('core_message/message_drawer_contacts_list_item_placeholder')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF16c24ce633e167c170057266877129e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#placeholders}}
                    {{> core_message/message_drawer_contacts_list_item_placeholder }}
                {{/placeholders}}
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
                
                // 'placeholders' section
                $value = $context->find('placeholders');
                $buffer .= $this->section06e52d376ed57e7561d3b88db56aaf42($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7ac1823992a9e3bf6eb8cb4243ab7d7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#sectioncontacts}}
                {{#placeholders}}
                    {{> core_message/message_drawer_contacts_list_item_placeholder }}
                {{/placeholders}}
            {{/sectioncontacts}}
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
                
                // 'sectioncontacts' section
                $value = $context->find('sectioncontacts');
                $buffer .= $this->sectionF16c24ce633e167c170057266877129e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block7e160eadb080c8e119f7bf6f23ac7536($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2b767af6e1d621ba662cc2f533844b46($context, $indent, $value);
    
        return $buffer;
    }

    public function block7bb01590f3774e04ca45a01d25d3b5cd($context)
    {
        $indent = $buffer = '';
        // 'contacts' section
        $value = $context->find('contacts');
        $buffer .= $this->sectionB7ac1823992a9e3bf6eb8cb4243ab7d7($context, $indent, $value);
    
        return $buffer;
    }
}
