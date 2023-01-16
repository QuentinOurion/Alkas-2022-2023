<?php
require_once('doctype.php');

?>
<h1 class="titrePage"><?= $page['titre'] ?></h1>
<section class="containerPage" role="contentinfo">

    <div class="ElementPage">
        <p id="contenu">Contenu : <?= $page['contenu'] ?></p>
        <p id="dateCreation">Date de creation : <?= $page['date_creation'] ?></p>
        <p id="categorie">Categorie : <?= $page['categorie'] ?></p>
    </div>
</section>


<?php

require_once('footer.php');
?>


