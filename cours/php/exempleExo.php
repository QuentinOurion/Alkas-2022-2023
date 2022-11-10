<?php

$monChiffre = rand(0, 21);

if($monChiffre < 10) {
    echo "Mon résultat est : ".$monChiffre * 2;
} else {
    echo "Résultat identique";
}

echo "<br>$monChiffre";