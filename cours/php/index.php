<?php

$maVariable = 2;
$chaineCaract = '<br>"je suis une phrase, c\'est la première fois"<br>';
$chaineCaractGuillemet = "Ce sont mes premières guillemets<br>";

echo $maVariable;
echo $chaineCaract;
echo $chaineCaractGuillemet;
$maVariable = 1;

// commentaire
/*if($maVariable = 1) {
    echo "<br>Bienvenue";
} else {
    echo "Au revoir";
}*/


if(1 == $maVariable) {
    echo "<br>Bienvenue";
} else {
    echo "Au revoir";
}


echo '<br>';
$count = 0;
$count = $count +1;
echo 'count = '.$count.'<br>';
$count++; // $count = $count +1;
echo 'count = '.$count.'<br>';
$count++;
$count = $count +2;
echo 'count = '.$count.'<br>';


echo '<br>';
for($i = 0; $i < 10; $i++) {
    echo $i.'<br>';
}