
chiffre = 5
somme = 5
chiffre = 3
somme = 8
chiffre = 7
somme = 15
---------------------------

<?php

echo '<br>';
$somme = 0;

for($i = 0; $i <= 2; $i = $i + 1) {
    $chiffre = rand(0, 10);
    echo 'Chiffre = '.$chiffre.'<br>';

    $somme = $somme + $chiffre;

    echo 'Somme = '.$somme.'<br>';
}