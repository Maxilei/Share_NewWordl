#ifndef LISTEPRODUIT_H
#define LISTEPRODUIT_H

#include <iostream>
#include <QDialog>

namespace Ui {
class ListeProduit;
}

class ListeProduit : public QDialog
{
    Q_OBJECT

public:
    void chargerListeProduit();
    explicit ListeProduit(QWidget *parent = 0);
    ~ListeProduit();

private slots:
    void on_pushButton_clicked();
    void maListe();
private:
    Ui::ListeProduit *ui;
};

#endif // LISTEPRODUIT_H
