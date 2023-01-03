<?php
require_once ('config.php');
require_once ('src/GestionSQL.php');
require_once ('src/Controller.php');

require_once ('src/Controller/AccueilController.php');
require_once ('src/Repository/UserRepository.php');


try {
    $gestionSQL = new GestionSQL();
} catch (Exception $exception) {
    die('Merci de revenir plus tard car nous avons un problème technique !');
}

// si slug = accueil ou rien
// alors on fait appel à ça :
$index = new AccueilController();
$index->accueil($gestionSQL);

// sinon éventuellement on fait appel ou pas à un autre contrôleur ...