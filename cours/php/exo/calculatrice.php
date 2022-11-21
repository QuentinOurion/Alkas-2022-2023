<?php
require_once ('fonctions/outils.php');

$nombre1 = 0;
$operateur = '';
$nombre2 = 0;
$historique = '';
$resultat = '';


if(!empty($_POST['historique'])) {
    $historique = $_POST['historique'];
}

if(!empty($_POST['operateur'])) {
    $operateur = $_POST['operateur'];
}

if(!empty($_POST['nombre1'])) {
    $nombre1 = $_POST['nombre1'];
}

if(!empty($_POST['nombre2'])) {
    $nombre2 = $_POST['nombre2'];
}
// code identique ci-dessous
//if(isset($_POST['nombre2']) && $_POST['nombre2']) {
//    $nombre2 = $_POST['nombre2'];
//}

if(is_numeric($nombre1) && $operateur && is_numeric($nombre2)) {
//    pre($_POST);
/*    if('+' == $operateur) {
        echo $nombre1 + $nombre2;
    } elseif('-' == $operateur) {
        echo $nombre1 - $nombre2;
    }elseif('*' == $operateur) {
        echo $nombre1 * $nombre2;
    }elseif('/' == $operateur) {
        echo $nombre1 / $nombre2;
    } else {
        echo 'Gros con';
    }*/

    switch ($operateur) {
        case '+':
            $resultat = $nombre1 + $nombre2;
            $historique = $nombre1. ' + '.$nombre2.' = '.$resultat.'<br>'.$historique;
            break;
        case '-':
            $resultat = $nombre1 - $nombre2;
            $historique = $nombre1. ' - '.$nombre2.' = '.$resultat.'<br>'.$historique;
            break;
        case '*':
            $resultat = $nombre1 * $nombre2;
            $historique = $nombre1. ' * '.$nombre2.' = '.$resultat.'<br>'.$historique;
            break;
        case '/':
            $resultat = $nombre1 / $nombre2;
            $historique = $nombre1. ' / '.$nombre2.' = '.$resultat.'<br>'.$historique;
            break;
        default:
            $resultat = 'Gros con !';
    }
}

require_once ('template/calculatrice.php');