<?php
require_once ('src/GestionSQL.php');
require_once ('src/Repository/UserRepository.php');
session_start();
$code = $_SESSION['code'] ?? '';
if(isset($_SESSION['code'])) {
    $code = $_SESSION['code'];
}
if(array_key_exists('code', $_SESSION)) {
    $code = $_SESSION['code'];
}

try {
    $gestionSQL = new GestionSQL();
} catch (Exception $exception) {
    die('Merci de revenir plus tard car nous avons un problème technique !');
}

try {
//$gestionSQL->
    $userRepository = new UserRepository($gestionSQL);
    $user = $userRepository->findByLogin('aoll@aol.cp');
} catch(Exception $exception) {
    die($exception->getMessage());
}

var_dump($code);

?>
<a href="deuxJanvier.php?annee=2023">clic <?=$code?></a>