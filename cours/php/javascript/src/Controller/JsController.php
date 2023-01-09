<?php

class JsController extends Controller
{
    public function cours()
    {
        $this->render('cours');
    }

    public function calculatrice()
    {
        $this->render('calculatrice');
    }

    public function doWhile()
    {
        $this->render('doWhile');
    }
}