<?php
function execReq($req) {
    global $cnx;
    if (!($cnx = mysqli_connect("localhost","maxime","passf203","dbNewWorld"))) {
        //echo ("Connexion impossible".$cnx->connect_error());
        return false;   
    }
    $result = $cnx->query($req); 
    //or die("La requête \"$req\" a échoué : ".$cnx->error);
    // on ferme la connexion
    mysqli_close($cnx);
    return $result;
}

$prodID = $_GET['idProduit'];

$req = "SELECT varId,varNom FROM variete WHERE prodID ='".$prodID."'";
//echo $req;

$lesVariete	 = execReq($req);
//print_r($lesVariete	);
$data = array();
while ($row = $lesVariete	->fetch_assoc()){
	$data[] = $row;
} 

echo json_encode($data);

?>