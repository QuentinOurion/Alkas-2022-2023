<?php

/**
 * Voici une class
 *
 * public, protected, private, s'appellent des portées
 */
class Demo
{
    private string $proprietePrive = 'ma valeur';
//    private PDO $connexion;



    // méthode de construction qui est appelé obligatoirement
    public function __construct(string $maChaine)
    {
        echo 'Construction de mon obj <br>'. $maChaine.'<br>';
//        if($_POST['blabla'])
//        if(array_key_exists('blabla', $_POST))

    }

//    public function __construct(PDO $connexion, string $maChaine)
//    {
//        $this->connexion = $connexion;
//    }

    // méthode n'est pas une fonction
    public function test()
    {
        echo "premier test de POO";

        // le this permet d'accéder aux méthodes de notre class
        $this->methodePrivee();
    }

    /**
     * Methode qui n'appartient uniquement à cette classe et pas une autre
     *
     * @return void
     */
    private function methodePrivee()
    {
        echo "Cette méthode est privée";
    }

    /**
     * @return string
     */
    public function getProprietePrive(): string
    {
        return $this->proprietePrive;
    }

    /**
     * @param string $proprietePrive
     */
    public function setProprietePrive(string $proprietePrive): void
    {
        $this->proprietePrive = $proprietePrive;
    }

}