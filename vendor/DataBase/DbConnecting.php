<?php

$host = 'localhost';
$db = 'eveien';
$charset = 'utf8';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
);
$pdo = new PDO($dsn, $user, $pass, $opt);
