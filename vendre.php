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


<div class="description page-header header container-fluid"> 
    <h1> MES PRODUITS EN VENTE</h1> 
    <div style="background-image: url('img/aya.jpg');">
        <div class="row">
            <div class="col-lg-4">
                <br><br>
                <button class="btt"> AJOUTER UN ARTICLE </button>
                <button class="btt"> SUPPRIMER UN ARTICLE </button>
            </div>

            <div class="col-lg-7"></div>

            <div class="col-lg-1"> 
                <div class = "profil"> 
                    <img src="img/shiba.jpg" class="roundedImage" style="width : 100px;height : 100px;">
                    <b class="pseud"> Patrick </b>
                </div>
            </div>
        </div>

        <!--*****  Liste des objets ***** -->
        <div class="cadre-prod-2">
            <div class="row">
                <!-- 1. IMAGE -->
                <div class="col-md-5">
                    <a href="img/aya.jpg" target="_blank"><img src="img/aya.jpg" style="width: 100%; height: 185px;"></a>
                </div>
                <!-- 2. DETAILS ARTICLE -->
                <div class="col-md-7" style="margin-top: 10px;">
                    <div class="en-tete-prod">Album de Artiste</div>
                    <div class="prix-prod">Mettre le prix &euro;</div>
                    <div class="reference-prod">La référence RS55ZQ</div>
                    <div class="description-prod">Description Aya la best.</div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>
</body>
</html>