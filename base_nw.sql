SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS horaire;
DROP TABLE IF EXISTS QS;
DROP TABLE IF EXISTS utilisateur;
DROP TABLE IF EXISTS donnesBancaire;
DROP TABLE IF EXISTS rayon;
DROP TABLE IF EXISTS employe;
DROP TABLE IF EXISTS uniteMesure;
DROP TABLE IF EXISTS pointRelais;
DROP TABLE IF EXISTS consommateur;
DROP TABLE IF EXISTS producteur;
DROP TABLE IF EXISTS commande;
DROP TABLE IF EXISTS parcelle;
DROP TABLE IF EXISTS horaireJour;
DROP TABLE IF EXISTS variete;
DROP TABLE IF EXISTS produit;
DROP TABLE IF EXISTS lot;
DROP TABLE IF EXISTS LDC;
DROP TABLE IF EXISTS Production;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE `horaire`(`horId` INTEGER,`horFermeture` INTEGER,`horOuverture` INTEGER,primary key(`horId`));

CREATE TABLE `QS`(`qsID` INTEGER,`Question` VARCHAR(60),primary key(`qsID`));

CREATE TABLE `utilisateur`(`utilisateurID` INTEGER,`userDateInscrip` DATE,`userDescription` VARCHAR(100),`userRepQuesSec` VARCHAR(25),`userMail` VARCHAR(25),`userNbdeTenta` INTEGER,`userMdp` VARCHAR(25),`userMailConf` BOOL,`userNom` VARCHAR(50),`userPrenom` VARCHAR(50),`userImage` VARCHAR(255),`userAdresse` VARCHAR(25),`userFacebook` VARCHAR(25),`userGoogle` VARCHAR(25),`userRole` ENUM('Consommateur','Producteur','Point Relais'),`qsID` INTEGER NOT NULL, foreign key (`qsID`) references QS(`qsID`),primary key(`utilisateurID`));

CREATE TABLE `donnesBancaire`(`bancId` INTEGER,`bancNum` VARCHAR(16),`bancDateExp` VARCHAR(5),`bancChiffreSc` VARCHAR(3),`bancTypeCarte` VARCHAR(20),`utilisateurID` INTEGER NOT NULL, foreign key (`utilisateurID`) references utilisateur(`utilisateurID`),primary key(`bancId`));

CREATE TABLE `rayon`(`rayonId` INTEGER,`rayonNom` VARCHAR(25),`rayonImage` VARCHAR(25),primary key(`rayonId`));

CREATE TABLE `employe`(`employeID` INTEGER,`employePassword` VARCHAR(25),`employeNom` VARCHAR(25),`employePrenom` VARCHAR(25),`employeLogin` VARCHAR(25),primary key(`employeID`));

CREATE TABLE `uniteMesure`(`umId` INTEGER,`umNom` VARCHAR(10),`umDescription` VARCHAR(50),primary key(`umId`));

CREATE TABLE `pointRelais`(`prID` INTEGER,`prLongitude` VARCHAR(50),`prLatitude` VARCHAR(50),`utilisateurID` INTEGER NOT NULL, foreign key (`utilisateurID`) references utilisateur(`utilisateurID`),primary key(`prID`));

CREATE TABLE `consommateur`(`consID` INTEGER,`utilisateurID` INTEGER NOT NULL, foreign key (`utilisateurID`) references utilisateur(`utilisateurID`),primary key(`consID`));

CREATE TABLE `producteur`(`producID` INTEGER,`producValidation` BOOL,`utilisateurID` INTEGER NOT NULL, foreign key (`utilisateurID`) references utilisateur(`utilisateurID`),primary key(`producID`));

CREATE TABLE `commande`(`cmdID` INTEGER,`cmdPrix` FLOAT,`cmdDetail` VARCHAR(100),`cmdDate` DATE,`cmdDateLivraison` DATE,`prID` INTEGER NOT NULL,`consID` INTEGER NOT NULL, foreign key (`prID`) references pointRelais(`prID`), foreign key (`consID`) references consommateur(`consID`),primary key(`cmdID`));

CREATE TABLE `produit`(`prodID` INTEGER,`prodNom` VARCHAR(25),`prodImage` VARCHAR(50),`rayonId` INTEGER NOT NULL, foreign key (`rayonId`) references rayon(`rayonId`),primary key(`prodID`));

CREATE TABLE `parcelle`(`parId` INTEGER,`parAdresse` VARCHAR(25),`parType` VARCHAR(25),`parLongitude` VARCHAR(25),`parLatitude` VARCHAR(25),`producID` INTEGER NOT NULL, foreign key (`producID`) references producteur(`producID`),primary key(`parId`));

CREATE TABLE `Production`(`prodID` INTEGER NOT NULL,`parId` INTEGER NOT NULL, foreign key (`prodID`) references produit(`prodID`), foreign key (`parId`) references parcelle(`parId`),primary key(`prodID`,`parId`));

CREATE TABLE `variete`(`varId` INTEGER,`varNom` VARCHAR(25),`varImage` VARCHAR(25),`prodID` INTEGER NOT NULL, foreign key (`prodID`) references produit(`prodID`),primary key(`varId`));

CREATE TABLE `horaireJour`(`libJour` VARCHAR(8),`horId` INTEGER NOT NULL,`prID` INTEGER NOT NULL, foreign key (`horId`) references horaire(`horId`), foreign key (`prID`) references pointRelais(`prID`),primary key(`horId`,`prID`));

CREATE TABLE `lot`(`lotID` INTEGER,`lotQteAcheter` INTEGER,`lotPrix` FLOAT,`lotQteIni` INTEGER,`lotPU` FLOAT,`lotDescription` VARCHAR(250),`lotDLC` DATE,`umId` INTEGER NOT NULL,`varId` INTEGER NOT NULL,`producID` INTEGER NOT NULL, foreign key (`umId`) references uniteMesure(`umId`), foreign key (`varId`) references variete(`varId`), foreign key (`producID`) references producteur(`producID`),primary key(`lotID`));

CREATE TABLE `LDC`(`qte` INTEGER,`status` ENUM('Commandé','Preparé','Livré au point relais','Desservi au client'),`cmdID` INTEGER NOT NULL,`lotID` INTEGER NOT NULL,`prID` INTEGER NOT NULL,`producID` INTEGER NOT NULL, foreign key (`cmdID`) references commande(`cmdID`), foreign key (`lotID`) references lot(`lotID`), foreign key (`prID`) references pointRelais(`prID`), foreign key (`producID`) references producteur(`producID`),primary key(`cmdID`,`lotID`,`prID`,`producID`));

 source data_nw.sql;