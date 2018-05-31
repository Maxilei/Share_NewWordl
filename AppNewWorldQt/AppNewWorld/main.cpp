#include "mainwindow.h"
#include <QGuiApplication>
#include "dialogauth.h"
#include <QSqlDatabase>
#include "pdf.h"

int main(int argc, char *argv[])
{

    QGuiApplication a(argc, argv);
    //initialisation de la base
    QSqlDatabase maBase;
    maBase=QSqlDatabase::addDatabase("QMYSQL");
    maBase.setUserName("maxime");
    maBase.setHostName("localhost");
    maBase.setPassword("passf203");
    maBase.setDatabaseName("dbmiNewWorld");
    maBase.open();
    DialogAuth monDialogLogin;
    if(monDialogLogin.exec()==QDialog::Accepted)
        {
            MainWindow w;
            w.show();
            return a.exec();
        }
        else
        {
            return -124;
        }
    QGuiApplication a(argc, argv);
    Pdf monPdf(0,"Test.pdf");
    ColBateauVoyageur mesBateaux;

    //          Need to change les bateaux en produit NewWorld
    mesProduits = listeproduit::ListeProduit;
    mesBateaux = Passerelle::chargerLesBateauxVoyageurs();
    int taille = mesBateaux.cardinal();

    for(int leBato=0; leBato < taille; leBato++){

        BateauVoyageur monBateau = mesBateaux.obtenirBateau(leBato);
        QString test = monBateau.versChaine();
        QString image = monBateau.getImageBatVoy();
        //cout << test.toStdString() << endl;
        monPdf.ecrireTexte(test);
        monPdf.chargerImage(image);

    }

    monPdf.imprimer();
    return a.exec();
}
