<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlkasController extends AbstractController
{
    #[Route('/', name: 'pageIndex')]
    public function index(): Response
    {
        return $this->render('alkas/index.html.twig', [
            'macle' => 'mon test',
        ]);
    }

    #[Route('/response', name: 'pageIndex')]
    public function response(): Response
    {
        return new Response('test', 404);
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
            'nombre' => $request->request->count()
        ]);
    }


}
