<?php

namespace vendor\DataBase;

class Select {

    protected $db_name;
    protected $db_column;
    protected $db_condition;
    protected $placeholder;

    public function selectAll($db_name) {
        require "DbConnecting.php"; // Подключаем БД
        return $pdo->query('SELECT * FROM '.$db_name)->fetchAll();
    }

    public function selectMax($db_name, $db_column) {
        require "DbConnecting.php"; // Подключаем БД
        return $pdo->query("SELECT max($db_column) FROM ".$db_name)->fetchColumn();
    }

    public function selectMin($db_name, $db_column) {
        require "DbConnecting.php"; // Подключаем БД
        return $pdo->query("SELECT min($db_column) FROM ".$db_name)->fetchColumn();
    }

    public function selectAllLimit($db_name, $limit, $placeholder) {
        require "DbConnecting.php"; // Подключаем БД
        $stm = $pdo->prepare('SELECT * FROM '.$db_name.' '.$limit);
        if (isset($placeholder[0])) {
            $stm->bindValue(1, $placeholder[0]);
        }
        if (isset($placeholder[1])) {
            $stm->bindValue(2, $placeholder[1]);
        }
        $stm->execute();
        return $data = $stm->fetchAll();
    }

    public function selectOrderBy($db_name, $db_column) {
        require "DbConnecting.php"; // Подключаем БД
        return $pdo->query('SELECT * FROM '.$db_name.' ORDER BY number')->fetchAll();
    }

    public function selectCount($db_name) {
        require "DbConnecting.php"; // Подключаем БД
        return $pdo->query('SELECT count(*) FROM '.$db_name)->fetchAll();
    }

    public function selectColumn($db_name, $db_column, $db_condition, $placeholder) {
        require "DbConnecting.php"; // Подключаем БД
        $select = $pdo->prepare("SELECT $db_column FROM $db_name WHERE $db_condition");
        $select->execute($placeholder);
        return $select->fetchColumn();
    }

    public function selectLine($db_name, $db_condition, $placeholder) {
        require "DbConnecting.php"; // Подключаем БД
        $select = $pdo->prepare("SELECT * FROM $db_name WHERE $db_condition");
        $select->execute($placeholder);
        return $select->fetch();
    }

    public function selectIn($db_name, $db_column, $db_condition) {
        require "DbConnecting.php"; // Подключаем БД
        $in  = str_repeat('?,', count($db_condition) - 1) . '?';
        $stm = $pdo->prepare("SELECT * FROM $db_name WHERE $db_column IN ($in)");
        $stm->execute($db_condition);
        return $data = $stm->fetchAll();

    }

}