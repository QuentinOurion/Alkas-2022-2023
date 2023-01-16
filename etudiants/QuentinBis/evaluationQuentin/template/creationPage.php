<?php
require_once('doctype.php');
?>
<h1>Creation de la page</h1>

<form method="post" action="">
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="nom" placeholder="" required>
    <label for="description">Saisir votre description</label>
    <input type="text" name="description" id="description" placeholder=""
           required>
    <label for="roles">Choisir une categorie</label>
    <select name="categorie" id="roles">
        <option value="">Séléction</option>
        <option value="sport">Sport</option>
        <option value="voyage">Voyage</option>
        <option value="cuisine">Cuisine</option>
    </select>
    <label for="texta">Saisir votre contenu</label>
    <textarea name="contenu" id="texta" placeholder="Contenu"></textarea>

    <div class="postionBoutton">
        <button id="iButton" type="submit">Envoyer</button>
    </div>
</form>
<!--<div class="statutFormulaire"><p>--><?php //= $statutCreationPage ?><!--</p></div>-->

<?php
require_once('footer.php');
?>
