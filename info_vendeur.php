<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <?php include('sql_info_vendeur.php'); ?>

    
</head>

<body>

    <!-- Barre de navigation -->
    <?php include('header.php') ?>

    <body>
        <!-- titre -->
        <div class="description page-header header container-fluid"> 
            <h1>Votre compte</h1> 
        </div>

        <div  class="container" style="background-image: url('<?php echo $Pdc ?>');">
        <!-- ***** PARTIE DU PROFIL ET DES BOUTONS ***** -->
        <div class="row">
            <div class="col-md-9 col-sm-12"> 
              <div class="cadre-prod" style="width: 400px;">
                <h3 style="color:#04263f">Informations personnelles</h3>
                <table>
                    <tr>
                      <td><label style="color:grey">Nom : <?php echo $Nom; ?></label></td>
                    </tr>
                    <tr>
                      <td><label style="color:grey;">Pseudo : <?php echo $Ps; ?> </label></td>
                     </tr>
                     <tr>
                      <td><label style="color:grey" >Mot de passe : <?php echo $M; ?></label></td>
                     </tr>
                     <tr>
                       <td><label style="color:grey">Email :<?php echo $Mail; ?></label></td>
                     </tr>
                  </table>
                </div>
            </div>

            <div class="col-md-3 col-sm-12"> 
                <div class = "profil"> 
                  <img src="<?php echo $Pdp ?>" class="roundedImage" style="width : 100px;height : 100px;"> <br>
                        <b class="pseud"> <?php echo $Ps; ?> </b>
                </div>
            </div>
        </div>
      </div>


    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>

</body>
</html>