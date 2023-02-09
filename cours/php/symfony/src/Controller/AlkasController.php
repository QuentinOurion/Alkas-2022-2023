<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlkasController extends AbstractController
{
    #[Route('/shifumi', name: 'shifumi')]
    public function index(): Response
    {
        return $this->render('alkas/index.html.twig', [
            'macle' => 'mon test',
        ]);
    }
}
