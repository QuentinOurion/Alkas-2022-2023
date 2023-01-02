<?php

class GestionSQL
{
    private PDO $con;

    public function __construct()
    {
        $this->connexion();
    }


    /**
     * Connexion à la db
     *
     */
    private function connexion(): void
    {
        $this->con = new PDO('mysql:dbname=alkas2023;host=localhost;charset=utf8', 'root', 'proj', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    /**
     * Permet de récupérer des données
     *
     * @param string $requete
     * @param array $data
     * @return array
     */
    public function findAll(string $requete, array $data = []): array
    {
        // on prépare les requêtes pour pdo et on l'exécute
        $prepare = $this->con->prepare($requete);
        $prepare->execute($data);

        // puis on récupère le résultat
        $result = $prepare->fetchAll();

        return $result ?? [];
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

        if(is_array($result)) {
            return $result;
        } else {
            return [];
        }
    }

}