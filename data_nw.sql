insert into QS values(1,"Quel le nom de votre animal de compagnie");
insert into QS values(2,"Quel est le nom de votre collège");
insert into QS values(3,"Votre jeu vidéo favorie");
insert into QS values(4,"Le nom de votre meilleur ami(e)");
insert into QS values(5,"Le nom de jeune fille de votre mère");
insert into QS values(6,"Votre ville de naissance");

insert into utilisateur values(1,"2013-08-21","","Paris","user1@gmail.com",0,"psw1",1,"Krouger","Andy","","8 rue du bac","","","Prod",6);
insert into utilisateur values(2,"2014-01-13","","WoW","user2@gmail.com",0,"psw2",1,"Helmouth","Cassandra","","10 avenue du colonel moutarde","","","Prod",3);
insert into utilisateur values(3,"2015-09-19","","Rocher du dragon","user3@gmail.com",0,"psw3",1,"Marcmoud","Rachid","","1945 boulevard d'auschwitz","","","Cons",2);
insert into utilisateur values(4,"2015-12-21","","Gritando","user4@gmail.com",0,"psw4",1,"Rostain","Henry","","5 rue de l'avenir","","","Cons",5);
insert into utilisateur values(5,"2016-05-19","","Lyon","user5@gmail.com",0,"psw5",1,"Hardison","Peterson","","404 rue des introuvables","","","Prod",6);
insert into utilisateur values(6,"2017-02-02","","League of legends","user6@gmail.com",0,"psw6",1,"Richard","Prince","","105 rue des macarons","","","Cons",3);
insert into utilisateur values(7,"2018-01-02","","Marseille","user7@gmail.com",0,"psw7",1,"Stanford","William","","123 rue de l'algerie","","","PtRl",6);


insert into donnesBancaire values(1,"1234567898745623","02/19","179","MasterCard",3);
insert into donnesBancaire values(1,"1234567898765432","08/19","951","MasterCard",4);
insert into donnesBancaire values(1,"9876543212345678","12/18","753","VPay",6);
insert into donnesBancaire values(1,"9873216548527419","06/18","268","VPay",1);
insert into donnesBancaire values(1,"1472583696385274","05/19","831","MasterCard",2);
insert into donnesBancaire values(1,"9638527414566542","09/18","167","MasterCard",7);
insert into donnesBancaire values(1,"9517384265789135","12/18","943","MasterCard",5);

insert into producteur values(1,1,1);
insert into producteur values(2,1,2);
insert into producteur values(3,1,5);

insert into consommateur values(1,3);
insert into consommateur values(2,4);
insert into consommateur values(3,6);

insert into horaire values(1,10,18);
insert into horaire values(2,10,17);
insert into horaire values(3,11,19);
insert into horaire values(4,13,17);
insert into horaire values(5,13,16);

insert into pointRelais values(1,"2°20′55″ Est","48°51′12″ Nord",7);

insert into horaireJour values("Lundi",1,1);
insert into horaireJour values("Mardi",2,1);
insert into horaireJour values("Mercredi",3,1);
insert into horaireJour values("Jeudi",4,1);
insert into horaireJour values("Vendredi",5,1);

insert into commande values(1,19.45,"Patate , Tomate","2017-08-02 18:00:00",1,1);
insert into commande values(2,60,20,"Patate , Carotte , Cougette , Fraise , Pomme","2017-08-15",1,2);
insert into commande values(3,34,95,"Chou , Poire , Abricot , Pêche","2017-11-02",1,2);
insert into commande values(4,45,60,"Tomate , Poivron , Courgette , Celeris","2018-01-06",1,3);
insert into commande values(5,5.50,"Pomme , Banane","2018-02-13",1,1);
insert into commande values(6,74.35,"Poivre , Epaule de boeuf , Loup , Goyave","2018-05-04",1,3);

insert into parcelle values(1,"8 rue des moulins","BIO","4°28′59″ Ouest","48°23′59″ Nord",1);
insert into parcelle values(2,"145 chemin des deportes","Traditionnel","5°26′59″ Est","43°31′41″ Nord",2);
insert into parcelle values(3,"60 chemin du pas","Modere","1°26′37″ Est","43°36′15″ Nord",3);

insert into rayon values(1,"Viande","");
insert into rayon values(2,"Poisson","");
insert into rayon values(3,"Fruit & Legume","");

insert into produit values(1,"Boeuf","",1);
insert into produit values(2,"Cochon","",1);
insert into produit values(3,"Roche","",2);
insert into produit values(4,"Mer","",2);
insert into produit values(5,"Tomate","",3);
insert into produit values(6,"Pomme de terre","",3);

insert into variete values(1,"Epaule","",1);
insert into variete values(2,"Entrecôte","",1);
insert into variete values(3,"Lard","",2);
insert into variete values(4,"Langue","",2);
insert into variete values(5,"Rascasse","",3);
insert into variete values(6,"Saran","",3);
insert into variete values(7,"Requin","",4);
insert into variete values(8,"Thon","",4);
insert into variete values(9,"Coeur de boeuf","",5);
insert into variete values(10,"Grappe","",5);
insert into variete values(11,"Belle de fontenay","",6);
insert into variete values(12,"Vitelotte","",6);

insert into uniteMesure values(1,"M","metre");
insert into uniteMesure values(2,"L","litre");
insert into uniteMesure values(3,"Kg","kilo");
insert into uniteMesure values(4,"Caisse","caisse de x");

insert into production values(1,2);
insert into production values(5,1);
insert into production values(6,3);

insert into employe values(1,"admin","admin","admin","admin");

insert into lot values(1,0,100,50,2,"Tomate coeur de boeuf","2017-09-01",3,9,3);
insert into lot values(2,0,150,100,1.5,"Patate Vitelotte","2018-01-08",3,12,1);

insert into LDC values(10,"Commandé",1,1,1,3);
insert into LDC values(10,"Commandé",1,2,1,1);