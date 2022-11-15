<?php
require_once ('fonctions/outils.php');

$notes = [];

$notes = genereTableauAleatoire($notes, 3);
pre($notes);
$notes = genereTableauAleatoire($notes);
pre($notes);

triBulle($notes);
//triParMinimumSuccessif($notes);
pre($notes);