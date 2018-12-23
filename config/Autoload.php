<?php

define('ROOT', dirname(__DIR__));

// Autoload of classes
spl_autoload_register(function($class) {

    $file = ROOT . '/' . $class . '.php';
    $file = str_replace("\\", "/", $file);
    require_once $file;

});