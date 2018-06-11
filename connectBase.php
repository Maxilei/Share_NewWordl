<?php
function connectionBDD($noBase=false) {
	$user = "maxime";
	$pwd = "passf203";
	$serveur = "localhost";
	if ($noBase === false)
		$base = "dbNewWorld";
	else
		$base = "dbNewWorld";

	// connection à la base
	if (!($cnx = mysqli_connect($serveur, $user, $pwd, $base))) {
		echo ("connection impossible ".$cnx->connect_error());
		return false;
	}
		
	$cnx->query("SET NAMES utf8");

	return $cnx;
}
?>



