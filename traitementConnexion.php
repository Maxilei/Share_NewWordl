<?php

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

print_r($_POST);

if (isset($_POST)) {
	$mail = $_POST['mail'];
	$password = $_POST['password'];

	$reqConnextion  ="SELECT userPrenom FROM utilisateur WHERE userMail = '".$mail."' AND userMdp = '".$password."';";
	$checkConnexion = execReq($reqConnextion)->fetch_assoc()['userPrenom'];
	//echo $reqConnextion;
	if (sizeof($checkConnexion) >= 1) {
		print_r($checkConnexion);
		session_start();
		$_SESSION['mail'] = $mail;
		$_SESSION['prenom'] = $checkConnexion;
		//print_r($_SESSION);
		header('Location:acheter.php');
	}else {
		header('Location:connexionNW.php?fail=1');
	}
}



?>