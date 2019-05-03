<!DOCTYPE html>
<html>
<head>
	<title>ECE Amazon</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 

    <script type="text/javascript" src="program.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body class="page-livres">

    <!-- Barre de navigation -->
    <?php include('header.php') ?>

<!--************************************ Liste articles du panier ******************************************************-->

    <div class="page-venteflash container">
        <!-- Titre -->
        <div class="description page-header header container-fluid"> 
            <h1>Mon Panier</h1> 
        </div>

            <h2>Si c'est un livre/musique/sport</h2>
        <div class="cadre-prod">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <a href="img/livre.jpg" target="_blank"><img class="img-fluid" src="img/livre.jpg" style="width: 100%; height: 185px;"></a>
                </div>
                <div class="col-md-5 col-sm-12" style="margin-top: 10px;">
                    <div class="en-tete-prod">Titre de Auteur | Annee publication  | Edition</div>
                    <div class="prix-prod">Mettre le prix &euro;</div>
                    <div class="reference-prod">La référence RS55ZQ</div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="remplir-infos-prod">
                        <p style="color:grey;">Quantité : ...</p> 
                    </div> 
                    <div style="position: absolute; bottom: 5px; right: 20px; "><button class="btn-delete"><img src="img/delete.png" style="width:20px; height: 20px;"></button> </div>
                </div>
            </div>
        </div>


        <h2>Si c'est un vetement</h2>
        <!-- POUR CHAUSSURES -->
        <div class="cadre-prod">
            <div class="row">
                <!-- 1. IMAGE -->
                <div class="col-md-3 col-sm-12">
                    <a href="img/shoes.jpg" target="_blank"><img class="img-fluid" src="img/shoes.jpg" style="width: 100%; height: 185px;"></a>
                </div>
                <!-- 2. DETAIL ARTICLE -->
                <div class="col-md-5 col-sm-12" style="margin-top: 10px;">
                    <div class="en-tete-prod">Marque - Nom de la Chaussures</div>
                    <div class="prix-prod">Mettre le prix &euro;</div>
                    <div class="reference-prod">La référence RS55ZQ</div>
                </div>
                <!-- 3. REMPLIR INFOS -->
                <div class="col-md-4 col-sm-12">
                    <div class="remplir-infos-vet">
                        <p style="color:grey;">Quantité : ...</p>
                        <p style="color:grey;">Couleur : ...</p>
                        <p style="color:grey;">Sexe : ...</p> 
                        <p style="color:grey;">Pointure : ...</p> 
                    </div>
                    <div style="position: absolute; bottom: 5px; right: 20px; "><button class="btn-delete"><img src="img/delete.png" style="width:20px; height: 20px;"></button> </div>
                </div>
            </div>
        </div>

        <!-- POUR VETEMENTS -->
        <div class="cadre-prod">
            <div class="row">
                <!-- 1. IMAGE -->
                <div class="col-md-3 col-sm-12">
                    <a href="img/shoes.jpg" target="_blank"><img class="img-fluid" src="img/shoes.jpg" style="width: 100%; height: 185px;"></a>
                </div>
                <!-- 2. DETAIL ARTICLE -->
                <div class="col-md-5 col-sm-12" style="margin-top: 10px;">
                    <div class="en-tete-prod">Marque - Nom du Vetement</div>
                    <div class="prix-prod">Mettre le prix &euro;</div>
                    <div class="reference-prod">La référence RS55ZQ</div>
                </div>
                <!-- 3. REMPLIR INFOS -->
                <div class="col-md-4 col-sm-12">
                    <div class="remplir-infos-vet">
                        <p style="color:grey;">Quantité : ...</p>
                        <p style="color:grey;">Couleur : ...</p>
                        <p style="color:grey;">Sexe : ...</p> 
                        <p style="color:grey;">Taille : ...</p>     
                    </div>
                    <div style="position: absolute; bottom: 5px; right: 20px; "><button class="btn-delete"><img src="img/delete.png" style="width:20px; height: 20px;"></button> </div>
                </div>
            </div>
        </div>


        <div class ="total ">
            <div class= "row">
                <div class= "col-md-9 col-sm-12">
                    <p style="color:grey;">Nombre d'articles total : X. PRIX TOTAL : &euro;</p>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div style="position: absolute; bottom: 17px;">
                        <a href="homepage.php"><button class="btt"> Retourner à mes achats </button></a>
                        <a href="payer.php"><button class="btt"> Payer </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>
</body>
</html>