  function remplirListeDesProduits(noRayon)
  {
    //alert("chgt de rayon");
    //alert("le rayon:"+noRayon+" est demandé");
    var request = $.ajax({
      //url: "http://petersonr.hol.es/newWorld/wsListeDesProduitsDuRayon.php",
      url: "wsListeDesProduitsDuRayon.php",
      method: "GET",
      data: { idRayon : noRayon }
    });

      //element html de type select qui contiendra les produits du rayon
      var listeDesProduits=$("#produit");
      //vider la liste des produits
      $(listeDesProduits).html("");


      //element html de type select qui contiendra les varietes du produit
      var listeDesVarietes=$("#variete");
      //vider la liste des produits
      $(listeDesVarietes).html("");

    //lors de la reception du json
    request.done(function(reponse)
    {
      //pour chaque categ du rayon
      //alert(reponse);
      var tabProduits=JSON.parse(reponse);


      $.each(tabProduits, function( i,produit) 
      {
        //alert(produit.libelleProduit);
        //ajout du produit obtenu à la liste
        //création de l'option
        var nouveauProduit=document.createElement("option");
        //valorisation de l'attribut value de l'option
        $(nouveauProduit).attr("value",produit.prodID);
        //mise en place du libellé du produit
        $(nouveauProduit).html(produit.prodNom);
        //ajout de l'option à la select
        $(listeDesProduits).append(nouveauProduit);

      });//fin du pour chaque produit
    });//fin reception du json
    request.fail(function( msg ) 
    {
      alert("Pas de produit dans ce rayon");
    });
  }//fin de la fonction remplirListeDesProduitsDuRayon

  function remplirListeDesVarietes(noProduit)
  {
    var request = $.ajax({
    //url: "http://petersonr.hol.es/newWorld/wsListeDesVarietesDuProduit.php",
    url: "wsListeDesVarietesDuProduit.php",
    method: "GET",
    data: { idProduit : noProduit }
    });

    //element html de type select qui contiendra les produits du rayon
      var listeDesVarietes=$("#variete");
      //vider la liste des produits
      $(listeDesVarietes).html("");

    //lors de la reception du json
    request.done(function(reponse)
    {
      //pour chaque categ du rayon
      var tabVarietes=JSON.parse(reponse);


      $.each(tabVarietes, function( i,variete) 
      {
        //ajout de la variete obtenu à la liste
        //création de l'option
        var nouvelleVariete=document.createElement("option");
        //valorisation de l'attribut value de l'option
        $(nouvelleVariete).attr("value",variete.varId);
        //mise en place du libellé du variete
        $(nouvelleVariete).html(variete.varNom);
        //ajout de l'option à la select
        $(listeDesVarietes).append(nouvelleVariete);

      });//fin du pour chaque variete
    });//fin reception du json
    request.fail(function( msg ) 
    {
      alert("Pas de variete dans ce produit");
    });
  }//fin de la fonction remplirListeDesVarietes
