<?php

namespace App\Controller;

use App\Entity\Chemise;
use App\Form\ChemiseType;
use App\Repository\ChemiseRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#[Route('/chemise')]
class ChemiseController extends AbstractController
{
    #[Route('/', name: 'app_chemise_index', methods: ['GET'])]
    public function index(ChemiseRepository $chemiseRepository): Response
    {
        return $this->render('chemise/index.html.twig', [
            'chemises' => $chemiseRepository->findBy(['user' => $this->getUser()->getId()]),
            'menuCheMarque' => true,
            'menuChemise' => true,
        ]);
    }

    #[Route('/new', name: 'app_chemise_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, ChemiseRepository $chemiseRepository): Response
    {
        $chemise = new Chemise();
        $form = $this->createForm(ChemiseType::class, $chemise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
//            $chemise->setTaille('xxxxl')->setNom($chemise->getNom().'-'.$chemise->getMarqueChemise()->getNom())->setUser($this->getUser());
//            dd($chemise->setUser($this->getUser()));

            $chemise->setUser($this->getUser());
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
    #[IsGranted('ROLE_USER')]
    public function edit(Request $request, Chemise $chemise, ChemiseRepository $chemiseRepository): Response
    {
//        if ($this->getUser()->getId() !== $chemise->getUser()->getId() && !$this->isGranted('ROLE_ADMIN')) {
//            throw new \Exception('fuck u', 200);
//        }

        try {
            $this->denyAccessUnlessGranted('modifChemise', $chemise);
        } catch (AccessDeniedException  $e) {
            if($e->getCode() === 403) {
                $this->addFlash("warning", "Il y a une erreur d'identifiant sur les chemises");
            } elseif($e->getCode()) {
            } else {
                $this->addFlash('error', $e->getMessage());
            }

            return $this->redirectToRoute('accueil');
        }
//
//        try {
//            throw new \Exception('fuck u');
//        } catch (\Exception $e) {
//            dd($e);
//            echo $e->getMessage();
//        }

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
    #[IsGranted('ROLE_USER')]
    public function delete(Request $request, Chemise $chemise, ChemiseRepository $chemiseRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $chemise->getId(), $request->request->get('_token'))) {
            $chemiseRepository->remove($chemise, true);
        }

        return $this->redirectToRoute('app_chemise_index', [], Response::HTTP_SEE_OTHER);
    }
}
