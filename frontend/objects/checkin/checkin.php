<?php

namespace frontend\objects\checkin;

use frontend\elements\inputTxt\inputTxt;
use frontend\elements\button\button;
use frontend\settings\settings_css;
use frontend\core\render;

class checkin {

    function css ($css_external) {
        return $render = render::render($css_external, file_get_contents('../frontend/objects/checkin/checkin.csst'));
    }

    function html ($inputTxt1, $inputTxt2, $inputTxt3, $inputTxt4,$button) {
        $render = str_ireplace("{{ 'inputTxt1' }}", $inputTxt1, file_get_contents('../frontend/objects/checkin/checkin.html'));
        $render = str_ireplace("{{ 'inputTxt2' }}", $inputTxt2, $render);
        $render = str_ireplace("{{ 'inputTxt3' }}", $inputTxt3, $render);
        $render = str_ireplace("{{ 'inputTxt4' }}", $inputTxt4, $render);
        return $render = str_ireplace("{{ 'button' }}", $button, $render);
    }

    function js () {
        return $render = file_get_contents('../frontend/objects/checkin/checkin.js');
    }

    public function builder () {

        $inputTxt1 = inputTxt::builder([
            'placeholder' => 'Email...',
            'label' => 'Email',
            'name' => 'Email',
            'inputTxtID' => 'emailver'
        ]);
        $inputTxt2 = inputTxt::builder([
            'placeholder' => 'Email again...',
            'label' => 'Email again',
            'name' => 'EmailConf',
            'inputTxtID' => 'emailconf'
        ]);
        $inputTxt3 = inputTxt::builder([
            'placeholder' => 'Password...',
            'label' => 'Password',
            'name' => 'Password',
            'inputTxtID' => 'Passwordver'
        ]);
        $inputTxt4 = inputTxt::builder([
            'placeholder' => 'Password again...',
            'label' => 'Password again',
            'name' => 'Passwordind',
            'inputTxtID' => 'Passwordind'
        ]);
        $button = button::builder([
            'name' => 'Check in',
            'IDname' => 'Checkin'
        ]);

        $settings_css = settings_css::settings_css();
        $css_external = array_merge($settings_css, ['inputTxt_css' => $inputTxt1['css']], ['button' => $button['css']]);

        $css = $this->css($css_external);
        $html = $this->html($inputTxt1['html'], $inputTxt2['html'], $inputTxt3['html'], $inputTxt4['html'], $button['html']);
        $js = $this->js();

        return ['css' => $css, 'html' => $html, 'js' => $js];

    }

}