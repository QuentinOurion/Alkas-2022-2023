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
function listUsers(PDO $connexion, int $limit = 1) : array
{
    return listAll($connexion, '
                 select * from user 
                 order by date_inscription DESC
                 limit '.$limit);
}

function findUser(PDO $connexion, int $id) : array
{
    return find($connexion, 'select * from user where id=:id', [
        'id' => $id
    ]);
}

/**
 * Récupère la liste des utilisateurs avec une limite du nombre d'utilisateurs
 *
 * @param PDO $connexion
 * @param int $limit
 * @return array
 */
function listMessages(PDO $connexion, int $id) : array
{
    return listAll($connexion, '
        select m.* from message m 
        where m.user_id = :id
        order by m.conversation_id, m.date_creation
        ', [
            ':id' => $id
        ]
    );
}

/**
 * Permet de récuperer des données
 *
 * @param PDO $connexion
 * @param string $requete
 * @param array $data
 * @return array
 */
function listAll(PDO $connexion, string $requete, array $data = []) : array
{
    // on prépare les requêtes pour pdo et on l'exécute
    $prepare = $connexion->prepare($requete);
    $prepare->execute($data);

    // puis on récupère le résultat
    $result = $prepare->fetchAll();

    return $result;
}

/**
 * Retourne un seul résultat
 *
 * @param PDO $connexion
 * @param string $query
 * @param array $data
 * @return array
 */
function find(PDO $connexion, string $query, array $data) : array
{
    // on prépare les requêtes pour pdo et on l'exécute
    $prepare = $connexion->prepare($query);
    $prepare->execute($data);

    // puis on récupère le résultat
    $result = $prepare->fetch();

    return $result;
}

/**
 * Enregistre un nouvel utilisateur
 *
 * @param PDO $connexion
 * @param int $roleId
 * @param string $login
 * @param string $prenom
 * @param string $nom
 * @param string $dateNaissance
 * @return bool
 */
function addUser(PDO $connexion, int $roleId, string $login, string $prenom, string $nom, string $dateNaissance) : bool
{
    $prepare = $connexion->prepare('insert into user (roles_id, login, prenom, nom, date_naissance, date_inscription) values (:roles_id, :login, :prenom, :nom, :date_naissance, now())');
//    $prepare = $connexion->prepare('insert into user (roles_id, login, prenom, nom, date_naissance, date_inscription) VALUES (1, 'aol@aol.com', 'Thomas', 'Tessier', '2022-12-12', now()));

    $result = $prepare->execute([
        'roles_id' => $roleId,
        'login' => $login,
        'prenom' => $prenom,
        'nom' => $nom,
        'date_naissance' => $dateNaissance
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