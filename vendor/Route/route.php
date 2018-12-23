<?php

namespace vendor\Route;

class route {

    static function explode ($url) {
        if(stristr($url, '?') === TRUE) {
            $CurrentURL_1 = explode("?", trim($url, '/'));
            $CurrentURL_2 = explode("/", trim($CurrentURL_1[0], '/'));
            if(stristr($url, '&') === TRUE) {
                $CurrentURL_3 = explode("&", $CurrentURL_1[1]);
                $variables = [];
                foreach ($CurrentURL_3 as &$value) {
                    $value = explode("=", $value);
                    $variables = array_merge ($variables, [$value[0] => $value[1]]);
                }
            }
        } else {
            $variables = [];
            $CurrentURL_2 = explode("/", trim($url, '/'));
        }
        if ($url == '/') {
            $CurrentURL_2[0] = 'index';
        }
        if (isset($CurrentURL_2[1]) === FALSE) {
            $CurrentURL_2[1] = '';
        }
        if (isset($CurrentURL_2[2]) === FALSE) {
            $CurrentURL_2[2] = '';
        }

        $Route = [
            "controller" => $CurrentURL_2[0],
            "action" => $CurrentURL_2[1],
            "values" => $CurrentURL_2[2],
            "variables" => $variables
        ];

        return $Route;
    }

    public static function get ($url) {

        $Route = self::explode($url);

        $url = str_replace("/eveien", "", $_SERVER['REQUEST_URI']);
        $url = self::explode($url);

        //print_r($Route);
        //print_r($url);

        if ($Route['controller'] == $url['controller']) {


            $Controllers = 'backend\\controllers\\' . $Route["controller"] . 'Controller';
            $Content = $Controllers::Controller();

            $view = '..\\frontend\\views\\' . $Route["controller"] . 'View.php';
            if (file_exists($view)) {
                require $view;
            } else {
                $view = '..\\frontend\\views\\404View.php';
                require $view;
            }
        }


    }

}