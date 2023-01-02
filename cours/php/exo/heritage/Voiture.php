<?php

class Voiture extends Vehicule
{
    private int $roue;
    private string $tourneA = "";

    private int $klaxon = 0;

    /**
     * @param int $roue
     * @return void
     * @throws Exception
     */
    public function setNombreRoue(int $roue) : void
    {
        if($roue < 3 || $roue > 4) {
            throw new Exception("Impossible que ta voiture est trop ou pas assez de roue");
        }

        $this->roue = $roue;
    }

    public function getNombreRoue(): int
    {
        return $this->roue;
    }

    public function klaxon() : string
    {
        return 'pouet pouet';
    }

    public function setTourneA(string $tourneA) : void
    {
        $this->tourneA .= $tourneA." ";
    }

    public function getTourneA(): string
    {
        return $this->tourneA;
    }

    /**
     * @return int
     */
    public function getKlaxon(): int
    {
        return $this->klaxon;
    }

    /**
     * @param int $klaxon
     */
    public function appuieSurKlaxon(): void
    {
        $this->klaxon = 1;
    }



    public function __toString(): string
    {
        return "Ma voiture roule à ".$this->getVitesse()."Km<br>Tourne à ".$this->getTourneA() .($this->getKlaxon() ? "<br>Klaxone : Pouet pouet":"");
    }

}