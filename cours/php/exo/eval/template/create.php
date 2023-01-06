<?php
require_once('doctype.php');
?>
    <section class="page create" role="contentinfo">
        <header>
            <h1>Création de page</h1>
        </header>

        <form method="post" action="">

            <label for="titre">
                Titre
                <input type="text" id="titre" name="titre">
            </label>
            <label for="description">
                Description
                <input type="text" id="description" name="description">
            </label>
            <label for="menu">
                menu
                <input type="text" id="menu" name="menu">
            </label>
            <label for="content">
                contenu
                <textarea id="content" name="content" cols="30" rows="10"></textarea>
            </label>

            <button type="submit">Envoyer</button>
        </form>
    </section>
<?php

require_once('footer.php');