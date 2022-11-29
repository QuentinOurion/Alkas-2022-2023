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