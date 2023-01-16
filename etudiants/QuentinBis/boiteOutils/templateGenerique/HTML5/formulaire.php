<form method="post" action="">
    <div class="form">
        <div class="titreForm">Bonjour</div>
        <div class="sousTitreForm">Créer votre compte!</div>
        <div class="input-container ic1">
            <input id="prenom" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="prenom" class="placeholder">Prénom</label>
        </div>
        <div class="input-container ic2">
            <input id="nom" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="nom" class="placeholder">Nom</label>
        </div>
        <div class="input-container ic2">
            <input id="email" class="input" type="text" placeholder=" " />
            <div class="cut cut-short"></div>
            <label for="email" class="placeholder">Email</>
        </div>
        <div class="input-container ic2">
            <input id="password" class="input" type="password" placeholder=" " />
            <div class="cut cut-short"></div>
            <label for="password" class="placeholder">Mot de passe</>
        </div>
        <button type="text" class="submit">Envoyer</button>
    </div>
</form>








































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
    </select>
    <label for="texta">Saisir votre message</label>
    <textarea name="message" id="texta" placeholder="Message"></textarea>
    <div class="postionBoutton">
        <button id="iButton" type="submit">Envoyer</button>
    </div>
</form>
<div class="statutFormulaire"><p><?= $messageStatut ?></p></div>

