<?php
session_start();
require_once('Objet/index.php');


$nvxMessage = " ";


if (!empty($nvxMessage)) {
    $nvxMessage = "Envoyer un nouveau message";
} else {
    $nvxMessage = "";
}


date_default_timezone_set('Europe/Paris');
$date = date('h:i');
$today = date("F j, Y, g:i a");

if (!empty($_SESSION['auth'])) {
    $login = $_SESSION['auth'];
    $utilisateurConnecte = $users->champsUtilisateurLogin($login);;
}

$users = $users->list_user();;

require_once('tpl/main.php');


