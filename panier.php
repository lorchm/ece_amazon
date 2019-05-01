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
    <nav class="navbar navbar-expand-md">

        <a class="navbar-brand" href="homepage.php"> <img src="img/logo.png"> </a>         
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">      
            <span class="navbar-toggler-icon"></span>        
        </button>        


        <div class="collapse navbar-collapse" id="main-navigation">   


            <ul class="navbar-nav">             
                <li class="nav-cat"><a class="nav-link" href="#">Catégories</a>   
                    <ul class="submenu">
                        <li><a href="livres.php">Livres</a></li>
                        <li><a href="musique.php">Musiques</a></li>
                        <li><a href="vetements.php">Vêtements</a></li>
                        <li><a href="sport_loisirs.php">Sports et Loisirs</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="venteflash.php">Ventes Flash</a></li>             
                <li class="nav-item"><a class="nav-link" href="#">Vendre</a></li> 
                <li class="nav-item"><a class="nav-link" href="#">Votre Compte</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Admin</a></li>     
                <li class="nav-item"><a class="nav-link" href="panier.php">Panier</a></li> 
            </ul> 
            
        </div> 
    </nav>

<!--************************************ Liste articles du panier ******************************************************-->

    <div class="page-venteflash">
        <!-- Titre -->
        <div class="description page-header header container-fluid"> 
            <h1>Mon Panier</h1> 
        </div>

            <h2>Si c'est un livre/musique/sport</h2>
        <div class="cadre-prod">
            <div class="row">
                <div class="col-md-3">
                    <a href="img/livre.jpg" target="_blank"><img src="img/livre.jpg" style="width: 100%; height: 185px;"></a>
                </div>
                <div class="col-md-5" style="margin-top: 10px;">
                    <div class="en-tete-prod">Titre de Auteur | Annee publication  | Edition</div>
                    <div class="prix-prod">Mettre le prix &euro;</div>
                    <div class="reference-prod">La référence RS55ZQ</div>
                </div>
                <div class="col-md-4">
                    <div class="remplir-infos-prod">
                        <p style="color:grey;">Quantité : ...</p> 
                    </div> 
                    <div style="position: absolute; bottom: 5px; right: 20px; "><button class="btn-delete"></button> </div>
                </div>
            </div>
        </div>


        <h2>Si c'est un vetement</h2>
        <!-- POUR CHAUSSURES -->
        <div class="cadre-prod">
            <div class="row">
                <!-- 1. IMAGE -->
                <div class="col-md-3">
                    <a href="img/shoes.jpg" target="_blank"><img src="img/shoes.jpg" style="width: 100%; height: 185px;"></a>
                </div>
                <!-- 2. DETAIL ARTICLE -->
                <div class="col-md-5" style="margin-top: 10px;">
                    <div class="en-tete-prod">Marque - Nom de la Chaussures</div>
                    <div class="prix-prod">Mettre le prix &euro;</div>
                    <div class="reference-prod">La référence RS55ZQ</div>
                </div>
                <!-- 3. REMPLIR INFOS -->
                <div class="col-md-4">
                    <div class="remplir-infos-vet">
                        <p style="color:grey;">Quantité : ...</p>
                        <p style="color:grey;">Couleur : ...</p>
                        <p style="color:grey;">Sexe : ...</p> 
                        <p style="color:grey;">Pointure : ...</p> 
                    </div>
                </div>
            </div>
        </div>

        <!-- POUR VETEMENTS -->
        <div class="cadre-prod">
            <div class="row">
                <!-- 1. IMAGE -->
                <div class="col-md-3">
                    <a href="img/shoes.jpg" target="_blank"><img src="img/shoes.jpg" style="width: 100%; height: 185px;"></a>
                </div>
                <!-- 2. DETAIL ARTICLE -->
                <div class="col-md-5" style="margin-top: 10px;">
                    <div class="en-tete-prod">Marque - Nom du Vetement</div>
                    <div class="prix-prod">Mettre le prix &euro;</div>
                    <div class="reference-prod">La référence RS55ZQ</div>
                </div>
                <!-- 3. REMPLIR INFOS -->
                <div class="col-md-4">
                    <div class="remplir-infos-vet">
                        <p style="color:grey;">Quantité : ...</p>
                        <p style="color:grey;">Couleur : ...</p>
                        <p style="color:grey;">Sexe : ...</p> 
                        <p style="color:grey;">Taille : ...</p>     
                    </div>
                </div>
            </div>
        </div>


        <div class ="total">
            <div class= "row">
                <div class= "col-sm-9">

                    Nombre d'articles total : X. PRIX TOTAL : &euro;
                </div>
                <div class="col-sm-3">
                    <button class="btt"> Retourner à mes achats </button>
                    <button class="btt"> Payer </button>
                </div>
            </div>
        </div>
    </div>
 
<!--******************** PIED DE PAGE *********************************************************************************-->
        <footer class="page-footer">
           <div class="container">
               <div class="row">
                    <div class="col-lg-8">
                        <p>INFORMATIONS ADDITIONNNELLES<br>Notre equipe<br>Laure CHAMOUARD<br>Barbara GERMANEAU<br>Victor LABEYRIE</p>
                    </div>
                    <div class="col-lg-4">
                       <p>CONTACT<br>
                           37, quai de Grenelle, 75015 Paris, France <br>
                           <a href="mailto:ece.amazon@pro.com"> ece.amazon@pro.com</a> <br>
                           +33 01 02 03 04 05 <br>
                           +33 01 03 02 05 04
                       </p>
                   </div>
                </div>
                <div class="footer-copyright text-center">&copy; 2019 ECE Amazon | Droit d'auteur: BLV</div>
            </div>
        </footer>
</body>
</html>