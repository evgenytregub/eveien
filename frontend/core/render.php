<?php

namespace frontend\core;

class render {

    public static function render ($css_external, $render) {

        foreach ($css_external as $key => $value) {
            $render = str_ireplace("{{ '$key' }}", $value, $render);
        }

        return $render;

    }

}