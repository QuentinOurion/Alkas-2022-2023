<?php

/**
 * Permet d'afficher dans un "print-r" la variable passée en argument.
 * @param $variable
 * @return void
 */
function pre($variable):void
{
    echo "<pre>";
    print_r($variable);
        "</pre>";
}

/**
 * Permet d'afficher dans un "var_dump" la variable passée en argument.
 * @param $variable
 * @return void
 */
function preDump($variable):void
{
    echo "<pre>";
    var_dump($variable);
    "</pre>";
}


/**
 * Permet de générer toutes les lettres de l'alphabet
 * @return array
 */
function alphabet():array
{
    for ($i = 0; $i <= 25; $i++)
    {
        $lettreAlphabet[] = chr(97 + $i);

    }
    return $lettreAlphabet;
}
