<?php
require_once('doctype.php');
?>
    <article  role="article">
        <header>
            <h1>Ma page d'accueil</h1>
        </header>

        <p>Contenu de mon article</p>
        <?php
        foreach ($pages as $page) {
            echo '<a href="?page='.$page['slug'].'">'.$page['titre'].'</a><br>';
        }
        ?>

        <footer>
            Footer de mon article
        </footer>
    </article>

<?php

require_once('footer.php');