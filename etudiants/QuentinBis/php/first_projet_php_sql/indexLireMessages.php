<?php
session_start();
require_once ('Objet/index.php');

// si $_GET['id'] est true(donc n'est pas vide) $id prend sa valeur, sinon $id = 0 (valeur par default).
$id = $_GET['id'] ?? 0;

$nvxMessage = " ";
$message = $message->lireMessage($id);


if(!empty($_SESSION['auth'])){
    $login = $_SESSION['auth'];
    $utilisateurConnecte = $users->champsUtilisateurLogin($login);
}


foreach ($message as $user) {
    $role = $user['nom_role'];
    $nom_uilisateur = $user['utilisateur_nom'];
}


require_once('tpl/lireMessage.php');

