<?php
require_once('doctype.php');

?>
<section class="user" role="contentinfo">
    <?= $user['nom'] . ' ' . $user['prenom'] ?>
    <a href="mailto:<?= $user['login'] ?>"><?= $user['login'] ?></a>
    <?= $user['date_inscription'] ?>
</section>

<?php

require_once('footer.php');