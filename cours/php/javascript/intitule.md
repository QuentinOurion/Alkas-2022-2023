# Premier exo JS 9-1-23

### Concevoir une calculatrice en demandant à l'utilisateur 2 valeurs et un opérateur

### Saisir des données et s'arrêter dès que leur somme dépasse 500

### exo event
On a une liste 
<ul id="ulListOne">
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3</li>
    <li>Item 4</li>
    <li>Item 5</li>
    <li>Item 6</li>
    <li>Item 7</li>
    <li>Item 8</li>
</ul>

On veut changer item de la liste par blabla et afficher, sur un element de liste, un popup qui donne son numéro 


### Todo
Création d'une todolist (simple)

On doit pouvoir saisir une nouvelle tache à faire et l'ajouter dans sa liste, puis de pouvoir supprimer une tache bien précise

L'idée est de pouvoir utiliser cette liste n'importe où, donc tout doit être fait pour que ça soit contenu dans un block


## Tous les exos sur la même page
Dans un premier temps, mettre sur une seule et unique page, l'exo calculatrice + celui des évennements 

Puis une fois que vous avez compris le mécanisme, mettre tous les autres exos JS sur cette même page

## Vérification du formulaire
Créez un formulaire avec les champs
(nom, prénom, email, tel, pseudo et mot de passe)

Les champs doivent avoir une couleur par default

En JS, vous devez vérifier que la taille des champs et d'au moins 3 caractères et de taille maximum de 10

Si c'est le cas alors le champ valid doit être blanc et si tous les champs sont valid alors envoyer le formulaire au serveur

Dans le cas contraire, les champs qui ont des erreurs doivent changer de couleurs et vous devez afficher la totalité des erreurs en dessous du formulaire et ne pas envoyer le formulaire.

Vous devez automatiser le tout.

## Fiche contact
Créez deux fiches contact qui contient le nom, prénom et email
Utilisez des cards (qui ont une tête) en boostrap pour chaque fiche contact et utilisez-les class mobile first, jusqu'à l'écran XL

## Météo Alkas
Afficher la météo Alkas sur la page "tous les exos" en JS (voir exemple de résultat dans le dossier assets/images/meteo.jpeg ou https://www.meteoblue.com/fr/meteo/semaine/montpellier_france_2992166)

Il doit forcément y avoir le nom de la ville, la température plus et min max, l'icône qui va bien, soit de bootstrap ou openWeatherMap pour interpréter la météo actuelle.

Séparer pour les autres détails, la pression, vitesse du vent, orientation du vent, etc.

On utilisera l'"api restful" de ce site pour récupérer les informations de la météo https://openweathermap.org/



