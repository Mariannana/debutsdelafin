<?php

$username = "admin";
$pass = "pass";

try {
    $bdd = new PDO("mysql:host=localhost;dbname=fanfic", $username, $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}

?>