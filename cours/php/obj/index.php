<?php
require_once ('src/GestionSQL.php');
require_once ('src/IndexController.php');
require_once ('src/Repository/UserRepository.php');


try {
    $gestionSQL = new GestionSQL();
} catch (Exception $exception) {
    die('Merci de revenir plus tard car nous avons un problème technique !');
}

$index = new IndexController($gestionSQL);
$index->accueil();