<?php

//******************************************CONNEXION A LA BASE DE DONNEE**********************************************


//connexion au serveur (          nom base de donnee            identifiant         MP          )

$connexion = new PDO('mysql:dbname=netflix;host=localhost', 'root', '', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);


//******************************************RECUPERER DES DONNEES DU FORMULAIRE HTML VERS PHP**********************************************
//                                                            ET
//                                           ENVOYER DES DONNEES DEPUIS PHP VERS LA DATA BASE


//-> prepare : Prépare une requête à l'exécution et retourne un objet.
//-> execute : Exécute une requête préparée.
//-> fetchAll : Récupère les lignes restantes d'un ensemble de résultats.


//                                                        METHODE 1

//recup des données du formulaire HTML + fonction trim qui permet de retirer les chaines vides avant et après la chaine (espace,tabulation ect)
//'prenom' correspond au 'name' dans l'input du formulaire HTML

$prenom = trim($_POST['prenom']);
$film = trim($_POST['film']);


//Envoi des données qui ont etaient recup dans l'etape précedente vers une table(utilisateur) de la base de donnée sql(netflix).
//Si les variables ($prenom et film$) ne sont pas vides, alors connexion a la base de donnée et préparation de la requete pour ensuite l'executer et envoyer les donnees

if (!empty($prenom && $film)) {
    $requete = $connexion->prepare('insert into utilisateur(prenom, filmPrefere) values (:prenom,:film)');
    $requete->execute([
        ':prenom' => $prenom,
        ':film' => $film,
    ]);
    echo "Le formulaire a bien été envoyé";
} else {
    echo "Tout les champs ne sont pas remplis, le formulaire n'a pas été envoyé";
}


//                                                         METHODE 2

//On verifie si 'POST' est vide ou non et on l'ajoute a la variable

$prenom = trim($_POST['prenom'] ?? '');
$film = ($_POST['film'] ?? "");
//var_dump($_POST);

//Si TRUE(donc si les variables ne sont pas vide ou egale a 0) on execute la requete.

if ($prenom && $film) {
    $requete = $connexion->prepare('insert into utilisateur(prenom, filmPrefere) values (:prenom,:film)');
    $requete->execute([
        ':prenom' => $prenom,
        ':film' => $film,
    ]);
    echo "Le formulaire a bien été envoyé";
} else {
    echo "Tout les champs ne sont pas remplis, le formulaire n'a pas été envoyé";
}


//******************************************SELECTIONNER DES DONNEES DE LA DATA BASE**********************************************


$recupTable = $connexion->prepare('select * from utilisateur');
$recupTable->execute();
$utilisateurNetflix = $recupTable->fetchAll();

var_dump($utilisateurNetflix);