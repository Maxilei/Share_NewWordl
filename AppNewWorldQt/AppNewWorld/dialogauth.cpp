#include "dialogauth.h"
#include "ui_dialogauth.h"
#include <QSqlDatabase>
#include <QSqlQuery>
#include <QDebug>
#include <iostream>
DialogAuth::DialogAuth(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::DialogAuth)
{
    ui->setupUi(this);
    connect(ui->pushButtonAnnuler,SIGNAL(clicked()),this,SLOT(clicSurAnnuler()));
}

DialogAuth::~DialogAuth()
{
    delete ui;
}

//Vérification dans la base des logins et mots de passe des admins du site

void DialogAuth::on_pushButtonValider_clicked()
{
    qDebug()<<"void DialogAuth::on_pushButtonValider_clicked()";
    //initiliasation de la requete
    std::cout<<"1";

    QString txtReq="SELECT employeId, login, employeNom, employePrenom  FROM employe Where password='"+ui->lineEditPassword->text()+"' AND login='"+ui->lineEditLogin->text()+"';";
    qDebug()<<txtReq;
    QSqlQuery maRequete(txtReq);
    //if(maRequete.numRowsAffected()==1)
    //{
        accept();
    //}
}
void DialogAuth::clicSurAnnuler()
{
    qDebug()<<"void DialogAuth::clicSurAnnuler()";
    this->reject();
}
