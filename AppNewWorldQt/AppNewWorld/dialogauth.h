#ifndef DIALOGAUTH_H
#define DIALOGAUTH_H
#include <iostream>
#include <QDialog>
#include <QSqlDatabase>

namespace Ui {
class DialogAuth;
}

class DialogAuth : public QDialog
{
    Q_OBJECT

public:
    explicit DialogAuth(QWidget *parent = 0);
    ~DialogAuth();

private slots:
    void on_pushButtonValider_clicked();
    void clicSurAnnuler();

private:
    QSqlDatabase maBase;
    Ui::DialogAuth *ui;
};

#endif // DIALOGAUTH_H
