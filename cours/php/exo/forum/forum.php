<?php
//require_once('../fonctions/outils.php');
require_once ('gestionSql.php');

$con = connexion();

//$users = listAll($con, 'select * from user limit 10');
$users = listUser($con, 2);

require_once('tpl/listUsers.php');