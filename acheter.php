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


    include 'menu.php'; 

    $reqProduits = "SELECT prodNom, prodImage, varNom, lotPU, umNom FROM variete INNER JOIN produit ON variete.prodID = produit.prodID INNER JOIN lot ON lot.varId = variete.varId INNER JOIN uniteMesure ON lot.umId = uniteMesure.umId;";
    $produits = execReq($reqProduits);
    $listeProd = array();
?>
<!-- Section: Products v.3 -->
<section class='text-center my-5'>

  <!-- Section heading -->
  <h2 class='h1-responsive font-weight-bold text-center my-5'>Nos produits :</h2>

 <?php
    echo "<!-- Grid row -->
		  <div class='row col-lg-11'>";
    while ($row = $produits->fetch_assoc()) {
    	//echo "<p>".$row['prodNom'].$row['prodImage'].$row['varNom'].$row['lotPU'].$row['umNom']."</p>";
		echo "<!-- Grid column -->
			    <div class='col-lg-4 mb-4'>
			      <!-- Card -->
			      <div class='card align-items-center'>
			        <!-- Card image -->
			        <div class='view overlay'>
			          <img src='".$row['prodImage']."'class='card-img-top' alt=''>
			          <a>
			            <div class='mask rgba-white-slight'></div>
			          </a>
			        </div>
			        <!-- Card image -->
			        <!-- Card content -->
			        <div class='card-body text-center'>
			          <!-- Category & Title -->
			          <a href='' class='grey-text'>
			            <h5>".$row['prodNom']."</h5>
			          </a>
			          <h5>
			            <strong>
			              <a href='' class='dark-grey-text'>".$row['varNom']."</a>
			            </strong>
			          </h5>
			          <h4 class='font-weight-bold blue-text'>
			            <strong>".$row['lotPU']."€/".$row['umNom']."</strong>
			          </h4>
			        </div>
					<!-- Button trigger modal -->
					<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalPanier'>
					    Ajouter au panier
					</button>			        
					<!-- Card content -->
			      </div>
			      <!-- Card -->
			    </div>
			    <!-- Grid column -->";
    }
echo "</div>
	<!-- Grid row -->";
echo "</section>
			<!-- Section: Products v.3 -->";

?>



<!-- Modal -->
<div class='modal fade' id='modalPanier' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Séléctionner la quantité</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
            <form>
            	
            </form>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Annuler</button>
                <button type='button' class='btn btn-primary'>Ajouter !</button>
            </div>
        </div>
    </div>
</div>









<?php
    include 'footer.php'; 

?>