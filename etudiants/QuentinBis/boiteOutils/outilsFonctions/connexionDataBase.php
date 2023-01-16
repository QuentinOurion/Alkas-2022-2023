<?php

/**
 * Permet de se connnecter à la base de donnee "paysdumonde"
 * @return PDO
 */
function connexion(string $nameDB){
    $connexion = new PDO('mysql:dbname=$nameDB;host=localhost', 'root', '', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    return $connexion;
}
