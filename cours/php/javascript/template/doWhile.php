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

            let chiffreMax = 200
            let elChiffreMax = document.querySelector('#chiffreMax')

            if(elChiffreMax) {
                elChiffreMax.textContent = chiffreMax
            }

            let elMonParagraphe = document.querySelector('#monParagraphe')

            elMonParagraphe.addEventListener('click', monParagrapheChangeCouleur)


            function monParagrapheChangeCouleur(e)
            {
                // console.log(e.target)
                // console.log(this)
                this.style.color = "blue"
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