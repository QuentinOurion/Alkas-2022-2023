<?php

class JsController extends Controller
{
    public function calculatrice()
    {
        $this->render('js/calculatrice');
    }

    public function calculatriceB()
    {
        $this->render('js/calculatriceB');
    }

    public function doWhile()
    {
        $this->render('js/doWhile');
    }

    public function event()
    {
        $this->render('js/event', [
            'titre' => 'Exo event',
            'description' => "Exo sur les évenements"
        ]);
    }

    public function todo()
    {
        $this->render('js/todo');
    }

    public function shifumi()
    {
        $this->render('js/shifumi');
    }

    public function tousExos()
    {
        $this->render('js/tousExos');
    }

    public function formulaire()
    {
        $this->render('js/formulaireCours');
    }
}