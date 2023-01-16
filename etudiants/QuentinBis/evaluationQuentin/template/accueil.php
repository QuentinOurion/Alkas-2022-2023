<?php
require_once('doctype.php');
?>
    <section class="user" role="contentinfo">
        <?php
        foreach ($listPages as $page) {

            ?>
            <div class="lienPage">
                <a href="index.php?page=<?= $page['slug'] ?>"><?= $page['titre'] ?></a>
            </div>
        <?php } ?>
    </section>
<?php
require_once('footer.php');


