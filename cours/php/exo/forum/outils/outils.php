<?php

/**
 * Redirige sur une autre page
 *
 * @param string $nameFile (sans l'extension)
 *
 * @return void
 */
function redir(string $nameFile) : void
{
    header('Location: '.$nameFile.'.php');
    die();
}