#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: proprietaire
#------------------------------------------------------------

CREATE TABLE proprietaire(
        id_proprio Int NOT NULL ,
        nom        Varchar (50) NOT NULL ,
        prenom     Varchar (50) NOT NULL ,
        adr1       Varchar (255) NOT NULL ,
        adr2       Varchar (255) ,
        cp         Char (5) NOT NULL ,
        ville      Varchar (255) NOT NULL ,
        tel1       Char (10) NOT NULL ,
        tel2       Char (10) ,
        email      Varchar (255) ,
        ca_cumule  Float NOT NULL
	,CONSTRAINT proprietaire_PK PRIMARY KEY (id_proprio)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: locataire
#------------------------------------------------------------

CREATE TABLE locataire(
        num            Int NOT NULL ,
        nom            Varchar (50) NOT NULL ,
        prenom         Varchar (50) NOT NULL ,
        adr1           Varchar (255) NOT NULL ,
        adr2           Varchar (255) ,
        cp             Char (5) NOT NULL ,
        ville          Varchar (255) NOT NULL ,
        tel1           Char (10) NOT NULL ,
        tel2           Char (10) ,
        emaillocataire Varchar (255)
	,CONSTRAINT locataire_PK PRIMARY KEY (num)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tarif
#------------------------------------------------------------

CREATE TABLE tarif(
        codetarif Int NOT NULL ,
        prixsemHS Float NOT NULL ,
        prixsemBS Float NOT NULL
	,CONSTRAINT tarif_PK PRIMARY KEY (codetarif)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: appartement
#------------------------------------------------------------

CREATE TABLE appartement(
        numloc      Int NOT NULL ,
        categorie   Int NOT NULL ,
        type        Float NOT NULL ,
        nbpersonnes Int NOT NULL ,
        adr         Varchar (255) NOT NULL ,
        photo       Varchar (255) ,
        equipements Longtext ,
        id_proprio  Int NOT NULL ,
        codetarif   Int NOT NULL
	,CONSTRAINT appartement_PK PRIMARY KEY (numloc)

	,CONSTRAINT appartement_proprietaire_FK FOREIGN KEY (id_proprio) REFERENCES proprietaire(id_proprio)
	,CONSTRAINT appartement_tarif0_FK FOREIGN KEY (codetarif) REFERENCES tarif(codetarif)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contrat
#------------------------------------------------------------

CREATE TABLE contrat(
        numcontrat   Int NOT NULL ,
        etat         Int NOT NULL COMMENT "Etat : 1 = réservé, 2 = confirmé, 3 = soldé"  ,
        datecreation Date NOT NULL ,
        datedebut    Date NOT NULL ,
        datefin      Date NOT NULL ,
        id_proprio   Int NOT NULL ,
        numloc       Int NOT NULL ,
        codetarif    Int NOT NULL ,
        num          Int NOT NULL
	,CONSTRAINT contrat_PK PRIMARY KEY (numcontrat)

	,CONSTRAINT contrat_proprietaire_FK FOREIGN KEY (id_proprio) REFERENCES proprietaire(id_proprio)
	,CONSTRAINT contrat_appartement0_FK FOREIGN KEY (numloc) REFERENCES appartement(numloc)
	,CONSTRAINT contrat_tarif1_FK FOREIGN KEY (codetarif) REFERENCES tarif(codetarif)
	,CONSTRAINT contrat_locataire2_FK FOREIGN KEY (num) REFERENCES locataire(num)
)ENGINE=InnoDB;

