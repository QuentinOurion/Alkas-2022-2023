<?php
require_once('doctype.php');
?>
    <article role="article">
        <header>
            <h1>Ma page d'accueil</h1>
        </header>

        <p>Liste des pages</p>
        <?php
        foreach ($pages as $page) {
            echo '<a href="?page='.$page['slug'].'">'.$page['titre'].'</a><br>';
        }
        ?>

        <footer class="mt-3">
            Footer de mon article
        </footer>
    </article>

<?php

require_once('footer.php');