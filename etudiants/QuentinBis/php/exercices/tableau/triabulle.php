<?php


//$notes = [];
//for ($i = 0; $i < 10; $i++) {
//    $notes[$i] = rand(0, 20);
////    echo $notes[$i] . " | ";
//}
//
//for ($i = 0; $i < count($notes); $i++) {
//    for ($j = $i + 1; $j < count($notes); $j++) {
//        if ($notes[$i] > $notes[$j]) {
//            $temporaire = $notes[$i];
//            $notes[$i] = $notes[$j];
//            $notes[$j] = $temporaire;
//        }
//    }
//    echo $notes[$i] . " | ";
//}

//******************************************** Avec fonction ***********************************************************

$notes = [];
for ($i = 0; $i < 10; $i++) {
    $notes[$i] = rand(0, 20);
    echo $notes[$i] . " | ";
}

//$notes = [2,59,86,8,7,6,56,70];

function swap(&$premier, &$second)
{
    $temporaire = $premier;
    $premier = $second;
    $second = $temporaire;
}

$tableauTrie = tri($notes);
function tri(array $tabDeNote)
{
    for ($i = 0; $i < count($tabDeNote); $i++) {
        for ($j = $i + 1; $j < count($tabDeNote); $j++) {
            if ($tabDeNote[$i] > $tabDeNote[$j]) {
                swap($tabDeNote[$i], $tabDeNote[$j]);
            }
        }
        echo $tabDeNote[$i] . " | ";
    }
    return $tabDeNote;
}






