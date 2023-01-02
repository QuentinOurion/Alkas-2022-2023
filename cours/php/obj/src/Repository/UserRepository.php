<?php

class UserRepository
{
//    private GestionSQL $gestionSQL;
//
//    public function __construct(GestionSQL $gestionSQL)
//    {
//        $this->gestionSQL = $gestionSQL;
//    }

    public function __construct(private GestionSQL $gestionSQL)
    {
    }

    /**
     * Cherche un utilisateur via son login
     *
     * @param string $login
     * @return array
     */
    function findByLogin(string $login): array
    {
        return $this->gestionSQL->find('
            select *
            from user
            where login = :login', [
            'login' => $login
        ]) ?? [];
    }


}