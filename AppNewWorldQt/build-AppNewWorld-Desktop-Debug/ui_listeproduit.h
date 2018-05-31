/********************************************************************************
** Form generated from reading UI file 'listeproduit.ui'
**
** Created by: Qt User Interface Compiler version 5.3.2
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_LISTEPRODUIT_H
#define UI_LISTEPRODUIT_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QDialog>
#include <QtWidgets/QHBoxLayout>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QPushButton>
#include <QtWidgets/QSpacerItem>
#include <QtWidgets/QTableWidget>
#include <QtWidgets/QVBoxLayout>

QT_BEGIN_NAMESPACE

class Ui_ListeProduit
{
public:
    QVBoxLayout *verticalLayout;
    QHBoxLayout *horizontalLayout;
    QSpacerItem *horizontalSpacer_4;
    QSpacerItem *horizontalSpacer_2;
    QSpacerItem *horizontalSpacer;
    QSpacerItem *horizontalSpacer_5;
    QSpacerItem *horizontalSpacer_3;
    QPushButton *pushButton;
    QTableWidget *maListe;

    void setupUi(QDialog *ListeProduit)
    {
        if (ListeProduit->objectName().isEmpty())
            ListeProduit->setObjectName(QStringLiteral("ListeProduit"));
        ListeProduit->resize(400, 300);
        verticalLayout = new QVBoxLayout(ListeProduit);
        verticalLayout->setObjectName(QStringLiteral("verticalLayout"));
        horizontalLayout = new QHBoxLayout();
        horizontalLayout->setObjectName(QStringLiteral("horizontalLayout"));
        horizontalSpacer_4 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout->addItem(horizontalSpacer_4);

        horizontalSpacer_2 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout->addItem(horizontalSpacer_2);

        horizontalSpacer = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout->addItem(horizontalSpacer);

        horizontalSpacer_5 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout->addItem(horizontalSpacer_5);

        horizontalSpacer_3 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout->addItem(horizontalSpacer_3);

        pushButton = new QPushButton(ListeProduit);
        pushButton->setObjectName(QStringLiteral("pushButton"));
        QIcon icon;
        icon.addFile(QStringLiteral("../../../../Images/edit-delete.png"), QSize(), QIcon::Normal, QIcon::Off);
        pushButton->setIcon(icon);

        horizontalLayout->addWidget(pushButton);


        verticalLayout->addLayout(horizontalLayout);

        maListe = new QTableWidget(ListeProduit);
        maListe->setObjectName(QStringLiteral("maListe"));

        verticalLayout->addWidget(maListe);


        retranslateUi(ListeProduit);

        QMetaObject::connectSlotsByName(ListeProduit);
    } // setupUi

    void retranslateUi(QDialog *ListeProduit)
    {
        ListeProduit->setWindowTitle(QApplication::translate("ListeProduit", "Liste des produits", 0));
        pushButton->setText(QString());
    } // retranslateUi

};

namespace Ui {
    class ListeProduit: public Ui_ListeProduit {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_LISTEPRODUIT_H
