<?php
//https://www.youtube.com/watch?v=UXdvpKRQsx8&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=9

$result = games();
echo "<br>"."score pierre".$result[0];
echo "<br>"."score feuille".$result[1];
echo "<br>"."score ciseaux".$result[2]."<br>";
print_r($result);

function games()
{
    $pierre = 0;
    $feuille = 0;
    $ciseaux = 0;
    for ($i = 0; $i < 3; $i++){
    $ordinateurAleatoire = rand(0, 2);

    if ($ordinateurAleatoire == 0) {
        echo "l'ordinateur a choisi : PIERRE"."<br>";
        $pierre = $pierre + 1;
    } elseif ($ordinateurAleatoire == 1) {
        echo "l'ordinateur a choisi : feuille"."<br>";
        $feuille = $feuille + 1;
    } else {
        echo "l'ordinateur a choisi : ciseaux"."<br>";
        $ciseaux = $ciseaux + 1;
    }
    }
    return [$pierre,$feuille,$ciseaux];
}