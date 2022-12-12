<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$titi = 'test';
if (isset($_GET['titi']) && $_GET['titi']) {
    $titi = $_GET['titi'];
}

if (!empty($_GET['titi'])) {
    $titi = $_GET['titi'];
}
?>

<?= $titi ?>
<a href="page1.php?toto=titi">page 1</a>
</body>
</html>