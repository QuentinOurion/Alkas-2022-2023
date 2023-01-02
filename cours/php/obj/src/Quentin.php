<?php

class Quentin extends Etudiant
{

    public function __construct(private int $tailleQuentin)
    {
        parent::__construct();
    }

    public function getTaille(): int
    {
        return $this->tailleQuentin;
    }

    public function getInformation(): string
    {
        return 'taille Quentin : '.$this->getTaille().'<br>'.parent::getInformation();
    }

}