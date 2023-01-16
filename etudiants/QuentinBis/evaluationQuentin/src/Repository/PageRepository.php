<?php

class PageRepository
{

    public function __construct(private GestionSQL $gestionSQL)
    {
    }


    /**
     * Permet d'ajouter des données sur la table 'page'
     * @return mixed
     */
    public function addPage($titre, $slug, $contenu, $categorie, $description)
    {
        $requette = $this->gestionSQL->add('insert into page(titre, slug, contenu, categorie, page.description, date_creation, date_modification) values (:titre,:slug,:contenu,:categorie,:description,NOW(),NOW())',
            [
                ':titre' => $titre,
                ':slug' => $slug,
                ':contenu' => $contenu,
                ':categorie' => $categorie,
                ':description' => $description,]);

        return $requette;
    }


    /**
     * Permet de recupérer une page par un "id".
     * @param $connexion
     * @param $id
     * @return mixed
     */
    public function recupPageParId(int $id): array
    {
        $result = $this->gestionSQL->find('select *
from page
where id = :id', ['id' => $id]);

        return $result;
    }


    /**
     * Permet dde recupérer une page par un "Slug".
     * @param $connexion
     * @param $id
     * @return mixed
     */
    public function recupPageParSlug($slug): array
    {
        $result = $this->gestionSQL->find('select *
from page
where slug = :slug', ['slug' => $slug]);

        return $result;
    }


    /**
     * Permet de recuperer une liste de pages
     * @param $connexion
     * @param $id
     * @return mixed
     */
    public function listPages(): array
    {
        $result = $this->gestionSQL->findAll('select *
from page
');

        return $result;
    }


    /**
     * Permet de supprimer une page de la table "page"
     */
    public function deletePage(int $idPage)
    {
        $result = $this->gestionSQL->delete('delete
                                    from page
                                    where id = :idPage', [
            ':idPage' => $idPage
        ]);
        return $result;
    }

    public function updateQuery($idPage, $titre, $slug, $description, $categorie, $contenu)
    {
        $result = $this->gestionSQL->delete('update page set titre = :titre, slug = :slug, description = :description, categorie = :categorie, contenu = :contenu where id = :idPage',
            [
                ':idPage' => $idPage,
                ':titre' => $titre,
                ':slug' => $slug,
                ':description' => $description,
                ':categorie' => $categorie,
                ':contenu' => $contenu,
            ]);
        return $result;
    }
}


