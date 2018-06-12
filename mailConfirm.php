<?php

function mailVerif() {
	$destinataire=$_POST['mail'];
	$sujet="Vérification du mail pour l'inscription sur NewWorld";
	$messageTheo="Bonjour,merci de vous être enregistré sur notre magnifique site!Cliquez sur le lien suivant pour confirmer votre inscription  http://localhost/~tjouffreau/NW/nwTemplate/half-page-carousel/inscriptionNW.php?cle=1&btnIns=1&id=".$_POST['id'];
	$messageMaxime ="Bonjour,merci de vous être enregistré sur notre magnifique site!Cliquez sur le lien suivant pour confirmer votre inscription  http://127.0.0.1/~miori/NewWorld/Share_NewWordl/mailConfirm.php?cle=1&btnIns=1&id=".$_POST['id'];
	//mail($destinataire,$sujet,$messageTheo);
	mail($destinataire,$sujet,$messageMaxime);
}

if(!isset($_GET['btnIns']) && !isset($_GET['cle'])){
	mailVerif();
}else{

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
	print_r($_GET);
	$id = $_GET['id'];
	$cle = $_GET['cle'];
	// Enregistrer l'utilisateur puis dans la bdd passer le verif mail a true quand il le valide
	$reqProd = "UPDATE utilisateur SET userMailConf=".$cle." WHERE utilisateurID=".$id.";";
	execReq($reqProd);   
}

header('Location:index.php');

?>
