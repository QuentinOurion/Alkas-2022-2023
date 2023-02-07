<?php
require_once('doctype.php');
print_r($_POST ?? '');
?>

    <article class="page" role="article">
        <form style="display: flex; flex-direction: column" method="post" action="">
            <label>Nom</label>
            <input style="background-color: green" name="nom" class="tousChamp" id="liste" type="text">
            <label>Prenom</label>
            <input style="background-color: green" name="prenom" class="tousChamp" id="liste" type="text">
            <label>Email</label>
            <input style="background-color: green" name="email" class="tousChamp" id="liste" type="text">
            <label>tel</label>
            <input style="background-color: green" name="tel" class="tousChamp" id="liste" type="tel">
            <label>Pseudo</label>
            <input style="background-color: green" name="pseudo" class="tousChamp" id="liste" type="text">
            <label>Password</label>
            <input style="background-color: green" name="password" class="tousChamp" id="liste" type="password">
            <br>
            <button  type="submit">Clic</button>
        </form>
        <div>
            <p id="messageFormulaire"> </p>
        </div>
    </article>

<?php

require_once('footer.php');


//Vérification du formulaire
//Créez un formulaire avec les champs (nom, prénom, email, tel, pseudo et mot de passe)
//
//Les champs doivent avoir une couleur par default
//
//En JS, vous devez vérifier que la taille des champs et d'au moins 3 caractères et de taille maximum de 10
//
//Si c'est le cas alors le champ valid doit être blanc et si tous les champs sont valid alors envoyer le formulaire au serveur
//
//Dans le cas contraire, les champs qui ont des erreurs doivent changer de couleurs et vous devez afficher la totalité des erreurs en dessous du formulaire et ne pas envoyer le formulaire.
//
//Vous devez automatiser le tout.