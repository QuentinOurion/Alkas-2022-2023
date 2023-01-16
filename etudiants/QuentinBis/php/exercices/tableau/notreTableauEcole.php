<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleRobot.css">
    <title>Title</title>

</head>
<body>
<?php
//require_once('fonctions/outils.php');
foreach ($ecole['nom'] as $nomEcole => $specialites) {
    echo "<h1 class='nomEcole'>$nomEcole</h1>";

    foreach ($specialites as $specialite => $eleves) {
        echo "<h2>$specialite</h2>
              <section> 
                <div>";

        foreach ($eleves as $prenom => $informations) {
            echo "<figure>
                      <img class='imgRobot' src='https://robohash.org/$prenom?set=set4 ' alt=''> 
                      <figcaption> 
                          <h4 >" . ucfirst($prenom) . " </h4> ";

            sort($informations['notes']);
            $virgule = '';
            echo "";
            foreach ($informations['notes'] as $note) {
                echo $virgule . $note;
                $virgule = ', ';

            }
            echo "</figcaption> 
                </figure> ";
        }
        echo "</div>
            </section>";

    }
}

?>

</body>
</html>