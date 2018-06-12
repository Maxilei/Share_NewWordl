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
	$mail = $_POST['mail'];

	$reqCheckMail = "SELECT COUNT(utilisateurID) as nbMail FROM utilisateur WHERE userMail = '".$mail."';";
	$checkMail = execReq($reqCheckMail)->fetch_assoc()['nbMail'];
	echo "Check Mail ".$checkMail;
	if ($checkMail >= 1 ) {
		header('Location:inscriptionNW.php?mailCheck=1');
	}else{

		$prenom = $_POST['userSurname'];
		$nom = $_POST['userName'];
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


		$reqQsId = "SELECT qsID FROM QS WHERE Question = '".$QS."'";
		$qsID = execReq($reqQsId)->fetch_assoc()['qsID'];

		$reqIdMax = "SELECT max(utilisateurID)+1 as idMax FROM utilisateur";
		$idMax = execReq($reqIdMax)->fetch_assoc()['idMax'];
		$_POST['id']= $idMax ;
		echo "<br>";

		$req = " INSERT INTO `utilisateur`(`utilisateurID`,`userDateInscrip`,`userDescription`,`userRepQuesSec`,`userMail`,`userNbdeTenta`,`userMdp`,`userMailConf`,`userNom`,`userPrenom`,`userImage`,`userAdresse`,`userFacebook`,`userGoogle`,`userRole`,`qsID`) 
		VALUES (".$idMax.",'".$today."','','".$repQS."','".$mail."',1,'".$password."',0,'".$nom."','".$prenom."','','".$adresse."','','','".$role."','".$qsID."');";
		execReq($req);
		echo $req;

		switch ($role) {
			case 'Producteur':
				$reqIdMaxProd = "SELECT max(producID)+1 as idMaxProd FROM producteur";
				$idMaxProd = execReq($reqIdMaxProd)->fetch_assoc()['idMaxProd'];

				$reqProd = "INSERT INTO `producteur`(`producID`,`producValidation`,`utilisateurID`) VALUES(".$idMaxProd.",0,".$idMax.");";
				execReq($reqProd);
				echo($reqProd);

				break;
			case 'Point relais':
				$reqIdMaxPr = "SELECT max(prID)+1 as idMaxPr FROM pointRelais";
				$idMaxPr = execReq($reqIdMaxPr)->fetch_assoc()['idMaxPr'];

				$reqPr = "INSERT INTO `pointRelais`(`prID`,`prLongitude`,`prLatitude`,`utilisateurID`) VALUES(".$idMaxPr.",".$longitude.",".$latitude.",".$idMax.");"; 
				execReq($reqPr);
				echo($reqPr);
				break;
		}
	//	header("index.php");

		include('mailConfirm.php');
	}
}

?>