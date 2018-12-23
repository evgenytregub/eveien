<?php

namespace frontend\elements\hoverLine;

class hoverLine {

    static function css () {
        return $html = file_get_contents('../frontend/elements/hoverLine/hoverLine.csst');
    }

    static function html () {
        return $html = file_get_contents('../frontend/elements/hoverLine/hoverLine.html');
    }

    static function js () {
        return $render = file_get_contents('../frontend/elements/hoverLine/hoverLine.js');
    }

    public static function builder () {

        $css = self::css();
        $html = self::html();
        $js = self::js();

        return ['css' => $css, 'html' => $html, 'js' => $js];

    }

}