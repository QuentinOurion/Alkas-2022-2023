<?php

class Etudiant
{

    private string $nomEcole = 'test';
    private string $adresse;

    public function __construct()
    {
    }

    protected function getNomEcole()
    {
        return ucfirst($this->nomEcole);
    }

    public function getInformation() : string
    {
        return "Nom de l'école : ".$this->getNomEcole()."
        <br>L'adresse : ".$this->getAdresse();
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = ucwords($adresse);
    }



}