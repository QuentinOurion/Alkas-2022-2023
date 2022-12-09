<?php
/**
 * Connexion à la db
 *
 * @return PDO
 */
function connexion() : PDO
{
    $connexion = new PDO('mysql:dbname=alkas2023;host=localhost', 'root', 'proj', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    return $connexion;
}

/**
 * Recupere la liste des utilisateurs avec une limite du nombre d'utilisateurs
 *
 * @param PDO $connexion
 * @param int $limit
 * @return array
 */
function listUser(PDO $connexion, int $limit = 1) : array
{
    return listAll($connexion, 'select * from user limit '.$limit);
}

/**
 * Permet de récuperer des données
 *
 * @param PDO $connexion
 * @param string $requete
 * @return array
 */
function listAll(PDO $connexion, string $requete) : array
{
    // on prépare les requêtes pour pdo et on l'exécute
    $prepare = $connexion->prepare($requete);
    $prepare->execute();

    // puis on récupère le résultat
    $result = $prepare->fetchAll();

    return $result;
}

function addTown(PDO $connexion, string $nom) : bool
{
    $prepare = $connexion->prepare('insert into ville (nom) values (:nom)');

    $result = $prepare->execute([
        ':nom' => $nom
    ]);

    return $result;
}

/**
 * Recupere la liste des roles
 *
 * @param PDO $connexion
 * @return array
 */
function listRoles(PDO $connexion) : array
{
    return listAll($connexion, 'select * from roles');
}