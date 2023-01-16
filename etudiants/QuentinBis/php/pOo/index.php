<?php
require_once ('Message.php');
//require_once ('Personnage.php');
//
//
//
//$message = new Somme();
//$vegeta = new Personnage("Vegeta", 83,"Super Guerrier", 78);
//$sangoku = new Personnage("Sangoku",87,"Super Saiyan", 83);
//
//echo $message->Somme();
//echo $message;
//
//$vegeta->regeneration();
////$sangoku->regeneration();
//
//
//
//$vegeta->parole = "je ne sais pas quoi dire";
//$sangoku->parole = "kameaméaaaa";
//
//
//$vegeta-> vie = 0;
//$vegeta->mort();
//
//$sangoku->attaqueMortelle();
//
//
//$vegeta->regeneration();
//
//
//echo "<pre>";
//print_r($vegeta);
//"</pre>";
//
//
//echo "<pre>";
//print_r($sangoku);
//"</pre>";

$message = new Message();


$message->bonjour();

print_r($message);