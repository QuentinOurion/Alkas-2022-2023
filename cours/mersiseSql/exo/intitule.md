# 1 Hospitalisation

> Nous mettons en place le suivi de l’hospitalisation des patients.
Un patient s’identifie par un numéro de sécurité sociale et se caractérise par un nom, un prénom et une adresse.
> 
> Un patient peut ou non cotiser à une mutuelle ou à plusieurs.
>
> Une mutuelle est identifiée par un code et caractérisée par un nom et une adresse.
>
>Un patient est hospitalisé un temps défini par une date d’entrée et une date de sortie prévue.
>
>Un patient peut subir plusieurs hospitalisations.
>
>Un patient est traité par un ou plusieurs médecin(s) lors de son hospitalisation et est affecté ou non à un ou plusieurs service(s) hospitalier(s).
>
>Un médecin est identifié par un numéro et caractérisé par un nom et un prénom.
>
>Une affectation est identifiée par un code et caractérisée par un libellé.
>
>Présenter le modèle conceptuel des données décrivant ce système d’information.

# 3 Centre équestre (1-2)
Les règles de gestion sont les suivantes :

* un cheval est identifié par ses caractéristiques de naissance :
  * un numéro d'enregistrement auprès de la société des courses,
  * une date,
  * une mère toujours identifiée,
  * une race,
  * une couleur,
  * un sexe,
  * un lieu de naissance
* un cheval est la propriété, à une date donnée, d'un propriétaire ou d'un ensemble de propriétaires
  regroupés en société.
* un cheval est entraîné, à une date donnée, par un entraîneur qui peut lui-même être propriétaire.
* le propriétaire (ou l'entraîneur) est identifié par un numéro, une adresse (rue, ville, code postal).
* un cheval est suivi par un vétérinaire, chargé à des dates données d'établir ses vaccinations.

Concevoir et réaliser le Modèle conceptuel des données à l’aide de votre outil de conception
préféré : une feuille un crayon, un logiciel de schématisation, ou encore un logiciel de Conception de base
de donnée

## 4 (2-2)

Pour le programme de COURSES de CHEVAUX en région parisienne d'autres éléments d'informations extraits
de la phase de recueil sont les suivants :
* il existe 6 champs de courses en région parisienne.
* il est prévu au maximum deux réunions de courses par jour (après-midi et nocturne).
* le nombre de chevaux par course est fixé au minimum à 5 chevaux et au maximum à 25 chevaux.
* Le programme des courses à établir concerne une semaine quelconque dans l'année.
* Les informations nécessaires pour chaque course sont les suivantes :
  * le numéro de la course,
  * le nombre de partant,
  * la distance,
  * le prix pour le gagnant,
  * l'heure de départ;
  * le nom de l'épreuve,
  * le type de course (trot, galop, obstacle).
* Les informations nécessaires pour un partant sont les suivantes :
  * le numéro du cheval dans la course,
  * le nom du cheval,
  * le nom du père et de la mère,
  * le nom du propriétaire,
  * le nom de l'entraîneur,
  * le nom du jockey ou du driver,
  * la place à la corde,
  * le handicap (poids ou distance),
  * les gains du cheval,
  * les couleurs du propriétaire.
* Les éléments d'information suivants ont été fournis :
  * Un jockey ou un driver peut monter plusieurs fois dans la même réunion de courses.
  * Un cheval peut réaliser plusieurs courses dans la même semaine mais pas le même jour.
  * Un cheval ne peut courir que dans un seul type de course
  * Un propriétaire ou un entraîneur peut avoir plusieurs chevaux dans la même épreuve (écurie).