<?php
require_once ('htmlPhp/formulaireHtml.php');
require_once('exo/fonctions/outils.php');

if(!empty($_GET['prenom'])) {
    pre($_GET);
    echo $_GET['prenom'];
} elseif ($_POST) {
    pre($_POST);
    echo $_POST['prenom'];
    if(!empty($_POST['boutonRadioBfm'])) {
        echo "t'es viré";
    }
}