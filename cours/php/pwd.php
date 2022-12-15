<?php

const PWD = 'àlacon';
//define('LOGIN', 'aol@aol.com');
const LOGIN = 'aol@aol.com';
echo LOGIN;

$hash = password_hash(PWD, PASSWORD_DEFAULT );

var_dump(password_verify(PWD, $hash));


// ------------------------- Crypter un mot de passe pour une base de donnée et le tester ----------------------------
// admettons, on a un champ d'un formulaire qui s'appelle password
// et le mot de passe tapé est "eric"
$_POST['password'] = 'eric';

// on devra crypter le mot de passe avec la fonction password_hash comme ci-dessous pour l'enregistrer dans la base de donnée
// $motdepasseCrypte = password_hash($motDePasseACrypter, CONSTANTE_DE_TYPE_DE_CRYPTAGE);
// exemple concret
$motdepasseCrypte = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Le hash et le sel donné aura pour valeur quelque chose comme ça
$motdepasseCrypte = '$2y$10$gxLQF12uzPb9qw34z/TfwOpmEYFI0rFc4wB1zDrMXutrbtzDQP.8.';

// Pour info la taille d'un mot de passe crypté vaut toujours 72 caractères, donc la taille de la colonne d'une base de donnée qui
// devra stocker le mot de passe devra faire cette taille, mais pourra être supérieur par sécurité et avoir une taille de 255 caractères.

// Puis, il faudra dans un second temps vérifier le mot de passe saisie dans le formulaire
// avec celui de la base de donnée avec la fonction password_verify
// exemple.
if(password_verify($_POST['password'], $motdepasseCrypte)) {
    echo 'mot de passe correct';
} else {
    echo 'Votre mot de passe est invalide';
}