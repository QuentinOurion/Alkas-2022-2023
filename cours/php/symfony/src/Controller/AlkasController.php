<?php

namespace App\Controller;

//use PHPUnit\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlkasController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function accueil(): Response
    {
        return $this->render('alkas/index.html.twig', [
            'macle' => 'mon test',
            'menuAccueil' => true,
        ]);
    }

    #[Route('/response', name: 'response')]
    public function response(): Response
    {
        $this->calcul();
        return new Response('test', 404);
    }

    private function calcul()
    {

    }

    #[Route('/formulaire', name: 'formulaire')]
    public function formulaire(Request $request): Response
    {
        $premierChamp = 'vide';

        if($request->request->count()) {

            if($request->request->get('premierChamp')) {
                $premierChamp = $request->request->get('premierChamp') . ' pas vide';
            }
        }

//        dd());
        return $this->render('alkas/formulaire.twig', [
            'premierChamp' => $premierChamp,
            'nombre' => $request->request->count(),
            'menuCours' => true,
            'menuFormulaire' => true,
        ]);
    }

    /**
     * Création d'un formulaire en symfony
     *
     * @param Request $r
     * @return Response
     */
    #[Route('/formulaire/second', name: 'formulaireSecond')]
    public function formulaireSecond(Request $r) : Response
    {
        $form = $this->createFormBuilder()
            ->add('premierChamp')
            ->add('secondChamp')
            ->setMethod('post')
            ->getForm();
//        $recupPremier = $r->request->get('premierChamp');
        $form->handleRequest($r);

        if($form->isSubmitted() && $form->isValid()) {
//            dd($r);
//            dd($recupPremier);
            $datasForm = $form->getData();
            dd($datasForm);
//            $this->pleinDeParam($datasForm, $r);
        }

        return $this->render('alkas/formulaireSecond.twig', [
                'form' => $form->createView(),
                'toto' => false,
                'menuCours' => true,
                'menuFormulaireSecond' => true,
            ]
        );
    }

    private function pleinDeParam(...$test) : void
    {
        dd($test);
    }

}
