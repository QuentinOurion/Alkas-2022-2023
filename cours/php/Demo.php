<?php

class Demo
{
    // méthode de construction qui est appelé obligatoirement
    public function __construct($maChaine)
    {
        echo 'Construction de mon obj <br>'. $maChaine.'<br>';
    }

    // méthode n'est pas une fonction
    public function test()
    {
        echo "premier test de POO";

        $this->methodePrivee();
    }

    private function methodePrivee()
    {
        echo "Cette méthode est privée";
    }

}