<?php
require_once('fonctions/outils.php');

$notes = [];


$notes = genereTableauAleatoire( 3);
pre($notes);
$notes = genereTableauAleatoire();
pre($notes);

triBulle($notes);