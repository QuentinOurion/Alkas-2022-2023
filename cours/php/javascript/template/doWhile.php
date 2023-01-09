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

        <ul id="ulListOne">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
            <li>Item 4</li>
            <li>Item 5</li>
            <li>Item 6</li>
            <li>Item 7</li>
            <li>Item 8</li>
        </ul>

        <p id="monParagraphe">Saisir des données et s'arrêter dès que leur somme dépasse <span id="chiffreMax">500</span></p>
        <script>

            let max = 200
            let chiffreMax = document.querySelector('#chiffreMax')
            chiffreMax.textContent = max

            let monParagraphe = document.querySelector('#monParagraphe')

            monParagraphe.addEventListener('click', monParagrapheChangeCouleur)

            function monParagrapheChangeCouleur()
            {
                console.log()
                alert()
            }

            // doWhile(200)

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