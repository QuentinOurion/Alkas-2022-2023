<?php


# 1 structured query langage


# 2 on utilise la commande : USE "nom de la base de donnée"


# 3 mysqldump -u [user name] –p [password]  [database_name] [tablename] > [nom_fichier.sql]
# on l'utilise pour importer une base de donnée ou une table.


#4 mysql -u[utilisateur] -p [nom_base_de_donnees] < fichier.sql
# Ca permet d'importer un fichier ".sql" dans mysql.


#5 Une colonne contient les informations de la table, comme par exemple :
# un ID avec une clée primaire autoincrement, un Int, un varchar, une clé secondaire


#6
# create table exemple
# (
# id int(11) auto_increment primary key,
# entier int default 10,
# chaine varchar(50)
# );


#7 Une clé primaire permet de joindre des tables les unes aux autres et d'identifier un enregistrement.


#8 Pour créer une clé étrangère il faut saisir :
# foreign key (exemple_id) REFERENCES exemples (Id)
#Elle permet de joindre des tables les unes aux autres et de créer des relations entre elles


#9 Une jointure permet de recupérer les données de plusieurs tables qui ont une relations entre elle.


#10 Autant que l'on souhaite.


#11***************************************************************************


//create table voitures
//(
//    id int(11) auto_increment primary key,
//nom_voiture varchar(50)
//);
//
//insert into voitures(nom_voiture) value ('2008');
//
//
//create table marque(
//id int(11) auto_increment primary key,
//marque_voiture varchar(50),
//id_voiture int(11),
//foreign key (id_voiture) references voitures(id)
//
//);
//
//insert into marque(marque_voiture, id_voiture) value ('peugeot',4);
//
//
//select v.nom_voiture,m.marque_voiture
//from voitures v
//join marque m on v.id = m.id_voiture;
//
//
//#12*************************************************************************
//create table moteur
//(
//    id                int(11) auto_increment primary key,
//    chevaux           int,
//    id_moteur_voiture int(11),
//    foreign key (id_moteur_voiture) references voitures (id)
//);
//
//insert into moteur(chevaux, id_moteur_voiture) value (110,4);
//
//
//select concat('model : ',v.nom_voiture,', ','Marque : ',m.marque_voiture,', ','moteur : ', mot.chevaux) as resultat
//from voitures v
//join marque m on v.id = m.id_voiture
//join moteur mot on v.id = mot.id_moteur_voiture
//where v.id = 1
//
#13*****************************************************************************

//select *
//from voitures
//where nom_voiture like 'cap%';
//
//
//#***********************************REQUETTE*************************************************
//
//#2
//select distinct conversation_id
//from message
//where user_id = 10
//and date_creation between '2020-01-31' and '2021-10-11';
//
//
//#3
//select m.user_id, m.conversation_id, count(distinct u.id)
//from user u
//join message m on u.id = m.user_id
//join conversation c on c.id = m.conversation_id
//group by m.id;
//

//#4
//select *
//from message m
//join user u
//on m.user_id = u.id
//join roles r on r.id = u.roles_id
//join conversation c on c.id = m.conversation_id
//where r.nom= 'admin'
//and date_inscription between '2020-01-01' and '2020-12-31'
//and c.termine = '0';

