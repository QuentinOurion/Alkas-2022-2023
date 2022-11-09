note = 5<br>
somme = 5<br>
note = 3<br>
somme = 8<br>
note = 7<br>
somme = 15<br>
---------------------------<br>

<?php

echo '<br>';
$somme = 0;
$nbrNote = 2;

for ($i = 0; $i < $nbrNote; $i++) {
    $note = rand(0, 10);
    echo 'Note = ' . $note . '<br>';

    $somme = $somme + $note;

    echo 'Somme = ' . $somme . '<br>';
}

$moyenne = $somme / $nbrNote;
echo 'Moyenne = ' . $moyenne . '<br>';

echo '<br>';
$somme = 0;
$nbrNote = 2;
$i = 0;

//for ($i = 0; $i < $nbrNote; $i++) {
do {
    $i++;

    $note = rand(0, 10);
    echo 'Note = ' . $note . '<br>';

    $somme = $somme + $note;

    echo 'Somme = ' . $somme . '<br>';
} while($i < $nbrNote);

$moyenne = $somme / $nbrNote;
echo 'Moyenne = ' . $moyenne . '<br>';


echo '<br>';
$somme = 0;
$nbrNote = 2;
$i = 0;

//for ($i = 0; $i < $nbrNote; $i++) {
while($i < $nbrNote) {
    $i++;

    $note = rand(0, 10);
    echo 'Note = ' . $note . '<br>';

    $somme = $somme + $note;

    echo 'Somme = ' . $somme . '<br>';
};

$moyenne = $somme / $nbrNote;
echo 'Moyenne = ' . $moyenne . '<br>';