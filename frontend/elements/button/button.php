<?php

namespace frontend\elements\button;

use frontend\settings\settings_css;
use frontend\core\render;

class button {

    static function css ($css_external) {
        return $render = render::render($css_external, file_get_contents('../frontend/elements/button/button.csst'));
    }

    static function html ($css_external) {
        return $html = render::render($css_external, file_get_contents('../frontend/elements/button/button.html'));
    }

    static function js () {
        return $render = file_get_contents('../frontend/elements/button/button.js');
    }

    public static function builder ($css_external) {

        $settings_css = settings_css::settings_css();

        $css_external = array_merge($settings_css, $css_external);

        $css = self::css($css_external);
        $html = self::html($css_external);
        $js = self::js();

        return ['css' => $css, 'html' => $html, 'js' => $js];

    }

}