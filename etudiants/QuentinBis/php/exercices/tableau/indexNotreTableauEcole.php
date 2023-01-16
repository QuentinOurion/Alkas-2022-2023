<?php
$ecole = [
    'nom' => [
        'ALKAS' => [
            'Developpement Web' => [
                'laurent' => [
                    'notes' => [15, 12, 34]
                ],
                'juju' => ['notes' => notes(7)],
                'thomas' => ['notes' => notes(8)],
                'pepe' => ['notes' => notes(7)],
                'cyrille' => ['notes' => notes(7)],
                'octavia' => ['notes' => notes(7)],
                'cyledvdv' => ['notes' => notes(7)],
                'laurent1' => [
                    'notes' => [15, 12, 34]
                ],
                'juju1' => ['notes' => notes(6)],
                'thomas1' => ['notes' => notes(5)],
                'pepe1' => ['notes' => notes(8)],
                'cyrille1' => ['notes' => notes(6)],
                'cyr' => ['notes' => notes(6)],
                'c' => ['notes' => notes(6)]
            ],
            'Vente Conseil Magasin' => [
                'A.S' => [
                    'notes' => notes(8)
                ],
                'marco' => ['notes' => notes(7)],
                'mahot' => ['notes' => notes(8)],
                'pierre' => ['notes' => notes(8)],


            ]
        ]
    ]
];

function notes(int $nombreDeNote = 20): array
{
    $tab = [];
    for ($i = 0; $i < $nombreDeNote; $i++) {
        array_push($tab, rand(0, 20));
    }

    return $tab;
}

require_once ('notreTableauEcole.php');