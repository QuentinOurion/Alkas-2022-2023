<?php


/**
 * fonction qui permet de calculer un IMC et de
 * renvoyer un message de type string a l'utilisateur.
 * @param float $imc
 * @param $choix
 * @return string|null
 */
function calculImc(float $imc, $choix)
{
    $messageImc = null;
    if ($imc < 18.5 && $choix == "classique") {
        $messageImc = "Insuffisance pondérale (maigreur)";
    } elseif ($imc < 18.5 && $choix == "dejante") {
        $messageImc = "Fais attention tu vas perdre un os ";
    }
    if ($imc >= 18.5 && $imc <= 24.9 && $choix == "classique") {
        $messageImc = "Corpulence normale";
    } elseif ($imc >= 18.5 && $imc <= 24.9 && $choix == "dejante") {
        $messageImc = "Pas mal, pas mal... BG!!!";
    }
    if ($imc >= 25 && $imc <= 29.9 && $choix == "classique") {
        $messageImc = "Surpoids";
    } elseif ($imc >= 25 && $imc <= 29.9 && $choix == "dejante") {
        $messageImc = "Ca va, c'est juste la faute au Nutella qui fait retrécir les jeans..";
    }
    if ($imc >= 30 && $imc <= 35 && $choix == "classique") {
        $messageImc = "Obésité modérée";
    } elseif ($imc >= 30 && $imc <= 35 && $choix == "dejante") {
        $messageImc = "T'as trop mangé de McDo mec !!";
    }
    if ($imc >= 35 && $imc <= 40 && $choix == "classique") {
        $messageImc = "Obésité sévère";
    } elseif ($imc >= 35 && $imc <= 40 && $choix == "dejante") {
        $messageImc = "T'as chaise commence à fissurer !!";
    }
    if ($imc > 40 && $choix == "classique") {
        $messageImc = "Obésité morbide ou massive";
    } elseif ($imc > 40 && $choix == "dejante") {
        $messageImc = "Au moins tu ne te feras jamais kidnapper...";
    }
    return $messageImc;
}