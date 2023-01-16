<?php

//$salaireDemarcheur = 3000;
//$nbDeVenteRealisee = rand(0,5);
//$montantDesVentes = rand(50,150);
//
//
//$commissionDesVentesDuMois = calculCommission($nbDeVenteRealisee,$montantDesVentes );
//echo "Commission total des ventes du mois :".$commissionDesVentesDuMois."€"."<br>";
///**
// * Fonction qui calcul une commission de 5% par rapport au montant d'une vente
// * @param int $nbdeVente
// * @param int $montantDeLaVente
// * @return int
// */
//function calculCommission(int $nbdeVente,int $montantDeLaVente ):float
//{
//  $commissionDeLaVente = $montantDeLaVente * 0.05;
//  return $nbdeVente * $commissionDeLaVente;
//}
//
//$majorationDuSalaire = augmentationDuSalaire($salaireDemarcheur);
//echo "Majoration de 10% du salaire pour les frais de transport : ".$majorationDuSalaire."€"."<br>";
//
//function augmentationDuSalaire(int $salaireEmploye):float
//{
//return $salaireEmploye * 0.1;
//}
//
//
//echo salaireFinal($salaireDemarcheur,augmentationDuSalaire(),calculCommission());
//function salaireFinal(int $a,int $b,float $c):float
//{
// return $a + $b + $c;
//}


//******************************EXERCICE 3 PILE OU FACE*********************


function random()
{
    $lancer = rand(0, 1);

    if ($lancer == 0) {
        $lancer = "pile";
    } else {
        $lancer = "face";
    }
    return $lancer;
}

echo lancerDuDes();


function lancerDuDes($estPile = true)
{
    $compteur = 0;
    for ($i = 0; $i < 3; $i++) {
        $resultatDuLance = random();
        if ($resultatDuLance == "pile") {
            if ($estPile === true) {
                $compteur = $compteur + 1;
            }
        } else {
            if ($estPile === false) {
                $compteur = $compteur + 1;
            }
        }
    }
    return $compteur;
}









