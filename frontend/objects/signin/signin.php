<?php

namespace frontend\objects\signin;

use frontend\elements\inputTxt\inputTxt;
use frontend\elements\button\button;
use frontend\settings\settings_css;
use frontend\core\render;

class signin {

    function css ($css_external) {
        return $render = render::render($css_external, file_get_contents('../frontend/objects/signin/signin.csst'));
    }

    function html ($inputTxt1, $inputTxt2, $button) {
        $render = str_ireplace("{{ 'inputTxt1' }}", $inputTxt1, file_get_contents('../frontend/objects/signin/signin.html'));
        $render = str_ireplace("{{ 'inputTxt2' }}", $inputTxt2, $render);
        return $render = str_ireplace("{{ 'button' }}", $button, $render);
    }

    function js () {
        return $render = file_get_contents('../frontend/objects/signin/signin.js');
    }

    public function builder () {

        $inputTxt1 = inputTxt::builder([
            'placeholder' => 'Your name..',
            'label' => 'First Name'
        ]);
        $inputTxt2 = inputTxt::builder([
            'placeholder' => 'Your name..',
            'label' => 'First Name2'
        ]);
        $button = button::builder([
            'name' => 'Log in',
            'IDname' => 'Logkin'
        ]);

        $settings_css = settings_css::settings_css();
        $css_external = array_merge($settings_css, ['inputTxt_css' => $inputTxt1['css']], ['button' => $button['css']]);

        $css = $this->css($css_external);
        $html = $this->html($inputTxt1['html'], $inputTxt2['html'], $button['html']);
        $js = $this->js();

        return ['css' => $css, 'html' => $html, 'js' => $js];

    }

}