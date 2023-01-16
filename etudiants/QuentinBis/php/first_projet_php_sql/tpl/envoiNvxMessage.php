<?php require_once('preambule.php'); ?>
<?php require_once('header.php'); ?>


    <div class="affichageEnvoiMessage">
        <h2 class="titreInscription">Saisir un nouveau message</h2>
        <main>
            <form method="post" action="" class="blocEnvoiMessage">
                <label for="login">Saisir le login</label>
                <input type="email" name="login" id="login" placeholder="Login" required>
                <label for="texta">Saisir votre message</label>
                <textarea name="message" id="texta" placeholder="Message"></textarea>
                <div class="postionBoutton">
                    <button id="iButton" type="submit">Envoyer</button>
                </div>
            </form>

        </main>
        <p class="statutEnvoiMessage"> <?= $statutMessage ?> </p>
    </div>
    <!--<div class="messageFormulaire">--><?php //=$message?><!--</div>-->
<?php require_once('footer.php'); ?>