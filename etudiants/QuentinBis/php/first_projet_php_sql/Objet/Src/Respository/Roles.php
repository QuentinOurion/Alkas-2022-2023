<?php

class Roles
{

    private PDO $con;


    public function __construct($connexion)
    {
        $this->con = $connexion;
    }


    /**
     * Recupere la liste des roles
     *
     * @param PDO $connexion
     * @return array
     */
    public function listRoles(): array
    {
        $query = $this->con->prepare('select * from roles');
        $query->execute();
        $resultQuery = $query->fetchAll();
        return $resultQuery;
    }
}
