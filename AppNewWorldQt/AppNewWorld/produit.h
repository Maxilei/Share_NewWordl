#ifndef PRODUIT_H
#define PRODUIT_H

#include <iostream>
#include <QString>


class produit
{
public:
    produit(int produitId, QString produitNom,QString varieteNom,QString rayonNom, QString prodPhoto);
    QString toString();

private :
    int produitId;
    QString produitNom;
    QString varieteNom;
    QString rayonNom;
    QString prodPhoto;
};

#endif // PRODUIT_H

