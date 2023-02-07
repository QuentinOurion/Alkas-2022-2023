<?php
require_once('config.php');
require_once('src/GestionSQL.php');
require_once('src/Controller.php');

require_once('src/Controller/AccueilController.php');
require_once('src/Controller/JsController.php');
require_once('src/Controller/PageController.php');
require_once('src/Repository/PageRepository.php');

//try {
//    $gestionSQL = new GestionSQL();
//} catch (Exception $exception) {
//    die('Merci de revenir plus tard car nous avons un problème technique !');
//}

// si slug = accueil ou rien
// alors on fait appel à ça :
//$index = new AccueilController();
//$index->accueil($gestionSQL);

//Redirection de la liste de lien vers la page
if (!empty($_GET['page'])) {
    $pageController = new PageController();
    $pageController->show($gestionSQL, $_GET['page']);
} elseif (!empty($_GET['admin'])) {
    $pageController = new PageController();

    switch ($_GET['admin']) {
        case 'creation':
            $pageController->create($gestionSQL, $_POST);
            break;

        case 'list':
            $pageController->list($gestionSQL);
            break;

        case 'modif':
            $pageController->update($gestionSQL, intval($_GET['id']), $_POST);
            break;

        case 'eff':
            $pageController->delete($gestionSQL, intval($_GET['id']));
            break;
    }

} elseif (!empty($_GET['js'])) {
    $jsController = new JsController();
    switch ($_GET['js']) {
        case 'cours' :
            $jsController->cours();
            break;
        case 'calculatrice' :
            $jsController->calculatrice();
            break;
        case 'while' :
            $jsController->boucleWhile();
            break;
        case 'exercices' :
            $jsController->event();
            break;
        case 'toDoList' :
            $jsController->toDoList();
            break;
        case 'test' :
            $jsController->test();
            break;
        case 'chifumi' :
            $jsController->chifumi();
            break;
        case 'exercies' :
            $jsController->exercies();
            break;
        case 'formulaire' :
            $jsController->formulaire();
            break;
        case 'jsonAjax' :
            $jsController->jsonAjax();
            break;
        case 'ajax' :
            $jsController->ajax();
            break;
        case 'formContact':
            $jsController->formContact($_POST);
            break;
        case 'message':
            $jsController->message($_POST);
            break;

    }
}
else {
    $accueilController = new AccueilController();
    $accueilController->accueil();
}

// sinon éventuellement on fait appel ou pas à un autre contrôleur ...