<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>

<form method="post" action="" style="display: flex; flex-direction: column">

    <label>
        Tapez un nombre
        <input type="number" name="nombre1" placeholder="Tapez un nombre" value="<?=$nombre1?>" >
    </label>
    <label for="operateur">Selectionne un opérateur</label>
    <select name="operateur" id="operateur" >
        <option value=""></option>
        <option value="+">addition</option>
        <option value="-">soustraction</option>
        <option value="*">multiplication</option>
        <option value="/">division</option>
    </select>
    <label>
        Tapez un second nombre
        <input type="number" name="nombre2" placeholder="Tapez un second nombre" value="<?=$nombre2?>">
    </label>

    <button type="submit">=</button>
</form>

<section>
    <header>
        <h1>Belle présentation</h1>
    </header>
    <?= $resultat ?>
</section>

<section>
    <header>
        <h1>Historique</h1>
    </header>
    <?=$historique ?>
</section>

</body>
</html>