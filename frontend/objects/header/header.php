<?php

namespace frontend\objects\header;

use frontend\elements\nav\nav;
use frontend\settings\settings_css;
use frontend\core\render;

class header {

    function css ($css_external) {
        return $render = render::render($css_external, file_get_contents('../frontend/objects/header/header.csst'));
    }

    function html ($nav_html) {
        return $render = str_ireplace("{{ 'nav' }}", $nav_html, file_get_contents('../frontend/objects/header/header.html'));
    }

    function js () {
        return $render = file_get_contents('../frontend/objects/header/header.js');
    }

    public function builder () {

        $nav = nav::builder([
            'mediaSmallJustifyContent' => 'center',
            'mediaMediumJustifyContent' => 'flex-start',
            'mediaLargeJustifyContent' => 'flex-start',
            'mediaExtraLargeJustifyContent' => 'flex-start'
        ]);

        $settings_css = settings_css::settings_css();
        $css_external = array_merge($settings_css, ['nav_css' => $nav['css']]);

        $css = $this->css($css_external);
        $html = $this->html($nav['html']);
        $js = $this->js();

        return ['css' => $css, 'html' => $html, 'js' => $js];

    }

}