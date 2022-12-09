<?php
require_once('exo/fonctions/outils.php');
require_once('gestionSql.php');

$con = connexion();

$roles = listRoles($con);

//pre($_POST);
$nom = trim($_POST['nom'] ?? '');
//var_dump($nom);
$message = '';

if ($nom) {
    if(addTown($con, $nom)) {
        $message = "Super ça marche";
    } else {
        $message = "ça n'a pas marché";
    }
}


require_once('template/crud.php');