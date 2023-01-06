### Créez un tableau d'élèves (10) qui contiendra le prénom et leurs notes, afficher les élèves et leurs notes triées
### On veut mettre ces élèves dans une classe par spécialité
### On veut mettre cette classe dans une école
Affichez le tout

exemple : 

    Alkas -> 
        dev -> 
            laurent ->
                notes -> 13,15,20
            thomas ->
                notes -> 13,15,20
            etc.
        vcm ->
            A.S ->
                notes -> 13,15,20
            mahot ->
                notes -> 13,15,20

### Triez le fichier listePays.php (dans ce même dossier) par continent
Voici le fichier listePaysTrie.php pour voir le résultat demandé

#### Afficher les pays par continent
exemple :
    
    Africa
        Algeria (code DZ)
        Angola (code AO)
        etc.

    Antarctica
        Antarctica (code AQ)
        Bouvet Island (code BV)
        etc.


###
Reprendre l'exo sur les tableaux d'écoles et faire une mise en page comme sur la page alkas / équipe https://www.alkas.fr/alkas_website/en/alkas  
Titre centré
    spécialité 
        les élèves (une photo aléatoire via ce site https://robohash.org/  )
            afficher le prénom et le nom

### Creer un formulaire qui va contenir 3 champs dont l'un permettra de faire une selection
Cet exo permettra de faire des calculs entre 2 valeurs */+-
Afficher l'historique de tous les calculs
#### corrigez MON exo partiel de la calculatrice
- Donc il faut corriger quand on envoie le formulaire vide le warning
- Ajoutez l'historique

## Affichez des utilisateurs
- Il faut afficher des utilisateurs (10 max) de façon responsive à partir de la base de donnée 
- L'interface doit ressembler à l'image de gauche sur https://cantunsee.space/ (l'image démo est enregistré "cantunsee.png")
- Il pourra y avoir plusieurs utilisateurs sur la même ligne
- Il faudra respecter la charte graphique de cantunsee
- Dans la bulle bleue, il faudra afficher l'email et la date d'inscription.
- Il faudra générer une photo à partir du nom de l'utilisateur 

exemple :

style open-peeps sur le prénom guillaume

  https://avatars.dicebear.com/api/open-peeps/guillaume.svg
style big-smile
  https://avatars.dicebear.com/api/big-smile/guillaume.svg

Vous pouvez changez de style https://avatars.dicebear.com/styles

## Pour jeudi 8 decembre 22
Sur votre page cantunsee 
- Il faudra pouvoir cliquer sur un lien ex : lire message.s 
- Sur cette nouvelle page, il faudra afficher les messages de l'utilisateur correspondant, son nom, son role
- Parce qu'il y a redondance, il faudra refactoriser son code et donc le découper, pour le php en fonction (connexion, requête) et le html en fichier spécifique pour le (head, header, main et footer)

Voir ../page1.php et ../page2.php pour voir comment une page communique avec une autre

## Créez un formulaire d'ajout d'utilisateur
Créez une page de formulaire qui va permettre d'ajouter un utilisateur pour le forum

Modifier la page afficher les utilisateurs pour voir les derniers utilisateurs

## Pour ce we
- Ajoutez un menu en haut à droite qui doit contenir les liens entre les pages d'accueil et nouvel utilisateur

## Sécurité
- Ajoutez une colonne mot de passe de taille 100 dans la table USER
```sql 
    alter table user add column password varchar(100) AFTER login;
```
- rendre dans la table, le login unique dans la db 
```sql 
    alter table user add constraint ak_login unique (login);
```
- créer un formulaire login / mot de passe  
- modifiez le formulaire inscription pour ajouter un champ mot de passe
- une fois connecté on devra afficher le nom de l'utilisateur en haut à droite (donc visible sur chaque page) 

## Sécurité bis 
- Connectez un utilisateur
- dans le menu, il faudra supprimer l'inscription et la connexion et le remplacer par un lien déconnexion 
- Afficher dans ce menu le nom de l'utilisateur connecté

# Exo sur l'héritage
Vous avez 3 véhicules dont (1 voiture, 1 vélo, 1 ovni)

Donc évidement chaque véhicule à des choses en commun, comme accélérer, avance, freiner

La voiture quant à elle a des roues (3 ou 4), a un volant, a un klaxon

Le vélo 2, il a des poignées

L'ovni, lui vole, n'a pas de roue, devient invisible.

Chaque fonctionnalité affiche un message


# Eval Conception d'un " CMS " (3-1-23)

- À partir du dossier eval, faite une copie dans votre dossier étudiant/votreprénom/evalPHP, vous devez le modifier, créer une base de donnée, comme ce qui suit : 

- Une page est constitué d'un titre (100 caractères max), d'une description (200 caractères max), d'un slug (qui est identique au titre et est sans les accents, espaces et doit ressembler à ça "ma-premiere-page" au lieu de mettre "Ma première page"), le slug devra se faire automatiquement et non l'écrire à la main), titre pour le menu (ex: "accueil", "cv", "portfolio"), d'un contenu et une date de création et modification.
  Chaque champ devra être protégé par la fonction htmlspecialchars pour éviter les attaques de type XSS

- Chaque page à une catégorie (ex: sport, actualité, etc.) dont l'on devra sélectionner lors de la création et modification

- On pourra lister les pages et on pourra les supprimers ou modifiers via des liens par page

- Affichez une page via son slug et uniquement via le fichier index.php

exemple :
http://localhost/?page=ma-premiere-page

titre = Eval Conception d'un " CMS " (3-1-23)

slug = eval-conception-d-un-cms-3-1-23

- La page doit afficher uniquement : le titre, la date de création, sa catégorie et modification ainsi que son contenu. Dans le menu, on pourra voir la liste des pages.

Attention cependant le titre et la description doivent être aussi dans les balises faites dans la tête.

Le site devra être centré et avoir une taille maximum de 1000 pixels et doit être responsive

- La partie back-end doit être en objet et les requêtes doivent être uniquement dans des fichiers et avoir le suffixe Repository et donc s'appeler comme ici Repository/NomClassRepository.php ex : Repository/UserRepository.php

Les contrôleurs doivent avoir un suffixe Controller et donc s'appeler comme ici : Controller/NomClassController.php ex : Controller/AccueilController.php

- modifiez le fichier config.php pour qu'il corresponde à votre configuration

- Merci de le partager, ainsi que votre base de donnée qui devra être aussi dans ce dossier