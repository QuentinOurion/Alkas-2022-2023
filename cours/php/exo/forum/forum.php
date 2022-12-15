<?php
//require_once('../fonctions/outils.php');
require_once('outils/gestionSql.php');
session_start();

date_default_timezone_set('Europe/Paris');
$title = 'Liste des utilisateurs';

$con = connexion();

$login = '';
$userConnecte = '';

if(!empty($_SESSION['login'])) {
    $login = $_SESSION['login'];

    $userConnecte = findUserByLogin($con, $login);
}

$users = listUsers($con, 5);

require_once('tpl/listUsers.php');