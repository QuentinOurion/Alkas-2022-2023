<?php

$nbDeNote = 15;
$sommeDesNotes = sommeDeChiffreAleatoire($nbDeNote);
echo $sommeDesNotes;

echo $resultatDeLaMoyenne = calculDeLaMoyenneDesNotes($sommeDesNotes,$nbDeNote);

/**
 * fonction qui calcule la moyenne des notes
 * @param $sommeDesNotes
 * @return int
 */
function lo($nbDeNote ): int
{
    return sommeDeChiffreAleatoire($nbDeNote) / $nbDeNote;
}
/**
 * fonction qui calcule la moyenne des notes
 * @param $sommeDesNotes
 * @return int
 */
function calculDeLaMoyenneDesNotes(int $sommeDesNotes,$nbDeNote ): int
{
    return $sommeDesNotes / $nbDeNote;
}

/**
 * Fonction qui calcule une somme de chiffre aleatoire
 * @return int
 */
function sommeDeChiffreAleatoire(int $nbDeNote): int
{
    $sommeDesNotes = 0;
    for ($i = 0; $i < $nbDeNote; $i++) {
        $noteAleatoire = rand(1, 9);
        echo "<br>" . $noteAleatoire . "<br>" . "+";
        $sommeDesNotes = $sommeDesNotes + $noteAleatoire;
    }
    return $sommeDesNotes;
}