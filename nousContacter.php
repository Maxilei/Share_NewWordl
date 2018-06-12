<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

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
                background-color: #304a74;
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
        .card {
            margin-left: 30%;
            border-style: none;
        }
        .carousel-item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }
        /*Caption*/
        .error {
            color: #FF0000;
        }
        .flex-center {
            color: #fff;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
    </style>

</head>
<body>
    <?php
      $adressErr=$sujetErr="";
      $adresse=$sujet=$descrip="";

        if (empty($_GET["adresse"]))
         {
            $adressErr="Une adresse est nécessaire";
         }
        else 
        {
            $adresse = $_GET["adresse"];
            
             // check if e-mail address is well-formed
            if (!filter_var($adresse, FILTER_VALIDATE_EMAIL)) 
            {
                $adressErr = "Format d'email invalide";
            }
         }   
        if (empty($_GET["sujet"]))
        {
            $sujetErr="Un sujet est nécessaire";

            }
        else
        {
            $sujet = $_GET["sujet"];
            $sujet = addslashes($sujet);
        }
        $descrip=$_GET["descrip"];
        $descrip= addslashes($descrip);
    ?>
<?php
    include 'menu.php'; 
?>
    <br><br><br>
    <form method="GET" action="nousContacter.php" name="leForm">
        <div class="card col-xs-12 text-center col-lg-4 offset-1">
            <label for="adresse">Adresse mail</label><input type="text" name="adresse"><p class="error">* <?php echo $adressErr;?></p>
            <label for="sujet">Sujet</label><input type="text" name="sujet"><p class="error">* <?php echo $sujetErr;?></p>
            <label for="descrip">Descriptif</label><textarea name="descrip" style="height: 451px"></textarea>
            <button type="submit" name="btnIns" style="background:none; border:0px;">Valider</button>
        </div>
    </form>
    <?php
        $ip=$_SERVER["REMOTE_ADDR"];
        if ($adressErr=="" and $sujetErr=="")
         {
            require_once "connectBase.php";
            if (($cnx = connectionBDD()) === false) exit;
            $req="INSERT INTO contact(adresse,sujet,descriptif,verifTimer,ip) VALUES ('".$adresse."','".$sujet."','".$descrip."','now()','".$ip."');";
            $result = $cnx->query($req) or die("La requête \"$req\" a échoué : ".$cnx->error);  
            
            
            $req="SELECT verifTimer FROM contact WHERE ip='".$ip."' AND now()-verifTimer<30;";
            $result = $cnx->query($req) or die("La requête \"$req\" a échoué : ".$cnx->error); 
            $req="SELECT now()-verifTimer FROM contact WHERE ip='".$ip."' AND now()-verifTimer<30;";
            $res = $cnx->query($req) or die("La requête \"$req\" a échoué : ".$cnx->error); 
            // on ferme la connexion
            mysqli_close($cnx); 
            if ($result)
            {
               echo "Il vous reste encore".$res."avant de pouvoir renvoyer un mail"; 
            }
        }
       
        
     
    ?>
 <?php
    include 'footer.php'; 
?>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>

</body>

</html>