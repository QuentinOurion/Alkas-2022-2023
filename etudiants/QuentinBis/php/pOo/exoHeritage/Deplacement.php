<?php

class Deplacement
{

private $accelerer;
private $freiner;

private $avance;


function __construct($accelerer,$freiner,$avance)
{
    $this->accelerer=$accelerer;
    $this->freiner=$freiner;
    $this->avance=$avance;


}

    /**
     * @return mixed
     */
    public function getAccelerer()
    {
        return $this->accelerer;
    }

    /**
     * @return mixed
     */
    public function getFreiner()
    {
        return $this->freiner;
    }

    /**
     * @return mixed
     */
    public function getAvance()
    {
        return $this->avance;
    }





}