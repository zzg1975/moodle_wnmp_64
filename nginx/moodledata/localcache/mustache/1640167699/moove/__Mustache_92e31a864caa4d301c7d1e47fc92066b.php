<?php

class __Mustache_92e31a864caa4d301c7d1e47fc92066b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="hidden h-100" data-region="view-contacts" aria-hidden="true" data-user-id="';
        $value = $this->resolveValue($context->findDot('loggedinuser.id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="d-flex flex-column h-100">
';
        $buffer .= $indent . '        <div class="p-3 border-bottom">
';
        $buffer .= $indent . '            <ul class="nav nav-pills nav-fill" role="tablist">
';
        $buffer .= $indent . '                <li class="nav-item">
';
        $buffer .= $indent . '                    <a
';
        $buffer .= $indent . '                        id="contacts-tab-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        class="nav-link active"
';
        $buffer .= $indent . '                        href="#contacts-tab-panel-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        data-toggle="tab"
';
        $buffer .= $indent . '                        data-action="show-contacts-section"
';
        $buffer .= $indent . '                        role="tab"
';
        $buffer .= $indent . '                        aria-controls="contacts-tab-panel-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        aria-selected="true"
';
        $buffer .= $indent . '                    >
';
        $buffer .= $indent . '                        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAe27671d8d1750e9af3adcc5df1cbf0d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </li>
';
        $buffer .= $indent . '                <li class="nav-item">
';
        $buffer .= $indent . '                    <a
';
        $buffer .= $indent . '                        id="requests-tab-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        class="nav-link"
';
        $buffer .= $indent . '                        href="#requests-tab-panel-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        data-toggle="tab"
';
        $buffer .= $indent . '                        data-action="show-requests-section"
';
        $buffer .= $indent . '                        role="tab"
';
        $buffer .= $indent . '                        aria-controls="requests-tab-panel-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                        aria-selected="false"
';
        $buffer .= $indent . '                    >
';
        $buffer .= $indent . '                        ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section38df214956e16c7bc931fc8d9a19cd80($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        <span class="badge badge-primary bg-primary ml-2 ';
        // 'contactrequestcount' inverted section
        $value = $context->find('contactrequestcount');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= '"
';
        $buffer .= $indent . '                        data-region="contact-request-count"
';
        $buffer .= $indent . '                        aria-label="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section805e650638aa325ee8db2b322ff4bb8f($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('contactrequestcount'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </span>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </li>
';
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="tab-content d-flex flex-column h-100">
';
        $buffer .= $indent . '            ';
        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_view_contacts_body_section_contacts')) {
            $context->pushBlockContext(array(
                'rootclasses' => array($this, 'blockBe8d2206c503159a2c37c030e7297e98'),
                'rootattributes' => array($this, 'blockB7e94bccf3948dc22937886ac7334f51'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '            ';
        if ($parent = $this->mustache->loadPartial('core_message/message_drawer_view_contacts_body_section_requests')) {
            $context->pushBlockContext(array(
                'rootclasses' => array($this, 'blockC5cb524ab1657f28c3a13af51d79e7fd'),
                'rootattributes' => array($this, 'blockF245b95f5176706cf08c8f7d02409121'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function sectionAe27671d8d1750e9af3adcc5df1cbf0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contacts, core_message ';
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
                
                $buffer .= ' contacts, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38df214956e16c7bc931fc8d9a19cd80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' requests ';
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
                
                $buffer .= ' requests ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section805e650638aa325ee8db2b322ff4bb8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pendingcontactrequests, core_message, {{contactrequestcount}} ';
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
                
                $buffer .= ' pendingcontactrequests, core_message, ';
                $value = $this->resolveValue($context->find('contactrequestcount'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockBe8d2206c503159a2c37c030e7297e98($context)
    {
        $indent = $buffer = '';
        $buffer .= 'tab-pane fade show active h-100';
    
        return $buffer;
    }

    public function blockB7e94bccf3948dc22937886ac7334f51($context)
    {
        $indent = $buffer = '';
        $buffer .= '                    id="contacts-tab-panel-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                    data-section="contacts"
';
        $buffer .= $indent . '                    role="tabpanel"
';
        $buffer .= $indent . '                    aria-labelledby="contacts-tab-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
    
        return $buffer;
    }

    public function blockC5cb524ab1657f28c3a13af51d79e7fd($context)
    {
        $indent = $buffer = '';
        $buffer .= 'tab-pane fade h-100';
    
        return $buffer;
    }

    public function blockF245b95f5176706cf08c8f7d02409121($context)
    {
        $indent = $buffer = '';
        $buffer .= '                    id="requests-tab-panel-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                    data-section="requests"
';
        $buffer .= $indent . '                    role="tabpanel"
';
        $buffer .= $indent . '                    aria-labelledby="requests-tab-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
    
        return $buffer;
    }
}
