<?php
use backend\migrations\user;


    error_reporting(-1);

    // Autoload of clsses
    require_once('../config/Autoload.php');

    // Routing
    require_once('../config/Route.php');

//User::user('qqqqqqq');

$user = new User();
$user -> user();
