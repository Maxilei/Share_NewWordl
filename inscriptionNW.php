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
    <!--/.Navbar-->

<br><br><br>
<form method="POST" action="traitementInscription.php" name="monForm" id="myFrom" >
	<div class="card col-xs-12 text-center col-lg-3 offset-1" id="Changement">
		<h2>Inscription</h2>
			<label for="userName">Nom</label><input type="text" name="userName"><br>
            <label for="userSurname">Prenom</label><input type="text" name="userSurname"><br>
			<label for="mail">Adresse mail</label><input type="email" name="mail"><br>
            <?php
            if (isset($_GET['mailCheck'])) {
                echo "<div style='color:red; font-weight: bold;'><p>Mail déjà existant, veuillez en entrer un autre.</p></div>";
            }
            ?>
            <label for="adresse">Adress</label><?php include 'genereInputAdresse.php';?>
            <label for="QS">Question secrète</label><select name="QS" id="QS"><!-- Affichage des questions avec une requete sql -->
            <?php
            global $cnx;
            if (!($cnx = mysqli_connect("localhost","maxime","passf203","dbNewWorld"))) {
                echo ("Connexion impossible".$cnx->connect_error());
            }
            $req = "SELECT qsID,Question FROM QS";
            $result = execReq($req);
            print_r($result);
            $question[] = array();
            while ($row = $result->fetch_assoc()) {
                    echo "<option name='".$row['qsID']."'>".$row['Question']."</option>";
            }
            ?>
            </select><br>
            <label for="repQuesSec">Reponse question secrète</label><input type="text" name="repQuesSec"><br>
            <label for="userRole">Votre rôle</label>
            <div>
                Producteur    <input type="radio" name="role" value="Producteur"><br>
                Consommateur<input type="radio" name="role" value="Consommateur"><br>
                Point relais  <input type="radio" name="role" value="Point relais"><br>
            </div>
			<label for="password" >Mot de passe</label><input type="password" name="password" id="password"><br>
			<label for="passverif">Vérification du mot de passe</label><input type="password" name="passverif" id="passverif">
            <div id="wrongverif" style="color:red; font-weight: bold; visibility:hidden" >Mots de passes différents. </div><br>
			<input type="submit" name="btnIns" id="formCheck" value="Valider" style="background:none; border:0px;"></input>
	
	</div>
	<div id="msg"></div>
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