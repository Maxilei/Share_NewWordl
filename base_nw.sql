CREATE TABLE `lot`(`lotID` INTEGER,`lotQteAcheter` INTEGER,`lotPrix` INTEGER,`lotQteIni` INTEGER,`lotPrixKg` INTEGER,primary key(`lotID`));

CREATE TABLE `horaire`(`numerohoraire` INTEGER,`horJours` VARCHAR(8),`horFermeture` INTEGER,`horOuverture` INTEGER,primary key(`numerohoraire`));

CREATE TABLE `QS`(`qsID` INTEGER,`Question` VARCHAR(60),primary key(`qsID`));

CREATE TABLE `utilisateur`(`utilisateurID` INTEGER,`userDateInscrip` DATE,`userDescription` VARCHAR(100),`userRepQuesSec` VARCHAR(25),`userMail` VARCHAR(25),`userNbdeTenta` INTEGER,`userMdp` VARCHAR(25),`userMailConf` BOOL,`userNom` VARCHAR(25),`userPrenom` VARCHAR(25),`userImage` VARCHAR(25),`userAdresse` VARCHAR(25),`userFacebook` VARCHAR(25),`userGoogle` VARCHAR(25),`userRole` VARCHAR(25),`qsID` INTEGER NOT NULL, foreign key (`qsID`) references QS(`qsID`),primary key(`utilisateurID`));

CREATE TABLE `donnesBancaire`(`bancId` INTEGER,`bancNum` VARCHAR(16),`bancDateExp` VARCHAR(5),`bancChiffreSc` VARCHAR(3),`bancTypeCarte` VARCHAR(20),`utilisateurID` INTEGER NOT NULL, foreign key (`utilisateurID`) references utilisateur(`utilisateurID`),primary key(`bancId`));

CREATE TABLE `rayon`(`rayonId` INTEGER,`rayonNom` VARCHAR(25),`rayonImage` VARCHAR(25),primary key(`rayonId`));

CREATE TABLE `employe`(`employeID` INTEGER,`employePassword` VARCHAR(25),`employeNom` VARCHAR(25),`employePrenom` VARCHAR(25),`employeLogin` VARCHAR(25),primary key(`employeID`));

CREATE TABLE `pointRelais`(`prID` INTEGER,`prLongitude` VARCHAR(50),`prLatitude` VARCHAR(50),`numerohoraire` INTEGER NOT NULL,`utilisateurID` INTEGER NOT NULL, foreign key (`numerohoraire`) references horaire(`numerohoraire`), foreign key (`utilisateurID`) references utilisateur(`utilisateurID`),primary key(`prID`));

CREATE TABLE `consommateur`(`consID` INTEGER,`utilisateurID` INTEGER NOT NULL, foreign key (`utilisateurID`) references utilisateur(`utilisateurID`),primary key(`consID`));

CREATE TABLE `producteur`(`producID` INTEGER,`producValidation` BOOL,`utilisateurID` INTEGER NOT NULL, foreign key (`utilisateurID`) references utilisateur(`utilisateurID`),primary key(`producID`));

CREATE TABLE `commande`(`cmdID` INTEGER,`cmdPrix` INTEGER,`cmdDateEnvoie` DATETIME,`cmdDetail` VARCHAR(100),`cmdDate` DATE,`prID` INTEGER NOT NULL,`consID` INTEGER NOT NULL, foreign key (`prID`) references pointRelais(`prID`), foreign key (`consID`) references consommateur(`consID`),primary key(`cmdID`));

CREATE TABLE `LDC`(`qte` INTEGER,`cmdID` INTEGER NOT NULL,`lotID` INTEGER NOT NULL,`prID` INTEGER NOT NULL,`producID` INTEGER NOT NULL, foreign key (`cmdID`) references commande(`cmdID`), foreign key (`lotID`) references lot(`lotID`), foreign key (`prID`) references pointRelais(`prID`), foreign key (`producID`) references producteur(`producID`),primary key(`cmdID`,`lotID`,`prID`,`producID`));

CREATE TABLE `parcelle`(`parId` INTEGER,`parAdresse` VARCHAR(25),`parType` VARCHAR(25),`parLongitude` VARCHAR(25),`parLatitude` VARCHAR(25),`producID` INTEGER NOT NULL, foreign key (`producID`) references producteur(`producID`),primary key(`parId`));

CREATE TABLE `categorie`(`categId` INTEGER,`categNom` VARCHAR(25),`categImage` VARCHAR(25),`rayonId` INTEGER NOT NULL, foreign key (`rayonId`) references rayon(`rayonId`),primary key(`categId`));

CREATE TABLE `variete`(`varId` INTEGER,`varNom` VARCHAR(25),`varImage` VARCHAR(25),`categId` INTEGER NOT NULL, foreign key (`categId`) references categorie(`categId`),primary key(`varId`));

CREATE TABLE `produit`(`prodID` INTEGER,`prodNom` VARCHAR(25),`prodDateExp` DATE,`prodDescription` VARCHAR(100),`prodImage` VARCHAR(50),`prodUM` VARCHAR(10),`varId` INTEGER NOT NULL, foreign key (`varId`) references variete(`varId`),primary key(`prodID`));

CREATE TABLE `prod`(`prodID` INTEGER NOT NULL,`producID` INTEGER NOT NULL, foreign key (`prodID`) references produit(`prodID`), foreign key (`producID`) references producteur(`producID`),primary key(`prodID`,`producID`));

CREATE TABLE `Production`(`prodID` INTEGER NOT NULL,`parId` INTEGER NOT NULL, foreign key (`prodID`) references produit(`prodID`), foreign key (`parId`) references parcelle(`parId`),primary key(`prodID`,`parId`));
