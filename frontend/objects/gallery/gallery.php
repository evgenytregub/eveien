<?php

namespace frontend\objects\gallery;

use frontend\elements\slideshow\slideshow;
use frontend\elements\hoverLine\hoverLine;
use frontend\settings\settings_css;
use frontend\core\render;

class gallery {

    function css ($css_external) {
        return $render = render::render($css_external, file_get_contents('../frontend/objects/gallery/gallery.csst'));
    }

    function html ($slideshow_html) {
        return $render = str_ireplace("{{ 'slideshow' }}", $slideshow_html, file_get_contents('../frontend/objects/gallery/gallery.html'));
    }

    function js ($slideshow_js) {
        return $render = str_ireplace("{{ 'slideshow_js' }}", $slideshow_js, file_get_contents('../frontend/objects/gallery/gallery.js'));
    }

    public function builder () {

        $slideshow = slideshow::builder();
        $hoverLine = hoverLine::builder();
        $settings_css = settings_css::settings_css();
        $css_external = array_merge($settings_css, ['slideshow_css' => $slideshow['css']], ['hoverLine_css' => $hoverLine['css']]);

        $css = $this->css($css_external);
        $html = $this->html($slideshow['html']);
        $js = $this->js($slideshow['js']);

        return ['css' => $css, 'html' => $html, 'js' => $js];

    }

}