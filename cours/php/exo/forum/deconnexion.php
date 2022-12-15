<?php
require_once ('outils/outils.php');

session_start();

if(!empty($_SESSION['login'])) {
    $_SESSION['login'] = null;
    unset($_SESSION['login']);
    session_destroy();

    redir('forum');
}

$messageError = "Il n'y a pas d'utilisateur connecté";

require_once ('tpl/error.php');