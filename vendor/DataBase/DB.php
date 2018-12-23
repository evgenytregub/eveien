<?php

namespace vendor\DataBase;

use vendor\DataBase\Select;
use vendor\DataBase\Edit;
use vendor\DataBase\CreateTab;

class DB {

    // Call of function - DB::CreateTable('table');
    public static function CreateTable ($db_name, $column) {

        $CreateTable = new CreateTab();
        return $CreateTable -> Tab($db_name, $column);

    }

// Call of function - DB::selectAll('table');
    public static function selectAll ($db_name) {

        $selectAll = new Select;
        return $selectAll -> selectAll($db_name);

    }

    /*
     * Call of function - DB::selectAllLimit('table', 'limit', ['placeholder']);
     * Example 1 -        DB::selectAllLimit('table', 'LIMIT ?', [1])
     * Example 2 -        DB::selectAllLimit('table', 'LIMIT ?, ?', [1, 2])
    */
    public static function selectAllLimit ($db_name, $limit, $placeholder) {

        $selectAllLimit = new Select;
        return $selectAllLimit -> selectAllLimit($db_name, $limit, $placeholder);

    }

// Call of function - DB::selectCount('table');
    public static function selectCount ($db_name) {

        $selectCount = new Select;
        return $selectCount -> selectCount($db_name);

    }

// Call of function - DB::selectColumn('table', 'column', 'where', ['placeholder'])
    public static function selectColumn ($db_name, $db_column, $db_condition, $placeholder) {

        $selectAll = new Select;
        return $selectAll -> selectColumn($db_name, $db_column, $db_condition, $placeholder);

    }

// Call of function - DB::selectLine('table', 'where', ['placeholder']);
    public static function selectLine ($db_name, $db_condition, $placeholder) {

        $selectLine = new Select;
        return $selectLine -> selectLine($db_name, $db_condition, $placeholder);

    }

// Call of function - DB::selectIn('table', 'column', [condition]);
    public static function selectIn($db_name, $db_column, $db_condition) {

        $selectIn = new Select;
        return $selectIn -> selectIn($db_name, $db_column, $db_condition);

    }

// Call of function - DB::selectMax('table', 'column');
    public static function selectMax($db_name, $db_column) {

        $selectMax = new Select;
        return $selectMax -> selectMax($db_name, $db_column);

    }

// Call of function - DB::selectMin('table', 'column');
    public static function selectMin($db_name, $db_column) {

        $selectMin = new Select;
        return $selectMin -> selectMin($db_name, $db_column);

    }
    /*
     * Call of function - DB::insert('table', '[placeholder]');
     * Example 1 -DB::insert('posts', ['category_id' => '123', 'title' => '123', 'text' => '123', 'keqwords' => '123']);
    */
    public static function insert($db_name, $placeholder) {

        $insert = new Edit;
        return $insert -> insert($db_name, $placeholder);

    }

    /*
     * Call of function - DB::delete('table', '[placeholder]');
     * Example 1 -        DB::delete('posts', ['category_id' => '123']);
    */
    public static function delete($db_name, $placeholder) {

        $delete = new Edit;
        return $delete -> delete($db_name, $placeholder);

    }

    /*
     * Call of function - DB::update('table', '[set]', '[where]');
     * Example 1 -        DB::update('posts', ['category' => 'sss'], ['newid' => '3']);
    */
    public static function update($db_name, $set, $where) {

        $update = new Edit;
        return $update -> update($db_name, $set, $where);

    }
}
