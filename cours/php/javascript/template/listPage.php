<?php
require_once('doctype.php');
?>

    <section class="listPage" role="contentinfo">
        <ul>
            <?php
            foreach ($pages as $page) {
                ?>
                <li><a href="?page=<?= $page['slug'] ?>"><?= $page['titre'] ?></a></li>
                <?php
            }
            ?>

        </ul>
    </section>

<?php
require_once('footer.php');