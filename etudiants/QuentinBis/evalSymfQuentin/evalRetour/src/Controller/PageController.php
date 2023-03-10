<?php

namespace App\Controller;

use App\Entity\Page;
use App\Form\PageType;
use App\Repository\CategorieRepository;
use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/page')]
class PageController extends AbstractController
{

    #[Route('/', name: 'app_page_index', methods: ['GET'])]
    public function index(Request $request, PageRepository $pageRepository, CategorieRepository $categorieRepository): Response
    {
        $categories = $categorieRepository->findAll();

        // Récupérer la catégorie sélectionnée dans la requête GET
        $categoryId = $request->query->get('category');

        if ($categoryId) {
            //Je récupére les pages de la catégorie sélectionnée
            $pages = $pageRepository->findByCategorie($categoryId);
        } else {
            // Je récupére toutes les pages
            $pages = $pageRepository->findAll();
        }

        return $this->render('page/index.html.twig', [
            'pages' => $pages,
            'categories' => $categories,
            'selectedCategoryId' => $categoryId
        ]);
    }


    #[Route('/new', name: 'app_page_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PageRepository $pageRepository, SluggerInterface $slugger): Response
    {
        $page = new Page();
        $form = $this->createForm(PageType::class, $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $page->setUser($this->getUser());
            $page->setSlug($slugger->slug($page->getTitre()));
            $page->setDateCreation(new \DateTime());


            $pageRepository->save($page, true);

            return $this->redirectToRoute('app_page_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('page/new.html.twig', [
            'page' => $page,
            'form' => $form,
        ]);
    }

    #[Route('/{slug}', name: 'app_page_show', methods: ['GET'])]
    public function show(Page $page, CategorieRepository $categorieRepository): Response
    {
        return $this->render('page/show.html.twig', [
            'page' => $page,
        ]);
    }


    #[Route('/{id}/edit', name: 'app_page_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Page $page, PageRepository $pageRepository): Response
    {

        try {
// Vérifie si l'utilisateur a les autorisations nécessaires pour modifier le message

            $this->denyAccessUnlessGranted('modifierLeMessage', $page);
        } catch (AccessDeniedException $e) {

// Si l'utilisateur n'a pas les autorisations nécessaires, ajoute un message d'erreur et redirige l'utilisateur vers la page d'accueil

            $this->addFlash('error', 'Vous n\'êtes pas autorisé à modifier ce message. ' . $e->getMessage());
            return $this->redirectToRoute('accueil');
        }


        $form = $this->createForm(PageType::class, $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pageRepository->save($page, true);

            return $this->redirectToRoute('app_page_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('page/edit.html.twig', [
            'page' => $page,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_page_delete', methods: ['POST'])]
    public function delete(Request $request, Page $page, PageRepository $pageRepository): Response
    {

        try {
// Vérifie si l'utilisateur a les autorisations nécessaires pour supprimer le message

            $this->denyAccessUnlessGranted('supprimeMessage', $page);
        } catch (AccessDeniedException $e) {

// Si l'utilisateur n'a pas les autorisations nécessaires, ajoute un message d'erreur et redirige l'utilisateur vers la page d'accueil

            $this->addFlash('error', 'Vous n\'êtes pas autorisé à supprimer ce message. ' . $e->getMessage());
            return $this->redirectToRoute('accueil');
        }


        if ($this->isCsrfTokenValid('delete' . $page->getId(), $request->request->get('_token'))) {
            $pageRepository->remove($page, true);
        }

        return $this->redirectToRoute('app_page_index', [], Response::HTTP_SEE_OTHER);
    }
}
