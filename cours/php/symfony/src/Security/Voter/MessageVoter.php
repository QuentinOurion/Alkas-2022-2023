<?php

namespace App\Security\Voter;

use App\Entity\Message;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;

class MessageVoter extends Voter
{

    const DEL = 'supprimeMessage';

    public function __construct(private Security $security)
    {
    }


    protected function supports(string $attribute, mixed $subject): bool
    {
        return self::DEL === $attribute && $subject instanceof Message;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            return false;
        }

        if(self::DEL === $attribute ) {
            return $this->canDelete($subject, $user);
        }

        return false;
    }

    private function canDelete(Message $message, User $user) : bool
    {
        return $user->getId() === $message->getUser()->getId() || $this->security->isGranted('ROLE_ADMIN');
    }
}
