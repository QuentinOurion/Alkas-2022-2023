<?php
require_once('doctype.php');
?>
<!--    <section class="page create" role="contentinfo">-->
<!--        <header>-->
<!--            <h1>Création de page</h1>-->
<!--        </header>-->
<!---->
<!--        <form method="post" action="">-->
<!---->
<!--            <label for="titre">-->
<!--                Titre-->
<!--                <input type="text" id="titre" name="titre">-->
<!--            </label>-->
<!--            <label for="description">-->
<!--                Description-->
<!--                <input type="text" id="description" name="description">-->
<!--            </label>-->
<!--            <label for="menu">-->
<!--                menu-->
<!--                <input type="text" id="menu" name="menu">-->
<!--            </label>-->
<!--            <label for="content">-->
<!--                contenu-->
<!--                <textarea id="content" name="content" cols="30" rows="10"></textarea>-->
<!--            </label>-->
<!---->
<!--            <button type="submit">Envoyer</button>-->
<!--        </form>-->
<!--    </section>-->



    <form method="post" action="">
        <div class="form">
            <div class="titreForm">Bonjour</div>
            <div class="sousTitreForm">Créer votre page!</div>
            <div class="input-container ic1">
                <input name="titre" id="titre" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="titre" class="placeholder">Titre</label>
            </div>
            <div class="input-container ic2">
                <input name="description" id="description" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="description" class="placeholder">Description</label>
            </div>
            <div class="input-container ic2">
                <input name="menu" id="menu" class="input" type="text" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="menu" class="placeholder">menu</>
            </div>
            <div class="input-container ic2">
                <textarea name="content" id="content" class="input" type="text" placeholder=" " ></textarea>
                <div class="cut cut-short"></div>
                <label for="content" class="placeholder">contenu</>
            </div>
            <button type="submit" class="submit">Envoyer</button>
        </div>
    </form>





<?php

require_once('footer.php');