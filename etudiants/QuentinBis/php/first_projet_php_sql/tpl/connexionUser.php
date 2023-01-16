<?php require_once('preambule.php'); ?>
<?php require_once('header.php'); ?>
<div class="main-content">
    <div class="containerConnexion">
        <h1 class="titreConnexionAcces">CONNEXION</h1>
        <h2 class="titreConnexionAcces">Accés à votre compte</h2>
        <form method="post" action="">
            <label for="login">Saisir votre login</label>
            <input type="email" name="login" id="login" placeholder="Login" required>
            <label for="password">Saisir votre Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <div class="postionBoutton">
                <button id="iButton" type="submit">Se connecter</button>
            </div>
        </form>
    </div>
</div>

<?php require_once('footer.php'); ?>

