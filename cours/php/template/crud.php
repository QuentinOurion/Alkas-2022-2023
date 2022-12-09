<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?=$message?>

<h1>insertion</h1>
<form method="post" action="">
    <label for="nom">Ajouter une ville</label>
    <input type="text" name="nom" id="nom" placeholder="test">

    <label for="roles">Choisir un rôle</label>
    <select name="roles" id="roles">
        <option value="">Choisir un rôle</option>

        <?php
        foreach ($roles as $role) {
            echo '<option value="'.$role['id'].'">'.$role['nom'].'</option>';
        }
        ?>
    </select>


    <button type="submit">enregistrer</button>
</form>

</body>
</html>