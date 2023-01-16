<?php


/**
 * * Enregistre un nouvel utilisateur
 * @param PDO $connexion
 * @param int $roleId
 * @param string $login
 * @param string $prenom
 * @param string $nom
 * @param string $dateNaissance
 * @return bool
 */
function addUser(PDO $connexion,int $roleId,string $login, string $prenom, string $nom, string $dateNaissance, string $password) : bool
{
    $prepare = $connexion->prepare('insert into user(roles_id, login, prenom, nom, date_naissance, date_inscription,password) values (:roleId,:login,:prenom,:nom,:dateNaissance,NOW(),:password)');

    $result = $prepare->execute([
    ':roleId' => $roleId,
    ':login' =>  $login,
    ':prenom' => $prenom,
    ':nom' =>  $nom,
    ':dateNaissance' =>$dateNaissance,
    ':password' =>$password,
    ]);

    return $result;
}






/**
 * fonction qui permet de sélectionner tous les utilisateurs des plus recent au plus ancien
 * @param $connexion
 * @return array
 */
function list_user($connexion) : array
{
    $users = list_all($connexion,'select *
                                            from user
                                            order by date_inscription desc');
    return $users;
}





/**
 * Permet de rechercher un utilisateur via un login
 * @param $connexion
 * @param $login
 * @return array
 */
function champsUtilisateurLogin($connexion, $login) : array
{
   $query = $connexion->prepare('select *
                          from user
                          where login = :login');
   $query->execute([
    'login'=> $login
     ]);
   $result = $query->fetch();
   return $result;
}






