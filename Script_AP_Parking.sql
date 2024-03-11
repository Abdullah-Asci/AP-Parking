/*------------------------Tables-------------------------*/
drop table if exists UTILISATEUR;
drop table if exists PLACE;
drop table if exists RESERVATION;

CREATE TABLE UTILISATEUR(
   Num_Util SMALLINT,
   Nom_Util VARCHAR(25),
   Prenom_Util VARCHAR(25),
   Plaque_Imma VARCHAR(10),
   Status Varchar(20),
   Num_D_Attente SMALLINT,
   PRIMARY KEY(Num_Util)
);

CREATE TABLE PLACE(
   Num_place SMALLINT,
   PRIMARY KEY(Num_place)
);

CREATE TABLE RESERVATION(
   Num_Reserv SMALLINT,
   Deb_Reserv DATE,
   Fin_Reserv DATE,
   Num_Util SMALLINT NOT NULL,
   Num_place SMALLINT NOT NULL,
   PRIMARY KEY(Num_Reserv),
   UNIQUE(Num_place),
   FOREIGN KEY(Num_Util) REFERENCES UTILISATEUR(Num_Util),
   FOREIGN KEY(Num_place) REFERENCES PLACE(Num_place)
);
