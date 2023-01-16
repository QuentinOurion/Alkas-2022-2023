<?php

$resultatPartie = partie();
vainqueur($resultatPartie);
conversionIntEnString();


function conversionIntEnString()
{
    $actionOrdinateur = rand(0, 2);
    switch ($actionOrdinateur) {
        case 0 :
            $actionOrdinateur = "pierre";
            break;
        case 1 :
            $actionOrdinateur = "feuille";
            break;
        default :
            $actionOrdinateur = "ciseaux";
    }
    return $actionOrdinateur;
}


/**
 * Fonction qui permet de derterminer qui gagne,une egalité et ajouter un point au compteur des scores.
 * choix aléatoire de l'ordinateur correspond  à :
 * pierre = 0
 * feuille = 1
 * ciseaux = 2
 * @param string $actionDuJoueur
 * @param string $actionOrdinateur
 * @return array
 */
function partie()
{
    $compteur = 0;
    $scoreOrdinateur = 0;
    $scoreJoueur = 0;

    while ($scoreOrdinateur < 3 && $scoreJoueur < 3) {
        $actionDuJoueur = readline("Saisir votre choix (pierre) (feuille) ou (ciseaux) : ");
        $actionOrdinateur = conversionIntEnString();
        $compteur++;
        echo "\n" . "---PARTIE--- " . $compteur;
        if ($actionDuJoueur == "pierre" && $actionOrdinateur == "ciseaux") {
            echo "\n" . "LE JOUEUR GAGNE !!" . "\n" . "Le joueur a choisi : " . $actionDuJoueur . "\n" . "L'ordinateur a choisi : " . $actionOrdinateur . "\n";
            $scoreJoueur = $scoreJoueur + 1;
        } elseif ($actionDuJoueur == "feuille" && $actionOrdinateur == "pierre") {
            echo "\n" . "LE JOUEUR GAGNE !!" . "\n" . "Le joueur a choisi : " . $actionDuJoueur . "\n" . "L'ordinateur a choisi : " . $actionOrdinateur . "\n";
            $scoreJoueur = $scoreJoueur + 1;
        } elseif ($actionDuJoueur == "ciseaux" && $actionOrdinateur == "feuille") {
            echo "\n" . "LE JOUEUR GAGNE !!" . "\n" . "Le joueur a choisi : " . $actionDuJoueur . "\n" . "L'ordinateur a choisi : " . $actionOrdinateur . "\n";
            $scoreJoueur = $scoreJoueur + 1;
        } elseif ($actionDuJoueur == $actionOrdinateur) {
            echo "\n" . "EGALITE !! !!" . "\n" . "Le joueur a choisi : " . $actionDuJoueur . "\n" . "L'ordinateur a choisi : " . $actionOrdinateur . "\n";
        } else {
            echo "\n" . "L'ORDINATEUR GAGNE !!" . "\n" . "Le joueur a choisi : " . $actionDuJoueur . "\n" . "L'ordinateur a choisi : " . $actionOrdinateur . "\n";
            $scoreOrdinateur = $scoreOrdinateur + 1;
        }
    }

    return [$scoreOrdinateur, $scoreJoueur];
}


function vainqueur($nbPointsDePartie)
{
    if ($nbPointsDePartie[0] > $nbPointsDePartie[1]) {
        echo "\n" . "L'ORDINATEUR REMPORTE LA MANCHE" . " | " . $nbPointsDePartie[0] . " || " . $nbPointsDePartie[1] . " | ";
    } else {
        echo "\n" . "LE JOUEUR REMPORTE LA MANCHE" . " | " . $nbPointsDePartie[1] . " || " . $nbPointsDePartie[0] . " | ";
    }
}







