<?php
require_once('../boiteOutils/outilsFonctions/fonctionsDivers.php');
require_once('config.php');
require_once('src/GestionSQL.php');
require_once('src/Controller.php');
require_once('src/Controller/AccueilController.php');
require_once('src/Repository/PageRepository.php');


//recuperation et verification des données du formulaire de la creation de page.
$titre = ($_POST['titre'] ?? '');
$slug = 'slug';
$description = ($_POST['description'] ?? '');
$categorie = ($_POST['categorie'] ?? '');
$contenu = ($_POST['contenu'] ?? '');


$updateTitre = ($_POST['updateTitre'] ?? '');
$updateSlug = 'slug';
$updateDescription = ($_POST['updateDescription'] ?? '');
$updateCategorie = ($_POST['updateCategorie'] ?? '');
$updateContenu = ($_POST['updateContenu'] ?? '');


$admin = ($_GET['admin'] ?? '');
$id = ($_GET['id'] ?? 0);


try {
    $gestionSQL = new GestionSQL();
} catch (Exception $exception) {
    die('Merci de revenir plus tard car nous avons un problème technique !');
}


//Redirection de la liste de lien vers la page
if (!empty($_GET['page'])) {
    $slug = $_GET['page'];
    $index = new AccueilController();
    $index->RedirectionVersPage($gestionSQL, $slug);
} else {


    $index = new AccueilController();

    switch ($admin) {
        case 'accueil' :
            $index->redirVersAccueil($gestionSQL);
        case 'creation':
            $index->creationPage();
            if ($titre && $slug && $description && $categorie && $contenu) {
                $index->AddPage($gestionSQL, $titre, $slug, $description, $categorie, $contenu);
            }
            break;
        case 'delete':
            $index->adminPage($gestionSQL);
            if ($id) {
                $index->supprimer($gestionSQL, $id);
            }
            break;
        case 'modif' :
            $index->redirVersModificationPage();
            if ($id && $updateTitre && $updateSlug && $updateDescription && $updateCategorie && $updateContenu) {
                $index->miseAjourPage($gestionSQL, $id, $updateTitre, $updateSlug, $updateDescription, $updateCategorie, $updateContenu);
            }
            break;
        default:
            $index->accueil($gestionSQL);
    }
}








