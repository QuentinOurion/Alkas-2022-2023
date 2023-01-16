<?php
session_start();


if(!empty($_SESSION['auth'])) {
    $_SESSION['auth'] = null;
    unset($_SESSION['auth']);
    session_destroy();
    header('Location: index.php');

}
//$messageError = "Il n'y a pas d'utilisateur connecté";








