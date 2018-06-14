<?php
require_once "connectBase.php";
function execReq($req) {
    global $cnx;
    if (!($cnx = mysqli_connect("localhost","maxime","passf203","dbNewWorld"))) {
        echo ("Connexion impossible".$cnx->connect_error());
        return false;   
    }
    $result = $cnx->query($req); 
    //or die("La requête \"$req\" a échoué : ".$cnx->error);
    // on ferme la connexion
    mysqli_close($cnx);
    return $result;
}
?>
<!--Navbar-->
    <nav  id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">New World</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="acheter.php">Acheter <span class="sr-only">(current)</span></a>
                    </li>
                    <?php
                        $reqEstProd = "SELECT count(utilisateurID) as prod FROM utilisateur WHERE userMail='".$_SESSION['mail']."' AND userRole='Producteur';";
                        $estProd = execReq($reqEstProd)->fetch_assoc()['prod'];
                        if ($estProd >=1) {
                    echo "<li class='nav-item'>
                        <a class='nav-link' href='ajoutLot.php'>Produire</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#'>Distribuer</a>
                    </li>";
                        }
                    ?>
                </ul>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="panier.php">Panier</a>  
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?deconnecte">Deconnexion</a>  
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!--/.Navbar-->