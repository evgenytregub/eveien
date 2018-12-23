<?php

namespace frontend\core;


class Builder {

    function html ($pages) {
        $Render = file_get_contents('../frontend/pages/'.$pages.'.php');
        preg_match_all('/@import {{ \'(.*?)\' }}/s', $Render, $matches);
        $code = $Render;
        foreach ($matches[1] as &$value) {
            $link = "frontend\objects\\$value\\$value";
            $model = new $link();
            $model = $model -> builder();
            $code = str_replace("@import {{ '$value' }}", "$model[html]", $code);
        }


        $fopen = '../frontend/views/'.$pages.'View.php';
        $fp = fopen($fopen, "w");
        fwrite($fp, $code);
        fclose($fp);
        return $matches[1];
    }

    function css ($pages) {
        $Render = file_get_contents('../frontend/pages/'.$pages.'.php');
        preg_match_all('/@import {{ \'(.*?)\' }}/s', $Render, $matches);
        $code = '';
        foreach ($matches[1] as &$value) {
            $link = "frontend\objects\\$value\\$value";
            $model = new $link();
            $model = $model -> builder();
            $code = $code.$model['css'];
        }


        $fopen = '../public/css/design.css';
        $fp = fopen($fopen, "a");
        fwrite($fp, $code);
        fclose($fp);
        return $matches[1];
    }

    function js ($pages) {
        $Render = file_get_contents('../frontend/pages/'.$pages.'.php');
        preg_match_all('/@import {{ \'(.*?)\' }}/s', $Render, $matches);
        $code = '';
        foreach ($matches[1] as &$value) {
            $link = "frontend\objects\\$value\\$value";
            $model = new $link();
            $model = $model -> builder();
            $code = $code.$model['js'];
        }


        $fopen = '../public/js/eveien.js';
        $fp = fopen($fopen, "a");
        fwrite($fp, $code);
        fclose($fp);
        return $matches[1];
    }

    function pages () {
        $dir    = '../frontend/pages';
        $files = scandir($dir, 1);
        array_splice($files, -2);
        $pages = [];
        foreach ($files as &$value) {
            $value = substr($value, 0, -4);
            array_push($pages, $value);
        }
        return $pages;
    }

    public function builder () {

        $fopen = '../public/css/design.css';
        $fp = fopen($fopen, "w");
        fclose($fp);
        $fopen = '../public/js/eveien.js';
        $fp = fopen($fopen, "w");
        fclose($fp);

        $pages = $this->pages();
        foreach ($pages as &$value) {
            $this->html($value);
            $this->css($value);
            $this->js($value);
        }


        return $pages;

    }

}