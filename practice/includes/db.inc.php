<?php


$dsn = "mysql:host = localhost;dbname = myfirstdatabase";
$dbUsername = "root";
$dbPassword = "";

try {
    $pdo = new PDO($dsn, $dbUsername, $dbPassword);
} catch (\Throwable $th) {
    //throw $th;
}