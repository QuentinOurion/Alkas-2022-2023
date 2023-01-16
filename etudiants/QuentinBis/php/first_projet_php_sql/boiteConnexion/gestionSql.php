<?php

function connexion()
{
    $connexion = new PDO('mysql:dbname=forum;host=localhost', 'root', '', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    return $connexion;
}

function list_all($connexion, string $requete)
{
    $prepare = $connexion->prepare($requete);
    $prepare->execute();
    $result = $prepare->fetchall();
    return  $result;
}
