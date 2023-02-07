<?php
require_once('doctype.php');
?>

    <article class="page" role="article">
        <header>
            <h1>Boucle While</h1>
        </header>

        <script>


            let result = 0
            while (result < 500) {
                let chiffre = Number(prompt('Veuillez saisir un chiffre'))
                result = result + chiffre
            }

        </script>
    </article>

<?php

require_once('footer.php');
