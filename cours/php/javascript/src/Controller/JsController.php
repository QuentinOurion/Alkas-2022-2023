<?php

class JsController extends Controller
{
    public function calculatrice()
    {
        $this->render('calculatrice');
    }

    public function doWhile()
    {
        $this->render('doWhile');
    }

    public function event()
    {
        $this->render('event', [
            'titre' => 'Exo event',
            'description' => "Exo sur les évenements"
        ]);
    }

    public function todo()
    {
        $this->render('todo');
    }

    public function shifumi()
    {
        $this->render('shifumi');
    }

    public function classJs()
    {
        $this->render('objet');
    }
}