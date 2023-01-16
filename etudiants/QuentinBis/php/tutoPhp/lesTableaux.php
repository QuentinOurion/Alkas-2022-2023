<?php
//https://www.youtube.com/watch?v=l30p6dYg0yQ&list=PLjwdMgw5TTLVDv-ceONHM_C19dPW1MAMD&index=6

//**************************tableau index numerique*************************************


//$tableauIndex = [10,20, ["quentin","ourion"], ["ici",["ou"],"la"]];
//echo $tableauIndex[0];
//echo $tableauIndex[2][0];
//echo $tableauIndex[3][1][0];


//**************************tableau associatif*************************************

$eleve = [
//  "clée" => "valeur"

    "nom" => "ourion",
    "prenom" => "quentin",
    "notes" => [10, 5, 12]
];

echo $eleve["nom"] . "<br>";
echo $eleve["prenom"] . "<br>";
echo $eleve["notes"][0] . "<br>";


//Pour modifier une valeur dans le tableau :
//$eleve["prenom"] = "George";

//Pour ajouter une valeur au tableau :
//$eleve["notes"][] = 15;

//Pour voir la totalité du tableau :
//print_r($eleve["notes"]);

//***********************Les tableaux dans les tableaux*************************************

$classe = [
    [
        "nom" => "ourion",
        "prenom" => "quentin",
        "notes" => [10, 5, 12]
    ],
    [
        "nom" => "polo",
        "prenom" => "Marco",
        "notes" => [9, 3, 11]
    ],
    ["nom" => "beaunom",
        "prenom" => "jean pierre",
        "notes" => [0, 6, 8]
    ]
];

echo $classe[2]["notes"][1];