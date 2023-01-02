<?php
require_once('src/Etudiant.php');
require_once('src/Quentin.php');


$quentin = new Quentin(175);
$quentin->setAdresse("23423 rue blalbalbla, montpellier");
//echo $quentin->taille().'cm';

//echo $quentin->getNomEcole();

echo $quentin->getInformation();