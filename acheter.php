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
<br><br><br><br>

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

    include 'menu.php'; 

    $reqProduits = "SELECT prodNom, prodImage, varNom, lotPU, umNom FROM variete INNER JOIN produit ON variete.prodID = produit.prodID INNER JOIN lot ON lot.varId = variete.varId INNER JOIN uniteMesure ON lot.umId = uniteMesure.umId;";
    $produits = execReq($reqProduits);
    $listeProd = array();

    while ($row = $produits->fetch_assoc()) {
    	//echo "<p>".$row['prodNom'].$row['prodImage'].$row['varNom'].$row['lotPU'].$row['umNom']."</p>";
    	echo "<div class='card' style='width: 18rem;''>
				  <img class='card-img-top' src='".$row['prodImage']."' alt='Card image cap'>
				  <div class='card-body'>
				    <p class='card-text'>".$row['prodNom']."</p>
				  </div>
				  <ul class='list-group list-group-flush'>
				    <li class='list-group-item'>".$row['varNom']."</li>
				    <li class='list-group-item'>".$row['lotPU']."€/".$row['umNom']."</li>
				  </ul>
				  <div class='card-body'>
				    <a href='#' class='card-link'>Voir</a>
				    <a href='#' class='card-link'>Ajouter au panier</a>
				  </div>
				</div>";
    }


?>



















<?php
    include 'footer.php'; 

?>