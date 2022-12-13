<?php
require_once ('gestionSql.php');
$message = '';

$login = trim($_POST['login'] ?? '');
$pwd = trim($_POST['password'] ?? '');

if(filter_var($login, FILTER_VALIDATE_EMAIL) && $pwd) {
    $con = connexion();
    var_dump(findUserByLogin($con, $login));
    $message = strlen(password_hash($pwd, PASSWORD_ARGON2ID));
}

require_once ('tpl/connexion.php');