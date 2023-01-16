<?php


$nombre1 = 0;
$operateur = '';
$nombre2 = 0;
$historique = 'historique = ';
$resultat = "";

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
    print_r($_POST);
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
            break;
        case '-':
            $resultat = $nombre1 - $nombre2;
            break;
        case '*':
            $resultat = $nombre1 * $nombre2;
            break;
        case '/':
            $resultat = $nombre1 / $nombre2;
            break;
        default:
            $resultat = 'Gros con !';
    }
}







require_once('calculatrice.php');