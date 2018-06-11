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


<script>
function validerMdp() {
    if (document.monForm.password.value != document.monForm.passverif.value) {
        document.getElementById("msg").innerHTML = "les deux mots de passe doivent être identiques";
        return false;
    }

    if (document.monForm.password.value.length < 6) {
        document.getElementById("msg").innerHTML = "le mot de passe doit comporter au moins 6 caractères";
        return false;
    }
    return true;
}

</script>
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

<script type="text/javascript">
    $("#formCheck").hide();
</script>
<br><br><br>
<form method="POST" action="traitementInscription.php" name="monForm" id="myFrom" >
	<div class="card col-xs-12 text-center col-lg-3 offset-1" id="Changement">
		<h2>Inscription</h2>
			<label for="userName">Nom</label><input type="text" name="userName"><br>
            <label for="userSurname">Prenom</label><input type="text" name="userSurname"><br>
			<label for="mail">Adresse mail</label><input type="email" name="mail"><br>
            <label for="adresse">Adress</label><?php include 'genereInputAdresse.php';?>
            <label for="QS">Question secrète</label><select name="QS" id="QS"><!-- Affichage des questions avec une requete sql -->
            <?php
            global $cnx;
            if (!($cnx = mysqli_connect("localhost","maxime","passf203","dbNewWorld"))) {
                echo ("Connexion impossible".$cnx->connect_error());
            }
            $req = "SELECT Question FROM QS";
            $result = execReq($req);
            $question[] = array();
            while ($row = $result->fetch_assoc()) {
                    echo "<option name='question'>".$row['Question']."</option>";
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
            <div id="wrongverif" style="color:red; font-family: bold; visibility:hidden" >Mots de passes différents. </div><br>
			<input type="submit" name="btnIns" id="formCheck" value="Valider" style="background:none; border:0px;"></input>
			<a onclick="Connexion()">Déjà inscrit?</a>
	
	</div>
	<div id="msg"></div>
</form>
    <script type="text/javascript" src="validate.js"></script>

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
<!--/.Footer Links-->
<div id="Changement2" style="display: none">
        <div class="topCentre sizeBandeau1 border2 bg1 box2 centrage"> 
            <h2>Connexion / Déconnexion</h2>
        </div>
        <form method="get" action="connexionNewWorld.php">
            <div>
            
                    <label for="username">Identifiant: </label><input type="text" name="username"><br>
                    <label for="password">Mot de passe: </label><input type="password" name="password"><br>
                    <button type="submit" name="btnCo">Valider</button><br>
                    

            </div>
        </form>
</div> 
<?php
class userName {
	private $userName;
	private $password;
	private $mail;
    private $adresse;
    private $role;
    private $repQuesSec;

	
	public function userName($userName=null,$mail=null,$password=null,$adresse=null,$role=null,$repQuesSec=null) {
		$this->userName = $userName;
		$this->mail = $mail;
		$this->password = $password;
        $this->adresse = $adresse;
        $this->role = $role;
       // $this->quesSec = $quesSec;
        $this->repQuesSec = $repQuesSec;
	} 
	public function getUserName() {
		return $this->userName;
	}
	public function setUserName($userName) {
		$this->userName = $userName;
	}
	public function getMail() {
		return $this->mail;
	}
	public function setMail($mail) {
		$this->mail = $mail;
	}
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password) {
		$this->password = $password;
	}
    public function getAdresse() {
        return $this->adresse;
    }
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
    public function getRole() {
        return $this->role;
    }
    public function setRole($role) {
        $this->role = $role;
    }
   /* public function getQuesSec() {
        return $this->quesSec;
    }
    public function setQuesSec($quesSec) {
        $this->quesSec = $quesSec;
    }*/
    public function getRepQuesSec() {
        return $this->repQuesSec;
    }
    public function setRepQuesSec($repQuesSec) {
        $this->repQuesSec = $repQuesSec;
    }
	public function toString() {
		return $this->userName."(".$this->mail.")";
	}
	public function toBase() {
		require_once "connectBase.php";
		$today = date("Y-m-d"); 
		if (($cnx = connectionBDD()) === false) exit;
			
		$req = "INSERT INTO `utilisateur`(`userDateInscrip`,`userDescription`,`userRepQuesSec`,`userMail`,`userNbTenta`,`userMdp`,`userMailConf`,`userNom`,`userAdresse`,`userRole`) 
		VALUES (".$today.",'','$this->repQuesSec','$this->mail','0','$this->password','0','$this->userName','$this->userName','$this->adresse','$this->role');";
			
		$result = $cnx->query($req) or die("La requête \"$req\" a échoué : ".$cnx->error);	
		
		// on ferme la connexion
		mysqli_close($cnx);
	}
}
function mailVerif() {
		$destinataire=$_GET['mail'];
		$sujet="Vérification du mail pour l'inscription sur NewWorld";
		$message="Bonjour,merci de vous être enregistre sur notre magnifique site!Cliquez sur le lien suivant pour confirmer votre inscription  http://localhost/~tjouffreau/NW/nwTemplate/half-page-carousel/inscriptionNW.php?cle=1&btnIns=#";
		mail($destinataire,$sujet,$message);
		echo "Mail envoyé";
	}
		if(!isset($_REQUEST['btnIns'])) exit;

	echo "<div class=\"centreLeft box1 border2 size4a bg1 border2 overAuto\">";	
	// récupération des données du formulaire
	$userName = $_REQUEST["userName"];
	$mail = $_REQUEST["mail"];
	$password = $_REQUEST["password"];
    $adresse = $_REQUEST["adresse"];
    $role = $_REQUEST["role"];
    //$quesSec = $_REQUEST["quesSec"];
    $repQuesSec = $_REQUEST["repQuesSec"];
	// création de l'objet
	$_SESSION["UserName"] = new userName($userName,$mail,$password,$adresse,$role,$repQuesSec);
    $cle = 0;
	mailVerif();

			// enregistrement
 // Enregistrer l'utilisateur puis dans la bdd passer le verif mail a true quand il le vvalide
    
        $_SESSION["UserName"]->toBase();
        echo "enregistrement du client : ".$UserName->toString();
        echo "</div>";
 

?>
    <script>
        new WOW().init();
    </script>
</body>
</html>