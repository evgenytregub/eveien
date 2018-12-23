<?php

namespace frontend\objects\footer;

use frontend\elements\hoverLine\hoverLine;
use frontend\settings\settings_css;
use frontend\core\render;

class footer {

    function css ($css_external) {
        return $render = render::render($css_external, file_get_contents('../frontend/objects/footer/footer.csst'));
    }

    function html () {
        return $render = file_get_contents('../frontend/objects/footer/footer.html');
    }

    function js () {
        return $render = file_get_contents('../frontend/objects/footer/footer.js');
    }

    public function builder () {

        $hoverLine = hoverLine::builder();
        $settings_css = settings_css::settings_css();
        $css_external = array_merge($settings_css, ['hoverLine_css' => $hoverLine['css']]);

        $css = $this->css($css_external);
        $html = $this->html();
        $js = $this->js();

        return ['css' => $css, 'html' => $html, 'js' => $js];

    }

}