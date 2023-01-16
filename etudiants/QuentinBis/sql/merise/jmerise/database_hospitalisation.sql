#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: patient
#------------------------------------------------------------

CREATE TABLE patient(
        id          Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        prenom      Varchar (50) NOT NULL ,
        adresse     Varchar (50) NOT NULL ,
        numero_secu Int NOT NULL
	,CONSTRAINT patient_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: mutuel
#------------------------------------------------------------

CREATE TABLE mutuel(
        id      Int  Auto_increment  NOT NULL ,
        code    Varchar (10) NOT NULL ,
        nom     Varchar (50) NOT NULL ,
        adresse Varchar (50) NOT NULL
	,CONSTRAINT mutuel_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: hospitalisation
#------------------------------------------------------------

CREATE TABLE hospitalisation(
        id  Int  Auto_increment  NOT NULL ,
        nom Varchar (25550) NOT NULL
	,CONSTRAINT hospitalisation_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: medecin
#------------------------------------------------------------

CREATE TABLE medecin(
        id     Int  Auto_increment  NOT NULL ,
        nom    Varchar (50) NOT NULL ,
        prenom Varchar (50) NOT NULL ,
        numero Int NOT NULL
	,CONSTRAINT medecin_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: affectation
#------------------------------------------------------------

CREATE TABLE affectation(
        code        Int  Auto_increment  NOT NULL ,
        libelle     Varchar (255) NOT NULL ,
        date_entree Datetime NOT NULL ,
        date_sortie Datetime NOT NULL ,
        id          Int NOT NULL
	,CONSTRAINT affectation_PK PRIMARY KEY (code)

	,CONSTRAINT affectation_patient_FK FOREIGN KEY (id) REFERENCES patient(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: cotise
#------------------------------------------------------------

CREATE TABLE cotise(
        id         Int NOT NULL ,
        id_patient Int NOT NULL
	,CONSTRAINT cotise_PK PRIMARY KEY (id,id_patient)

	,CONSTRAINT cotise_mutuel_FK FOREIGN KEY (id) REFERENCES mutuel(id)
	,CONSTRAINT cotise_patient0_FK FOREIGN KEY (id_patient) REFERENCES patient(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: traiter
#------------------------------------------------------------

CREATE TABLE traiter(
        id   Int NOT NULL ,
        code Int NOT NULL
	,CONSTRAINT traiter_PK PRIMARY KEY (id,code)

	,CONSTRAINT traiter_medecin_FK FOREIGN KEY (id) REFERENCES medecin(id)
	,CONSTRAINT traiter_affectation0_FK FOREIGN KEY (code) REFERENCES affectation(code)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: affecter
#------------------------------------------------------------

CREATE TABLE affecter(
        id   Int NOT NULL ,
        code Int NOT NULL
	,CONSTRAINT affecter_PK PRIMARY KEY (id,code)

	,CONSTRAINT affecter_hospitalisation_FK FOREIGN KEY (id) REFERENCES hospitalisation(id)
	,CONSTRAINT affecter_affectation0_FK FOREIGN KEY (code) REFERENCES affectation(code)
)ENGINE=InnoDB;

