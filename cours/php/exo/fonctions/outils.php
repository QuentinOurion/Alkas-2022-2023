<?php
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
 * @param int $note Note de l'éleve
 * @return string
 */
function appreciationNote(string $prenom, int $note): string
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

/**
 * Calcul la somme des notes d'un éleve
 *
 * @param int $nombreNote
 * @return int Somme des notes
 */
function sommeNotes(int $nombreNote): int
{
    $somme = 0;

    for ($i = 0; $i < $nombreNote; $i++) {
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
function moyenneNotes(int $somme, int $nombreNote): float
{
    $moyenne = $somme / $nombreNote;
    return $moyenne;
}

/**
 * Génére un tableau aléatoire
 *
 * @param array $tab
 * @param int $nombreElement
 * @return array
 */
function genereTableauAleatoire(array $tab, int $nombreElement = 10): array
{

    for ($i = 0; $i < $nombreElement; $i++) {
        $tab[$i] = rand(0, 20);
    }
    return $tab;
}

/**
 * Affiche un tableau en ligne
 *
 * @param array $tab
 * @return void
 */
function pre(array $tab): void
{
    echo '<pre>';
    print_r($tab);
    echo '</pre>';
}

/**
 * Trouve le plus petit élément
 *
 * @param array $t
 * @param int $rang
 * @param int $nbElements
 *
 * @return int Numéro de l'élément trouvé
 */
function minimum(array $t, int $rang, int $nbElements): int
{
    $indice = $rang;
    for ($i = $rang + 1; $i < $nbElements; $i++) {
        if ($t[$i] < $t[$indice]) {
            $indice = $i;
        }
    }
    return $indice;
}

/**
 * Inverse deux valeurs entre elle
 *
 * @param mixed $val1
 * @param mixed $val2
 *
 * @return void
 */
function swap(mixed &$val1, mixed &$val2): void
{
    $tmp = $val1;
    $val1 = $val2;
    $val2 = $tmp;
}

/**
 * Fait un tri (successif)
 *
 * @param array $t
 *
 * @return void
 */
function triParMinimumSuccessif(array &$t): void
{
    $nbElements = count($t);

    for ($i = 0; $i < $nbElements - 1; $i++) {
        $indice = minimum($t, $i, $nbElements);
        if ($i != $indice) {
            swap($t[$i], $t[$indice]);
        }
    }
}

/**
 * Fait un tri (à bulle)
 *
 * @param array $t
 *
 * @return void
 */
function triBulle(array &$t): void
{
    $nbElements = count($t);

    for ($i = 0; $i < $nbElements - 1; $i++) {
        for ($j = $nbElements - 1; $j > $i; $j--) {
            if ($t[$j] < $t[$j - 1]) {
                swap($t[$j], $t[$j - 1]);
            }
        }
    }
}