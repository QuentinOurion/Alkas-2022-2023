<?php

class JsController extends Controller
{
    public function cours()
    {
        $this->render('cours', ['titrePage' => 'Liste des cours']);
    }

    public function calculatrice()
    {
        $this->render('calculatrice', ['titrePage' => 'Calculatrice']);
    }


    public function boucleWhile()
    {
        $this->render('boucleWhile', ['titrePage' => 'Boucle While']);
    }

    public function event()
    {
        $this->render('exercices', ['titrePage' => 'Event']);
    }


    public function toDoList()
    {
        $this->render('toDoList', [
            'titrePage' => 'To Do List',
            'head' => '<script defer src="assets/jS/toDoList.js"></script>',
    ]);
    }

    public function test()
    {
        $this->render('test', [
            'titrePage' => 'Test',
            'head' => '<script defer src="assets/jS/test.js"></script>',
        ]);
    }

    public function chifumi()
    {
        $this->render('chifumi', [
            'titrePage' => 'chifumi',
            'head' => '<script defer src="assets/jS/chifumi.js"></script>',
        ]);
    }

    public function exercies()
    {
        $this->render('exercies', [
            'titrePage' => 'Tous mes exercices',
        ]);
    }

    public function formulaire()
    {
        $this->render('formulaire', [
            'titrePage' => 'formulaire',
            'head' => '<script defer src="assets/jS/formulaire.js"></script>',
        ]);
    }

    public function jsonAjax()
    {
        $this->render('jsonAjax', [
            'titrePage' => 'jsonAjax',
            'head' => '<script defer src="assets/jS/jsonAjax.js"></script>',
        ]);
    }

    public function ajax()
    {
        $this->render('ajax', [
            'titrePage' => 'ajax',
            'head' => '<script defer src="assets/jS/ajax.js"></script>',
        ]);
    }

    public function formContact($data): string
//    {
//        $retour = [
//            'message' => 'le message est bien envoyé',
//            'mail' => true
//        ];
//        header('Content-Type: application/json; charset=utf-8');
//        die(json_encode($retour));
//    }

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

    public function message($data)
    {
        $retourJson = [
            'message' => $data['message'],
        ];

        header('Content-Type: application/json; charset=utf-8');
        die(json_encode($retourJson));




    }



}