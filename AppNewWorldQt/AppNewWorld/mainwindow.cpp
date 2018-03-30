#include <QSqlQuery>
#include <QCheckBox>
#include <QDebug>
#include <QPixmap>
#include "mainwindow.h"
#include "ui_mainwindow.h"
#include "listeproduit.h"


MainWindow::MainWindow(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindow)
{
    ui->setupUi(this);
    demandeProducteurs();

}

MainWindow::~MainWindow()
{
    delete ui;
}


void MainWindow::demandeProducteurs()
{
    qDebug()<<"void MainWindow::demandeProducteurs()";
    QString texteRequete="SELECT produit.prodID as prodID,libelleRayon, libelleEspece, libelleVariete, prodPhoto FROM produit INNER JOIN produitVariete ON produit.varId=produitVariete.varId INNER JOIN produitEspece ON produit.prodID=produitEspece.prodId INNER JOIN produitRayon ON idRayon=rayId WHERE not isAccepted;";
    QSqlQuery maRequete (texteRequete);
    ui->demandeProducteur->hideColumn(4);
    while (maRequete.next())
    {
        int noLigne=ui->demandeProducteur->rowCount();
        ui->demandeProducteur->setRowCount(noLigne+1);
        QCheckBox* valider= new QCheckBox(ui->demandeProducteur);
        //ajout d'une propriété de la QCheckbox idProd avec comme valeur l'identifiant du produit auquel la case à cocher correspond
        valider->setProperty("idProd",maRequete.value("prodID").toString());
        connect (valider,SIGNAL(stateChanged(int)),this,SLOT(validerProduit(int)));
        //connect (valider,SIGNAL(stateChanged(int)),this,SLOT(on_boutonValider_released(int)));
        ui->demandeProducteur->setCellWidget(noLigne,0,valider);
        ui->demandeProducteur->setItem(noLigne,1,new QTableWidgetItem(maRequete.value("libelleRayon").toString()));
        ui->demandeProducteur->setItem(noLigne,2,new QTableWidgetItem(maRequete.value("libelleEspece").toString()));
        ui->demandeProducteur->setItem(noLigne,3,new QTableWidgetItem(maRequete.value("libelleVariete").toString()));
        qDebug()<<maRequete.value("prodID").toString();
        ui->demandeProducteur->setItem(noLigne,4,new QTableWidgetItem(maRequete.value("prodID").toString()));
        ui->demandeProducteur->setItem(noLigne,5,new QTableWidgetItem(maRequete.value("prodPhoto").toString()));
        ui->demandeProducteur->hideColumn(5);
    }
}

QString requeteImage="SELECT produitPhoto FROM produit WHERE prodIF=6";

void MainWindow::on_boutonSupprimer_clicked()
{
    qDebug()<<"passe dans le click supprimer";
    int nbLigneMax=ui->demandeProducteur->rowCount();
    qDebug()<< "déclare le nb de ligne";
    for (int  noLigne=0; noLigne < nbLigneMax; noLigne++)
    {
        qDebug()<<"rentre dans le for";
        if(ui->demandeProducteur->item(noLigne,2)->isSelected())
        {
            qDebug() << "ok";
            ui->demandeProducteur->showColumn(4);
            QString reqDelete= "DELETE FROM produit WHERE not isAccepted AND prodID = "+ ui->demandeProducteur->item(noLigne,4)->text();
            ui->demandeProducteur->hideColumn(4);
            QSqlQuery supprimer (reqDelete);
            qDebug()<< reqDelete;
        }
    }
    ui->demandeProducteur->clearContents();
    ui->demandeProducteur->setRowCount(0);
    demandeProducteurs();
}

void MainWindow::validerProduit(int coche)
{
    QString idProd=sender()->property("idProd").toString();
    if(coche==Qt::Checked)
        {
            QString texteRequete="UPDATE produit SET isAccepted=1 WHERE prodID="+idProd;
            QSqlQuery maRequete (texteRequete);
            ui->demandeProducteur->clearContents();
            ui->demandeProducteur->setRowCount(0);
            demandeProducteurs();
        }
}



void MainWindow::on_pushButton_4_clicked()
{
    QString requeteId= "SELECT varId FROM produitVariete ORDER BY varId DESC LIMIT 1";
    QSqlQuery idMax (requeteId);
    idMax.next();
    int id=idMax.value("varId").toInt();
    id ++;
    QString idPlusGrand= QString::number(id,10);

    QString requeteAjoutVariete = "INSERT INTO produitVariete VALUES ("+idPlusGrand+",'"+ui->lineEditAjouter->text()+"')";
    qDebug()<<requeteAjoutVariete;
    QSqlQuery ajouterVariete (requeteAjoutVariete);
    ui->lineEditAjouter->clear();

}


void MainWindow::on_pushButton_3_clicked()
{
    QString requeteId= "SELECT rayId FROM produitRayon ORDER BY rayId DESC LIMIT 1";
    QSqlQuery idMax (requeteId);
    idMax.next();
    int id=idMax.value("rayId").toInt();
    id ++;
    QString idPlusGrand= QString::number(id,10);

    QString requeteAjoutRayon= "INSERT INTO produitRayon VALUES ("+idPlusGrand+",'"+ui->lineEditAjouter->text()+"')";
    qDebug()<<requeteAjoutRayon;
    QSqlQuery ajouterRayon (requeteAjoutRayon);
    ui->lineEditAjouter->clear();
}



void MainWindow::on_demandeProducteur_clicked(const QModelIndex &index)
{
    ui->demandeProducteur->showColumn(5);
    //qDebug()<<ui->demandeProducteur->item(index.row(),5)->text();
    QPixmap imageProduit(ui->demandeProducteur->item(index.row(),5)->text());
    ui->demandeProducteur->hideColumn(5);
    ui->imageProduits->setPixmap(imageProduit);
    ui->imageProduits->show();
}

void MainWindow ::on_pushButton_clicked()
{
    ListeProduit listeMesProduits;
    listeMesProduits.exec();
}
