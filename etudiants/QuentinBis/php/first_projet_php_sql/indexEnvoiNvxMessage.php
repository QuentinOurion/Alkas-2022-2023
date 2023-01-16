<?php
require_once ('Objet/index.php');
session_start();

$nvxMessage = null;
$addNvxMessage = trim($_POST['message'] ?? "");
$login = trim($_POST['login'] ?? "");
$statutMessage = "";


if (filter_var($login, FILTER_VALIDATE_EMAIL) && $addNvxMessage) {
    $user = $users->champsUtilisateurLogin($login);
    $userId = $user['id'];
    ;
    if($message->envoiNvxMessage($userId,9,$addNvxMessage)){
        $statutMessage = "Le message a bien été envoyé.";
    } else {
        $statutMessage = "Le message n'a pas pu être transmis au destinataire.";
    }
}

if(!empty($_SESSION['auth'])){
    $login = $_SESSION['auth'];
    $utilisateurConnecte = $users->champsUtilisateurLogin($login);
}


require_once('tpl/envoiNvxMessage.php');