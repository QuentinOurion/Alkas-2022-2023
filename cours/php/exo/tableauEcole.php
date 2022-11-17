<?php
require_once('fonctions/outils.php');

function notes(int $nombreDeNote = 20): array
{
    $tab = [];
    for ($i = 0; $i < $nombreDeNote; $i++) {
        array_push($tab, rand(0, 20));
    }

    return $tab;
}

$ecole = [
    'nom' => [
        'Alkas' => [
            'dev' => [
                'laurent' => [
                    'notes' => [15, 12, 34]
                ],
                'thomas' => ['notes' => notes(20)],
                'cyrille' => ['notes' => notes(15)]
            ],
            'vcm' => [
                'A.S' => [
                    'notes' => notes(40)
                ],
                'mahot' => ['notes' => notes(20)],
                'Imane' => ['notes' => notes(15)]
            ]
        ]
    ]
];

/*foreach ($eleves as $prenom => $informations) {
    echo "<h4>" . ucfirst($prenom) . "</h4>";
    sort($informations['notes']);

    foreach ($informations as $notes) {
        echo 'notes = ';

        $virgule = '';
        foreach ($notes as $note) {
            echo $virgule.$note;
            if(!$virgule) {
                $virgule = ', ';
            }
        }
    }
}*/
foreach ($ecole['nom'] as $nomEcole => $specialites) {
    echo "<h1>$nomEcole</h1>";

    foreach ($specialites as $specialite => $eleves) {
        echo "<h2>$specialite</h2>";

        foreach ($eleves as $prenom => $informations) {
            echo "<h4 >" . ucfirst($prenom) . "</h4>
            <h4 >notes = </h4>";
            sort($informations['notes']);

            $virgule = '';
            foreach ($informations['notes'] as $note) {
                echo $virgule . $note;
                $virgule = ', ';
            }
        }
    }
}
/*foreach ($eleves as $prenom => $informations) {
    echo "<h4 >" . ucfirst($prenom) . "</h4>
            <h4 >notes = </h4>";
    sort($informations['notes']);

    $virgule = '';
    foreach ($informations['notes'] as $note) {
        echo $virgule.$note;
        $virgule = ', ';
    }
}*/