<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExoController extends AbstractController
{
    #[Route('/firstExo', name: 'firstExo')]
    public function index(): Response
    {
        return $this->render('exo/index.html.twig', [
            'monTitre' => 'Super mega titre '.date('Y'),
            'contenuDynamique' => "C'est de la dynamite"
        ]);
    }
}
