<?php
require_once('doctype.php');
?>

    <section><?= $messageErreur ?></section>

    <section class="message" role="contentinfo">
        <div class="info_portable">
            <?= $user['nom'] . ' ' . $user['prenom'] ?>
            Inscrit le :
            <?= $user['date_inscription'] ?>
        </div>
    </section>

<?php
if (count($messages)) {
    foreach ($messages as $message) {
        ?>
        <section class="message" role="contentinfo">
            <div class="info_portable">
                <?= $message['conversation_id'] ?>
            </div>

            <div class="message_blue">
                <div class="content">
                    <?= $message['contenu'] ?>
                    <br>
                    <?= $message['date_creation'] ?>
                </div>
            </div>
        </section>
        <?php
    }
} else {
    ?>
    <section class="message" role="contentinfo">
        Il n'y a aucun message pour cet utilisateur
    </section>
<?php
}

require_once('footer.php');