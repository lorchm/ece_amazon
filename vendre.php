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
                <li class="nav-item"><a class="nav-link" href="vendre.php">Vendre</a></li> 
                <li class="nav-item"><a class="nav-link" href="info_compte.php">Votre Compte</a></li>
                <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>     
                <li class="nav-item"><a class="nav-link" href="panier.php">Panier</a></li> 
            </ul> 
            
        </div> 
    </nav>
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