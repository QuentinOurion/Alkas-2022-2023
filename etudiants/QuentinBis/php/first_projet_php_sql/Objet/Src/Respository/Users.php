<?php

class Users
{
    private  $users;
    private PDO $con;


    public function __construct($connexion)
    {
        $this->con = $connexion;
    }


    /**
     * Permet de sélectionner tous les utilisateurs du plus recent au plus ancien
     * @param $connexion
     * @return array
     */
   public function list_user(): array
    {

        $query = $this->con->prepare('select *
                                            from user
                                            order by date_inscription desc');
        $query->execute();
        $resultQuery = $query->fetchall();

        return $resultQuery;
    }


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
    public function addUser(int $roleId, string $login, string $prenom, string $nom, string $dateNaissance, string $password)
    {
        $prepare = $this->con->prepare('insert into user(roles_id, login, prenom, nom, date_naissance, date_inscription,password) values (:roleId,:login,:prenom,:nom,:dateNaissance,NOW(),:password)');

        $result = $prepare->execute([
            ':roleId' => $roleId,
            ':login' => $login,
            ':prenom' => $prenom,
            ':nom' => $nom,
            ':dateNaissance' => $dateNaissance,
            ':password' => $password,
        ]);
        return $result;
    }


    /**
     * Permet de rechercher un utilisateur via un login
     * @param $connexion
     * @param $login
     * @return array
     */
    public function champsUtilisateurLogin($login): array
    {
        $query = $this->con->prepare('select *
                          from user
                          where login = :login');
        $query->execute([
            'login' => $login
        ]);
        $result = $query->fetch();
        return $result;
    }


}
