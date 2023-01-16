<?php

class Controller
{
    protected function render(string $nomDuFichier, $data) : void
    {
        extract($data, EXTR_SKIP);
        require_once('template/'.$nomDuFichier.'.php');
    }

}