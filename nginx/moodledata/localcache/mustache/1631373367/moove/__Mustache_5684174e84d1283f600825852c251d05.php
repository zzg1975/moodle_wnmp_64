<?php

class __Mustache_5684174e84d1283f600825852c251d05 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<style type="text/css">
';
        $buffer .= $indent . '    .format-tiles .course-content ul.tiles .tile,
';
        $buffer .= $indent . '    .format-tiles .course-content ul.tiles .tile_bar {
';
        $buffer .= $indent . '        border-top-color: ';
        $value = $this->resolveValue($context->find('base_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('tile_light_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '        border-radius: 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .format-tiles ul.tiles .tile {
';
        $buffer .= $indent . '        border-top-color: ';
        $value = $this->resolveValue($context->find('base_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '        transition: border-top-color 0s;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .format-tiles ul.tiles .tile-clickable:hover,
';
        $buffer .= $indent . '    .format-tiles ul.tiles .tile_bar.clickable:hover,
';
        $buffer .= $indent . '    .format-tiles ul.tiles .tile-clickable.current:hover{
';
        $buffer .= $indent . '        border-top-color: ';
        $value = $this->resolveValue($context->find('tile_hover_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '        transition: border-top-color 0s;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .format-tiles ul.tiles .tile.selected {
';
        $buffer .= $indent . '        border-top-color: ';
        $value = $this->resolveValue($context->find('tile_hover_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .format-tiles ul.tiles .current .sectiontitle::after{
';
        $buffer .= $indent . '        background-color: red;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .format-tiles ul.tiles .headerabovetiles button.selected,
';
        $buffer .= $indent . '    .headerabovetiles button:active, .headerabovetiles button:focus,
';
        $buffer .= $indent . '    .format-tiles .modal-header {
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('base_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .format-tiles .modal-header h5,
';
        $buffer .= $indent . '    .format-tiles .modal-header h4 {
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .format-tiles .modal-header .close {
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '        opacity: 0.8;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .format-tiles .embed_cm_modal .modal-header,
';
        $buffer .= $indent . '    .format-tiles .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('base_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .format-tiles a.nav-link {
';
        $buffer .= $indent . '        color: ';
        $value = $this->resolveValue($context->find('base_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .format-tiles .sectiontitle::after,
';
        $buffer .= $indent . '    .format-tiles .badge-info {
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('base_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .format-tiles ul.tiles .headerabovetiles button:hover {
';
        $buffer .= $indent . '        border-color: ';
        $value = $this->resolveValue($context->find('tile_hover_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .format-tiles .course-content .single-section .navigation-arrows .navigation-arrow:hover,
';
        $buffer .= $indent . '    .format-tiles .embed_cm_modal .embed_file_button:hover {
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('button_hover_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    /*boost theme item selected in left hand menu*/
';
        $buffer .= $indent . '    .format-tiles .filterbutton:hover,
';
        $buffer .= $indent . '    .sectionbutton:hover {
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('button_hover_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '        transition: all 0.1s ease-in-out;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .format-tiles .filterbutton.selected{
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('button_hover_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .format-tiles #buttonhidesec0:hover {
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('button_hover_colour'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        // 'shade_heading_bar' section
        $value = $context->find('shade_heading_bar');
        $buffer .= $this->sectionAf402e9ff3b686deb17cd796f476a1cb($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'allowphototiles' section
        $value = $context->find('allowphototiles');
        $buffer .= $this->section50d98c46e8cf7b5a496ad89a27f08789($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'ismobile' inverted section
        $value = $context->find('ismobile');
        if (empty($value)) {
            
            // 'hidetilesinitially' section
            $value = $context->find('hidetilesinitially');
            $buffer .= $this->section3f685445ff150ce13061dd97e970a54c($context, $indent, $value);
            $buffer .= $indent . '
';
            // 'defaultscreenwidthsession' section
            $value = $context->find('defaultscreenwidthsession');
            $buffer .= $this->sectionFe0450c25124f292e647fc950f55efa4($context, $indent, $value);
        }
        $buffer .= $indent . '</style>
';
        // 'custom_css' section
        $value = $context->find('custom_css');
        $buffer .= $this->section64866dc10e4ddfa26d6e3b73720d8dd2($context, $indent, $value);

        return $buffer;
    }

    private function sectionAf402e9ff3b686deb17cd796f476a1cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        .format-tiles .course-content li.activity.label h1,
        .format-tiles .course-content .section li.activity.label h2,
        .format-tiles .course-content li.activity.label h3,
        .format-tiles .course-content li.activity.label h4,
        .format-tiles .editor_atto_content_wrap h1,
        .format-tiles .editor_atto_content_wrap h2,
        .format-tiles .editor_atto_content_wrap h3,
        .format-tiles .editor_atto_content_wrap h4 {
            border-left-color: {{base_colour}};
            border-left-style: solid;
            padding-left: 0.4em;
            border-left-width: 10px;
        }
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
                
                $buffer .= $indent . '        .format-tiles .course-content li.activity.label h1,
';
                $buffer .= $indent . '        .format-tiles .course-content .section li.activity.label h2,
';
                $buffer .= $indent . '        .format-tiles .course-content li.activity.label h3,
';
                $buffer .= $indent . '        .format-tiles .course-content li.activity.label h4,
';
                $buffer .= $indent . '        .format-tiles .editor_atto_content_wrap h1,
';
                $buffer .= $indent . '        .format-tiles .editor_atto_content_wrap h2,
';
                $buffer .= $indent . '        .format-tiles .editor_atto_content_wrap h3,
';
                $buffer .= $indent . '        .format-tiles .editor_atto_content_wrap h4 {
';
                $buffer .= $indent . '            border-left-color: ';
                $value = $this->resolveValue($context->find('base_colour'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ';
';
                $buffer .= $indent . '            border-left-style: solid;
';
                $buffer .= $indent . '            padding-left: 0.4em;
';
                $buffer .= $indent . '            border-left-width: 10px;
';
                $buffer .= $indent . '        }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50d98c46e8cf7b5a496ad89a27f08789(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        .format-tiles .course-content ul.tiles .tile.phototile .photo-tile-text h3 {
            background-color: {{photo_tile_text_bg}};
            line-height: {{phototiletextlineheight}}px;
            padding: {{phototiletextpadding}}px 7px;
        }
        .format-tiles .phototile .progress-indic {
            background-color: {{photo_tile_text_bg}};
        }
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
                
                $buffer .= $indent . '        .format-tiles .course-content ul.tiles .tile.phototile .photo-tile-text h3 {
';
                $buffer .= $indent . '            background-color: ';
                $value = $this->resolveValue($context->find('photo_tile_text_bg'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ';
';
                $buffer .= $indent . '            line-height: ';
                $value = $this->resolveValue($context->find('phototiletextlineheight'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'px;
';
                $buffer .= $indent . '            padding: ';
                $value = $this->resolveValue($context->find('phototiletextpadding'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'px 7px;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        .format-tiles .phototile .progress-indic {
';
                $buffer .= $indent . '            background-color: ';
                $value = $this->resolveValue($context->find('photo_tile_text_bg'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ';
';
                $buffer .= $indent . '        }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f685445ff150ce13061dd97e970a54c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{!We will remove this opacity in JS}}
            .format-tiles.jsenabled ul.tiles {
                opacity: 0;
            }
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
                
                $buffer .= $indent . '            .format-tiles.jsenabled ul.tiles {
';
                $buffer .= $indent . '                opacity: 0;
';
                $buffer .= $indent . '            }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe0450c25124f292e647fc950f55efa4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            .format-tiles.jsenabled ul.tiles {
                max-width: {{defaultscreenwidthsession}}px;
            }
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
                
                $buffer .= $indent . '            .format-tiles.jsenabled ul.tiles {
';
                $buffer .= $indent . '                max-width: ';
                $value = $this->resolveValue($context->find('defaultscreenwidthsession'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= 'px;
';
                $buffer .= $indent . '            }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64866dc10e4ddfa26d6e3b73720d8dd2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<style type="text/css">{{{custom_css}}}</style>';
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
                
                $buffer .= $indent . '<style type="text/css">';
                $value = $this->resolveValue($context->find('custom_css'), $context);
                $buffer .= $value;
                $buffer .= '</style>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
