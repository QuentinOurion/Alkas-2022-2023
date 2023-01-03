<?php

class AccueilController extends Controller
{
    public function accueil(GestionSQL $gestionSQL)
    {
        try {
            $userRepository = new UserRepository($gestionSQL);
            $user = $userRepository->findByLogin('aoll@aol.cp');

            $this->render('user', ['user' => $user]);
        } catch(Exception $exception) {
            die($exception->getMessage());
        }
    }
}