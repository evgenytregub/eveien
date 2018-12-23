<?php

namespace frontend\objects\head;

class head {

    function css () {
        $css = file_get_contents('../frontend/objects/head/head.css');
        return $css;
    }

    function html () {
        $html = file_get_contents('../frontend/objects/head/head.html');
        return $html;
    }

    function js () {
        return $render = file_get_contents('../frontend/objects/head/head.js');
    }

    public function builder () {

        $css = $this->css();
        $html = $this->html();
        $js = $this->js();

        return ['css' => $css, 'html' => $html, 'js' => $js];

    }

}