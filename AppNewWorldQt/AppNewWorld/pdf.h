#ifndef PDF_H
#define PDF_H
using namespace std;
#include <iostream>
#include <QString>
#include <QTextDocument>
#include <QPdfWriter>


class Pdf : public QTextDocument
{
public:
    Pdf(QObject *parent, QString nom);
    void ecrireTexte(QString texte);
    void chargerImage(QString image);
    void imprimer();
private:
    QString codeHTML;
    QPdfWriter * monQPdfWriter;
};

#endif // PDF_H
