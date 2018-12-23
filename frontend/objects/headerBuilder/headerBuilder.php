<?php

namespace frontend\objects\headerBuilder;

use frontend\settings\settings_css;
use frontend\core\render;

class headerBuilder {

    function css ($css_external) {
        return $render = render::render($css_external, file_get_contents('../frontend/objects/headerBuilder/headerBuilder.csst'));
    }

    function html () {
        return $render = file_get_contents('../frontend/objects/headerBuilder/headerBuilder.html');
    }

    function js () {
        return $render = file_get_contents('../frontend/objects/headerBuilder/headerBuilder.js');
    }

    public function builder () {

        $settings_css = settings_css::settings_css();

        $css = $this->css($settings_css);
        $html = $this->html();
        $js = $this->js();

        return ['css' => $css, 'html' => $html, 'js' => $js];

    }

}