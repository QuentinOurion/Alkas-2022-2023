<?php

/**
 * Redirige sur une autre page
 *
 * @param string $nameFile (sans l'extension)
 *
 * @return never
 */
function redir(string $nameFile) : never
{
    header('Location: '.$nameFile.'.php');
    die();
}