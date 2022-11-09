<?php

$civilite = "Mr";

/*if("Mr" == $civilite || "M" == $civilite ) {
    echo "Monsieur";
} elseif("Mme" == $civilite) {
    echo "Madame";
} else {
    echo "Autre";
}*/
// autre façon d'écrire avec un switch case
switch ($civilite) {
    case "Mr":
    case "M":
        echo "Monsieur";
        break;
    case "Mme":
        echo "Madame";
        break;
    default:
        echo "Autre";
}

echo "<br>";
$hero = "man";

switch ($hero) {
    case "super":
        echo "super";
        break;
    case "man":
        echo "man ";

    case "catwoman":
        echo "catwoman";
}