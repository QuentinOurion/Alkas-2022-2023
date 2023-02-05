<?php
$head = '<script defer src="assets/js/formulaire.js"></script>';

require_once('template/doctype.php');

print_r($_POST ?? '');
?>

    <!-- novalidate désactive la validation HTML de son formulaire-->
    <form method="post" action="" id="formulaire" novalidate>
        <label for="nom">Entrez le nom</label>
        <input type="text" name="nom" id="nom" minlength="3" maxlength="10" value="" required>

        <label for="prenom">Entrez le prénom</label>
        <input type="text" name="prenom" id="prenom" value="" minlength="3" maxlength="10" required>

        <label for="email">Entrez l'email</label>
        <input type="email" name="email" id="email" value="" minlength="3" maxlength="10" required>

        <label for="tel">Entrez le téléphone</label>
        <input type="tel" name="tel" id="tel" value="" minlength="3" maxlength="10" required>

        <label for="pseudo">Entrez le pseudo</label>
        <input type="text" name="pseudo" id="pseudo" value="" minlength="3" maxlength="10" required>

        <label for="pwd">Entrez le mot de passe</label>
        <input type="password" name="pwd" id="pwd" value="" minlength="3" maxlength="10" required>

        <button type="submit">Envoyez</button>
    </form>

    <div id="messageErreur"><?=$messageErreur?></div>

<?php
require_once('template/footer.php');