<?php

namespace vendor\DataBase;

use PDO;

class CreateTab
{

    public function Tab($tableName, $column)
    {

        require "DbConnecting.php"; // Подключаем БД

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "CREATE TABLE $tableName ($column)";

            $pdo->exec($sql);

    }
}