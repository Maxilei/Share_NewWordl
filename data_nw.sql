insert into QS values(1,"Quel le nom de votre animal de compagnie");
insert into QS values(2,"Quel est le nom de votre college");
insert into QS values(3,"Votre jeu video favorie");
insert into QS values(4,"Le nom de votre meilleur ami(e)");
insert into QS values(5,"Le nom de jeune fille de votre mere");
insert into QS values(6,"Votre ville de naissance");

insert into utilisateur values(1,"2013-08-21","","Paris","user1@gmail.com",0,"psw1",1,"Krouger","Andy","","8 rue du bac","","","Producteur",6);
insert into utilisateur values(2,"2014-01-13","","WoW","user2@gmail.com",0,"psw2",1,"Helmouth","Cassandra","","10 avenue du colonel moutarde","","","Producteur",3);
insert into utilisateur values(3,"2015-09-19","","Rocher du dragon","user3@gmail.com",0,"psw3",1,"Chalas","Paul","","1945 boulevard d'auschwitz","","","Consommateur",2);
insert into utilisateur values(4,"2015-12-21","","Gritando","user4@gmail.com",0,"psw4",1,"Rostain","Henry","","5 rue de l'avenir","","","Consommateur",5);
insert into utilisateur values(5,"2016-05-19","","Lyon","user5@gmail.com",0,"psw5",1,"Hardison","Peterson","","404 rue des introuvables","","","Producteur",6);
insert into utilisateur values(6,"2017-02-02","","League of legends","user6@gmail.com",0,"psw6",1,"Richard","Prince","","105 rue des macarons","","","Consommateur",3);
insert into utilisateur values(7,"2018-01-02","","Marseille","user7@gmail.com",0,"psw7",1,"Stanford","William","","123 rue de l'algerie","","","PtRl",6);


insert into donnesBancaire values(1,"1234567898745623","02/19","179","MasterCard",3);
insert into donnesBancaire values(2,"1234567898765432","08/19","951","MasterCard",4);
insert into donnesBancaire values(3,"9876543212345678","12/18","753","VPay",6);
insert into donnesBancaire values(4,"9873216548527419","06/18","268","VPay",1);
insert into donnesBancaire values(5,"1472583696385274","05/19","831","MasterCard",2);
insert into donnesBancaire values(6,"9638527414566542","09/18","167","MasterCard",7);
insert into donnesBancaire values(7,"9517384265789135","12/18","943","MasterCard",5);

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

insert into pointRelais values(1,"2°20'55'' Est","48°51'12'' Nord",7);

insert into horaireJour values("Lundi",1,1);
insert into horaireJour values("Mardi",2,1);
insert into horaireJour values("Mercredi",3,1);
insert into horaireJour values("Jeudi",4,1);
insert into horaireJour values("Vendredi",5,1);

insert into commande values(1,19.45,"Patate , Tomate","2017-03-27",1,1);
insert into commande values(2,60.20,"Patate , Carotte , Cougette , Fraise , Pomme","2018-03-27",1,2);
insert into commande values(3,34.95,"Chou , Poire , Abricot , Pêche","2017-03-27",1,2);
insert into commande values(4,45.60,"Tomate , Poivron , Courgette , Celeris","2017-03-27",1,3);
insert into commande values(5,5.50,"Pomme , Banane","2018-03-27",1,1);
insert into commande values(6,74.35,"Poivre , Epaule de boeuf , Loup , Goyave","2018-03-27",1,3);

insert into parcelle values(1,"8 rue des moulins","BIO","4°28'59'' Ouest","48°23'59'' Nord",1);
insert into parcelle values(2,"145 chemin des deportes","Traditionnel","5°26'59'' Est","43°31'41'' Nord",2);
insert into parcelle values(3,"60 chemin du pas","Modere","1°26'37'' Est","43°36'15'' Nord",3);

insert into rayon values(1,"Viande","",1);
insert into rayon values(2,"Poisson","",1);
insert into rayon values(3,"Fruit & Legume","",1);

insert into produit values(1,"Boeuf","",1,1);
insert into produit values(2,"Cochon","",1,1);
insert into produit values(3,"Roche","",1,2);
insert into produit values(4,"Mer","",1,2);
insert into produit values(5,"Tomate","",1,3);
insert into produit values(6,"Pomme de terre","",1,3);

insert into variete values(1,"Epaule","/home/tjouffreau/catalogueNW/catalogueNWpdf/epaule.jpg","",1,1);
insert into variete values(2,"Entrecôte","/home/tjouffreau/catalogueNW/catalogueNWpdf/entrecote.jpg","",1,1);
insert into variete values(3,"Lard","/home/tjouffreau/catalogueNW/catalogueNWpdf/lard.jpg","",1,2);
insert into variete values(4,"Langue","/home/tjouffreau/catalogueNW/catalogueNWpdf/langue.jpg","",1,2);
insert into variete values(5,"Rascasse","/home/tjouffreau/catalogueNW/catalogueNWpdf/rascasse.jpeg","",1,3);
insert into variete values(6,"Saran","/home/tjouffreau/catalogueNW/catalogueNWpdf/saran.jpg","",1,3);
insert into variete values(7,"Requin","/home/tjouffreau/catalogueNW/catalogueNWpdf/requin.jpg","",1,4);
insert into variete values(8,"Thon","/home/tjouffreau/catalogueNW/catalogueNWpdf/thon.jpeg","",1,4);
insert into variete values(9,"Coeur de boeuf","/home/tjouffreau/catalogueNW/catalogueNWpdf/coeurBoeuf.jpeg","",1,5);
insert into variete values(10,"Grappe","/home/tjouffreau/catalogueNW/catalogueNWpdf/grappe.jpeg","",1,5);
insert into variete values(11,"Belle de fontenay","/home/tjouffreau/catalogueNW/catalogueNWpdf/belleDeFontenay.jpeg","",1,6);
insert into variete values(12,"Vitelotte","/home/tjouffreau/catalogueNW/catalogueNWpdf/vitelotte.jpeg","",1,6);

insert into uniteMesure values(1,"M","metre");
insert into uniteMesure values(2,"L","litre");
insert into uniteMesure values(3,"Kg","kilo");
insert into uniteMesure values(4,"Caisse","caisse de x");

insert into Production values(1,2);
insert into Production values(5,1);
insert into Production values(6,3);

insert into employe values(1,"admin","admin","admin","admin");

insert into lot values(1,0,100,50,2,"Tomate coeur de boeuf","2017-09-01",3,9,3);
insert into lot values(2,0,150,100,1.5,"Patate Vitelotte","2018-01-08",3,12,1);

insert into status values(1,"commandé");
insert into status values(2,"preparé");
insert into status values(3,"livré au point relais");
insert into status values(4,"recuperé par le client");

insert into LDC values(10,1,1,1,1);
insert into LDC values(10,1,2,1,1);

