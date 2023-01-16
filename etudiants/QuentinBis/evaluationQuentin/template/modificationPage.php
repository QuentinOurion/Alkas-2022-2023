<?php
require_once('doctype.php');

?>

<h1>Modification de la page</h1>

<form method="post" action="">
    <label for="titre">Titre</label>
    <input type="text" name="updateTitre" id="nom" placeholder="" required>
    <label for="description">Saisir votre description</label>
    <input type="text" name="updateDescription" id="description" placeholder=""
           required>
    <label for="roles">Choisir une categorie</label>
    <select name="updateCategorie" id="roles">
        <option value="">Séléction</option>
        <option value="sport">Sport</option>
        <option value="voyage">Voyage</option>
        <option value="cuisine">Cuisine</option>
    </select>
    <label for="texta">Saisir votre contenu</label>
    <textarea name="updateContenu" id="texta" placeholder="Contenu"></textarea>

    <div class="postionBoutton">
        <button id="iButton" type="submit">Envoyer</button>
    </div>
</form>
