<?php
class Anthony extends Organe
{
    public function __construct()
    {
        $muscle = new Muscle();
    }

    public function mesOrganes()
    {
        echo $this->coeur();
        echo $this->vessie();
    }

}

class Muscle
{

}

class Organe
{
    public function vessie() : string
    {
        return "vessie à besoin du ".$this->sexe();
    }

    protected function coeur() : string
    {
        return "coeur";
    }

    public function foie() : string
    {
        return "foie";
    }

    private function sexe() : string
    {
        return "sexe";
    }
}

//$organe = new Organe();
//
//$organe->coeur();
//$organe->foie();

$anthony = new Anthony();
$anthony->mesOrganes();

$anthony->vessie();