<?php

namespace App\Security\Voter;

use App\Entity\Chemise;
use App\Entity\MarqueChemise;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class MarqueChemiseVoter extends Voter
{
    public const MODIF = 'modifMarqueChemise';


    public function __construct(private Security $security)
    {
    }

    protected function supports(string $attribute, mixed $subject): bool
    {
        return self::MODIF === $attribute
            && $subject instanceof MarqueChemise;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof User) {
            return false;
        }

        return match ($attribute) {
            self::MODIF => $this->canUpdate($subject, $user),
            default => throw new \LogicException('This code should not be reached!')
        };
    }

    private function canUpdate(MarqueChemise $marqueChemise, User $user): bool
    {
        return $user->getId() === $marqueChemise->getUser()->getId() || $this->security->isGranted('ROLE_ADMIN');
    }
}