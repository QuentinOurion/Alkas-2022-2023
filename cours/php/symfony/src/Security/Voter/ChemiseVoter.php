<?php

namespace App\Security\Voter;

use App\Entity\Chemise;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class ChemiseVoter extends Voter
{
    private const MODIF = 'modifChemise';

    protected function supports(string $attribute, mixed $subject): bool
    {
        return self::MODIF === $attribute
            && $subject instanceof Chemise;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            return false;
        }

        return match ($attribute) {
            self::MODIF => $this->canUpdate($subject, $user),
            default => throw new \LogicException('This code should not be reached!')
        };
    }

    private function canUpdate(Chemise $chemise, User $user): bool
    {
        // this assumes that the Post object has a `getOwner()` method
        return $user->getId() === $chemise->getUser()->getId();
    }
}
