<?php

namespace frontend\elements\nav;

use frontend\settings\settings_css;
use frontend\core\render;
use frontend\elements\hoverLine\hoverLine;

class nav {

    static function css ($css_external) {
        return $render = render::render($css_external, file_get_contents('../frontend/elements/nav/nav.csst'));
    }

    static function html () {
        return $html = file_get_contents('../frontend/elements/nav/nav.html');
    }

    static function js () {
        return $render = file_get_contents('../frontend/elements/nav/nav.js');
    }

    public static function builder ($css_external) {

        $settings_css = settings_css::settings_css();
        $hoverLine = hoverLine::builder();
        $css_external = array_merge($settings_css, $css_external, ['hoverLine_css' => $hoverLine['css']]);

        $css = self::css($css_external);
        $html = self::html();
        $js = self::js();

        return ['css' => $css, 'html' => $html, 'js' => $js];

    }

}