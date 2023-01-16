<?php


class ConnexionDB
{
    private PDO $con;
/*
    function __construct()
    {
        $this->connexion();
    }*/


    /**
     * Connexion a la base de données
     * @return
     */
    public function connexion()
    {
        $this->con = new PDO('mysql:dbname=forum;host=localhost', 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        return $this->con;
    }
}

