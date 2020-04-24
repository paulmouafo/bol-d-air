#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Velo
#------------------------------------------------------------

CREATE TABLE Velo(
        id_velo   SERIAL  NOT NULL ,
        type_velo Varchar (50) NOT NULL
	,CONSTRAINT Velo_PK PRIMARY KEY (id_velo)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: type_benevole
#------------------------------------------------------------

CREATE TABLE type_benevole(
        id_type_benevole  SERIAL  NOT NULL ,
        nom_type_benevole Varchar (50) NOT NULL
	,CONSTRAINT type_benevole_PK PRIMARY KEY (id_type_benevole)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Benevole
#------------------------------------------------------------

CREATE TABLE Benevole(
        matricule_b      SERIAL  NOT NULL ,
        nom              Varchar (50) NOT NULL ,
        prenom           Varchar (50) NOT NULL ,
        adresse          Varchar (50) NOT NULL ,
        email            Varchar (50) NOT NULL ,
        poste_souhaite   Text NOT NULL ,
        permis_conduire  Bool ,
        date_naissance   Date NOT NULL ,
        id_type_benevole Int NOT NULL
	,CONSTRAINT Benevole_PK PRIMARY KEY (matricule_b)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Participant
#------------------------------------------------------------

CREATE TABLE Participant(
        matricule_p               SERIAL  NOT NULL ,
        nom                       Varchar (50) NOT NULL ,
        prenom                    Varchar (50) NOT NULL ,
        date_naiss                Date NOT NULL ,
        telephone                 Int NOT NULL ,
        sexe                      Varchar (50) NOT NULL ,
        attestation_medical_pieds Bool NOT NULL ,
        attestation_medical_velo  Bool NOT NULL ,
        attestation_medical_canoe Bool NOT NULL ,
        frais_paye                Bool NOT NULL ,
        repas_supplementaire      Int NOT NULL ,
        id_equipe                 Int NOT NULL ,
        id_equipe_etre_coequipier Int NOT NULL ,
        id_velo                   Int NOT NULL
	,CONSTRAINT Participant_PK PRIMARY KEY (matricule_p)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Course
#------------------------------------------------------------

CREATE TABLE Course(
        id_course    SERIAL  NOT NULL ,
        heure_depart Time NOT NULL ,
        lieu_depart  Varchar (50) NOT NULL ,
        lieu_arrivee Varchar (50) NOT NULL ,
        parcours     Varchar (50) NOT NULL ,
        code         Int NOT NULL
	,CONSTRAINT Course_PK PRIMARY KEY (id_course)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Type_course
#------------------------------------------------------------

CREATE TABLE Type_course(
        code      SERIAL  NOT NULL ,
        libelle   Varchar (50) NOT NULL ,
        id_equipe Int NOT NULL
	,CONSTRAINT Type_course_PK PRIMARY KEY (code)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Poste
#------------------------------------------------------------

CREATE TABLE Poste(
        id_poste              SERIAL  NOT NULL ,
        nom_poste             Varchar (50) NOT NULL ,
        description_poste     Varchar (50) NOT NULL ,
        horaires_poste        Time NOT NULL ,
        personnel_poste       Int NOT NULL ,
        localisation_poste    Text NOT NULL ,
        Equipement_necessaire Text NOT NULL ,
        id_course             Int NOT NULL
	,CONSTRAINT Poste_PK PRIMARY KEY (id_poste)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Equipe
#------------------------------------------------------------

CREATE TABLE Equipe(
        id_equipe      SERIAL  NOT NULL ,
        nom_equipe     Varchar (50) NOT NULL ,
        frais_paye     Int NOT NULL ,
        numero_dossard Int NOT NULL
	,CONSTRAINT Equipe_PK PRIMARY KEY (id_equipe)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Dossard
#------------------------------------------------------------

CREATE TABLE Dossard(
        numero_dossard Int NOT NULL ,
        id_equipe      Int NOT NULL
	,CONSTRAINT Dossard_PK PRIMARY KEY (numero_dossard)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: être_affecte
#------------------------------------------------------------

CREATE TABLE etre_affecte(
        matricule_b Int NOT NULL ,
        id_poste    Int NOT NULL
	,CONSTRAINT etre_affecte_PK PRIMARY KEY (matricule_b,id_poste)
)ENGINE=InnoDB;




ALTER TABLE Benevole
	ADD CONSTRAINT Benevole_type_benevole0_FK
	FOREIGN KEY (id_type_benevole)
	REFERENCES type_benevole(id_type_benevole);

ALTER TABLE Participant
	ADD CONSTRAINT Participant_Equipe0_FK
	FOREIGN KEY (id_equipe)
	REFERENCES Equipe(id_equipe);

ALTER TABLE Participant
	ADD CONSTRAINT Participant_Equipe1_FK
	FOREIGN KEY (id_equipe_etre_coequipier)
	REFERENCES Equipe(id_equipe);

ALTER TABLE Participant
	ADD CONSTRAINT Participant_Velo2_FK
	FOREIGN KEY (id_velo)
	REFERENCES Velo(id_velo);

ALTER TABLE Course
	ADD CONSTRAINT Course_Type_course0_FK
	FOREIGN KEY (code)
	REFERENCES Type_course(code);

ALTER TABLE Type_course
	ADD CONSTRAINT Type_course_Equipe0_FK
	FOREIGN KEY (id_equipe)
	REFERENCES Equipe(id_equipe);

ALTER TABLE Poste
	ADD CONSTRAINT Poste_Course0_FK
	FOREIGN KEY (id_course)
	REFERENCES Course(id_course);

ALTER TABLE Equipe
	ADD CONSTRAINT Equipe_Dossard0_FK
	FOREIGN KEY (numero_dossard)
	REFERENCES Dossard(numero_dossard);

ALTER TABLE Equipe 
	ADD CONSTRAINT Equipe_Dossard0_AK 
	UNIQUE (numero_dossard);

ALTER TABLE Dossard
	ADD CONSTRAINT Dossard_Equipe0_FK
	FOREIGN KEY (id_equipe)
	REFERENCES Equipe(id_equipe);

ALTER TABLE Dossard 
	ADD CONSTRAINT Dossard_Equipe0_AK 
	UNIQUE (id_equipe);

ALTER TABLE etre_affecte
	ADD CONSTRAINT etre_affecte_Benevole0_FK
	FOREIGN KEY (matricule_b)
	REFERENCES Benevole(matricule_b);

ALTER TABLE etre_affecte
	ADD CONSTRAINT etre_affecte_Poste1_FK
	FOREIGN KEY (id_poste)
	REFERENCES Poste(id_poste);
