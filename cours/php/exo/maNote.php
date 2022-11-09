<?php

$note = rand(0, 21);

//echo "Ma note est : (".$note.") <br>";
//echo "Ma note est : $note <br>";
//echo 'Ma note est : $note <br>';
echo 'C\'est ma note : '.$note.' <br>';

if ($note > 20) {
    echo "Arrête de boire ou double les doses";
} else {
    if ($note >= 12 && $note <= 20) {
        echo "excellent";
    } elseif (11 == $note) {
        echo "moyen";
    } else {
        echo "Réessaye encore";
    }
}