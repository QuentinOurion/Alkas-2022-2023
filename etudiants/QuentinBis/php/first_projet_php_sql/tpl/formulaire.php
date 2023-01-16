<?php require_once('preambule.php');
require_once('header.php'); ?>


<div class="affichage">
    <h2 class="titreInscription">Enregistrer vous sur le site</h2>
    <main class="mainUser">
        <form method="post" action="">
            <label for="nom">Saisir votre Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Nom" required>
            <label for="prenom">Saisir votre Prenom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
            <label for="mail">Saisir votre adresse mail</label>
            <input type="email" name="login" id="mail" placeholder="Email" required>
            <label for="dateNaissance">Saisir votre date de naissance</label>
            <input type="date" name="dateNaissance" id="dateNaissance" placeholder="Date de naissance"
                   required>
            <label for="password">Saisir un password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="roles">Choisir un rôle</label>
            <select name="roles" id="roles">
                <option value="">Séléction</option>
                <?php
                foreach ($roles as $role) {
                    echo '<option value="' . $role['id'] . '">' . $role['nom'] . '</option>';
                }
                ?>
            </select>
            <div class="postionBoutton">
                <button id="iButton" type="submit">Envoyer</button>
            </div>
        </form>
    </main>
</div>
<div class="messageFormulaire"><?= $message ?></div>
<?php require_once('footer.php'); ?>
