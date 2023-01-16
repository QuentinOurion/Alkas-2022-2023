<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculatrice</title>
    <link rel="stylesheet" href="styleCalculatricePhp.css" />
</head>
<body>
<main>
    <form class="calculatrice" method="post" action="">
            <input type="text" name="affichage" id="result" readonly="true" value="<?php echo $_POST["data"] ; ?>">
<!--        <input type="hidden" name="affichage" value="--><?php //echo (empty($affichage)) ? '0' :$affichage; ?><!--">-->
            <input type="submit" name="data" value="9" class="btn" id="9">
            <input type="submit" name="data" value="8" class="btn" id="8">
            <input type="submit" name="data" value="7" class="btn" id="7">
            <input type="submit" name="data" value="6" class="btn" id="6">
            <input type="submit" name="data" value="5" class="btn" id="5">
            <input type="submit" name="data" value="4" class="btn" id="4">
            <input type="submit" name="data" value="3" class="btn" id="3">
            <input type="submit" name="data" value="2" class="btn" id="2">
            <input type="submit" name="data" value="1" class="btn" value= "1"  id="1">
            <input type="submit" name="data" value="." class="btn" id=".">
            <input type="submit" name="data" value="0" class="btn" id="0">
            <input type="submit" name="data" value="x" class="btn" id="*">
            <input type="submit" name="data" value="-" class="btn" id="-">
            <input type="submit" name="data" value="C" id="clear">
            <input type="submit" name="data" value="/" class="btn" id="/">
            <input type="submit" name="data" value="+" class="btn" value="+" name="addition" id="+">
            <input type="submit" name="data" value="=" id="egal">
     </form>
</main>
</body>
</html>