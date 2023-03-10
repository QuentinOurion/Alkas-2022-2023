<?php
require_once ('config.php');
require_once ('src/GestionSQL.php');
require_once ('src/Controller.php');

require_once ('src/Controller/AccueilController.php');
require_once ('src/Controller/PageController.php');
require_once ('src/Repository/PageRepository.php');

try {
    $gestionSQL = new GestionSQL();
} catch (Exception $exception) {
    die('Merci de revenir plus tard car nous avons un problème technique !');
}

// si slug = accueil ou rien
// alors on fait appel à ça :
//$index = new AccueilController();
//$index->accueil($gestionSQL);

//Redirection de la liste de lien vers la page
if (!empty($_GET['page'])) {
    $pageController = new PageController();
    $pageController->show($gestionSQL, $_GET['page']);
} elseif(!empty($_GET['admin'])) {
    $pageController = new PageController();

    switch ($_GET['admin']) {
        case 'creation':
            $pageController->create($gestionSQL, $_POST);
            break;
        case 'modif':
            $pageController->update($gestionSQL, $_REQUEST);
            break;

        case 'eff':
            $pageController->delete($gestionSQL, intval($_GET['id']));
    }
} else {
    $accueilController = new AccueilController();
    $accueilController->accueil($gestionSQL);
}

// sinon éventuellement on fait appel ou pas à un autre contrôleur ...