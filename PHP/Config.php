<?php
$host = 'localhost';
$db = 'ZooWeeMama';
$username = 'root';
$password = 'Password';
$charset = 'UTF8';
$attr = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=' . $charset;
$opts = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES => false,
];


try {
    $PDO = new PDO($attr, $username, $password, $opts);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}


