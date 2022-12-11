<?php
/**
 * Connexion à la db
 *
 * @return PDO
 */
function connexion() : PDO
{
    $connexion = new PDO('mysql:dbname=alkas2023;host=localhost;charset=utf8', 'root', 'proj', [
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

function findUser(PDO $connexion, int $id) : array
{
    return find($connexion, 'select * from user where id='.$id);
}

/**
 * Recupere la liste des utilisateurs avec une limite du nombre d'utilisateurs
 *
 * @param PDO $connexion
 * @param int $limit
 * @return array
 */
function listMessage(PDO $connexion, int $id) : array
{
    return listAll($connexion, '
        select m.* from message m 
        where m.user_id = '.$id.'
        order by m.conversation_id, m.date_creation
        '
    );
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

/**
 * Retourne un seul résultat
 *
 * @param PDO $connexion
 * @param string $query
 * @return array
 */
function find(PDO $connexion, string $query) : array
{
    // on prépare les requêtes pour pdo et on l'exécute
    $prepare = $connexion->prepare($query);
    $prepare->execute();

    // puis on récupère le résultat
    $result = $prepare->fetch();

    return $result;
}