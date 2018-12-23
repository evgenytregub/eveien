<?php

namespace frontend\settings;

class settings_css {

    static function media () {
        return $media = [
            'mediaExtraLarge' => '1200',
            'mediaLarge' => '992',
            'mediaMedium' => '768',
            'mediaSmall' => '576'
        ];
    }

    static function container () {
        return $container = [
            'rowContainer' => '80'
        ];
    }

    static function button () {
        return $button = [
            'buttonBackground' => '#000000',
            'buttonBorder' => 'none',
            'button' => '768',
            'button' => '576'
        ];
    }

    static function color () {
        return $color = [
            'colorTxtWhite' => 'white'
        ];
    }

    static function fontsize () {
        return $fontsize = [
            'button' => '16'
        ];
    }

    static function transition () {
        return $transition = [
            'transition' => '0.4'
        ];
    }


    public static function settings_css () {

        $media = self::media();
        $container = self::container();
        $button = self::button();
        $color = self::color();
        $fontsize = self::fontsize();
        $transition = self::transition();

        $settings_css = array_merge($media, $container, $button, $color, $fontsize, $fontsize, $transition);

        return $settings_css;

    }

}