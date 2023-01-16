<?php

class Voiture extends Deplacement
{
private int $roue;
private string $volant;
private string $klaxon;

    /**
     * @param int $roue
     */
    public function __construct(int $roue, $volant, $klaxon)
    {
        $this->roue = $roue;
        $this->volant=$volant;
        $this->klaxon=$klaxon;
    }


    /**
     * @param int $roue
     */
    public function setRoue(int $roue): void
    {
        $this->roue = $roue;
    }

    /**
     * @return int
     */
    public function getRoue(): int
    {
        return $this->roue;
    }






}