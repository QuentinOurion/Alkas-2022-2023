<?php
require_once('fonctions/outils.php');

$ecole = [
    'nom' => [
        'Alkas' => [
            'developpeur' => [
                'laurent' => [
                    'notes' => [15, 12, 34]
                ],
                'thomas' => ['notes' => genereTableauAleatoire(20)],
                'cyrille' => ['notes' => genereTableauAleatoire(15)],
                'thibault' => ['notes' => genereTableauAleatoire(55)],
                'anthony' => ['notes' => genereTableauAleatoire(5)],
                'regis' => ['notes' => genereTableauAleatoire(12)],
            ],
            'vente commerce ' => [
                'A.S' => [
                    'notes' => genereTableauAleatoire(40)
                ],
                'mahot' => ['notes' => genereTableauAleatoire(20)],
                'Imane' => ['notes' => genereTableauAleatoire(15)]
            ]
        ]
    ]
];

require_once('html/tableauEcoleHtml.php');