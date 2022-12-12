<?php
require_once('../fonctions/outils.php');

require_once('gestionSql.php');
$con = connexion();
$roles = listRoles($con);

$rolesId = $_POST['roles'] ?? 0;
$login = trim($_POST['login'] ?? '');
$prenom = trim($_POST['prenom'] ?? '');
$nom = trim($_POST['nom'] ?? '');
$dateNaissance = trim($_POST['date_naissance'] ?? '');

$message = '';


if (intval($rolesId) && filter_var($login, FILTER_VALIDATE_EMAIL) && $prenom && $nom && $dateNaissance) {
    if (addUser($con, $rolesId, $login, $prenom, $nom, $dateNaissance)) {
        $message = "Bien enregistré";
    }
}

require_once('tpl/addUser.php');