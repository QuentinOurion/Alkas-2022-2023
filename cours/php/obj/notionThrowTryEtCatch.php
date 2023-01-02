<?php

/**
 * @return void
 * @throws Exception
 */
function fonctionQuiRenvoieUnThrow() : void
{
    // ici on a notre traitement : blabla

    // ici on décide que notre code doit gérer une erreur plus tard, via un try / catch
    $exception =  new Exception('Voici une erreur', 2023);
    throw $exception;
}

// ici on va tester s'il y a des erreurs et afficher un message personnalisé
try {

    // throw new Exception va envoyer un message d'erreur et faire planter notre site
    // grâce au try catch, ça ne va pas planter et on va personnaliser le message d'erreur dans le catch
    fonctionQuiRenvoieUnThrow();

// catch (Exception $exception) permet de récupérer uniquement quand il y a une erreur fatale les erreurs et son message
} catch (Exception $exception) {

    // ici $exception est l'objet de l'erreur, donc on va pouvoir utiliser les méthodes de l'exception comme recuperer le code s'il y en a un ou le message d'erreur via des méthodes comme getCode ou getMessage
    $code = $exception->getCode();

    // ici je fais une condition suivant le code de l'erreur
    switch ($code) {
        case 2023 :
            die('Mon code est : '. $code. ' message :  '. $exception->getMessage());
            break;

        default:
            die($exception->getMessage(). ' code inconnu');
    }

//    $message = match ($exception->getCode()) {
//        2023 => $exception->getMessage()
//    };
}