<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/

        html,
        body {
            height: 100%;
        }
        /* Navigation*/

        .navbar {
            background-color: transparent;
        }
        #navbar{
             background-color: #304a74;
        }
        .top-nav-collapse {
            background-color: #304a74;
        }

        footer.page-footer {
            background-color: #304a74;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        /* Carousel*/

        .carousel {
            height: 50%;
        }

        @media (max-width: 776px) {
            .carousel {
                height: 100%;
            }
        }

        .carousel-item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }
        /*Caption*/

        .flex-center {
            color: #fff;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
        .form-control {
            border: 0px;
        }
    </style>

</head>
<body>
    <!--Navbar-->
    <nav  id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">New World</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Acheter <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ajoutLot.php">Produire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Distribuer</a>
                    </li>
                        
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Rechercher" aria-label="Rechercher">
                </form>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inscriptionNW.php">Connexion</a>  
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->
    <br><br><br>
    <form class="form-inline" method="POST" action="ajoutLot.php" name="lotForm">
        <div class="container">
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="col-lg-2 col-md-2 col-xs-2">Mode de Production</div>
                <div class="form-control col-lg-8 col-md-8 col-xs-8">
                    <select id="modeProd" class="browser-default">
                        <?
                            require_once "connectBase.php";
                            if (($cnx = connectionBDD()) === false) exit;
                            $resultat = $cnx->query('select parType from parcelle');

                            if(!$resultat){echo "erreur requete"; exit;}
                            while($données==mysql_fetch_assoc($resultat))
                            {
                                echo "<option value=".$données['parType'].">".$données['parType']."</option>";
                            }
                            mysql_close($cnx);
                        ?> 
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="col-lg-2 col-md-12 col-xs-12">Prix Unitaire</div>
                <div class="form-control col-lg-2 col-md-3 col-xs-3">
                    <input type="text" name="PU">
                </div>
                <div class="form-control col-lg-2 col-md-3 col-xs-3">
                    <p>Prix le plus petit:</p>
                </div>
                <div class="form-control col-lg-2 col-md-3 col-xs-3">
                    <p>Prix Moyen:
                </div>
                <div class="form-control col-lg-2 col-md-3 col-xs-3">
                    <p>Prix le plus élevé:</p>
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="col-lg-2 col-md-2 col-xs-2">Quantité / Unité</div>
                <div class="form-control col-lg-2 col-md-2 col-xs-2">
                    <input type="text" name="Qte">
                </div>
                <div class="form-control col-lg-2 col-md-2 col-xs-2">
                    <select id="unité">
                        <?
                            require_once "connectBase.php";
                            if (($cnx = connectionBDD()) === false) exit;
                            $resultat = $cnx->query('select umNom from uniteMesure');
                            if(!$resultat){echo "erreur requete"; exit;}
                           /* while($données=mysql_fetch_assoc($resultat))
                            {
                            }*/
                            var_dump($resultat);
                            mysql_close($cnx);
                        ?> 
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="col-lg-2 col-md-6 col-xs-6">Rayon</div>
                <div class="form-control col-lg-2 col-md-6 col-xs-6">
                    <select id="rayon"></select>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-6" name="categ">Categorie</div>
                <div class="form-control col-lg-2 col-md-6 col-xs-6">
                    <select id="categ" name="categ"></select>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-6" name="prod">Produit</div>
                <div class="form-control col-lg-2 col-md-6 col-xs-6">
                    <select id="variete" name="prod"></select>
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="col-lg-2 col-md-2 col-xs-2">Date Récolte</div>
                <div class="form-control col-lg-8 col-md-8 col-xs-8">
                    <input type="text" name="dateRe" placeholder="AAAA-MM-JJ">
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="col-lg-2 col-md-2 col-xs-2">Date limite de consomation</div>
                <div class="form-control col-lg-8 col-md-8 col-xs-8">
                    <input type="text" name="dateLimi" placeholder="AAAA-MM-JJ">
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="form-control col-lg-12 col-md-12 col-xs-12">
                    <input type="text" name="description" placeholder="Description">
                </div>
            </div>
        </div>
    </form>
     <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">
                <hr class="w-100 clearfix d-sm-none">

                <!--Second column-->
                <div class="col-lg-2 col-md-4 offset-md-2">
                    <h5 class="title font-bold mt-3 mb-4">Participer</h5>
                    <ul>
                        <li><a href="#!">Proposer des produits</a></li>
                        <li><a href="#!">Transformer</a></li>
                        <li><a href="#!">Devenir client</a></li>
                        <li><a href="#!">Distribuer</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Third column-->
                <div class="col-lg-2 col-md-4 offset-md-2">
                    <h5 class="title font-bold mt-3 mb-4">Comprendre</h5>
                    <ul>
                        <li><a href="#!">Savoir faire local</a></li>
                        <li><a href="#!">Reduire les transports</a></li>
                        <li><a href="#!">Produit frais</a></li>
                        <li><a href="#!">Qualité</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-4 offset-md-2">
                    <h5 class="title font-bold mt-3 mb-4">Communiquer</h5>
                    <ul>
                        <li><a href="#!">Les secrets des producteurs</a></li>
                        <li><a href="#!">Le savoir faire des artisans</a></li>
                        <li><a href="#!">Les recettes de grand-mère</a></li>
                        <li><a href="#!">La conservation des aliments</a></li>
                        <li><a href="nousContacter.php">Nous Contacter</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->
            </div>            
        </div>
    </footer>
    <!--/.Footer-->

</body>
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/monJS.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>
</html>