<?php
require_once('doctype.php');
?>
    <section class="user" role="contentinfo">
        <div class="LiensDesTitres">
                <?php
                foreach ($listPages as $page) {
                    ?>
                <div class="lienPage">   <?= $page['titre'] ?><a href="index.php?admin=delete&id=<?= $page['id'] ?>"><img src="assets/images/logoPoubelle.png"></a> <a href="index.php?admin=modif&id=<?= $page['id'] ?>"><img id="logoModif" src="assets/images/logoModif.png"></a></div>
                    <!--                    --><?php //= $page['titre'] ?><!--<a href="index.php?admin=delete&id=--><?php //= $page['id'] ?><!--"><img src="assets/images/logoPoubelle.png"></a>-->
<!--                    --><?php //= $page['titre'] ?><!--<a href="index.php?admin=modif&id=--><?php //= $page['id'] ?><!--"><img src="assets/images/logo_portable.png"></a>-->
                <?php } ?>
        </div>
    </section>
<?php

require_once('footer.php');
?>