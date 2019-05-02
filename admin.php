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

<!-- Page Admin -->
        <div class="description page-header header container-fluid"> 
            <h1>Admin</h1> 
        </div>

        <div style="margin:40px;">
            <div class="row">
                <!-- GESTION DES ARTICLES -->
                <div class="col-lg-4">
                    <div class="col1-admin">
                        <h2 style="color:#04263F; text-align: center; margin-top: 20px">Gestion des articles</h2>
                        
                        <div style="margin-left: 70px;">
                            <!-- Ajouter un produit -->
                            <h3 style="color:#DF912A; margin-top: 20px; margin-left: 30px;">Ajouter un Article</h3>
                            <a href="ajouter_produit.php"><button  id="ajouter_produit" class="btt" style="margin-top: 10px; width: 300px; height: 30px;">Ajouter</button></a>

                            <!-- Supprimer un produit -->
                            <h3 style="color:#DF912A; margin-top: 20px;  margin-left: 20px;">Supprimer un Article</h3>
                            
                            <form action="supprimer_prod" method="post">
                                <table>
                                    <tr>
                                        <td><label style="color:grey;">Référence de l'article : </label><input class="form-control" style="background-color:#f7f7f7;width: 300px; height: 30px;" type="text" name="reference"/></td>
                                   </tr>
                                   <tr>
                                        <td><label style="color:grey; margin-top: 10px;">Type de l'article : </label><br><select style="width: 300px;"><OPTION><OPTION>Livre <OPTION>Musique <OPTION>Vetement <OPTION>Sport et Loisir</select></td>
                                   </tr>
                                    <tr>
                                        <td><input id="supprimer_produit" class="btt" type="submit" value="Supprimer" style="margin-top: 10px;"></td>
                                    </tr>
                                 </table>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- GESTION DES VENDEURS -->
                <div class="col-lg-8">
                    <div class="col1-admin">
                        <h2 style="color:#04263F; text-align: center; margin-top: 20px;">Gestion des vendeurs</h2>

                        <div style="margin-left: 100px;  margin-top: 20px; ">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Ajouter vendeur -->
                                    <h3 style="color:#DF912A;">Ajouter un vendeur</h3>
                                    
                                    <form action="ajouter_prod" method="post">
                                        <table>
                                            <tr>
                                                <td><label style="color:grey;">Nom : </label><input class="form-control" style="background-color:#f7f7f7;width: 300px; height: 30px;" type="text" name="nom"/></td>
                                           </tr>
                                           <tr>
                                                <td><label style="color:grey;">Pseudo : </label><input class="form-control" style="background-color:#f7f7f7;width: 300px; height: 30px;" type="text" name="pseudo"/></td>
                                           </tr>
                                           <tr>
                                                <td><label style="color:grey;">Email : </label><input class="form-control" style="background-color:#f7f7f7;width: 300px; height: 30px;" type="text" name="email" placeholder="votre.email@exemple.com" /></td>
                                           </tr>
                                           <tr>
                                                <td><label style="color:grey;">Mot de Passe : </label><input class="form-control" style="background-color:#f7f7f7;width: 300px; height: 30px;" type="password" name="password"/></td>
                                           </tr>
                                           <tr>
                                                <td><label style="color:grey;">Photo de Profil: </label><input class="form-control" style="background-color:#f7f7f7;width: 300px; height: 45px;" type="file" name="photo_profil"/></td>
                                           </tr>
                                           <tr>
                                                <td><label style="color:grey;">Photo de Couverture: </label><input class="form-control" style="background-color:#f7f7f7;width: 300px; height: 45px;" type="file" name="photo_couv"/></td>
                                           </tr>
                                           <tr>
                                                <td><input id="ajouter_vendeur" class="btt" type="submit" value="Supprimer" style="margin-top: 10px;"></td>
                                            </tr>
                                         </table>
                                    </form>
                                </div>

                                <div class="col-sm-6">
                                    <!-- Ajouter un produit -->
                                    <h3 style="color:#DF912A;">Supprimer un Vendeur</h3>
                                    <form action="supprimer_vendeur" method="post">
                                        <table>
                                            <tr>
                                                <td><label style="color:grey;">Pseudo du vendeur : </label><input class="form-control" style="background-color:#f7f7f7;width: 300px; height: 30px;" type="text" name="pseudo"/></td>
                                           </tr>
                                            <tr>
                                                <td><input id="supprimer_vendeur" class="btt" type="submit" value="Supprimer" style="margin-top: 10px;"></td>
                                            </tr>
                                         </table>
                                    </form>
                                </div>
                            </div> 
                            <!-- fin row -->
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