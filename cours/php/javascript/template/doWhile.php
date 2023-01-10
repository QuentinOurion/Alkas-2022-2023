<?php
require_once('doctype.php');
?>
    <article class="page" role="article">
        <header><h1>Exo do while </h1></header>

        <style>
            #chiffreMax {
                color: red;
            }
        </style>
        <p id="monParagraphe">Saisir des données et s'arrêter dès que leur somme dépasse <span id="chiffreMax">500</span></p>
        <script>
            doWhile(200)

            function doWhile(max = 500) {
                let sortie = 0

                do {
                    let chiffre = Number(prompt("Tapez un chiffre", 0))

                    sortie += chiffre

                    alert("Le resultat de sortie est : " + sortie + " sur " + max)
                } while (sortie < max)
            }
        </script>
    </article>

<?php

require_once('footer.php');