<?php
/**
 * Page de tous les exos PHP
 */
$laurentNote = 10;
echo maNote('laurent', $laurentNote);
$thomasNote = 15;
echo maNote('thomas', $thomasNote);
$anthonyNote = 20;
$anthonyPrenom = 'Anthony';
echo maNote($anthonyPrenom, $anthonyNote);
$yannAppreciation = maNote('yann', 21);
echo $yannAppreciation;


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