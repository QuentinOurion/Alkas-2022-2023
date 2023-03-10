<?php

namespace App\Security\Voter;

use App\Entity\Chemise;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;

class ChemiseVoter extends Voter
{
    private const MODIF = 'modifChemise';
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

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

//        if($attribute === self::MODIF && ($user->getId() === $subject->getUser()->getId() || $this->security->isGranted('ROLE_ADMIN'))) {
//            return true;
//        }

        return match ($attribute) {
            self::MODIF => $this->canUpdate($subject, $user),
            default => throw new \LogicException('This code should not be reached!')
        };
    }

    private function canUpdate(Chemise $chemise, User $user): bool
    {

//        dd($chemise, $user);
        return $user->getId() === $chemise->getUser()->getId() || $this->security->isGranted('ROLE_ADMIN');
    }
}
