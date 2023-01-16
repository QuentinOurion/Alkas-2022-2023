<?php
//require_once ('../../../boiteOutils/outilsFonctions/fonctionsDivers.php');
require_once('Src/ConnexionDB.php');
require_once('Src/GestionSql.php');
require_once('Src/Respository/Users.php');
require_once('Src/Respository/Message.php');
require_once('Src/Respository/Roles.php');


$connexionDb = new ConnexionDB();
//$gestionSql = new GestionSql($connexionDb->connexion());
$users = new Users($connexionDb->connexion());
$message = new Message($connexionDb->connexion());
$roles = new Roles($connexionDb->connexion());














