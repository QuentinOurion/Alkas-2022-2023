<?php
//https://www.youtube.com/watch?v=zFqdht5bFJY&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=7


//********************************* if elseif else *****************************************************

//VRAI && VRAI = VRAI
//VRAI && FAUX = FAUX
//FAUX && FAUX = FAUX
//
//VRAI || VRAI = VRAI
//VRAI || FAUX = VRAI
//FAUX || FAUX = FAUX


//**********************************************************************************************

//$note = readline("entrez votre note");
//$note = 10;

//if ($note > 10) {
//    echo "Bravo tu as la moyenne";
//} elseif ($note == 10) {
//    echo "Tu as tout juste la moyenne";
//} else {
//    echo "Dommage tu n'as pas la moyenne";
//}

//**********************************************************************************************

$heure = 14;
//Magasin ouvert de 9h00 à 12h00 et de 14h00 à 19h00

if(($heure >= 9 && $heure <=12) || ($heure >= 14 && $heure <= 19)){
    echo "Le magasin est ouvert";
}else {
    echo "Le magasin est fermé";
}

//********************************** switch case *******************************************************


//$action = readline("saisir le numero de votre action a effectuer: (1: attaquer, 2:défendre, 3 passer votre tour)");
//
//
//switch ($action) {
//    case 1:
//        echo "j attaque";
//        break;
//    case 2:
//        echo "je defends";
//        break;
//    case 3 :
//        echo "je passe mon tour";
//        break;
//    default:
//        echo "commande inconnue";
//}





