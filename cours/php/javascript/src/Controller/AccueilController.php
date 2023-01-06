<?php

class AccueilController extends Controller
{
    public function accueil(GestionSQL $gestionSQL)
    {
        try {
            $pageRepository = new PageRepository($gestionSQL);
            $pages = $pageRepository->findAll();

            $this->render('listPage', [
                'pages' => $pages
            ]);
        } catch(Exception $exception) {
            die($exception->getMessage());
        }
    }
}