<?php
$server = getenv("FA_SERVER") ?: "127.0.0.1";
$db = getenv("FA_DB") ?: "gretaczficheact";
$user = getenv("FA_USER") ?: "root";
$password = getenv("FA_TOKEN") ?: "";

$dsn = "mysql:host=$server;dbname=$db;charset=utf8";
$pdo = new PDO ($dsn, $user, $password);

// ACTIVER LE DEBUG DES REQUÊTES
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>