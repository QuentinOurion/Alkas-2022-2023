<?php
//require_once('../fonctions/outils.php');
require_once ('gestionSql.php');

date_default_timezone_set('Europe/Paris');
$title = 'Liste des utilisateurs';

$con = connexion();

//$users = listAll($con, 'select * from user limit 10');
$users = listUser($con, 5);

require_once('tpl/listUsers.php');