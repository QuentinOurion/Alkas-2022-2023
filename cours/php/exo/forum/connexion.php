<?php
require_once ('gestionSql.php');
$message = '';

$login = trim($_POST['login'] ?? '');
$pwd = trim($_POST['password'] ?? '');

if(filter_var($login, FILTER_VALIDATE_EMAIL) && $pwd) {
    $con = connexion();
    $user = findUserByLogin($con, $login);
    if(password_verify($pwd, $user['password'])) {
        $message = "Utilisateur valid";
    } else {
        $message = "Le mot de passe est invalide";
    }
//    password_hash($user['password'], PASSWORD_ARGON2ID);
}

require_once ('tpl/connexion.php');