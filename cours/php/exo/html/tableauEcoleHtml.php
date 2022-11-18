<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="html/style.css">
</head>
<body>
<main>

<?php
foreach ($ecole['nom'] as $nomEcole => $specialites) {
    echo "<h1>$nomEcole</h1>";

    foreach ($specialites as $specialite => $eleves) {
        echo "<h2>$specialite</h2>
        <section>
            <div class='centrage'>";

        foreach ($eleves as $prenom => $informations) {
            echo "
            <figure>
                <img src='https://robohash.org/$prenom' alt=''>
                <figcaption>
                    <h4 >" . ucfirst($prenom) . "</h4>
                    <h4 >notes = </h4>";

            sort($informations['notes']);

            $virgule = '';
            foreach ($informations['notes'] as $note) {
                echo $virgule . $note;
                $virgule = ', ';
            }

            echo '
                </figcaption>
            </figure>';
        }

        echo '</div>
        </section>';
    }
}
?>
</main>
</body>
</html>