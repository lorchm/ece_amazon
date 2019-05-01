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

  <nav class="navbar navbar-expand-md">

    <a class="navbar-brand" href="squelette.html"> <img src="img/logo.png"> </a>         
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">      
      <span class="navbar-toggler-icon"></span>        
    </button>        

    <div class="collapse navbar-collapse" id="main-navigation">   


      <ul class="navbar-nav">             
        <li class="nav-cat"><a class="nav-link" href="#">Catégories</a>   
          <ul class="submenu">
            <li><a href="livres.php">Livres</a></li>
            <li><a href="musique.php"></a></li>
            <li><a href="vetements.php"></a></li>
            <li><a href="sport_loisirs.php">Sports et Loisirs</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="venteflash.php">Ventes Flash</a></li>             
        <li class="nav-item"><a class="nav-link" href="vendre.php">Vendre</a></li> 
        <li class="nav-item"><a class="nav-link" href="info_compte.php">Votre Compte</a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>     
        <li class="nav-item"><a class="nav-link" href="panier.php">Panier</a></li> 
      </ul> 

    </div> 



  </nav>

  <body>
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

        <form action ="modif_cpte.php" method="post">

         <div class="container fluid center_block" >


           <h2>Informations perso</h2>

           <table>
            <tr>
             <label >Pseudo : </label><input class="form-control" style="width: 300px;" type="text" name="pseudo" value="<?php echo $Ps; ?>" /><br><br>
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



         </table>

       </div>

     </div>




     <div class="col-md-4">
      <div class="container fluid center_block" >

        <h2>Lieux de livraisons</h2>

        <table>
          <tr>
           <label>Adresse Ligne 1 : </label><input class="form-control" style="width: 300px;" type="text" nom="adresse" value="<?php echo  $Adresse1; ?>"/> <br> <br>
         </tr>



         <tr>
           <label>Adresse Ligne 2 :</label><input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Adresse2; ?>"/><br><br>
         </tr>

         <tr>
           <label>Code Postal : </label><input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $CP; ?>"/><br><br>
         </tr>

         <tr>
           <label>Ville :</label><input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Ville; ?>"/><br><br>
         </tr>

         <tr>
           <label>Pays :</label><input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Pays; ?>"/><br><br>
         </tr>

         <tr>
           <label>Portable :</label><input  class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Tel; ?>"/><br><br>
         </tr>

       </table>



     </div>

   </div>

   <div class="col-md-4">
    <div class="container fluid center_block" >

      <h2>Informations bancaires</h2>
      <table>

        <tr>
          <label>Type de cartes (Visa,MasterCard,...) :</label><input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Carte_num; ?>"/><br><br>
        </tr>
        <!-- <input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Carte; ?>"/><br> <br> -->




        <tr>
         <label>Numéro de carte :</label><input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Carte_num; ?>"/><br><br>
       </tr>

       <tr>
         <label>Nom sur la carte :</label><input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Carte_name; ?>"/><br><br>
       </tr>

       <tr>
         <label>Date d'expiration :</label><input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Date_exp; ?>"/><br><br>
       </tr>

       <tr>
         <label>Code de sécurité :</label><input class="form-control" style="width: 300px;" type="text" nom="adresse" value=" <?php echo $Code; ?>"/><br><br>
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
    <footer class="page-footer">
       <div class="container">
           <div class="row">
                <div class="col-lg-4">
                <p style="color:#ffa630; margin-left: 50px;">INFORMATIONS ADDITIONNNELLES</p><p style="margin-left: 50px;">Notre equipe<br>Laure CHAMOUARD<br>Barbara GERMANEAU<br>Victor LABEYRIE</p>
                </div>
                <div class="col-lg-4">
                    <img src="img/shiba_footer.png" style="margin-left:100px;margin-top: 20px; width:90px;height: 90px;">
                </div>
                <div class="col-lg-4">
                   <p style="color:#ffa630;">CONTACT</p><p>
                       37, quai de Grenelle, 75015 Paris, France <br>
                       <a href="mailto:ece.amazon@pro.com" style="color:#ffa630;"> ece.amazon@pro.com</a> <br>
                       +33 01 02 03 04 05 <br>
                       +33 01 03 02 05 04
                   </p>
               </div>
            </div>
            <div class="footer-copyright text-center" style="text-align: center;">&copy; 2019 ECE Amazon | Droit d'auteur: BLV</div>
        </div>
    </footer>
</body>
</html>

