<?php

class __Mustache_9c18415571a3ded82ab1efcbe471fd59 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="filemanager fp-select">
';
        $buffer .= $indent . '    <div class="fp-select-loading">
';
        $buffer .= $indent . '        ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section17dced043cf1f9973e8ce8dcb3301054($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <form class="mform clearfix">
';
        $buffer .= $indent . '        <div class="form-group mx-0">
';
        $buffer .= $indent . '            <button class="fp-file-download btn btn-secondary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section95ff3701934939e1eb7bd2c28e3ee1b9($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            <button class="fp-file-delete btn btn-secondary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            <button class="fp-file-setmain btn btn-secondary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3549061ca37b41dbbdfd8a7e234969c8($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            <span class="fp-file-setmain-help">';
        $value = $this->resolveValue($context->find('helpicon'), $context);
        $buffer .= $value;
        $buffer .= '</span>
';
        $buffer .= $indent . '            <button class="fp-file-zip btn btn-secondary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB38288f316bd094496a8d2cfdfaa803d($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            <button class="fp-file-unzip btn btn-secondary">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section2ea6a510d48e1bbe5913e221863ad2fe($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="fp-saveas form-group row mx-0">
';
        $buffer .= $indent . '                    <label class="form-control-label col-4 px-0">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section59a2a4641027716ff85403c2d5e94fc1($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <div class="col-8 form-inline"><input class="form-control" type="text"/></div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-author form-group row mx-0">
';
        $buffer .= $indent . '                    <label class="form-control-label col-4 px-0">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section38331830086571e8a6cab1fc3e99f002($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <div class="col-8 form-inline"><input class="form-control" type="text"/></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-license form-group row mx-0">
';
        if ($partial = $this->mustache->loadPartial('core/filemanager_chooselicense')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-path form-group row mx-0">
';
        $buffer .= $indent . '                    <label class="form-control-label col-4 px-0">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8b4c2af971c52c1b1ba468197877c4cd($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <div class="col-8 form-inline pr-0">
';
        $buffer .= $indent . '                        <select class="custom-select form-control"></select>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-original form-group row mx-0">
';
        $buffer .= $indent . '                    <div class="form-control-label col-4 px-0">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF7ee1a321b50fcb70dccc8007379d076($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                    <div class="col-8 form-inline">
';
        $buffer .= $indent . '                        <span class="fp-originloading">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section17dced043cf1f9973e8ce8dcb3301054($context, $indent, $value);
        $buffer .= ' ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section63f96996052a1daca324ae6efeeaf614($context, $indent, $value);
        $buffer .= '</span><span class="fp-value"></span>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="fp-reflist form-group row mx-0">
';
        $buffer .= $indent . '                    <div class="form-control-label col-4 px-0">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF206846026cb9bb2070e988f807b73e6($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                    <div class="col-8 form-inline">
';
        $buffer .= $indent . '                        <p class="fp-refcount"></p>
';
        $buffer .= $indent . '                        <span class="fp-reflistloading">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section17dced043cf1f9973e8ce8dcb3301054($context, $indent, $value);
        $buffer .= ' ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section63f96996052a1daca324ae6efeeaf614($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        <ul class="fp-value"></ul>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '        <div class="fp-select-buttons form-group">
';
        $buffer .= $indent . '            <button class="fp-file-update btn-primary btn">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section47d66f004044b857c042bbdf70fe2cc2($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            <button class="fp-file-cancel btn-secondary btn">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section96a04e644c61b56b5f76ae597e76c7fb($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '    <div class="fp-info clearfix">
';
        $buffer .= $indent . '        <hr>
';
        $buffer .= $indent . '        <p class="fp-thumbnail"></p>
';
        $buffer .= $indent . '        <div class="fp-fileinfo">
';
        $buffer .= $indent . '            <div class="fp-datemodified">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA952921a53c6a683948f9263ac628367($context, $indent, $value);
        $buffer .= ' <span class="fp-value"></span></div>
';
        $buffer .= $indent . '            <div class="fp-datecreated">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section354774ed3b5072eae1916c31ef69e9d1($context, $indent, $value);
        $buffer .= ' <span class="fp-value"></span></div>
';
        $buffer .= $indent . '            <div class="fp-size">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionFf84160216bbfff3c9781f707a5a609b($context, $indent, $value);
        $buffer .= ' <span class="fp-value"></span></div>
';
        $buffer .= $indent . '            <div class="fp-dimensions">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section457e300d70549c75a2a39f37e433234a($context, $indent, $value);
        $buffer .= ' <span class="fp-value"></span></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section17dced043cf1f9973e8ce8dcb3301054(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/loading_small';
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
                
                $buffer .= 'i/loading_small';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95ff3701934939e1eb7bd2c28e3ee1b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'download';
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
                
                $buffer .= 'download';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f92e409dad2d31675245b12b8825d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delete';
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
                
                $buffer .= 'delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3549061ca37b41dbbdfd8a7e234969c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'setmainfile, repository';
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
                
                $buffer .= 'setmainfile, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB38288f316bd094496a8d2cfdfaa803d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'zip, editor';
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
                
                $buffer .= 'zip, editor';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ea6a510d48e1bbe5913e221863ad2fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unzip';
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
                
                $buffer .= 'unzip';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59a2a4641027716ff85403c2d5e94fc1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'name, repository';
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
                
                $buffer .= 'name, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38331830086571e8a6cab1fc3e99f002(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'author, repository';
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
                
                $buffer .= 'author, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b4c2af971c52c1b1ba468197877c4cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'path, repository';
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
                
                $buffer .= 'path, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7ee1a321b50fcb70dccc8007379d076(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'original, repository';
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
                
                $buffer .= 'original, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63f96996052a1daca324ae6efeeaf614(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'loading, repository';
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
                
                $buffer .= 'loading, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF206846026cb9bb2070e988f807b73e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'referenceslist, repository';
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
                
                $buffer .= 'referenceslist, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47d66f004044b857c042bbdf70fe2cc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'update';
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
                
                $buffer .= 'update';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96a04e644c61b56b5f76ae597e76c7fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cancel';
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
                
                $buffer .= 'cancel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA952921a53c6a683948f9263ac628367(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'lastmodified, repository';
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
                
                $buffer .= 'lastmodified, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section354774ed3b5072eae1916c31ef69e9d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'datecreated, repository';
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
                
                $buffer .= 'datecreated, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf84160216bbfff3c9781f707a5a609b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'size, repository';
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
                
                $buffer .= 'size, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section457e300d70549c75a2a39f37e433234a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dimensions, repository';
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
                
                $buffer .= 'dimensions, repository';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
