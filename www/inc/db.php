<?php

$dsn="mysql:dbname=initiation_php;host=db;charset=utf8";
$username="root";
$password="root";

// on essaie de se connecter à MySQL et on retourne un message d'erreur en cas d'échec

try {
    $pdo = new PDO($dsn, $username, $password);
} catch(Exception $erreur) {
    echo "<h1>Erreur de connexion</h1>";
    var_dump($erreur->getMessage());
    exit();
}