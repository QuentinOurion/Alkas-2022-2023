<?php
require_once ('exo/fonctions/outils.php');

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


if (1 == $maVariable) {
    echo "<br>Bienvenue";
} else {
    echo "Au revoir";
}

$maVariable = 'Mr';
switch ($maVariable) {
    case 'Mme':
        break;
    case 'Mr':
    default:
}


echo '<br>';
$count = 0;
$count = $count + 1;
echo 'count = ' . $count . '<br>';
$count++; // $count = $count +1;
echo 'count = ' . $count . '<br>';
$count++;
$count = $count + 2;
echo 'count = ' . $count . '<br>';


echo '<br>';
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

$count = 0;
do {
    echo 'count = ' . $count . '<br>';
    $count++;
} while ($count < 10);

$count = 0;
while ($count < 10) {
    echo 'count = ' . $count . '<br>';
    $count++;
}

test('laurent');

function test(string $nom): void
{
    echo ucfirst($nom) . '<br>';
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

function nomPrenom(string $nom, string $prenom): string
{
    return "Mon nom est : " . ucfirst($nom) . "<br>Mon prénom est : " . ucfirst($prenom) . '<br>';
}

$maBoissonEst = 'pisse mémé';
boire($maBoissonEst);
boire('bière');
boire('café');
boire($maBoissonEst);
$laurentNote = 10;
echo maNote('laurent', $laurentNote);
$thomasNote = 15;
echo maNote('thomas', $thomasNote);
$anthonyNote = 20;
$anthonyPrenom = 'Anthony';
echo maNote($anthonyPrenom, $anthonyNote);
$yannAppreciation = maNote('yann', 21);
echo $yannAppreciation;

function boire(string $boisson): void
{
    echo 'Tu bois (du/de la): ' . ucfirst($boisson) . '<br>';
}

/**
 * Appreciation sur une note donnée
 *
 * @param string $prenom prénom
 * @param int $note Note de l'éleve
 * @return string
 */
function maNote(string $prenom, int $note): string
{
    $resultatDeLaNote = 'La note de ' . ucfirst($prenom) . ' est ' . $note . ' <br>';

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

    return $resultatDeLaNote . '<br>';
}


/////////////////////////////////////
/// Array
$notes = array(45, 23, 4);
$notes = [45, 23, 4];
//echo $notes[0]; // affiche 45

for ($i = 0; $i < count($notes); $i++) {
    echo "note : " . $notes[$i] . "<br>";
}

foreach ($notes as $val) {
    echo "note : " . $val . "<br>";
}

$thomasNote = [];
$thomasNote[0] = 15;
$thomasNote[1] = 5;
$thomasNote[2] = 7;
$thomasNote = [15, 5, 7];

for ($i = 0; $i < 10; $i++) {
    $thomasNote[$i] = rand(0, 20);
}
$thomas = 'Thomas';
eleve();
eleve($thomas);
sort($thomasNote);
function eleve(string &$nom = 'Valeur par défaut'): void
{
    $nom = 'Anthony';
    echo $nom;
}

echo $thomas;

$notes = [10, 20, 4, 6];
$notes = [0 => 10, 1 => 20, 2 => 4, 3 => 6];
//unset($notes[1]);
//array_splice();

// La, ça pet car il manque un élément
//for($i = 0; $i < count($notes); $i++) {
//    echo $notes[$i].'<br>';
//}

$courses = [
    'fruits' => ['banane', 'poire', 'pomme'],
    'legume' =>
        ['courgette', 'fenouil', 'champignon'],
    'boisson' =>
        ['rhum', 'coca', 'eau']
];

unset($courses['fruits'][0]);

// ça ne marche plus car la premère clé est redefini par un mot
//echo $courses[0].'<br>';

foreach ($courses['fruits'] as $fruits) {
    echo $fruits . '<br>';
}


$fruits = ['afrique' => 'banane', 'poire', 'pomme'];

//$courses = [
//    'fruits' =>
//        'banane',
//    'legume' =>
//        'courgette',
//    'boisson' =>
//        'rhum'
//];

/**
 * foreach ($courses as $rayon => $produits)
 * $courses est le tableau à parcourir
 * $rayon sont les clés du tableau (donc fruits / légumes / etc.)
 *        elles sont facultatives
 * $produits sont les valeurs du tableau
 */
foreach ($courses as $rayon => $produits) {
//    echo "Clé = $rayon val = $produits
//    echo "Clé = $rayon <br>";

    if (is_array($produits)) {
        foreach ($produits as $nomProduit) {
            echo $nomProduit . '<br>';
        }
    }
//    echo $courses[$keys].'<br>';
}


$courses = [
    0 => ['banane', 'poire', 'pomme'],
    1 => ['courgette', 'fenouil', 'champignon'],
    2 => ['rhum', 'coca', 'eau']
];
echo '<br>';
foreach ($courses as $produits) {
    for($i = 0; $i < count($produits); $i++) {
        echo $produits[$i].'<br>';
    }
}

$courses = [
    0 => ['banane', 'poire', 'pomme'],
    1 => ['courgette', 'fenouil', 'champignon'],
    2 => ['rhum', 'coca', 'eau']
];
echo '<br>';
foreach ($courses as $produits) {
    foreach ($produits as $nomProduits) {
        echo $nomProduits.'<br>';
    }
}

$exempleBizarre = [
    'bonjour',
    ['rhum', 'coca', 'eau'],
    'au revoir',
    ['courgette', 'fenouil', 'champignon'],
];
echo '<br>';
foreach ($exempleBizarre as $galere) {
   if(is_array($galere)) {
       foreach ($galere as $val) {
           echo "galere = $val<br>";
       }
   } else {
       echo "Ma valeur de galere : $galere<br>";
   }
}

// ------------------------- Crypter un mot de passe pour une base de donnée et le tester ----------------------------
// admettons, on a un champ d'un formulaire qui s'appelle password
// et le mot de passe tapé est "eric"
$_POST['password'] = 'eric';

// on devra crypter le mot de passe avec la fonction password_hash comme ci-dessous pour l'enregistrer dans la base de donnée
// $motdepasseCrypte = password_hash($motDePasseACrypter, CONSTANTE_DE_TYPE_DE_CRYPTAGE);
// exemple concret
$motdepasseCrypte = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Le hash et le sel donné aura pour valeur quelque chose comme ça
$motdepasseCrypte = '$2y$10$gxLQF12uzPb9qw34z/TfwOpmEYFI0rFc4wB1zDrMXutrbtzDQP.8.';

// Pour info la taille d'un mot de passe crypté vaut toujours 72 caractères, donc la taille de la colonne d'une base de donnée qui
// devra stocker le mot de passe devra faire cette taille mais pourra être supèrieur par sécurité et avoir une taille de 255 caractères

// Puis il faudra dans un second temps vérifier le mot de passe saisie dans le formulaire
// avec celui de la base de donnée avec la fonction password_verify
// exemple
if(password_verify($_POST['password'], $motdepasseCrypte)) {
    echo 'mot de passe correct';
} else {
    echo 'Votre mot de passe est invalide';
}