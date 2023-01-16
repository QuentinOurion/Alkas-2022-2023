<header role="banner">
    <h1 class="titre">Can't Unsee</h1>
    <nav>
        <ul class="navBarre">
            <li><a class="lienNavBarre" href="index.php"><img id="logoHome" src="img/home.svg"></a></li>
            <li><a class="lienNavBarre" href="contact/contact.html">Contact</a></li>
            <?php
            if (empty($utilisateurConnecte)) { ?>
            <li><a class="lienNavBarre" href="indexFormulaire.php">Créer un compte</a></li>
            <li><a class="lienNavBarre" href="indexConnexionUser.php">Connexion</a></li>
            <?php } else { ?>
            <li ><?="Bonjour, " . ucfirst($utilisateurConnecte['prenom'])?><a id="btnDeconnexion" class="lienNavBarre"  href="indexDeconnexion.php">Déconnexion</a>
            </li>
            <li><a class="lienNavBarre" href="indexEnvoiNvxMessage.php"> <?= $nvxMessage ?></a></li>
            <?php } ?>

        </ul>
    </nav>
</header>
