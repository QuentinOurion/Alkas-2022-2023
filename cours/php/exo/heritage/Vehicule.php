<?php

class Vehicule
{
    private int $vitesse = 0;

    public function __construct()
    {
    }

    public function accelere()
    {
        $this->vitesse += 20;

        if($this->vitesse > 110) {
            throw new Exception('Vous avez une amende de 90€');
        }
    }

    public function freine()
    {
        $this->vitesse -= 20;

        if($this->vitesse < 0) {
            throw new Exception('Boom');
        }
    }

    /**
     * @return int
     */
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * @param int $vitesse
     */
    public function setVitesse(int $vitesse): void
    {
        $this->vitesse = $vitesse;
    }




}