<?php

namespace backend\controllers;

class CheckinController {

    public static function Controller () {

        if (isset($_POST['Email'])) { $Email = $_POST['Email']; if ($Email == '') { unset($Email);} }

        return "123321Index";

    }

}