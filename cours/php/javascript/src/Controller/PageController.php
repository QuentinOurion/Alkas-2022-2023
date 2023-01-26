<?php

class PageController extends Controller
{
    private string $test = "dfsdfsd";

    /**
     * Affiche une page uniquement
     *
     * @param GestionSQL $gestionSQL
     * @param string $slug
     * @return void
     */
    public function show(GestionSQL $gestionSQL, string $slug): void
    {
        try {
            $pageRepository = new PageRepository($gestionSQL);
            $page = $pageRepository->findBySlug($slug);

            $this->render('page/page', $page);
        } catch (Exception $exception) {
            die($exception->getMessage());
        }
    }

    public function create(GestionSQL $gestionSQL, array $dataForm): void
    {
        try {
            if ($dataForm) {
                $data = [
                    'slug' => $this->slugify(trim($dataForm['titre'])),
                    'titre' => htmlspecialchars(trim($dataForm['titre'])),
                    'description' => htmlspecialchars(trim($dataForm['description'])),
                    'menu' => htmlspecialchars(trim($dataForm['menu'])),
                    'content' => htmlspecialchars(trim($dataForm['content']))
                ];

                if($this->checkAllDataTrue($data)) {
                    $pageRepository = new PageRepository($gestionSQL);
                    $id = $pageRepository->insert($data);

                    if($id) {
                        $this->redir('?admin=modif&id='.$id);
                    } else {
                        throw new Exception('Problème de lors de la création d\'une page');
                    }
                } else {
                    throw new Exception("Veuillez remplir le formulaire complétement");
                }
            }

            $this->render('page/create');
        } catch (Exception $exception) {
            die($exception->getMessage());
        }
    }

    public function update(GestionSQL $gestionSQL, int $id, array $dataForm): void
    {
        $pageRepository = new PageRepository($gestionSQL);

        if(empty($dataForm)) {
            $page = $pageRepository->find($id);
        } else {
            $data = [
                'slug' => $this->slugify(trim($dataForm['titre'])),
                'titre' => htmlspecialchars(trim($dataForm['titre'])),
                'description' => htmlspecialchars(trim($dataForm['description'])),
                'menu' => htmlspecialchars(trim($dataForm['menu'])),
                'content' => htmlspecialchars(trim($dataForm['content'])),
                'id' => $id
            ];

            if($this->checkAllDataTrue($data) && $pageRepository->update($data)) {
                $this->redir('?admin=list');
            } else {
                throw new Exception('Problème de lors de la mise à jour de la page');
            }
        }

        $this->render('page/modif', [
            'page' => $page
        ]);
//        $this->render('modif', $data);
    }

    public function list(GestionSQL $gestionSQL): void
    {
        $pageRepository = new PageRepository($gestionSQL);
        $pages = $pageRepository->findAll();

        $this->render('page/listPage', [
            'pages' => $pages
        ]);
//        $this->render('modif', $data);
    }

    public function delete(GestionSQL $gestionSQL, int $id): void
    {
        $pageRepository = new PageRepository($gestionSQL);
        $id = $pageRepository->delete($id);

        if($id) {
            $this->redir('?admin=list');
        } else {
            throw new Exception('Problème de lors de la création d\'une page');
        }
    }

    /**
     * @return string
     */
    public function getTest(): string
    {
        return $this->test;
    }

    /**
     * @param string $test
     * @return PageController
     */
    public function setTest(string $test): PageController
    {
        $this->test = $test;
        return $this; // design pattern fluent
    }



}

/*
Exemple d'utilisation du design pattern fluent

$pageController = new PageController();
$pageController->setTest("dfdfdfdf");
$test = $pageController->getTest();

$test = $pageController->setTest("Magie du cinema")->getTest();
*/
















