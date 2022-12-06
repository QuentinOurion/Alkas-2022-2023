# Eval bis
1. Que veut dire l'acronyme sql ? 
2. Comment sélectionne-t-on une base de donnée en ligne de commande ?
3. Comment faire un dump en ligne de commande et à quoi sert-il ?
4. Comment faire une importation en ligne de commande et à quoi ça sert ?
5. Qu'est-ce qu'une colonne et que peut-elle dans une utilisation basique comporter à l'intérieur en donnant 4 exemples ?
6. Compléter la création de cette table pour qu'elle est une clé primaire et qui s'autoincrémente, une colonne de type entier et a pour valeur par défaut 10, une chaine de caractère de taille 50
```sql
CREATE TABLE nom_de_la_table
(
);
```
7. A quoi sert une clé primaire et quelle est son but ?
8. Comment créer une clé étrangère et quelle est son but ?
9. à quoi sert de faire des jointures (normale)?
10. Combien peut-on faire de jointure dans une requête ?
11. Créez deux tables, une table voiture (à un nom : captur, clio, 208, 2008) puis une marque (comporte un nom : renault et peugeot)
   Créez à partir de cette table 4 voitures et afficher les noms des voitures et leurs marques
12. Créez une table moteur (comporte des chevaux : 75, 90, 110) et on voudra pouvoir afficher dans un seul champ : le nom voiture de la voiture Captur, son moteur et la marque 
Créez la requête 

Exemple attendu :
"Modele : Captur, moteur : 90ch, marque : Renault"

13. Créez une requête qui permet de chercher un modèle précis 

# Voir le résultat dans le dossier resultBis (sans regarder la solution dans la première évaluation) 
2. Afficher les n° de conversations auxquelles a participé l'utilisateur "10" entre le '2020-1-31' et le '2021-10-11'
3. Liste des users avec le total des msg écrits par conversation
4. Afficher les messages écrits par des admins inscrits en 2020 dans une conversation non terminée