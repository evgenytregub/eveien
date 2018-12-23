<?php

namespace vendor\DataBase;

class Edit {

    protected $db_name;
    protected $db_column;
    protected $placeholder;
    protected $set;
    protected $where;

    public function insert($db_name, $placeholder) {
        require "DbConnecting.php"; // Подключаем БД
        $keys = array_keys($placeholder);
        $str1 = '';
        foreach ($keys as $value) {
            $str1 = $str1.$value.' = :'.$value.', ';
        }
        $str1 = substr($str1, 0, -2);
        $sth = $pdo->prepare("INSERT INTO $db_name SET $str1");
        $sth->execute($placeholder);
    }

    public function delete($db_name, $placeholder) {
        require "DbConnecting.php"; // Подключаем БД
        $keys = array_keys($placeholder);
        $str1 = '';
        foreach ($keys as $value) {
            $str1 = $str1.$value.' = :'.$value.', ';
        }
        $str1 = substr($str1, 0, -2);
        $sth = $pdo->prepare("DELETE FROM $db_name WHERE $str1");
        $sth->execute($placeholder);
    }

    public function update($db_name, $set, $where) {
        require "DbConnecting.php"; // Подключаем БД
        $keys = array_keys($set);
        $str1 = '';
        foreach ($keys as $value) {
            $str1 = $str1.$value.' = :'.$value.', ';
        }
        $str1 = substr($str1, 0, -2);
        $keys = array_keys($where);
        $str2 = '';
        foreach ($keys as $value) {
            $str2 = $str2.$value.' = :'.$value.', ';
        }
        $str2 = substr($str2, 0, -2);
        $placeholder = array_merge($set, $where);
        $sth = $pdo->prepare("UPDATE $db_name SET $str1 WHERE $str2");
        $sth->execute($placeholder);
    }

}