<?php
require_once "connectBase.php";

print_r($_POST);
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


if (isset($_POST)) {
	$prenom = $_POST['userSurname'];
	$nom = $_POST['userName'];
	$mail = $_POST['mail'];
	$adresse = $_POST['adresse'];
	$rue = $_POST['rue'];
	$cp = $_POST['cp'];
	$ville = $_POST['ville'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$QS = $_POST['QS'];
	$repQS = $_POST['repQuesSec'];
	$role = $_POST['role'];
	$password = $_POST['password'];
	$today = date("Y-m-d"); 


	$req = "INSERT INTO `utilisateur`(`userDateInscrip`,`userDescription`,`userRepQuesSec`,`userMail`,`userNbTenta`,`userMdp`,`userMailConf`,`userNom`,`userPrenom`,`userImage`,`userImage`,`userAdresse`,`userFacebook`,`userGoogle`,`userRole`) 
	VALUES (".$today.","",".$repQS.",".$mail.",1,".$password.",0,".$nom.",".$prenom.","",".$adresse.","","",".$role.");";

	execReq($req);
	
}

?>