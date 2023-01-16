<?php

//https://www.youtube.com/watch?v=4C4lwPM1ESk&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=8


//******************************** Boucle While aussi appelé boucle(tant que)**********************************************


//$chiffre = 2;
//echo $chiffre."<br>";
//
//while($chiffre < 10){
//    echo "le chiffre".$chiffre." est plus petit que 10"."<br>";
//    $chiffre++;
//}

//******************************** Boucle For aussi appelé boucle(pour)**********************************************

//for(valeur de depart ; jusqu'a(la condition) ; valeur ajouter à chaques iteration)
//for($i = 2 ; $i < 10 ; $i= $i + 3 ){
//    echo $i."<br>";
//}

//******************************** Boucle For aussi appelé boucle(pour) **********************************************

//$note = [0,5,7,8,9,10,15];

//for($i = 0; $i < count($note); $i++){
//    echo "- ".$note[$i]."<br>";
//}

//******************************** Boucle foreach aussi appelé boucle(pour chaque) ***********************************

//$note = [0,5,7,8,9,10,15];
//
//Pour toutes les notes de note

//foreach($note as $note){
//    echo "- ".$note."<br>";
//}


//$eleve = [
//    "cm2" => "jean",
//    "cm1" => "pierre",
//    "ce2" => "marc"
//];

//foreach (   Nom de l'array    as        clée         =>         valeur)
//                  $eleve            "cm2","cm1"ect..     "jean","pierre"ect..

//foreach($eleve as $classe => $nomDesEleves){
//    echo "- " . $nomDesEleves . "  " . $classe ."<br>";
//}

//*************************boucle foreach dans une boucle foreach********************************

//$array = [
//    "cm2" => ["jean", "pat", "henry", "tony", "moi", "toi", "fanny"],
//    "cm1" => ["pierre", "lui", "elle", "laeti", "chacha", "jean"],
//    "ce2" => ["marc", "mathieu", "teo"]
//];
//
//foreach ($array as $laClasse => $DelaListeDesEleves) {
//    echo $laClasse . " : " . "<br>";
//    foreach ($DelaListeDesEleves as $nomDeEleve) {
//        echo "-" . $nomDeEleve . "<br>";
//    }
//    echo "<br>";
//}

//************************************  exercice note  *******************************************************

//$note = [];
//$compteur = 1;

//while ($compteur < 6) {
//    $note[] = rand(0,20);
//    echo " - " ." Note n°" . $compteur . " : "  . $note[$compteur-1] . "<br>";
//    $compteur++;
//}
//**********************************************************************************************************************

//$note = [];
//$action = null;
//
//while ($action !== "fin") {
//    $action = readline("entrez une note ou saisir fin quand vous avez terminé");
//    if ($action !== "fin") {
//        $note[] = (int)$action;
//    }
//}
//
//foreach ($note as $note) {
//    echo $note . "\n";
//}

//************************************  exercice ouverture du magasin  *******************************************************


//$action = null;
//
//while ($action !== "fin"){
//    $action = readline("veuillez saisir une heure, sinon tapez (fin) : ");
//    if($action > 9 && $action < 12 || $action > 14 && $action < 19  ){
//        echo "Le magasin sera bien ouvert à : ".$action."H00"."\n";
//    }else{
//        echo "A ".$action."H00"." le magasin sera malheureusement fermé"."\n";
//    }
//}

//*****************************************************************************************************************************

//$crenauxHorraire = [];
//$action = null;
//
//while(true) {
//    $heureOuverture = (int)readline("veuillez saisir une heure d'ouverture : ");
//    $heureFermeture = (int)readline("veuillez saisir une heure de fermeture : ");
//    if($heureOuverture >= $heureFermeture){
//        echo "Impossible de choisir ce creneau, l heure d ouverture est superieur a l heure de femeture";
//    }else{
//    $crenauxHorraire[] = [$heureOuverture,$heureFermeture];
//    $action = readline("voulez vous enregistrer un nouveau créneau (o/n) : ");
//    }
//    if ($action === "n") {
//        break;
//    }
//}
//
//print_r($crenauxHorraire);