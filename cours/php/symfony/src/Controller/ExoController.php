<?php

namespace App\Controller;

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
            'monTitre' => 'Super mega titre '.date('Y'),
            'contenuDynamique' => "C'est de la dynamite"
        ]);
    }

    #[Route('/formulaire/second', 'exoFormulaireSecond')]
    public function formulaireSecond(Request $r) : Response
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

        if($form->isSubmitted() && $form->isValid()) {
            $datas = $form->getData();
            $formSub = true;

            if(strlen(trim($datas['password'])) >= 10) {
                $password = true;
            } else {
                $formValid = false;
            }

            if(filter_var($datas['email'], FILTER_VALIDATE_EMAIL)) {
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


}
