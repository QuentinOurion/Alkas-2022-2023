# SQL (Structured Query Language)

#### Documentation officiel https://dev.mysql.com/doc/refman/8.0/en/
#### Cours en ligne https://sql.sh/ ou https://www.w3schools.com/sql/

Lister la liste des bases de données
> show databases;
>

Création Base de donnée
>CREATE DATABASE IF NOT EXISTS `nom_de_ma_base` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
>

Utilisation d'une base
> USE `nom_de_ma_base`;
>


Création d'une table
```
CREATE TABLE nom_de_la_table
(
    `entier`  INT(11),
    `nom` VARCHAR(50) NOT NULL DEFAULT ""
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;
```

Liste toutes les tables
> show tables;


Valeur par défaut
```
CREATE TABLE nom_de_la_table
(
    `entier`  INT(11) not null,
    `nom` VARCHAR(50) NOT NULL DEFAULT "par defaut",
    `dateTest`  DATE  NOT NULL DEFAULT "0000-00-00",
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;
```

Création d'une table complete 
``` 
CREATE TABLE nomDeTable
(
id                  int(11) not null AUTO_INCREMENT, # on précise que id va s'autoincrémenter
chaineDeCaractere   char(50),
entier              int(11),
PRIMARY KEY (`id`) # on lui dit que id est une clé primaire
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;
```

> describe nom_de_la_table

Affiche le contenu d'une table

> alter table seconde_table add column nouveau date not null default "2022-12-12";
>
Ajoute après coup une colonne  

> insert into seconde_table(chaine) values ('premier enregistrem
ent');
> 
Enregistre dans un champ (colonne) uniquement 

> insert into seconde_table(chaine, chaine_bis) values ('val', "val pr ma seconde chaine"); 
>
Enregistre dans deux champs des données

> select * from seconde_table
> 
Récupére toutes les données de la table seconde_table

> select chaine, nouveau from seconde_table;
> 
Récupére deux champs uniquement d'une table

> select * from seconde_table where id=1

Cherche l'enregistrement dont l'id est = à 1

## select option

>    ORDER BY nomAttribut Asc ou Desc
tri par de façon ascendante ou descendante

>    limit x
Limite le nombre de résultats

>	join maTable on maTable.id = autreTable.id
> 
Type de jointure entre 2 tables qui permet de lister tous les résultats des 2 tables

>	left join
> 
Type de jointure entre 2 tables qui permet de lister tous les résultats de la table de gauche (left = gauche) même s’il n’y a pas de correspondance dans la deuxième table.

	exemple 
	select * from ville v left join joueur j on v.id = j.id

Quel que soit le résultat toutes les villes seront affichées

>    right join
> 
Liste tous les résultats de la table de droite

>    distinct
> 
Permet de regrouper un résultat en double
par exemple si on affiche la liste des villes que des personnes ont visitées alors on aura forcément plusieurs fois la même ville.
Distinct va regrouper les villes déjà visitées.

>    group by
> 
idem que distinct mais s’utilise avec des fonctions comme count()

>    where attribut in () ou not in ()
> 
Liste de plusieurs valeurs possible
on peut mettre dans la parenthèse, des résultats attendue ou un autre select pour chercher des résultats

>    where attribut.id in (
> SELECT DISTINCT id
FROM autreTable
)

Sous requete qui permet de lier une table avec une autre et dans cet exemple de retrouver des enregistrements qui ont un id identique.

>    like ‘nomARechercher’
> 
recherche ‘nomARechercher’ dans un texte

>    ‘%nomARechercher’
> 
Commence par …

>    ‘nomARechercher%’

Fini par

>    ‘%motAChercher%

Cherche dans une phrase un mot

>	regexp “”

Recherche par une expression régulière
 
> where article.date between "1350-12-1" and "1351-12-1"

Recherche dans un article, une date entre 1350-12-1 et 1351-12-1

##	Fonctions sql 
https://sql.sh/fonctions/date-heure

>    now()
> 
Date actuelle et l'heure

>    year(date)
> 
Année de la date choisie

> CURDATE()

Date actuelle

> YEAR(CURDATE())

>    concat(‘texte’, ‘texte’)
> 
Concaténation entre 2 chaînes de caractères

## Clé étrangère
http://www.w3big.com/fr/sql/sql-foreignkey.html ou à la source https://dev.mysql.com/doc/refman/5.7/en/create-table-foreign-keys.html 

Association entre 2 tables et permet un contrôle d’intégrité entre elles

>    FOREIGN KEY (cle_de_ma_table) REFERENCES table_associe(identifiant_de_la_table_associe)
    
>    CREATE TABLE ma_table
    (
    id int NOT NULL,
    table_associe_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (table_associe_id) REFERENCES table_associe(id)
    )

>    CREATE TABLE table_associe
    (
    id int NOT NULL,
    PRIMARY KEY (id),
    )

On peut ajouter une clé étrangère après coup

>    ALTER TABLE nomTable ADD constraint FOREIGN KEY (maCleEtrangere) REFERENCES nomTableauARelier(sonID);

>    ON DELETE “action”
>    ON UPDATE “action”

>    action = RESTRICT | CASCADE | SET NULL


#### CASCADE
>    ON DELETE CASCADE 
> 
Signifie que si l'enregistrement parent est supprimé, tous les enregistrements enfants sont également supprimés.

>    ON UPDATE CASCADE 
> 
Cela signifie que si la clé primaire parent est modifiée, la valeur enfant changera également pour refléter cela.

>    ON UPDATE CASCADE ON DELETE CASCADE 
> 
Signifie que si vous UPDATE OU DELETE le parent, le changement est répercuté sur l'enfant. C'est l'équivalent des AND résultats des deux premières déclarations.

#### RESTREINDRE

>    RESTRICT 
> 
signifie que toute tentative de suppression et / ou de mise à jour du parent échouera. C'est le comportement par défaut dans le cas où une action référentielle n'est pas explicitement spécifiée.
Pour un ON DELETE ou ON UPDATE qui n'est pas spécifié, l'action par défaut est toujours RESTRICT.

>    SET NULL
> 
Supprimez ou mettez à jour la ligne de la table parent et définissez-la ou les colonnes de clé étrangère de la table enfant sur NULL.

#
>    ALTER TABLE ma_table DROP FOREIGN KEY id_table_associe
Suppression d’une clé étrangère


>	Index (key)
> 
Dans son create table on peut ajouter aussi des index ce qui va accélérer les recherches ou les jointures 
		key(nomDeLaColonnne) 

On peut rendre les clés uniques comme
>	ALTER TABLE `nomDeSaTable`  ADD KEY `nomUniqueQuiSertARien` (`nomDeLaColonnne`);

# Importation / exportation d'un fichier SQL
### Importation
> mysql -u root -proot backoffice < mds.sql

** si tables ne marche pas à l'import ou clé étrangère **

>    mysql -u root -pmotDePasse NomDeBase

>    use "nom de la db"

Puis taper

>    source nomDuFichier.sql	
> 

> mysql --help
> 
Afficher toutes les commandes possibles

### Exportation
>    mysqldump -u root -pmotDePasse -h ipServeur --databases NomDeBase > nomFichierExportation.sql
>
Exportation simple 

>    mysqldump -u root -pmotDePasse -h ipServeur --routines --events --triggers -d --databases NomDeBase > nomFichierExportation.sql
>  
Exportation plus complexe

> mysqldump --help 
> 
Afficher toutes les commandes possibles