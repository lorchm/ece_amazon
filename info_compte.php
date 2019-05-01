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
                        <li><a href="#">Livres</a></li>
                        <li><a href="#">Musiques</a></li>
                        <li><a href="#">Vêtements</a></li>
                        <li><a href="#">Sports et Loisirs</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="#">Ventes Flash</a></li>             
                <li class="nav-item"><a class="nav-link" href="#">Vendre</a></li> 
                <li class="nav-item"><a class="nav-link" href="#">Votre Compte</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Admin</a></li>     
                <li class="nav-item"><a class="nav-link" href="#">Panier</a></li> 
            </ul> 
            
        </div> 



    </nav>

    <body>
        <header class="page-header header container-fluid">

            <div class="overlay"></div> 
            <div class="description">

               <h1 >Votre compte</h1>

        </header> 

        <br>
        <div class="row">

          <div class="col-md-4">

           <div class="container fluid center_block" >

            <div class="col-md-10">
                
                     <h2>Informations perso</h2>

                <table>
                        <tr>
                           <label style="font-size: 15px;">Pseudo :  <?php echo $Ps; ?> </label> <br> <br>
                       </tr>

                       

                       <tr>
                         <label>Mot de passe : <?php echo $M; ?></label><br><br>
                       </tr>

                       <tr>
                         <label>Email :<?php echo $Mail; ?></label><br><br>
                       </tr>

                       <tr>
                         <label>Nom : <?php echo $Nom; ?></label><br><br>
                       </tr>

                       <tr>
                         <label>Prenom : <?php echo $Prenom; ?></label><br><br>
                       </tr>

                      <tr>
                         <label>Truc :</label><br><br>
                       </tr>

                </table>
            </div>

                 <div class="col-md-2">

                    <div class="Update">

                         

                    </div>
              </div>
                
              </div>

          </div>

       

             <div class="col-md-4">
                <div class="container fluid center_block" >

                  <div class="col-md-10">
                
                  <h2>Lieu de livraisons</h2>

                <table>
                        <tr>
                           <label>Adresse Ligne 1 :  <?php echo  $Adresse1; ?></label> <br> <br>
                       </tr>

                       

                       <tr>
                         <label>Adresse Ligne 2 : <?php echo  $Adresse2; ?></label><br><br>
                       </tr>

                       <tr>
                         <label>Code Postal :<?php echo $CP; ?></label><br><br>
                       </tr>

                       <tr>
                         <label>Ville : <?php echo $Ville; ?></label><br><br>
                       </tr>

                       <tr>
                         <label>Pays : <?php echo $Pays; ?></label><br><br>
                       </tr>

                      <tr>
                         <label>Portable :<?php echo  $Tel; ?></label><br><br>
                       </tr>

                </table>
                </div>

                 <div class="col-md-2">

                    <div class="Update">

                       

                    </div>

                
              </div>
            </div>
               
          </div>

             <div class="col-md-4">
                <div class="container fluid center_block" >

                      <h2>Informations bancaires</h2>
                <table>
                        <tr>
                           <label>Type de carte : <?php echo $Carte; ?> </label> <br> <br>
                       </tr>

                       

                       <tr>
                         <label>Numéro de carte : <?php echo $Carte_num; ?></label><br><br>
                       </tr>

                       <tr>
                         <label>Nom sur la carte :<?php echo $Carte_name; ?></label><br><br>
                       </tr>

                       <tr>
                         <label>Date d'expiration : <?php echo $Date_exp; ?></label><br><br>
                       </tr>

                       <tr>
                         <label>Code de sécurité : <?php echo $Code; ?></label><br><br>
                       </tr>

                    
                </table>
                <div class="Update">

                         

                </div>
              </div>
               
            </div>

      </div>
      <div class="center-block">

            <tr>

                <td><a  href="form_modification.php" class="btn btn-primary" style="width:100px;"  type="button" value="Editer">Editer</a></td>

            </tr>

      </div>
    <br>
    <br>

<footer> Copyright &copy; 2019 ECE Amazon <br/>
    <a href="mailto:ece.amazon@pro.com"> ece.amazon@pro.com</a>
</footer>
</body>

</html>