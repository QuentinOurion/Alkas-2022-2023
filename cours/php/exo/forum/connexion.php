<?php
require_once('outils/gestionSql.php');
require_once('outils/outils.php');
session_start();
$message = '';

$login = trim($_POST['login'] ?? '');
$pwd = trim($_POST['password'] ?? '');

if(filter_var($login, FILTER_VALIDATE_EMAIL) && $pwd) {
    $con = connexion();
    $user = findUserByLogin($con, $login);

    if($user && password_verify($pwd, $user['password'])) {
        $_SESSION['flash'] = "Utilisateur valid";
        $_SESSION['login'] = $user['login'];
        redir('forum');
    } else {
        $message = "Le mot de passe est invalide";
    }
//    password_hash($user['password'], PASSWORD_ARGON2ID);
}

require_once ('tpl/connexion.php');