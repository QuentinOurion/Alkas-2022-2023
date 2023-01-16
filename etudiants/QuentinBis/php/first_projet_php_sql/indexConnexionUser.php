<?php
session_start();
require_once ('Objet/index.php');
$nvxMessage = " ";
require_once('tpl/connexionUser.php');



$message = "";
$login = trim($_POST['login'] ?? '');
$password = trim($_POST['password'] ?? '');


if (filter_var($login, FILTER_VALIDATE_EMAIL) && $password) {
    $user = $users->champsUtilisateurLogin($login);
    if (password_verify($password, $user['password'])) {
        $_SESSION['auth'] = $user['login'];
        header('Location: index.php');
        die;
    } else {
        $message = 'Mot de passe ou login invalide.';
    }
}






























