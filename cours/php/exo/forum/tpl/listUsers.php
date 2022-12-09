<?php
require_once('tpl/doctype.php');
?>

<header role="banner" class="wrapper">
    <h1>Can't Unsee</h1>
</header>

<main role="main" class="wrapper">
    <?php

    $heure = date("H:i");
    foreach ($users as $user) {
        ?>
        <section class="user" role="contentinfo">
            <div class="info_portable">
                <img src="logo_portable.png" alt="">
                <?= $heure ?>
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
                    <a href="mailto:<?= $user['login'] ?>"><?= $user['login'] ?></a> <?= $user['date_inscription'] ?>
                    vcxvxcvxcvxcv<br>
                    xcvxcvxcv<br>
                    xcv<br>
                </div>
            </div>

            <div class="message_grey">
                <div class="content">
                    click
                </div>
            </div>
        </section>
        <?php
    }
    ?>

</main>

<footer role="contentinfo">
    &copy; Alkas
</footer>
</body>
</html>