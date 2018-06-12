<?php
    session_start();
    if (isset($_GET['deconnecte'])) {
        $_SESSION = array();
    }
    //echo "ploum";
    //print_r($_SESSION);
    if (isset($_SESSION['mail']) && isset($_SESSION['prenom'])) {
        include 'barreMenuConnecte.php';
    }
    else {
        include 'barreMenuDeconnecte.php';
    }
?>
