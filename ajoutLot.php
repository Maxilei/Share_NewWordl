<?php
require_once "connectBase.php";
?>
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
<?php
    include 'menu.php';
?>
    <!--/.Navbar-->
<?php 



?>

    <script type="text/javascript" src="prodCompletion.js"></script>

    <br><br><br>
    <form class="form-inline" method="POST" action="traitementLot.php" id="lotForm">
        <div class="container">
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="col-lg-2 col-md-2 col-xs-2">Mode de Production</div>
                <div class="form-control ">
                    <select class="browser-default" name="modeProd" id="modeProd">
                    <?php
                    global $cnx;
                    $req = "SELECT parType FROM parcelle";
                    $result = execReq($req);
                    print_r($result);
                    while ($row = $result->fetch_assoc()) {
                            echo "<option name='".$row['parType']."'>".$row['parType']."</option>";
                    }
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="col-lg-2 col-md-12 col-xs-12">Prix Unitaire</div>
                <div class="form-control col-lg-2 col-md-3 col-xs-3">
                    <input type="number" name="PU">
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="col-lg-2 col-md-2 col-xs-2">Quantité / Unité</div>
                <div class="form-control col-lg-2 col-md-2 col-xs-2">
                    <input type="text" name="Qte">
                </div>
                <div class="form-control col-lg-2 col-md-2 col-xs-2">
                   <select id="uniteMesure" name="unite">
                        <?php
                        global $cnx;
                        $req = "SELECT umId,umDescription FROM uniteMesure";
                        $result = execReq($req);
                        print_r($result);
                        while ($row = $result->fetch_assoc()) {
                                echo "<option name='".$row['umDescription']."' value=".$row['umId'].">".$row['umDescription']."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="col-lg-2 col-md-6 col-xs-6">Rayon</div>
                <div class="form-control col-lg-2 col-md-6 col-xs-6">
                    <select id="rayon" name="rayon" onclick="remplirListeDesProduits(this.value)">
                        <?php
                        $req = "SELECT rayonId,rayonNom FROM rayon";
                        $result = execReq($req);
                        print_r($result);
                        while ($row = $result->fetch_assoc()) {
                                echo "<option name='".$row['rayonNom']."' value=".$row['rayonId'].">".$row['rayonNom']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-6" >Produit</div>
                <div class="form-control col-lg-2 col-md-6 col-xs-6">
                    <select id="produit" name="produit" onclick="remplirListeDesVarietes(this.value)">
                        
                    </select>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-6" >Variété</div>
                <div class="form-control col-lg-2 col-md-6 col-xs-6">
                    <select id="variete" name="variete">
                        
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="col-lg-2 col-md-2 col-xs-2">Date limite de consommation</div>
                <div class="form-control col-lg-8 col-md-8 col-xs-8">
                    <input type="text" name="dateLDC" placeholder="AAAA-MM-JJ">
                </div>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-xs-12" name="centre">
                <div class="form-control col-lg-12 col-md-12 col-xs-12">
                    <input type="text" name="description" placeholder="Description">
                </div>
            </div>
            <input type="submit" name="ajouter" value="Ajouter Lot">
        </div>
    </form>
     <!--Footer-->
<?php
    include 'footer.php';
?>
    <!--/.Footer-->

</body>
    <script type="text/javascript" src="validate.js"></script>
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