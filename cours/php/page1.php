<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="page2.php?titi=toto">page 2</a>

<?php
$toto = $_GET['toto'] ?? 'test';

$ici = 'montpellier';

$_SESSION['ici'] = $ici;
?>

<?= $toto ?>

</body>
</html>