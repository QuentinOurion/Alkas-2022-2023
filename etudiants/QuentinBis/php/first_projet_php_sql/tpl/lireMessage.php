<?php require_once("preambule.php"); ?>
<?php require_once("header.php"); ?>



<div class="nom_role_utilisateur">
    <?php
    if ($message){ ?>
    <div> Rôle = <?= $role ?></div>
    <div> Nom d'utilisateur = <?= $nom_uilisateur ?></div>
</div>
<div class="message_date">
    <?php
    foreach ($message as $user) { ?>
        <div class="message">
            <div><?= $user['message_contenu']; ?></div>
            <div class="date_message"><?= $user['date_du_message']; ?></div>
        </div>
    <?php } ?>
    <?php } else { ?>
    <?= "Il n'y a pas de message." ?>
    <?php } ?>
</div>
<?php require_once('footer.php'); ?>

