<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleImc.css">
    <title>Title</title>
</head>
<body>
<main>
    <form class="appIMC" method="post" action="">
        <div class="inputTaille_Poids">
            <input type="number" placeholder="Indiquer votre taille en cm (ex: 210cm)" name="taille">
            <input type="number" placeholder="Indiquer votre poids en Kg (ex: 180kg)" name="poids">
        </div>
        <div id="btn_Et_Select">
            <select id="selection" name="classique_dejante">
                <option value="classique">Classique</option>
                <option value="dejante">Déjanté</option>
            </select>
            <button id="iButton" type="submit">calculer</button>
        </div>
        <div class='msg_imc'>
            IMC = <?= $resultatImc ?><br>
            <?= $message ?>
        </div>
    </form>
</main>
</body>
</html>