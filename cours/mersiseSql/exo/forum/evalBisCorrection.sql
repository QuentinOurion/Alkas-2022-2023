CREATE TABLE marque
(
    id  INT AUTO_INCREMENT NOT NULL,
    nom VARCHAR(50)        NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE voiture
(
    id        INT AUTO_INCREMENT NOT NULL,
    nom       VARCHAR(50)        NOT NULL,
    marque_id INT                NOT NULL,
    moteur_id int                not null,
    PRIMARY KEY (id),
    foreign key (moteur_id) references moteur (id),
    FOREIGN KEY (marque_id) REFERENCES marque (id)
);

CREATE TABLE moteur
(
    id      Int Auto_increment NOT NULL,
    chevaux Int                NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO marque(nom)
VALUES ('Renault'),
       ('Peugeot');

INSERT INTO voiture(nom, marque_id, moteur_id)
VALUES ('Captur', 1, 1),
       ('Clio', 1, 3),
       ('208', 2, 2),
       ('2008', 2, 3);

INSERT INTO moteur(chevaux)
VALUES ('75'),
       ('90'),
       ('110');

select v.nom, m.nom
from voiture as v
         inner join marque m on v.marque_id = m.id;

select v.nom, mo.chevaux, m.nom
from voiture v
         join marque m on v.marque_id = m.id
         join moteur mo on v.moteur_id = mo.id;

select v.id, concat('Modele : ', v.nom, ', moteur : ', mo.chevaux, 'ch, marque : ', m.nom) toto
from voiture v
         join marque m on v.marque_id = m.id
         join moteur mo on v.moteur_id = mo.id;

select v.nom
from voiture v
where v.nom like '%08%'

# voir les réponses dans "résultat online.sql" pour le 2, 3 et 4