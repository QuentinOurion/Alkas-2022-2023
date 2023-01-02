<?php
require_once ('heritage/Vehicule.php');
require_once ('heritage/Voiture.php');

try {
    $voiture = new Voiture();

    $voiture->accelere();
    $voiture->accelere();
    $voiture->accelere();
    $voiture->accelere();

    $voiture->setTourneA("Gauche");
    $voiture->setTourneA("Gauche");
    $voiture->appuieSurKlaxon();

    $voiture->freine();
    $voiture->freine();
    $voiture->freine();
    $voiture->freine();
    $voiture->freine();

    echo $voiture;
} catch (Exception $e) {
    echo $e->getMessage();
}