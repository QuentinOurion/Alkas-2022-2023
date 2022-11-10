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

$count = 0;
do {
    echo 'count = '.$count.'<br>';
    $count++;
} while($count < 10);

$count = 0;
while($count < 10) {
    echo 'count = '.$count.'<br>';
    $count++;
}

test('laurent');

function  test(string $nom) : void
{
    echo ucfirst($nom).'<br>';
}

$i = 0;
$i = $i + 1; // est l'équivalent de $i++;
$i++;
$chaineDeCaractere = 'Bonjour';
$chaineDeCaractere = $chaineDeCaractere . ' Guillaume'; // est l'équivalent de $chaineDeCaractere .= ' Guillaume';
$chaineDeCaractere .= ' Guillaume';


$monNom = "teissier";
$monPrenom = "thomas";

echo nomPrenom($monNom, $monPrenom);
echo nomPrenom("Grolier", "anthony");

function nomPrenom(string $nom, string $prenom) : string
{
    return "Mon nom est : ".ucfirst($nom)."<br>Mon prénom est : ".ucfirst($prenom).'<br>';
}

$maBoissonEst = 'pisse mémé';
boire($maBoissonEst);
boire('bière');
boire('café');
boire($maBoissonEst);
$laurent = 10;
echo maNote('laurent', $laurent);
$thomas = 15;
echo maNote('thomas', $thomas);
$anthony = 20;
$anthonyPrenom = 'Anthony';
echo maNote($anthonyPrenom, $anthony);
echo maNote('yann', 21);

function boire(string $boisson) : void
{
    echo 'Tu bois (du/de la): '.ucfirst($boisson).'<br>';
}

/**
 * Appreciation sur une note donnée
 * 
 * @param string $prenom prénom
 * @param int $note      Note de l'éleve
 * @return string
 */
function maNote(string $prenom, int $note) : string
{
    $resultatDeLaNote = 'La note de '.ucfirst($prenom).' est '.$note.' <br>';

    if ($note > 20) {
        $resultatDeLaNote .= "Arrête de boire ou double les doses";
    } else {
        if ($note >= 12 && $note <= 20) {
            $resultatDeLaNote .= "excellent";
        } elseif (11 == $note) {
            $resultatDeLaNote .= "moyen";
        } else {
            $resultatDeLaNote .= "Réessaye encore";
        }
    }

    return $resultatDeLaNote.'<br>';
}