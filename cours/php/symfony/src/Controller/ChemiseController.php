<?php

namespace App\Controller;

use App\Entity\Chemise;
use App\Form\ChemiseType;
use App\Repository\ChemiseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/chemise')]
class ChemiseController extends AbstractController
{
    #[Route('/', name: 'app_chemise_index', methods: ['GET'])]
    public function index(ChemiseRepository $chemiseRepository): Response
    {
        return $this->render('chemise/index.html.twig', [
            'chemises' => $chemiseRepository->findAll(),
            'menuCheMarque' => true,
            'menuChemise' => true,
        ]);
    }

    #[Route('/new', name: 'app_chemise_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ChemiseRepository $chemiseRepository): Response
    {
        $chemise = new Chemise();
        $form = $this->createForm(ChemiseType::class, $chemise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chemiseRepository->save($chemise, true);

            return $this->redirectToRoute('app_chemise_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('chemise/new.html.twig', [
            'chemise' => $chemise,
            'form' => $form,
            'menuCheMarque' => true,
            'menuChemise' => true,
        ]);
    }

    #[Route('/{id}', name: 'app_chemise_show', methods: ['GET'])]
    public function show(Chemise $chemise): Response
    {
        return $this->render('chemise/show.html.twig', [
            'chemise' => $chemise,
            'menuCheMarque' => true,
            'menuChemise' => true,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_chemise_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chemise $chemise, ChemiseRepository $chemiseRepository): Response
    {
        $form = $this->createForm(ChemiseType::class, $chemise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chemiseRepository->save($chemise, true);

            return $this->redirectToRoute('app_chemise_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('chemise/edit.html.twig', [
            'chemise' => $chemise,
            'form' => $form,
            'menuCheMarque' => true,
            'menuChemise' => true,
        ]);
    }

    #[Route('/{id}', name: 'app_chemise_delete', methods: ['POST'])]
    public function delete(Request $request, Chemise $chemise, ChemiseRepository $chemiseRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chemise->getId(), $request->request->get('_token'))) {
            $chemiseRepository->remove($chemise, true);
        }

        return $this->redirectToRoute('app_chemise_index', [], Response::HTTP_SEE_OTHER);
    }
}
