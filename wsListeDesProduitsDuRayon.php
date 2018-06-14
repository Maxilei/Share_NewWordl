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

$idRayon = $_GET['idRayon'];

$req = "SELECT prodID,prodNom FROM produit WHERE rayonId =".$idRayon;
//echo $req;

$lesProduits = execReq($req);
//print_r($lesProduits);
$data = array();
while ($row = $lesProduits->fetch_assoc()){
	$data[] = $row;
} 

echo json_encode($data);

?>