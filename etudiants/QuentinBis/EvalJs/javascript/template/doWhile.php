<?php
$head = '<script defer src="assets/jS/doWhile.js"></script>';
require_once('doctype.php');
?>
    <article class="page" role="article">

        <style>
            #chiffreMax {
                color: red;
            }
        </style>
        <p id="monParagraphe">Saisir des données et s'arrêter dès que leur somme dépasse <span id="chiffreMax">500</span></p>

    </article>

<?php

require_once('footer.php');