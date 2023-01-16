<?php
require_once('preambule.php');
require_once('header.php');
?>
<div class="main-content">
    <main class="mainUser" role="main">
        <?php
        foreach ($users as $user) { ?>
            <div class="utilisateur">
                <figure>
                    <img class="img_reseau" src="img/heure_utilisateur2.png" alt="">
                    <figcaption class="heure"> <?= $date; ?></figcaption>
                </figure>
                <figure class="bloc_fleche_photo_nom">
                    <img id="fleche" src="img/fleche.png" alt="">
                    <img id="portrait" src="https://avatars.dicebear.com/api/open-peeps/<?= $user["prenom"] ?>.svg"
                         alt="photo">
                    <figcaption class="nom_prenom">
                        <?= $user["nom"] . " " . $user["prenom"]; ?>
                    </figcaption>
                </figure>
                <div class="ligne">
                </div>
                <address class='mail_inscription'>
                    <a class="lien_email"
                       href="indexEnvoiNvxMessage.php?userid=<?= $user['id'] ?>"> <?= $user['login'] ?> </a> <?= $today ?>
                </address>
                <a class="lien_message" id="texte" href="indexLireMessages.php?id=<?= $user['id'] ?>"><p>Lire les
                        messages</p>
                </a>
                <?php $message = "voila mon message;" ?>
            </div>
        <?php } ?>
    </main>
</div>
<?php require_once('footer.php'); ?>
