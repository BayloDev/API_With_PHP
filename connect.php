<?php

$dsn = 'mysql:host=localhost;dbname=notes_app';
$user = 'root';
$pass = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8' // for arabic

);

try {
    $connect = new PDO(dsn: $dsn, username: $user, password: $pass, options: $options);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    include 'functions.php';
} catch (PDOException $exeption) {
    echo  $exeption->getMessage();
}
