CREATE TABLE `ville`
(
    `id`  INT         NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`id`)
);

# une personne a forcement une ville donc on crée une clé étrange pour lier une personne à une ville
CREATE TABLE `personne_avec_une_ville`
(
    `id`       INT         NOT NULL AUTO_INCREMENT,
    `ville_id` INT         NOT NULL,
    `prenom`   VARCHAR(10) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN key (`ville_id`) REFERENCES ville (id)
);

insert into ville (nom)
VALUES ('mtp'),
       ('nimes'),
       ('sete');

insert INTO personne_avec_une_ville (prenom, ville_id)
VALUES ('lo', 1),
       ('thomas', 3),
       ('regis', 1),
       ('thibault', 2),
       ('gui', 3),
       ('antho', 1),
       ('quentin', 3);


#
SELECT personne_avec_une_ville.prenom, ville.nom
        FROM `personne_avec_une_ville`
        join ville on ville.id = personne_avec_une_ville.ville_id
        ORDER by ville.nom asc, personne_avec_une_ville.prenom asc;

# la même requête avec alias
SELECT pv.prenom, v.nom
FROM `personne_avec_une_ville` pv
         join ville v on v.id = pv.ville_id

where pv.id = 2;


### dans le cadre d'une relation n et n entre des personnes et des villes
CREATE TABLE `personne_avec_plusieurs_ville`
(
    `id`     INT         NOT NULL AUTO_INCREMENT,
    `prenom` VARCHAR(10) NOT NULL,
    PRIMARY KEY (`id`)
);

# on droit créer une table intermédiaire qui aura les informations des personnes et des villes
CREATE TABLE `habite`
(
    `ville_id`                         INT NOT NULL,
    `personne_avec_plusieurs_ville_id` INT NOT NULL,
    FOREIGN key (`ville_id`) REFERENCES ville (id),
    FOREIGN key (`personne_avec_plusieurs_ville_id`) REFERENCES personne_avec_plusieurs_ville (id)
);

insert INTO personne_avec_plusieurs_ville (prenom)
VALUES ('lo'),
       ('thomas'),
       ('regis'),
       ('thibault'),
       ('gui'),
       ('antho'),
       ('quentin');

insert into habite (ville_id, personne_avec_plusieurs_ville_id)
VALUES (1, 1),
       (2, 1),
       (3, 2),
       (2, 2);