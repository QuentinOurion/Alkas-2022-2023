<?php

namespace App\Controller;

use App\Entity\Conversation;
use App\Entity\Message;
use App\Form\ConversationType;
use App\Form\MessageType;
use App\Repository\ConversationRepository;
use App\Repository\MessageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/conversation')]
class ConversationController extends AbstractController
{
    #[Route('/', name: 'app_conversation_index', methods: ['GET'])]
    public function index(ConversationRepository $conversationRepository): Response
    {
        return $this->render('conversation/index.html.twig', [
            'conversations' => $conversationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_conversation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ConversationRepository $conversationRepository, SluggerInterface $slugger): Response
    {
        $conversation = new Conversation();
        $form = $this->createForm(ConversationType::class, $conversation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $conversation->setUser($this->getUser());
            $conversation->setDateCreation(new \DateTime());
            $conversation->setSlug($slugger->slug($conversation->getTitre()));

            $conversationRepository->save($conversation, true);

            return $this->redirectToRoute('app_conversation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('conversation/new.html.twig', [
            'conversation' => $conversation,
            'form' => $form,
        ]);
    }

    #[Route('/{slug}', name: 'app_conversation_show', methods: ['GET', 'POST'])]
    public function show(Conversation $conversation, Request $r, MessageRepository $messageRepository): Response
    {
        $message = new Message();
        $form = $this->createForm(MessageType::class, $message);
        $form->handleRequest($r);

        if ($form->isSubmitted() && $form->isValid()) {
            $message->setUser($this->getUser());
            $message->setConversation($conversation);
            $message->setDateCreation(new \DateTime());

            $messageRepository->save($message, true);

            return $this->redirectToRoute('app_conversation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('conversation/show.html.twig', [
            'conversation' => $conversation,
            'form' => $form
        ]);
    }

    #[Route('/{id}/edit', name: 'app_conversation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Conversation $conversation, ConversationRepository $conversationRepository, SluggerInterface $slugger): Response
    {
        try {
            $this->denyAccessUnlessGranted('modifConversation', $conversation);
        } catch (AccessDeniedException $e) {
            $this->addFlash('warning', "Vous n'avez pas les droits pour modifier cette conversation");

            return $this->redirectToRoute('app_conversation_index');
        }

        $form = $this->createForm(ConversationType::class, $conversation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
//            $conversation->setUser($this->getUser());
            $conversation->setDateModification(new \DateTime());
            $conversation->setSlug($slugger->slug($conversation->getTitre()));

            $conversationRepository->save($conversation, true);

            return $this->redirectToRoute('app_conversation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('conversation/edit.html.twig', [
            'conversation' => $conversation,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_conversation_delete', methods: ['POST'], requirements: ['id' => "\d+"])]
    public function delete(Request $request, Conversation $conversation, ConversationRepository $conversationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$conversation->getId(), $request->request->get('_token'))) {
            $conversationRepository->remove($conversation, true);
        }

        return $this->redirectToRoute('app_conversation_index', [], Response::HTTP_SEE_OTHER);
    }
}
