<?php
require_once ('Deplacement.php');
require_once ('Voiture.php');
require_once ('..\..\..\boiteOutils\outilsFonctions\fonctionsDivers.php');
$deplacement = new Deplacement("vitesse acceleration","je freine", "j avance");
$voiture =  new Voiture(4,"volant","klaxon");





pre($voiture->getAccelerer());

$voiture->setRoue(4);

pre("Nombre de roue : " . $voiture->getRoue());


