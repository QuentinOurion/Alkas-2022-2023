<header role="banner" class="wrapper">
    <h1 class="titrePrincipal">Site Web</h1>

    <nav class="BlocBarreNavigation" role="navigation">
        <ul class="ulNavigation">
            <li><a class="lienBarreNavigation" href="index.php">Home</a></li>
<!--            --><?php
//            if (!empty(js)) {
                $cours = "cours"
//                ?>
            <li><a class="lienBarreNavigation" href="index.php?js=<?=$cours?>">CoursJS</a></li>
<!--            --><?php //}?>
            <li><a  class="lienBarreNavigation"href="index.php?admin=list">Liste des pages</a></li>
        </ul>
    </nav>
    <h2 id="titreDePage"><?= $titrePage ?? "" ?></h2>
</header>

<main role="main" class="wrapper">
