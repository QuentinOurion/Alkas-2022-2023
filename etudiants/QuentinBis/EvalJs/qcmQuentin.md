Où faire de la veille en JS ?
Sur "Stack Over Flow"


Qu'est-ce que le DOM ?
C'est le "Document Object Model"
Il permet de modifier le HTML via du code en JavaScript


Créez un bouton dans une div et l'afficher dans sa page html via le dom uniquement
let container = document.createElement('div')
let bouton = document.createElement('button')
container.appendChild(bouton)
document.querySelector("localisation ou on souhaite ajouter l'élément").appendChild(container)



Comment exécuter son code JS après le chargement d'une page HTML ? Citez les différentes façons de le faire.



Comment faire appel via un seul fichier JS, plusieurs fichiers en donnant un exemple de code ?



Peut-on faire confiance aux données d'un formulaire que l'on demande à l'utilisateur et comment se protéger si ce n'est pas le cas, coté front end ou back end ?
Non on ne peut pas faire confiance à un utilisateur. 
On peut se protéger en faisant des verification en HTML :
Comme min, max, required, etc... Et que préciser les bons types d’input à chaque fois.
En JS :
Tester que les données du remplissage des champs ou au moment de l’envoi du formulaire et
bloquer l’envoi du formulaire si des données ne correspondent pas à ce qu’on attend.
En PHP :
Effectuer des verifications si les champs sont vides ou pas
Si il y a des espaces ou pas (trim), si l'adresse email est bien conforme ect...



Qu'est-ce que l'ajax et à quoi ça sert ?
C'est une technologie qui permet de mettre à jour le contenu d'une page Web rapidement, sans qu'elle n'est besoin de se recharger complétement.


À quoi sert le constructeur d'une classe ?
Il permet de construire un objet d'une classe.


C:\Developpement\Alkas-2022-2023\etudiants\QuentinBis\EvalJs\javascript\assets\jS\class\RechercheUser.js