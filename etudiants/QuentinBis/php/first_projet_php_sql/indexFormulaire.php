<?php
require_once ('Objet/index.php');
session_start();

$roles = $roles->listRoles();
$nvxMessage = " ";

$rolesId = ($_POST['roles'] ?? 0);
$login = trim($_POST['login'] ?? '');
$formatEmail = filter_var($login, FILTER_VALIDATE_EMAIL);
$prenom = trim($_POST['prenom'] ?? '');
$nom = trim($_POST['nom'] ?? '');
$dateNaissance = trim($_POST['dateNaissance'] ?? '');
$password = trim($_POST['password'] ?? '');


$message = '';
if ($nom && $rolesId && $login && $prenom && $dateNaissance && $formatEmail && $password) {
    $password = password_hash($password,PASSWORD_DEFAULT);
    if ($users->addUser($rolesId, $login, $prenom, $nom, $dateNaissance,$password)) {
        $message = "Les données du formulaire ont bien été envoyées.";
    } else {
        $message = "Erreur les données n'ont pas pu être envoyées.";
    }
}

require_once('tpl/formulaire.php');