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

    <link rel="stylesheet" type="text/css" href="newWorld.css">
    <!-- Template styles -->
    
</head>

<body>

    <!--Navbar-->
<?php   
    include 'menu.php'; 
?>
    <!--/.Navbar-->

    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image:url('img/background/ecoResponsable.jpg'); background-repeat: no-repeat;background-position: center;">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Eco Consomateur Responsable</h1>
                        </li>
                        <li>
                            <p>Penser à vos enfants,à vous et à la planète!</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-info btn-lg" rel="nofollow">PLUD D'INFO</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.First slide-->

            <!-- Second slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('img/background/producteurResponsable.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Producteur et vivre de son travail </h1>
                        </li>
                        <li>
                            <p>Ecoulez vos produits quand ils sont prêts et au juste prix!</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-info btn-lg" rel="nofollow">PLUS D'INFO</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('img/background/artisanResponsable.jpeg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive">Artisans perpétuez votre activité!</h1>
                        </li>
                        <li>
                            <p>Pour que les villes ne meurent pas et que les grandes surfaces perdent leur monopole!</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/forums/forum/support/" class="btn btn-default btn-lg" rel="nofollow">PLUS D'INFO</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Third slide-->
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <br>

    <!--Content-->
    <div class="container">
        <div class="row my-5">
            <!--First columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.2s">

                    <!--Card image-->
                    <img class="img-fluid" src="img/background/producteur.jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Producteur</h4>
                        <!--Text-->
                        <h5 class="card-text">Agriculteurs, éleveurs</h5>
                        <p class="card-text">Vous souhaitez proposer au juste prix des produits de qualité, sains, frais et de saison.<br><br><br><br><br><br><br><br><br><br><br><br><br></p>
                        <a href="#" class="btn btn-info">Inscription</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.4s">

                    <!--Card image-->
                    <img class="img-fluid" src="img/background/consommateur.png" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Consommateur</h4>
                        <!--Text-->
                        <h5 class="card-text">Adulte éco-responsable</h5>
                        <p class="card-text">Vous êtes un père ou une mère de famille responsable qui sait non seulement que l'on doit manger sain mais aussi que pour maintenir un centre ville et des campagnes peuplés, il est nécessaire de donner leurs chances aux producteurs et artisants.Les emplois que vous maintenez aujourd'hui seront peut-être ceux de vos enfants. Il faut développer l'activité locale en réduisant les coûts de transport ainsi que les intermédiaires. Vous souhaitez proposer au juste prix des produits de qualité, sains, frais et de saison.</p>
                        <a href="#" class="btn btn-info">Inscription</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class="col-lg-4 mb-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.6s">

                    <!--Card image-->
                    <img class="img-fluid" src="img/background/artisan.jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Artisans</h4>
                        <!--Text-->
                        <h5 class="card-text">Artisan de l'alimentaire</h5>
                        <p class="card-text">Vous transformez les produits frais locaux et souhaitez maintenir votre commerce de centre ville face à l'omniprésence des grandes surfaces. Vous voyez chaque jour autour de vous des magasins qui ferment. NewWorld peut vous permettre un complément d'activité. Tentez cela ne coûte rien.<br><br><br><br><br><br></p><br>
                        <a href="#" class="btn btn-info">Inscription</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->
        </div>
    </div>
    <!--/.Content-->


<?php
    include 'footer.php'; 
?>


    <!-- SCRIPTS -->

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

</body>

</html>