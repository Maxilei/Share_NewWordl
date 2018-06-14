<?php
require_once "connectBase.php";
session_start();
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
	
	print_r($_SESSION);

if (isset($_POST) && isset($_SESSION['mail'])) {
	$lotQteAcheter= 0;
	$lotQteIni= $_POST['Qte'];
	$lotPU= $_POST['PU'];
	$lotDescription= $_POST['description'];
	$lotDLC= $_POST['dateLDC'];
	$umId= $_POST['unite'];
	$varId= $_POST['variete'];

	$producMail = $_SESSION['mail'];

	$reqProducId = "SELECT producID FROM producteur INNER JOIN utilisateur ON producteur.utilisateurID=utilisateur.utilisateurID WHERE userMail='".$producMail."';";
	$producID = execReq($reqProducId)->fetch_assoc()['producID'];

	$reqIdMax = "SELECT max(lotID)+1 as idMax FROM lot";
	$lotID = execReq($reqIdMax)->fetch_assoc()['idMax'];

	$reqAjoutLot = " INSERT INTO `lot`(`lotID`,`lotQteAcheter`,`lotQteIni`,`lotPU`,`lotDescription`,`lotDLC`,`umId`,`varId`,`producID`) 
		VALUES (".$lotID.",'".$lotQteAcheter."','".$lotQteIni."','".$lotPU."','".$lotDescription."','".$lotDLC."','".$umId."','".$varId."','".$producID."');";
	execReq($reqAjoutLot);
	header('Location:index.php');
}



/*
Array ( 
	[modeProd] => BIO 
	[PU] => 12 
	[Qte] => 500 
	[unite] => kilo 
	[rayon] => 3 
	[produit] => 6 
	[variete] => 12 
	[dateLDC] => 2018-19-06 
	[description] => Elles sont fraîche mes patates ! 
	[ajouter] => Ajouter Lot ) 


lotID
lotQteAcheter
lotPrix
lotQteIni
lotPU
lotDescription
lotDLC
umId
varId
producID
*/


?>