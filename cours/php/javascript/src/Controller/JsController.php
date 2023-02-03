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

    public function formulaireCours()
    {
        $this->render('js/formulaireCours');
    }

    public function formulaire(array $dataForm)
    {
        $messageErreur = '';

//        if (!empty($dataForm)) {
//            if (empty($dataForm['nom']) || strlen($dataForm['nom']) < 3 || strlen($dataForm['nom']) > 10) {
//                $messageErreur = 'Remplis ton nom';
//            }
//        }

        if (!empty($dataForm)) {
            $messageErreur .= $this->gestionMessageErreur($dataForm["nom"] ?? '', 'nom');
            $messageErreur .= $this->gestionMessageErreur($dataForm["telephone"] ?? '', 'téléphone');
            $messageErreur .= $this->gestionMessageErreur($dataForm["prenom"] ?? '', 'prénom');

            if (!empty($dataForm['email']) || !filter_var($dataForm['email'], FILTER_VALIDATE_EMAIL)) {
                $messageErreur .= 'Entre un email valid<br>';
            }
        }




        $this->render('js/formulaire', ['messageErreur' => $messageErreur]);
    }

    private function gestionMessageErreur(string $id, string $nom, int $tailleMin = 3): string
    {
        $messageErreur = '';

        if (empty(trim($id)) || strlen($id) < $tailleMin || strlen($id) > 10) {
            $messageErreur = 'Remplis ton ' . $nom . '<br>';
        }

        return $messageErreur;
    }

    public function jsonAjax()
    {
        $this->render('js/jsonAjax');
    }

    public function jsonExo()
    {
        $this->render('js/jsonExo', [
            'titre' => 'Exo Json',
            'description' => 'Correction de l\'exo sur le Json'
        ]);
    }

    public function coursAjax()
    {
        $this->render('js/coursAjax', [
            'titre' => 'Cours ajax',
            'description' => "Cours sur l'ajax"
        ]);
    }

    public function formContact($data) : string
    {
        var_dump($data);

        echo "test";

        return "super ça marche";
    }
}