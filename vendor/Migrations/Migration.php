<?php

namespace vendor\Migrations;

use vendor\DataBase\DB;

class Migration
{

    function Create($tableName, $column)
    {
        DB::CreateTable($tableName, $column);

    }
}