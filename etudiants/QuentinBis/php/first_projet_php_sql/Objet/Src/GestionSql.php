<?php

class GestionSql
{

    private PDO $con;


    public function __construct($connexion)
    {
        $this->con = $connexion;
    }



    /**
     * Permet de récupérer des données
     * @param $connexion
     * @param string $requete
     * @return mixed
     */
   public function listAll($requete)
    {
        $prepare = $this->con->prepare($requete);
        $prepare->execute();
        $result = $prepare->fetchall();
        return  $result;
    }





    /**
     * Retourne un seul résultat
     *
     * @param string $query
     * @param array $data
     * @return array
     */
    function find(string $query, array $data): array
    {
        // on prépare les requêtes pour pdo et on l'exécute
        $prepare = $this->con->prepare($query);
        $prepare->execute($data);

        // puis on récupère le résultat
        $result = $prepare->fetch();

        return $result ?? [];
    }


}


