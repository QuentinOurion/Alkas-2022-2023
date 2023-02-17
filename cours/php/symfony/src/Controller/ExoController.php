<?php

namespace App\Controller;

use App\Entity\Voiture;
use App\Repository\VoitureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/exo')]
class ExoController extends AbstractController
{

    #[Route('/firstExo', name: 'firstExo')]
    public function index(): Response
    {
        return $this->render('exo/index.html.twig', [
            'monTitre' => 'Super mega titre ' . date('Y'),
            'contenuDynamique' => "C'est de la dynamite"
        ]);
    }

    #[Route('/formulaire/second', 'exoFormulaireSecond')]
    public function formulaireSecond(Request $r): Response
    {
        $form = $this->createFormBuilder()
            ->add('prenom', TextType::class)
            ->add('nom', TextType::class)
            ->add('email', EmailType::class)
            ->add('login', TextType::class)
            ->add('password', PasswordType::class)
            ->setMethod('post')
            ->getForm();

        $form->handleRequest($r);
        $email = false;
        $password = false;
        $formSub = false;
        $formValid = true;

        if ($form->isSubmitted() && $form->isValid()) {
            $datas = $form->getData();
            $formSub = true;

            if (strlen(trim($datas['password'])) >= 10) {
                $password = true;
            } else {
                $formValid = false;
            }

            if (filter_var($datas['email'], FILTER_VALIDATE_EMAIL)) {
                $email = true;
            } else {
                $formValid = false;
            }
        }

        return $this->render('exo/formulaireSecond.twig', [
            'form' => $form->createView(),
            'email' => $email,
            'formSub' => $formSub,
            'formValid' => $formValid,
            'password' => $password
        ]);
    }

    #[Route('/findByNameCars', name: 'findByNameCars')]
    public function findByNameCars(VoitureRepository $voitureRepository): Response
    {
        return $this->render('voiture/findByNameCars.twig', [
                'voitures' => $voitureRepository->findBy([
                    'nom' => 'peugeot'
                ])
            ]
        );
//        dd($voitureRepository->findBy(['nom' => 'peugeot']));
    }


    #[Route('/finByIdVoiture', name: 'finByIdVoiture')]
    public function finByIdVoiture(VoitureRepository $voitureRepository): Response
    {
        return $this->render('voiture/showOneCar.twig', [
                'voiture' => $voitureRepository->find(2)
            ]
        );
//        dd($voitureRepository->find(2));
    }


    #[Route('/findOneByCar', name: 'findOneByCar')]
    public function findOneByCar(VoitureRepository $voitureRepository): Response
    {
        return $this->render('voiture/showOneCar.twig', [
                'voiture' => $voitureRepository->findOneBy(['nom' => 'peugeot'])
            ]
        );
//        dd($voitureRepository->findOneBy(['nom' => 'peugeot']));
    }

    #[Route('/findAllCars', name: 'findAllCars')]
    public function findAllCars(VoitureRepository $voitureRepository): Response
    {
        return $this->render('voiture/findByNameCars.twig', [
                'voitures' => $voitureRepository->findAll()
            ]
        );
//        dd($voitureRepository->findAll());
    }

    /**
     * 'id' attend une valeur numérique uniquement
     *
     * @param Voiture $voiture
     * @return Response
     */
    #[Route('/{id}', name:'findByIDSlug', requirements: ['id' => '\d+'])]
    public function findByIDSlug(Voiture $voiture) : Response
    {
        return $this->render('voiture/showOneCar.twig', [
                'voiture' => $voiture
            ]
        );
    }

    /**
     * 'nom' attend une chaîne dans l'url
     * marche parce que la route précédente attend une valeur numérique
     *
     * @param Voiture $voiture
     * @return Response
     */
    #[Route('/{nom}', name:'findByNomSlug')]
    public function findByNomSlug(Voiture $voiture) : Response
    {
        return $this->render('voiture/showOneCar.twig', [
                'voiture' => $voiture
            ]
        );
    }


}
