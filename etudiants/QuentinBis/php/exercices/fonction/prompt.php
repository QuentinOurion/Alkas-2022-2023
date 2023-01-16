<?php

//Pour demander à l'utilisateur de saisir des donnees'
$mot = readline('veuillez saisir un mot svp');

//fonction interne a php palydrome
$inverse = strrev($mot);

if ($mot === $inverse){
    echo 'Ce mot est un palyndrome';
} else {
    echo 'Ce mot n est pas un palundrome';
}
