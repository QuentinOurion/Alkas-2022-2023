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
- Ajouter une colonne mot de passe de taille 100 dans la table USER
- rendre la table le login unique dans la db 
- créer un formulaire login / mot de passe  
- une fois connecté on devra afficher le nom de l'utilisateur en haut à droite (donc visible sur chaque page) 