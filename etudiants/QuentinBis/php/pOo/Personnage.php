<?php

class Personnage
{

private $vie = 80;
private $parole = "";



public function __construct(private $nom, private $attaque, private $evolution,private $defense){

}



public function mort(){
    return $this->vie = 0;
}




public function regeneration(){
    $this->vie = 100;
}

public function attaqueMortelle (){
    $this->vie = 0;
}

//public attaqueKamea(){
//    $this->vie =
//}


}