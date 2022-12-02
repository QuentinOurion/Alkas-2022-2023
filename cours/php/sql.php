<?php
require_once ('exo/fonctions/outils.php');

// connexion à la db
$connexion = new PDO('mysql:dbname=alkas2023;host=localhost', 'root', 'proj', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

// on prépare les requêtes pour pdo et on l'exécute
$prepare = $connexion->prepare('select * from user limit 2');
$prepare->execute();

// puis on récupère le résultat
$users = $prepare->fetchAll();
//pre($users);die;
foreach ($users as $cle => $user) {
    echo $cle.'<br>';
}

// on prépare les requêtes pour pdo et on l'exécute
$prepare = $connexion->prepare('select * from user');
$prepare->execute();

// puis on récupère le résultat
$user = $prepare->fetch();

foreach ($user as $key => $val) {
    echo "clé = $key<br>val = $val<br>";
}