/********************************************************************************
** Form generated from reading UI file 'dialogauth.ui'
**
** Created by: Qt User Interface Compiler version 5.3.2
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_DIALOGAUTH_H
#define UI_DIALOGAUTH_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QDialog>
#include <QtWidgets/QFormLayout>
#include <QtWidgets/QHBoxLayout>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QLabel>
#include <QtWidgets/QLineEdit>
#include <QtWidgets/QPushButton>
#include <QtWidgets/QSpacerItem>

QT_BEGIN_NAMESPACE

class Ui_DialogAuth
{
public:
    QFormLayout *formLayout;
    QLabel *labelLogin;
    QLineEdit *lineEditLogin;
    QLabel *labelPassword;
    QLineEdit *lineEditPassword;
    QHBoxLayout *horizontalLayout;
    QSpacerItem *horizontalSpacer_2;
    QPushButton *pushButtonValider;
    QPushButton *pushButtonAnnuler;
    QSpacerItem *horizontalSpacer;

    void setupUi(QDialog *DialogAuth)
    {
        if (DialogAuth->objectName().isEmpty())
            DialogAuth->setObjectName(QStringLiteral("DialogAuth"));
        DialogAuth->resize(308, 133);
        formLayout = new QFormLayout(DialogAuth);
        formLayout->setObjectName(QStringLiteral("formLayout"));
        formLayout->setFieldGrowthPolicy(QFormLayout::AllNonFixedFieldsGrow);
        labelLogin = new QLabel(DialogAuth);
        labelLogin->setObjectName(QStringLiteral("labelLogin"));

        formLayout->setWidget(0, QFormLayout::LabelRole, labelLogin);

        lineEditLogin = new QLineEdit(DialogAuth);
        lineEditLogin->setObjectName(QStringLiteral("lineEditLogin"));

        formLayout->setWidget(0, QFormLayout::FieldRole, lineEditLogin);

        labelPassword = new QLabel(DialogAuth);
        labelPassword->setObjectName(QStringLiteral("labelPassword"));

        formLayout->setWidget(1, QFormLayout::LabelRole, labelPassword);

        lineEditPassword = new QLineEdit(DialogAuth);
        lineEditPassword->setObjectName(QStringLiteral("lineEditPassword"));
        QFont font;
        font.setStyleStrategy(QFont::PreferDefault);
        lineEditPassword->setFont(font);
        lineEditPassword->setEchoMode(QLineEdit::Password);

        formLayout->setWidget(1, QFormLayout::FieldRole, lineEditPassword);

        horizontalLayout = new QHBoxLayout();
        horizontalLayout->setObjectName(QStringLiteral("horizontalLayout"));
        horizontalSpacer_2 = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout->addItem(horizontalSpacer_2);

        pushButtonValider = new QPushButton(DialogAuth);
        pushButtonValider->setObjectName(QStringLiteral("pushButtonValider"));

        horizontalLayout->addWidget(pushButtonValider);

        pushButtonAnnuler = new QPushButton(DialogAuth);
        pushButtonAnnuler->setObjectName(QStringLiteral("pushButtonAnnuler"));

        horizontalLayout->addWidget(pushButtonAnnuler);

        horizontalSpacer = new QSpacerItem(40, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        horizontalLayout->addItem(horizontalSpacer);


        formLayout->setLayout(2, QFormLayout::SpanningRole, horizontalLayout);


        retranslateUi(DialogAuth);

        QMetaObject::connectSlotsByName(DialogAuth);
    } // setupUi

    void retranslateUi(QDialog *DialogAuth)
    {
        DialogAuth->setWindowTitle(QApplication::translate("DialogAuth", "Authentification", 0));
        labelLogin->setText(QApplication::translate("DialogAuth", "Login", 0));
        labelPassword->setText(QApplication::translate("DialogAuth", "Mot de passe", 0));
        pushButtonValider->setText(QApplication::translate("DialogAuth", "&Ok", 0));
        pushButtonAnnuler->setText(QApplication::translate("DialogAuth", "&Annuler", 0));
    } // retranslateUi

};

namespace Ui {
    class DialogAuth: public Ui_DialogAuth {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_DIALOGAUTH_H
