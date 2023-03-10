<?php

namespace App\Security\Voter;

use App\Entity\Conversation;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class ConversationVoter extends Voter
{
    const MODIF = 'modifConversation';

    public function __construct(private Security $security)
    {
    }


    protected function supports(string $attribute, mixed $subject): bool
    {
        return self::MODIF === $attribute && $subject instanceof Conversation;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            return false;
        }

        if(self::MODIF === $attribute ) {
            return $this->canUpdate($subject, $user);
        }


        return false;
    }

    private function canUpdate(Conversation $conversation, User $user)
    {
        return $user->getId() === $conversation->getUser()->getId() || $this->security->isGranted('ROLE_ADMIN');
    }
}
