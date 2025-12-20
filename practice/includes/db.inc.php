<?php


$dsn = "mysql:host=localhost;dbname=dummydb";
$dbUserName = "root";
$dbpasswd = "";


try{
    $pdo = new PDO($dsn, $dbUserName, $dbpasswd);
    $pdo->setAttribute(PDO::ATTR_MODE, PDO::ERRORMODE_EXCEPTION);
}catch(PDOException $e){
    echo "connection failed: " . $e->getMessage();
}