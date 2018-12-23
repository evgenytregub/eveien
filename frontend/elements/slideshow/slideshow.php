<?php

namespace frontend\elements\slideshow;

use frontend\settings\settings_css;
use frontend\core\render;

class slideshow {

    static function css ($css_external) {
        return $render = render::render($css_external, file_get_contents('../frontend/elements/slideshow/slideshow.csst'));
    }

    static function html () {
        return $render = file_get_contents('../frontend/elements/slideshow/slideshow.html');
    }

    static function js () {
        return $render = file_get_contents('../frontend/elements/slideshow/slideshow.js');
    }

    public static function builder () {

        $css_external = settings_css::settings_css();

        $css = self::css($css_external);
        $html = self::html();
        $js = self::js();

        return ['css' => $css, 'html' => $html, 'js' => $js];

    }

}