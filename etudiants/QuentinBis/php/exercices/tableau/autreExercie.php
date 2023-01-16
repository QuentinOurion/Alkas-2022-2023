<?php

//$eleves = [
//    "quentin" =>[5,99,19,10],
//    "pierre" =>[55,37,9,10],
//    "marc" =>[5,7,97,110],
//    "thomas" =>[5,757,9757,10],
//    "jaqueline" =>[15,7757,9,10],
//    "mathieu" =>[5,71,579,10],
//    "franck" =>[5,7,977,10],
//    "justine" =>[54,74,9,10],
//    "charline" =>[5,27,9,10],
//    "joy" =>[57,77,94,160],
//];
//
//foreach ($eleves as $nomEleve => $notesEleve){
//    echo "Note de ".$nomEleve."<br>";
//    foreach ($notesEleve as $cesNotes){
//        echo $cesNotes."<br>";
//
//    }
//}




//**********************************************************************************************

//$tableauDeseleves = [
//
//    "alkas" => [
//        "dev" => [
//            "quentin" => ['notes' => 5, 7, 9, 10],
//            "pierre" => ['notes' => 5, 7, 9, 10],
//            "marc" => ['notes' => 5, 7, 9, 10],
//            "thomas" => ['notes' => 5, 7, 9, 10],
//        ],
//        "vcm" => [
//            "jaqueline" => ['notes' => 5, 7, 9, 10],
//            "mathieu" => ['notes' => 5, 7, 9, 10],
//            "franck" => ['notes' => 5, 7, 9, 10],
//            "justine" => ['notes' => 5, 7, 9, 10],
//            "charline" => ['notes' => 5, 7, 9, 10],
//            "joy" => ['notes' => 5, 7, 9, 10],
//        ],
//    ],
//];
//foreach ($tableauDeseleves as $ecole => $listeSpecialites) {
//    echo $ecole . "<br>";
//    foreach ($listeSpecialites as $specialite => $listeEleve) {
//        echo ".............".$specialite . "<br>";
//        foreach ($listeEleve as $eleve => $serieDeNote){
//            echo "........................".$eleve."<br>";
//            foreach ($serieDeNote as $serieDeNote){
//                echo "<br>".".......................................".$serieDeNote."<br>";
//            }
//        }
//    }
//}

//********************************************************************************************************************
//$saisons = [
//    "ete" => "juin",
//    "automne" => "septembre",
//    "hiver" => "decembre",
//    "printemps" => "mars"
//];
//
//foreach ($saisons as $key => $valeur){
////    echo $key."<br>";
//    echo $key;
//}

//**********************************************************************************************************************


$saisons = [
    "ete" => [
        "debut" => "juin",
        "fin"   => "septembre",
    ],
    "hiver" => [
        "debut" => "decembre",
        "fin"   => "mars",
    ]
];


//echo ("<pre>");
//print_r($saisons);
//echo ("</pre>");




foreach ($saisons as $saison => $detailsDesSaisons) {
//    echo $saison;
    foreach ($detailsDesSaisons as $key_debut_fin => $mois){
//        echo $mois."<br>".$key_debut_fin;
        echo $detailsDesSaisons["debut"];
    }
}