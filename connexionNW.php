<?php include 'connectBase.php'; ?>
<!DOCTYPE html>
<html>
<head>
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

   <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips --> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <!--<script type="text/javascript" src="js/tether.min.js"></script>-->

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js">
    </script>   -->
    
     <script type="text/javascript" src="js/monJS.js"></script>
   
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
     <!-- Template styles -->
    
    <link rel="stylesheet" type="text/css" href="newWorld.css">
</head>
<body>
<?php 

if (isset($_SESSION['userName'])) {
	unset($_SESSION['userName']);
}
?>

<!--Navbar-->
    <?php   
        include 'menu.php'; 
        require_once "connectBase.php";
    ?>
<!--/.Navbar-->


<br><br><br>
<form method="POST" action="traitementConnexion.php" name="monForm" id="formConnexion" >
    <div class="card col-xs-12 text-center col-lg-3 offset-1" id="Changement">
        <h2>Inscription</h2>
            <?php
                if (isset($_GET['fail'])) {
                    echo "<div style='color:red; font-weight: bold;'><p>Nous n'avons pas réussi a vous authentifier.</p></div>";
                }
            ?>  
            <label for="mail">Adresse mail</label><input type="email" name="mail"><br>          
            <label for="password" >Mot de passe</label><input type="password" name="password" id="password"><br>
            <div id="wrongverif" style="color:red; font-weight: bold; visibility:hidden" >Mots de passes différents. </div><br>
            <input type="submit" name="btnIns" id="formCheck" value="Valider" style="background:none; border:0px;"></input>
    </div>
    </form>
<script type="text/javascript" src="validate.js"></script>

<?php
    include 'footer.php'; 
?>

<script>
    new WOW().init();
</script>
</body>
</html>