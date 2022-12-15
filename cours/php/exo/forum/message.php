<?php
require_once('outils/gestionSql.php');
session_start();

date_default_timezone_set('Europe/Paris');
$title = "Liste des messages d'un utilisateur";
$messageErreur = '';

$con = connexion();

if(!isset($_GET['user_id']) || $_GET['user_id'] < 1  ) {
    $messageErreur = "Erreur d'id";
    $messages = [];
    $user = [];
} else {
    $id = $_GET['user_id'];
    $messages = listMessages($con,  $id);
    $user = findUser($con, $id);
}

require_once('tpl/listMessages.php');