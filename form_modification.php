<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="styles.css" rel="stylesheet" type="text/css" >
  <?php include('modif_cpte.php'); ?>


</head>

<body>

  <!-- Barre de navigation -->
  <?php include('header.php') ?> 

    <header class="page-header header container-fluid">

      <div class="overlay"></div> 
      <div class="description">

      <div class="description page-header header container-fluid"> 
          <h1>Votre Compte</h1> 
      </div>

     </header> 

     <br>
     <div class="row">

      <div class="col-md-4">

        <form action ="sql_modif.php" method="post">

         <div class="container fluid center_block" >

           <h2>Informations perso</h2>

           <table>
            <tr>
             <label >Pseudo : </label><input class="form-control" style="width: 300px;" type="text" name="login" /><br><br>
           </tr>
           <tr>
             <label>Password :</label><input class="form-control" style="width: 300px;" type="text" name="mdp" value="<?php echo $M; ?>" /><br><br>
           </tr>

           <tr>
             <label>Email :</label><input class="form-control" style="width: 300px;" type="text" name="email" value="<?php echo $Mail; ?>" /><br><br>
           </tr>

           <tr>
             <label>Nom : </label><input class="form-control" style="width: 300px;" type="text" nom="nom" value="<?php echo $Nom; ?>" /><br><br>
           </tr>

           <tr>
             <label>Prenom : </label><input class="form-control" style="width: 300px;" ype="text" name="prenom" value="<?php echo $Prenom; ?>" /><br><br>
           </tr>

           <tr>
             <label>Portable :</label><input  class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Tel; ?>"/><br><br>
           </tr>
         </table>
       </div>
     </div>




     <div class="col-md-4">
      <div class="container fluid center_block" >

        <h2>Lieux de livraisons</h2>

        <table>
          <tr>
           <label>Adresse Ligne 1 : </label><input class="form-control" style="width: 300px;" type="text" nom="Adresse1" value="<?php echo  $Adresse1; ?>"/> <br> <br>
         </tr>



         <tr>
           <label>Adresse Ligne 2 :</label><input class="form-control" style="width: 300px;" type="text" nom="$Adresse2" value=" <?php echo $Adresse2; ?>"/><br><br>
         </tr>

         <tr>
           <label>Code Postal : </label><input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $CP; ?>"/><br><br>
         </tr>

         <tr>
           <label>Ville :</label><input class="form-control" style="width: 300px;" type="text" nom="ville" value=" <?php echo $Ville; ?>"/><br><br>
         </tr>

         <tr>
           <label>Pays :</label><input class="form-control" style="width: 300px;" type="text" nom="pays" value=" <?php echo $Pays; ?>"/><br><br>
         </tr>
       </table>



     </div>

   </div>

   <div class="col-md-4">
    <div class="container fluid center_block" >

      <h2>Informations bancaires</h2>
      <table>

        <tr>
          <label>Type de cartes (Visa,MasterCard,...) :</label><input class="form-control" style="width: 300px;" type="text" nom="carte_type" value=" <?php echo $Carte_num; ?>"/><br><br>
        </tr>
        <!-- <input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Carte; ?>"/><br> <br> -->




        <tr>
         <label>Numéro de carte :</label><input class="form-control" style="width: 300px;" type="text" nom="arte_num" value=" <?php echo $Carte_num; ?>"/><br><br>
       </tr>

       <tr>
         <label>Nom sur la carte :</label><input class="form-control" style="width: 300px;" type="text" nom="card_name" value=" <?php echo $Carte_name; ?>"/><br><br>
       </tr>

       <tr>
         <label>Date d'expiration :</label><input class="form-control" style="width: 300px;" type="text" nom="exp_date" value=" <?php echo $Date_exp; ?>"/><br><br>
       </tr>

       <tr>
         <label>Code de sécurité :</label><input class="form-control" style="width: 300px;" type="text" nom="sec_code" value=" <?php echo $Code; ?>"/><br><br>
       </tr>



     </table>

   </div>

 </div>

</div>


<div class="center-block">



 <tr>
  <td><input  class="btn btn-primary" style="width:80px;" type="submit" value="Editer"></td>

</tr>

</div>
</form>

<br>
<br>


<!--******************** PIED DE PAGE *********************************************************************************-->
    <?php include('footer.php') ?>
</body>
</html>

