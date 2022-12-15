<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>

<body>
<header role="banner" class="wrapper">
    <a href="forum.php"><h1>Can't Unsee</h1></a>
    <nav role="navigation">
        <ul>
            <li><a href="forum.php">Home</a></li>

            <?php
            if(empty($userConnecte)) {
                ?>
                <li><a href="addUser.php">Inscription</a></li>
                <li><a href="connexion.php">Connexion</a></li>
                <?php
            } else {
                ?>
                <li>(<?=ucfirst($userConnecte['nom'])?>) <a href="deconnexion.php">Déconnexion</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>
</header>

<main role="main" class="wrapper">