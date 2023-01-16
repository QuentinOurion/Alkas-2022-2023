<?php

require_once ('fonction_imc.php');
if (empty($_POST["taille"])) {
    $taille = 0;
} else {
    $taille = $_POST["taille"];
}


if (empty($_POST["poids"])) {
    $poids = 0;
} else {
    $poids = $_POST["poids"];
}

if (empty($_POST["classique_dejante"])) {
    $selection = 0;
} else {
    $selection = $_POST["classique_dejante"];
}


if ($poids && $taille) {
    $resultatImc = $poids / (($taille / 100) * ($taille / 100));
    $resultatImc = round($resultatImc, 1);
} else {
    $resultatImc = 0;
}

$message = calculImc($resultatImc,$selection);


require_once('imc.php');

























