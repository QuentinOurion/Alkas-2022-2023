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

    public function formContact(array $data) : string
    {
        $messageErreur = "Merci de bien saisir toutes les informations du formulaire";

        if($data && !empty($data['email']) && !empty($data['message'])) {
            if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL) || strlen(trim($data['message'])) < 10) {
                $retourJson = [
                    'message' => $messageErreur,
                    'mail' => false
                ];
            } else {
                // J'envoie mon email
                //mail($data['email'], 'mail de mon site', $data['message']);

                $retourJson = [
                    'message' => 'Le mail est bien envoyé',
                    'mail' => true
                ];
            }
        } else {
            $retourJson = [
                'message' => $messageErreur,
                'mail' => false
            ];
        }

        header('Content-Type: application/json; charset=utf-8');
        die(json_encode($retourJson));
    }
}