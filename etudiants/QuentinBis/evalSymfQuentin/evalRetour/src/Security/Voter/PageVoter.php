<?php

namespace App\Security\Voter;

use App\Entity\Page;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class PageVoter extends Voter
{

    const DEL = 'supprimeMessage';
    const EDIT = 'modifierLeMessage';

    public function __construct(private Security $security) // Définition du constructeur avec une injection de dépendance pour la classe Security
    {
    }

    protected function supports(string $attribute, mixed $subject): bool
    {
//        return self::DEL === $attribute && $subject instanceof Message;
        return in_array($attribute, [self::DEL, self::EDIT]) && $subject instanceof Page;
    }

// Cette méthode vote sur l'attribut passé en paramètre pour déterminer si l'utilisateur a le droit d'exécuter l'action correspondante sur le sujet
    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser(); // On vérifie si l'utilisateur est bien connecté

        if (!$user instanceof User) { // On Vérifie si l'utilisateur est une instance de la classe User
            return false;
        }

//  On vérifie si l'utilisateur est admin
        if($this->security->isGranted('ROLE_ADMIN')){
            return true; //Et on lui accorde tous les droits
        }

        if(self::DEL === $attribute ) { // Vérifie si l'attribut correspond à DEL
            return $this->canDelete($subject, $user); // Si oui, appelle la méthode canDelete() pour vérifier si l'utilisateur a le droit de supprimer le message
        }

        if(self::EDIT === $attribute){
            return $this->canEdit($subject, $user);
        }

        return false;
    }

// Cette méthode vérifie si l'utilisateur a le droit de supprimer le message en question
    private function canDelete(Page $page, User $user) : bool
    {
        return /*$this->security->isGranted('ROLE_ADMIN') &&*/ ($user === $page->getUser()); // On vérifie si l'utilisateur est bien l'auteur du message
    }



    private function canEdit(Page $page, User $user) :bool
    {
        return ($user === $page->getUser()); // On vérifie si l'utilisateur est bien l'auteur du message
    }


}
