<?php

$connexion = new PDO('mysql:dbname=forum;host=localhost','root','',[
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
$prepare =$connexion->prepare('select * from user');
$prepare->execute();

//var_dump($prepare->fetchall());
print_r($prepare->fetchall());


