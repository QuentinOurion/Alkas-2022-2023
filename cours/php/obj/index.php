<?php
require_once ('src/GestionSQL.php');
require_once ('src/Repository/UserRepository.php');

$gestionSQL = new GestionSQL();
//$gestionSQL->
$userRepository = new UserRepository($gestionSQL);
$user = $userRepository->findByLogin('aoll@aol.cp');
var_dump($user);