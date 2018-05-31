
#include <QSqlDatabase>
#include <QTextDocument>
#include "pdf.h"
#include <QDebug>

Pdf::Pdf(QObject *parent=0, QString nom="Bateau.pdf"):QTextDocument(parent)
{
    QString nomFichier = nom;

    QTextDocument monDocument(nomFichier);
    codeHTML = "<!DOCTYPE html>\
    <html>\
    <head>\
    <meta charset='utf-8'>\
    <body>";

    //monDocument.setHtml(textDoc);
}


void Pdf::ecrireTexte(QString texte){
    codeHTML += "<p>"+texte+"</p>";

}


void Pdf::chargerImage(QString imagePath){
    codeHTML += "<div><img src="+imagePath+" ></div>";
    qDebug() << "<img src=" <<imagePath <<" >";
}


void Pdf::imprimer(){
    codeHTML += "</body></head></html>";
    setHtml(codeHTML);

    monQPdfWriter = new QPdfWriter("Test.pdf");
    print(monQPdfWriter);
    delete monQPdfWriter;
}
