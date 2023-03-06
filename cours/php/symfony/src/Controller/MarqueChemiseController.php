<?php

namespace App\Controller;

use App\Entity\MarqueChemise;
use App\Form\MarqueChemiseType;
use App\Repository\MarqueChemiseRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/marque/chemise')]
class MarqueChemiseController extends AbstractController
{
    #[Route('/', name: 'app_marque_chemise_index', methods: ['GET'])]
    public function index(MarqueChemiseRepository $marqueChemiseRepository): Response
    {
        return $this->render('marque_chemise/index.html.twig', [
            'marque_chemises' => $marqueChemiseRepository->findBy([
                'user' => $this->getUser()->getId()
            ]),
            'menuCheMarque' => true,
            'menuMarque' => true,
        ]);
    }

    #[Route('/new', name: 'app_marque_chemise_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, MarqueChemiseRepository $marqueChemiseRepository): Response
    {
        $marqueChemise = new MarqueChemise();
        $form = $this->createForm(MarqueChemiseType::class, $marqueChemise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $marqueChemise->setUser($this->getUser());
            $marqueChemiseRepository->save($marqueChemise, true);

            return $this->redirectToRoute('app_marque_chemise_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('marque_chemise/new.html.twig', [
            'marque_chemise' => $marqueChemise,
            'form' => $form,
            'menuCheMarque' => true,
            'menuMarque' => true,
        ]);
    }

    #[Route('/{id}', name: 'app_marque_chemise_show', methods: ['GET'])]
    public function show(MarqueChemise $marqueChemise): Response
    {
        return $this->render('marque_chemise/show.html.twig', [
            'marque_chemise' => $marqueChemise,
            'menuCheMarque' => true,
            'menuMarque' => true,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_marque_chemise_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(Request $request, MarqueChemise $marqueChemise, MarqueChemiseRepository $marqueChemiseRepository): Response
    {
        try {
            $this->denyAccessUnlessGranted("modifMarqueChemise", $marqueChemise);
        } catch (AccessDeniedException $accessDeniedException) {
            $this->addFlash("warning", "Il y a une erreur d'identifiant sur les marques");

            return $this->redirectToRoute('accueil');
        }

        $form = $this->createForm(MarqueChemiseType::class, $marqueChemise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $marqueChemiseRepository->save($marqueChemise, true);

            return $this->redirectToRoute('app_marque_chemise_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('marque_chemise/edit.html.twig', [
            'marque_chemise' => $marqueChemise,
            'form' => $form,
            'menuCheMarque' => true
        ]);
    }

    #[Route('/{id}', name: 'app_marque_chemise_delete', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function delete(Request $request, MarqueChemise $marqueChemise, MarqueChemiseRepository $marqueChemiseRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $marqueChemise->getId(), $request->request->get('_token'))) {
            $marqueChemiseRepository->remove($marqueChemise, true);
        }

        return $this->redirectToRoute('app_marque_chemise_index', [], Response::HTTP_SEE_OTHER);
    }
}
