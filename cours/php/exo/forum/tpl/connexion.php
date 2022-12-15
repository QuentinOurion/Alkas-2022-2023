<?php
require_once('doctype.php');
?>

    <section class="messageInformation"><?= $message ?></section>

    <section class="addUser">
        <form method="post" action="" ><!--novalidate-->
            <label for="login">Login</label>
            <input type="email" name="login" id="login" placeholder="email@email.email" required>

            <label for="pwd">Mot de passe</label>
            <input type="password" name="password" id="pwd" placeholder="Mot de passe" required>

            <button type="submit">Enregistrer</button>
        </form>
    </section>

<?php
require_once('footer.php');