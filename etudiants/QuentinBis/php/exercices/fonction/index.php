<?php

//----------------------------------------les if else----------------------------------------------


//$random = rand(1, 4);
//echo $random."";
//
//if ($random == 1) {
//    $random = "mr";
//} elseif ($random == 2) {
//    $random = "md";
//} elseif ($random == 3) {
//    $random = "mlle";
//} else {
//    $random = "autre";
//}


//$civilite = $random;
//
//
//if ("mr" == $civilite) {
//    echo "    Monsieur ";
//}
//if ("md" == $civilite) {
//    echo "    Madame ";
//}
//if ("mlle" == $civilite) {
//    echo "     Mademoiselle ";
//} else {
//    echo "     c/est un trans";
//}
// ------------------------------------------switch case--------------------------------------

//switch ($civilite) {
//    case "mr":
//        echo "Monsieur";
//        break;
//    case "mlle":
//        echo "Mademoiselle";
//        break;
//    case "md":
//        echo "Madame";
//        break;
//    default:
//        echo "autre";
//}


//-------------------------------------les boucles---------------------------------


//$somme = 0;
//
//
//for ($i=0; $i<10; $i++) {
//    $random = rand(1, 9);
//    $somme = $somme + $random;
//    echo $random."<br>";
//
//}
//
//
//    echo "le resultat de cette somme =".$somme;

//----------------------------------------------------erxercice sequence de nombre-----------------------------------------------------------------

//for($lignes = 1; $lignes < 8; $lignes++ ){²²
//    for($colones = 0; $colones < $lignes; $colones++){
//        echo $lignes;
//     }
//    echo $colones."<br>";
//}


//----------------------------------------------------exercice MOYENNE----------------------------------------------------------------

//$sommeDesNotes = 0;
//
//for ($i = 0; $i < 10; $i++) {
//    $note = rand(1, 9);
//    echo "note = " . $note . "<br>";
//    $sommeDesNotes = $sommeDesNotes + $note;
//}
//
//$moyenne = $sommeDesNotes / $i;
//echo "La note moyenne est de : " . $moyenne;


//-----------------------------------------------------------------------------------------------------------------------------------

//$i = 1;
//
//while ($i <= 10) {
//    echo $i++;  /* La valeur affichée est $i avant l'incrémentation
//                   (post-incrémentation)  */
//}


//----------------------------------------------------------------//moyenne avec do  while------------------------------------

//$sommeDesNotes = 0;
//$i = 0;
//do {
//    $note = rand(1, 9);
//    echo "note = " . $note . "<br>";
//    $sommeDesNotes = $sommeDesNotes + $note;
//} while ($i++ < 3);
//
//$moyenne = $sommeDesNotes / $i;
//echo "La note moyenne est de : " . $moyenne;


//----------------------------------------------------------------//moyenne avec while------------------------------------


//$sommeDesNotes = 0;
//$i = 0;
//
//while($i < 10){
//    $note = rand(1, 9);
//    echo "note = " . $note . "<br>";
//    $sommeDesNotes = $sommeDesNotes + $note;
//    $i++;
//
//}
//$moyenne = $sommeDesNotes / $i;
//echo "La note moyenne est de : " . $moyenne;


$nb = 1;

$stop = $nb + 5;
echo $stop;