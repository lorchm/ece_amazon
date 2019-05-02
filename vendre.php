<!DOCTYPE html>
<html>
<head>
	<title>ECE Amazon</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
    <!-- utile pour la galerie qui défile-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 

    <script type="text/javascript" src="program.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Barre de navigation -->
    <?php include('header.php') ?>
<!-- *********************************** PAGE VENDRE ***************************************************************** -->

<!-- ***** boutons + profil ***** -->

    <!-- ***** boutons + profil ***** -->


    <div class="description page-header header container-fluid"> 
        <h1> MES PRODUITS EN VENTE</h1> 
        <div style="background-image: url('img/aya.jpg');">
                <div class="col-lg-12"> 
                    <div class = "profil"> 
                        <img src="img/shiba.jpg" class="roundedImage" style="width : 100px;height : 100px;">
                        <b class="pseud"> Patrick </b>
                    </div>
                </div>
        </div>
    </div>

    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>
</body>
</html>