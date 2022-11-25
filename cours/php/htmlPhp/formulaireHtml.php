<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <!-- balise de formulaire qui prend 2 attributs obligatoires
    method GET pour envoyer un formulaire via l'url
    method POST pour envoyer un formulaire non visible -->
    <form method="POST" action="" style="display: flex; flex-direction: column">
<!--        champ qui prend obligatoirement un nom et un type-->
        <input type="text" name="prenom" value="<?=$_POST['prenom']?>">
        <input type="text" name="nom" >
        <input type="hidden" name="cacheMaisPasVraiment" value="pagePseudoSecrete">
        <br>
        <label for="boutoncheck">garde la connexion active</label>
        <!--valeur retournée "on" si value n'est pas précisé sinon ne renvoie pas la clé "boutoncheck" si aucune valeur n'est retournée
        Le label permet de rendre le texte cliquable -->
        <input id="boutoncheck" type="checkbox" name="boutoncheck" value="test">

        <!--Cas particulier qui permet de renvoyer lors d'un checkbox multiple un tableau
        On doit ajouter au nom obligatoirement un []-->
        <label>
            premier choix
            <input type="checkbox" name="qcm[]" value="premier">
        </label>
        <label>
            second choix
            <input type="checkbox" name="qcm[]" value="second">
        </label>
        <label>
            troisieme choix
            <input type="checkbox" name="qcm[]" value="troisieme">
        </label>

        <label>
            J'adore le html
            <input type="radio" name="boutonRadioNova" value="htmlCestBien">
        </label>
        <label>
            C'est naze le html
            <input type="radio" name="boutonRadioNova" value="htmlAlaCon">
        </label>

        <label>
            Bfm ...
            <input type="radio" name="boutonRadioBfm" value="...">
        </label>
        <label>
            C'est naze BFM
            <input type="radio" name="boutonRadioBfm" value="bfmALaCon">
        </label>
        <textarea name="texte"><?=$_POST['texte']?></textarea>

<!--        liste de selection, il peut être multiple suivant les options que l'on met-->
        <select name="monchoix">
            <option value="1">choix 1</option>
            <option value="2">choix 2</option>
        </select>

        <br>
<!--        <input type="submit" value="Envoyer">-->
        <button type="submit" >Envoyer</button>
    </form>
</body>
</html>