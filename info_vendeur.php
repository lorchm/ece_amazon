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
            <h1>Informations de votre compte</h1> 
        </div>

           <div class="container fluid center_div" >

               <table>
                      <tr>
                            <label style="font-size: 15px;">Pseudo :  <?php echo $Ps; ?> </label> <br> <br>
                       </tr>

                       

                       <tr>
                         <label style="text-align: center" >Mot de passe : <?php echo $M; ?></label><br><br>
                       </tr>

                       <tr>
                         <label>Email :<?php echo $Mail; ?></label><br><br>
                       </tr>

                       <tr>
                         <label>Nom : <?php echo $Nom; ?></label><br><br>
                       </tr>

                      <tr>
                          <label> Photo de profil : </label><a href="<?php echo $Pdp ?>" target="_blank"><img class="img-fluid" src="<?php echo $Pdp ?>" style="width: auto; height: 185px;"></a><br><br>
                       </tr>

                        <tr>
                          <label> Photo de couverture :</label><a href="<?php echo $Pdc ?>" target="_blank"><img class="img-fluid" src="<?php echo $Pdc ?>" style="width: auto; height: 185px;"></a><br><br>
                       </tr>

                </table>
            </div>


    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>

</body>
</html>