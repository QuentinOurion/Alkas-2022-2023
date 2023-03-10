<?php
require_once('doctype.php');
?>

    <section><?= $message ?></section>

    <section class="addUser">
        <form method="post" action="" ><!--novalidate-->
            <label for="login">Login</label>
            <input type="email" name="login" id="login" placeholder="email@email.email" required>

            <label for="pwd">Mot de passe</label>
            <input type="password" name="password" id="pwd" placeholder="Mot de passe" minlength="8" maxlength="20" required>

            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" placeholder="prenom" maxlength="20" required>

            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="nom" required>

            <label for="date_naissance">Date de naissance</label>
            <input type="date" name="date_naissance" id="date_naissance" >

            <label for="roles">Choisir un rôle</label>
            <select name="roles" id="roles" required>
                <option value="">Choisir un rôle</option>
                <?php
                foreach ($roles as $role) {
                    echo '<option value="' . $role['id'] . '">' . $role['nom'] . '</option>';
                }
                ?>
            </select>

            <button type="submit">Enregistrer</button>
        </form>
    </section>

<?php
require_once('footer.php');