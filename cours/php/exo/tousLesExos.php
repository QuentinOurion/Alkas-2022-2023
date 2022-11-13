<?php
/**
 * Page de tous les exos PHP
 */
$laurentPrenom = 'laurent';
$laurentNote = 10;
echo appreciationNote($laurentPrenom, $laurentNote);
$thomasNote = 15;
$thomasPrenom = 'thOmas';
echo appreciationNote($thomasPrenom, $thomasNote);
$anthonyNote = 20;
$anthonyPrenom = 'Anthony';
echo appreciationNote($anthonyPrenom, $anthonyNote);
$yannAppreciation = appreciationNote('yann', 21);
echo $yannAppreciation;

//$laurentNombreNote = 12;
//$laurentSommeNote = sommeNotes($laurentNombreNote);
//$laurentMoyenne = moyenneNotes($laurentSommeNote, $laurentNombreNote);
//echo "Laurent somme des notes : $laurentSommeNote, la moyenne est : $laurentMoyenne<br>";

echo evaluationEleve($anthonyPrenom, 10);
echo evaluationEleve($thomasPrenom, 22);
echo evaluationEleve($laurentPrenom, 5);

//Laurent somme des notes : 161, la moyenne est : 13.416666666667
/**
 * Evaluation d'un eleve
 *
 * @param string $prenom
 * @param int $nombreNote
 * @return string        Phrase formatée de l'évaluation
 */
function evaluationEleve(string $prenom, int $nombreNote): string
{
    $somme = sommeNotes($nombreNote);
    $moyenne = moyenneNotes($somme, $nombreNote);
    $prenom = ucfirst(strtolower($prenom));

    return "<strong>$prenom</strong> a un nombre de notes : $nombreNote et la somme de ses notes est = $somme. La moyenne de $prenom est : $moyenne<br>";
}

/**
 * Appreciation sur une note donnée
 *
 * @param string $prenom prénom
 * @param int $note      Note de l'éleve
 * @return string
 */
function appreciationNote(string $prenom, int $note) : string
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

/**
 * Calcul la somme des notes d'un éleve
 *
 * @param int $nombreNote
 * @return int Somme des notes
 */
function sommeNotes(int $nombreNote): int
{
    $somme = 0;

    for($i = 0; $i < $nombreNote; $i++) {
        $note = rand(0, 21);

//        echo "note = $note<br>";
        $somme = $somme + $note;
    }

    return $somme;
}

/**
 * Calcul de la moyenne des notes
 *
 * @param int $somme
 * @param int $nombreNote
 * @return float Moyenne des notes
 */
function moyenneNotes(int $somme, int $nombreNote) : float
{
    $moyenne = $somme / $nombreNote;
    return $moyenne;
}