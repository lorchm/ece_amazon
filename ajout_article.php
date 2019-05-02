<!DOCTYPE html>
<html>
<head>
	<title>ECE Amazon :: Ajouter un article</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
    <!-- utile pour la galerie qui défile-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 

    <script type="text/javascript" src="program.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css" />

</head>

<!-- <script>
function connexion()
{
    echo"BONJOUR";
    if($_SESSION["login"]=="")
    {
        header('Location: connexion.php');
    }
    else
    {
        $_SESSION["login"]="";
        header('Location: connexion.php');
    }
}
function deconnexion()
{
    echo"BONJOUR";
    if($_SESSION["login"]=="")
    {
        echo"Vous avez été deconnecté";
    }
    else
    {
        $_SESSION["login"]="";
    }
}
</script> -->

<body>
    <!-- Barre de navigation -->
    <?php include('header.php') ?>

    <!-- milieu de la page -->
    
<div class="row">

<div class="col-md-3">

  <form action ="sql_modif.php" method="post">

   <div class="container fluid center_block" >


     <h2>Vêtements</h2>

     <table>
      <tr>
       <label >Référence : </label><input class="form-control" style="width: 300px;" type="text" name="ref" value="<?php echo $Ps; ?>" /><br><br>
     </tr>



     <tr>
       <label>Nom du produit :</label><input class="form-control" style="width: 300px;" type="text" name="nom" value="<?php echo $M; ?>" /><br><br>
     </tr>

     <tr>
       <label>Photos :</label><input class="form-control" style="width: 300px;" type="text" name="photo" value="<?php echo $Mail; ?>" /><br><br>
     </tr>

     <tr>
       <label>Description : </label><input class="form-control" style="width: 300px;" type="text" nom="descri" value="<?php echo $Nom; ?>" /><br><br>
     </tr>

     <tr>
       <label>Prix : </label><input class="form-control" style="width: 300px;" ype="text" name="prix" value="<?php echo $Prenom; ?>" /><br><br>
     </tr>

     <tr>
       <label>Videos : </label><input class="form-control" style="width: 300px;" ype="text" name="prix" value="<?php echo $Prenom; ?>" /><br><br>
     </tr>

     <tr>
       <label>Sexe : </label><input class="form-control" style="width: 300px;" ype="text" name="sexe" value="<?php echo $Prenom; ?>" /><br><br>
     </tr>

     <tr>
       <label>Couleur : </label><input class="form-control" style="width: 300px;" ype="text" name="couleur" value="<?php echo $Prenom; ?>" /><br><br>
     </tr>

     <tr>
       <label>Pointures : </label><input class="form-control" style="width: 300px;" ype="text" name="Pointeur" value="<?php echo $Prenom; ?>" /><br><br>
     </tr>

     <tr>
       <label>Type : </label><input class="form-control" style="width: 300px;" ype="text" name="type" value="<?php echo $Prenom; ?>" /><br><br>
     </tr>

     <tr>
       <label>Taille : </label><input class="form-control" style="width: 300px;" ype="text" name="taille" value="<?php echo $Prenom; ?>" /><br><br>
     </tr>


   </table>

 </div>

</div>




<div class="col-md-3">
<div class="container fluid center_block" >

  <h2>Musique</h2>

  <table>
    <tr>
     <label>Référence: </label><input class="form-control" style="width: 300px;" type="text" nom="ref" value="<?php echo  $Adresse1; ?>"/> <br> <br>
   </tr>



   <tr>
     <label>Titre :</label><input class="form-control" style="width: 300px;" type="text" nom="titre" value=" <?php echo $Adresse2; ?>"/><br><br>
   </tr>

   <tr>
     <label>Artiste : </label><input class="form-control" style="width: 300px;" type="text" nom="artiste" value=" <?php echo $CP; ?>"/><br><br>
   </tr>

   <tr>
     <label>Album :</label><input class="form-control" style="width: 300px;" type="text" nom="album" value=" <?php echo $Ville; ?>"/><br><br>
   </tr>

   <tr>
     <label>Année :</label><input class="form-control" style="width: 300px;" type="text" nom="annee" value=" <?php echo $Pays; ?>"/><br><br>
   </tr>

   <tr>
     <label>Prix :</label><input  class="form-control" style="width: 300px;" type="text" nom="prix" value=" <?php echo $Tel; ?>"/><br><br>
   </tr>

   <tr>
     <label>Photo :</label><input  class="form-control" style="width: 300px;" type="text" nom="photo" value=" <?php echo $Tel; ?>"/><br><br>
   </tr>

 </table>



</div>

</div>

<div class="col-md-3">
<div class="container fluid center_block" >

<h2>Livres</h2>
<table>

  <tr>
    <label>Référence :</label><input class="form-control" style="width: 300px;" type="text" nom="ref" value=" <?php echo $Carte_num; ?>"/><br><br>
  </tr>
  <!-- <input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Carte; ?>"/><br> <br> -->




  <tr>
   <label>Titre :</label><input class="form-control" style="width: 300px;" type="text" nom="titre" value=" <?php echo $Carte_num; ?>"/><br><br>
 </tr>

 <tr>
   <label>Auteur :</label><input class="form-control" style="width: 300px;" type="text" nom="auteur" value=" <?php echo $Carte_name; ?>"/><br><br>
 </tr>

 <tr>
   <label>Année :</label><input class="form-control" style="width: 300px;" type="text" nom="annee" value=" <?php echo $Date_exp; ?>"/><br><br>
 </tr>

 <tr>
   <label>Prix :</label><input class="form-control" style="width: 300px;" type="text" nom="prix" value=" <?php echo $Code; ?>"/><br><br>
 </tr>

 <tr>
   <label>Maison d'édition :</label><input class="form-control" style="width: 300px;" type="text" nom="edition" value=" <?php echo $Code; ?>"/><br><br>
 </tr>

 <tr>
   <label>Photos :</label><input class="form-control" style="width: 300px;" type="text" nom="photo" value=" <?php echo $Code; ?>"/><br><br>
 </tr>



</table>

</div>

</div>

<div class="col-md-3">
<div class="container fluid center_block" >

<h2>Sports/Loisirs</h2>
<table>

  <tr>
    <label>Référence :</label><input class="form-control" style="width: 300px;" type="text" nom="ref" value=" <?php echo $Carte_num; ?>"/><br><br>
  </tr>
  <!-- <input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Carte; ?>"/><br> <br> -->




  <tr>
   <label>Nom :</label><input class="form-control" style="width: 300px;" type="text" nom="nom" value=" <?php echo $Carte_num; ?>"/><br><br>
 </tr>

 <tr>
   <label>Prix :</label><input class="form-control" style="width: 300px;" type="text" nom="prix" value=" <?php echo $Carte_name; ?>"/><br><br>
 </tr>

 <tr>
   <label>Photos :</label><input class="form-control" style="width: 300px;" type="text" nom="photos" value=" <?php echo $Date_exp; ?>"/><br><br>
 </tr>

 <tr>
   <label>Vidéos :</label><input class="form-control" style="width: 300px;" type="text" nom="videos" value=" <?php echo $Code; ?>"/><br><br>
 </tr>

 <tr>
   <label>Description :</label><input class="form-control" style="width: 300px;" type="text" nom="descri" value=" <?php echo $Code; ?>"/><br><br>
 </tr>


</table>

</div>

</div>


</div>
















    <!-- pied de page -->
    <?php include('footer.php') ?>
</body>
</html>