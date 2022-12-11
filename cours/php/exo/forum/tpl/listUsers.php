<?php
require_once('tpl/doctype.php');

foreach ($users as $user) {
    ?>
    <section class="user" role="contentinfo">
        <div class="info_portable">
            <div>
                <img src="logo_portable.png" alt="">
                <?= date("H:i", strtotime($user['date_inscription'])) ?>
            </div>
        </div>

        <figure class="user_nom">
            &leftarrow;
            <img src="https://avatars.dicebear.com/api/big-smile/<?= $user['nom'] ?>.svg" alt="">

            <figcaption>
                <?= $user['nom'] . ' ' . $user['prenom'] ?>
            </figcaption>
        </figure>

        <hr>

        <div class="message_blue">
            <div class="content">
                <a href="mailto:<?= $user['login'] ?>"><?= $user['login'] ?></a>
                <?= $user['date_inscription'] ?>
            </div>
        </div>

        <div class="message_grey">
            <div class="content">
                <a href="message.php?id=<?= $user['id'] ?>">Lire mes messages
                </a>
            </div>
        </div>
    </section>
    <?php
}
require_once('footer.php');