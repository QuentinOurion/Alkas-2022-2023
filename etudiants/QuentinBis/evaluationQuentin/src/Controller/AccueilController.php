<?php

class AccueilController extends Controller
{
    public function accueil(GestionSQL $gestionSQL)
    {
        try {
            $pageRepository = new PageRepository($gestionSQL);
            $listPages = $pageRepository->listPages();
            $this->render('accueil', ['listPages' => $listPages]);


//

        } catch (Exception $exception) {
            die($exception->getMessage());
        }
    }

    public function RedirectionVersPage(GestionSQL $gestionSQL, $slug)
    {
        $recupPageParSlug = new PageRepository($gestionSQL);
        $page = $recupPageParSlug->recupPageParSlug($slug);
        $this->render('page', ['page' => $page]);


    }


    /**
     * Permet d'ajouter des nouvelles pages sur la table "Page".
     * @return void
     */
    public function AddPage(GestionSQL $gestionSQL, $titre, $slug, $description, $categorie, $contenu)
    {
        $addPage = new PageRepository($gestionSQL);
        $addPage->addPage($titre, $slug, $description, $categorie, $contenu);
    }

    public function creationPage()
    {
        $this->render('creationPage', []);
    }


    public function adminPage(GestionSQL $gestionSQL)
    {
        $pageRepository = new PageRepository($gestionSQL);
        $listPages = $pageRepository->listPages();
        $this->render('modifSuppPage', ['listPages' => $listPages]);
//die();
    }

    public function supprimer(GestionSQL $gestionSQL, $id)
    {
        $deletePage = new PageRepository($gestionSQL);
        $listPages = $deletePage->listPages();
        $deletePage->deletePage($id);
        $this->render('accueil', ['listPages' => $listPages]);
        die();
    }


    public function redirVersAccueil(GestionSQL $gestionSQL)
    {
        $pageRepository = new PageRepository($gestionSQL);
        $listPages = $pageRepository->listPages();
        $this->render('modifSuppPage', ['listPages' => $listPages]);
        die();
    }

    public function redirVersModificationPage()
    {
//        $pageRepository = new PageRepository($gestionSQL);
//        $listPages = $pageRepository->listPages();
        $this->render('modificationPage', []);

    }

    public function miseAjourPage(GestionSQL $gestionSQL, $id, $titre, $slug, $description, $categorie, $contenu)
    {
        $miseAjourPage = new PageRepository($gestionSQL);
        $miseAjourPage->updateQuery($id, $titre, $slug, $description, $categorie, $contenu);
    }
}

