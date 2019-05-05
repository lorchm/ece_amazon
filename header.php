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
    <script src="co_deco.js" type="text/javascript" ></script>
    <link href="styles.css" rel="stylesheet" type="text/css" />
    

</head>
<body>
	<!-- Barre de navigation -->
    <nav class="navbar navbar-expand-md" style="padding : 0px 12px;">

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
                <li class="nav-item"><a class="nav-link" href="tvendeur.php">Vendre</a></li> 
                <li class="nav-item"><a class="nav-link" href="connexion.php">Votre Compte</a></li>
                <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>     
                <li class="nav-item"><a class="nav-link" href="panier.php">Panier</a></li> 
            </ul> 

             <div class="navbar-nav" >
                <table>
                   
                    <tr><td><a class="btn btn-primary" style="width:150px;"  href="connexion.php">Se connecter</a></td></tr>

                 <form action="deconnexion.php" method="POST">

                    <tr><td><input class="btn btn-primary" style="width:150px;" type="submit" value="Se déconnecter" /></td></tr>

                </form>
                </table>
            </div>
            
        </div> 
    </nav>

</body>
</html>