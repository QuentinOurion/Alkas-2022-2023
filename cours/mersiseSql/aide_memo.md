# SQL (Structured Query Language)

#### Documentation officiel https://dev.mysql.com/doc/refman/8.0/en/
#### Cours en ligne https://sql.sh/ ou https://www.w3schools.com/sql/

Lister la liste des bases de données
```sql
    show databases;
```

Création Base de donnée
```sql
    CREATE DATABASE IF NOT EXISTS `nom_de_ma_base` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
```

Utilisation d'une base
```sql
    USE `nom_de_ma_base`;
```


Création d'une table
```sql
CREATE TABLE nom_de_la_table
(
    `entier`  INT(11),
    `nom` VARCHAR(50) NOT NULL DEFAULT ""
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;
```

Liste toutes les tables
```sql
    show tables;
```

Valeur par défaut
```sql
CREATE TABLE nom_de_la_table
(
    `entier`  INT(11) not null,
    `nom` VARCHAR(50) NOT NULL DEFAULT "par defaut",
    `dateTest`  DATE  NOT NULL DEFAULT "0000-00-00",
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;
```

Création d'une table complete 
```sql
CREATE TABLE nomDeTable
(
id                  int(11) not null AUTO_INCREMENT, # on précise que id va s'autoincrémenter
chaineDeCaractere   char(50),
entier              int(11),
PRIMARY KEY (`id`) # on lui dit que id est une clé primaire
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8;
```

Affiche le contenu d'une table
```sql
 describe nom_de_la_table
```

Ajoute après coup une colonne
```sql
 alter table seconde_table add column nouveau date not null default "2022-12-12";
```

Enregistre dans un champ (colonne) uniquement
```sql
    insert into seconde_table(chaine) values ('premier enregistrement');
``` 

Enregistre dans deux champs des données
```sql
    insert into seconde_table(chaine, chaine_bis) values ('val', "val pr ma seconde chaine"); 
```

Récupére toutes les données de la table seconde_table
```sql
    select * from seconde_table
```

Récupére deux champs uniquement d'une table
```sql
    select chaine, nouveau from seconde_table;
```

Cherche l'enregistrement dont l'id est = à 1
```sql
    select * from seconde_table where id=1
```

## select option

tri par de façon ascendante ou descendante
```sql
    ORDER BY nomAttribut Asc ou Desc
```

Limiter le nombre de résultats à x
```sql
    limit x
```

Permet de regrouper un résultat en double
par exemple si on affiche la liste des villes que des personnes ont visitées alors on aura forcément plusieurs fois la même ville.
Distinct va regrouper les villes déjà visitées.
```sql
    distinct
```

Idem que distinct, mais s’utilise avec des fonctions comme count()
```sql
    group by
```

Liste de plusieurs valeurs possible
on peut mettre dans la parenthèse, des résultats attendue ou un autre select pour chercher des résultats
```sql
    where attribut in () ou not in ()
```

Sous requete qui permet de lier une table avec une autre et dans cet exemple de retrouver des enregistrements qui ont un id identique.
```sql
    where attribut.id in (
        SELECT DISTINCT id
        FROM autreTable
    )
```

Recherche par exemple dans un article, une date entre compris 1350-12-1 et 1351-12-1
```sql
    where article.date between "1350-12-1" and "1351-12-1"
```

#### Recherche un mot dans un texte

recherche ‘nomARechercher’ dans un texte
```sql
    like ‘nomARechercher’
```

mot commencant par …
```sql
    like ‘%nomARechercher’
```

Fini par
```sql
    like ‘nomARechercher%’
```

Cherche dans une phrase un mot
```sql
    like ‘%motAChercher%
```

Recherche par une expression régulière
```sql
    regexp “”
```



### Jointure (joindre une autre table)
Cours détaillé https://aymeric-auberton.fr/academie/mysql/jointure 

Type de jointure entre 2 tables qui permet de lister tous les résultats des 2 tables.

https://sql.sh/cours/jointures/inner-join 
```sql
    join maTable on maTable.id = autreTable.id
```


Type de jointure entre 2 tables qui permet de lister tous les résultats de la table de gauche (left = gauche) même s’il n’y a pas de correspondance dans la deuxième table.

https://sql.sh/cours/jointures/left-join
```sql
    left join
```

Quel que soit le résultat toutes les villes seront affichées
exemple 
```sql
    select * from ville v left join joueur j on v.id = j.id
```


Liste tous les résultats de la table de droite
On ne l'utilise généralement pas, car on préféra utiliser left join

https://sql.sh/cours/jointures/right-join
```sql
    right join
```
 
##	Fonctions sql 
https://sql.sh/fonctions/date-heure

Date actuelle et l'heure
>    now()


Année de la date choisie
>    year(date)
>

Date actuelle
> CURDATE()

Année courante
> YEAR(CURDATE())

Concaténation entre 2 chaînes de caractères
> 
>    concat(‘texte’, ‘texte’)
> 




## Clé.s étrangère.s
http://www.w3big.com/fr/sql/sql-foreignkey.html ou à la source https://dev.mysql.com/doc/refman/5.7/en/create-table-foreign-keys.html 

Association entre 2 tables et permet un contrôle d’intégrité entre elles

```sql
    FOREIGN KEY (cle_de_ma_table) REFERENCES table_associe(identifiant_de_la_table_associe)
```

Exemple lors d'une création d'une table :

```sql
    CREATE TABLE ma_table
    (
    id int NOT NULL,
    table_associe_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (table_associe_id) REFERENCES table_associe(id)
    )
```

```sql
    CREATE TABLE table_associe
    (
    id int NOT NULL,
    PRIMARY KEY (id)
    )
```

On peut ajouter une clé étrangère après coup

```sql
    ALTER TABLE ma_table ADD constraint FOREIGN KEY (maCleEtrangere) REFERENCES table_associe(sonID);
```

#### CASCADE
```sql
    ON DELETE #mettre une action “action”
    ON UPDATE #mettre une action “action”

    #action = RESTRICT | CASCADE | SET NULL
```

"ON DELETE CASCADE" Signifie que si l'enregistrement parent est supprimé, tous les enregistrements enfants sont également supprimés.
```sql
    ON DELETE CASCADE 
```

"ON UPDATE CASCADE" Cela signifie que si la clé primaire parent est modifiée, la valeur enfant changera également pour refléter cela.
```sql
    ON UPDATE CASCADE 
``` 

"ON UPDATE CASCADE ON DELETE CASCADE" Signifie que si vous UPDATE OU DELETE le parent, le changement est répercuté sur l'enfant. C'est l'équivalent des AND résultats des deux premières déclarations.
```sql
    ON UPDATE CASCADE ON DELETE CASCADE 
```

#### RESTREINDRE

"RESTRICT" signifie que toute tentative de suppression et / ou de mise à jour du parent échouera. C'est le comportement par défaut dans le cas où une action référentielle n'est pas explicitement spécifiée.
Pour un ON DELETE ou ON UPDATE qui n'est pas spécifié, l'action par défaut est toujours RESTRICT.
```sql
    RESTRICT 
```

"NULL" Supprimez ou mettez à jour la ligne de la table parent et définissez-la ou les colonnes de clé étrangère de la table enfant sur NULL.
```sql
    SET NULL
```

Suppression d’une clé étrangère
```sql
    ALTER TABLE ma_table DROP FOREIGN KEY id_table_associe
```

## Index
Un index, dans une base de données se base sur le même principe qu’un index dans un livre. Avec un index placé sur une ou plusieurs colonnes le système d’une base de données peut rechercher les données d’abord sur l’index et s’il trouve ce qu’il cherche il saura plus rapidement où se trouve les enregistrements concernés.

>  "key" est un alias de "index"

Dans son create table on peut ajouter aussi des index ce qui va accélérer les recherches ou les jointures
```sql
    key(nom_de_la_colonne)
```

On peut rendre les clés uniques comme
```sql
    ALTER TABLE `nom_table`  ADD KEY `nom_index` (`nom_de_la_colonne`);
```

# Importation / exportation d'un fichier SQL
### Importation
> mysql -u root -proot backoffice < mds.sql

** si tables ne marche pas à l'import ou clé étrangère **

>    mysql -u root -pmotDePasse NomDeBase

>    use "nom de la db"

Puis taper

>    source nomDuFichier.sql	
>

Afficher toutes les commandes possibles
> mysql --help


### Exportation
Exportation simple

>    mysqldump -u root -pmotDePasse -h ipServeur --databases NomDeBase > nomFichierExportation.sql

Exportation plus complexe
>    mysqldump -u root -pmotDePasse -h ipServeur --routines --events --triggers -d --databases NomDeBase > nomFichierExportation.sql

Afficher toutes les commandes possibles
> mysqldump --help