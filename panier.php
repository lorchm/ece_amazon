<html>
<head>
	<title>ECE Amazon :: Panier</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 

    <script type="text/javascript" src="program.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-md">

        <a class="navbar-brand" href="squelette.html"> <img src="img/logo.png"> </a>         
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">      
            <span class="navbar-toggler-icon"></span>        
        </button>        

        <div class="collapse navbar-collapse" id="main-navigation">   
            <ul class="navbar-nav">             
                <li class="nav-cat"><a class="nav-link" href="#">Catégories</a>   
                    <ul class="submenu">
                        <li><a href="livres.html">Livres</a></li>
                        <li><a href="musique.html">Musiques</a></li>
                        <li><a href="vetements.html">Vêtements</a></li>
                        <li><a href="sport_loisirs.html">Sports et Loisirs</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="venteflash.html">Ventes Flash</a></li>             
                <li class="nav-item"><a class="nav-link" href="#">Vendre</a></li> 
                <li class="nav-item"><a class="nav-link" href="#">Votre Compte</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Admin</a></li>     
                <li class="nav-item"><a class="nav-link" href="#">Panier</a></li> 
            </ul> 
            
        </div> 
    </nav>

    <!-- debut page panier -->
    <div class="page-venteflash">

        <!-- Titre -->
        <div class="description page-header header container-fluid"> 
            <h1>Panier</h1> 
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

<!--******************** Pied de page ********************************************************************************-->
    <footer class="page-footer">
       <div class="container">
           <div class="row">
                <!-- 1ere de colonne de 8/8/12--> 
                <div class="col-lg-8">
                <p>INFORMATIONS ADDITIONNNELLES<br>Notre equipe<br>Laure CHAMOUARD<br>Barbara GERMANEAU<br>Victor LABEYRIE</p>
                </div>
                <!-- 2eme colonne de 8/4/12--> 
                <div class="col-lg-4">
                   <p>CONTACT<br>
                       37, quai de Grenelle, 75015 Paris, France <br>
                       <a href="mailto:ece.amazon@pro.com"> ece.amazon@pro.com</a> <br>
                       +33 01 02 03 04 05 <br>
                       +33 01 03 02 05 04
                   </p>
               </div>
            </div>
            <div class="footer-copyright text-center">&copy; 2019 ECE Amazon | Droit d'auteur: webDynamique.ece.fr</div>
        </div>
    </footer>

</body>
</html>