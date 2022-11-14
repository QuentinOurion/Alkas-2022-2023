<?php
require_once ('fonctions/outils.php');
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