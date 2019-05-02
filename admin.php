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
                            <a href="ajout_article.php"><button  id="ajouter_produit" class="btt" style="margin-top: 10px; width: 300px; height: 30px;">Ajouter</button></a>

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
                                                <td><input id="ajouter_vendeur" class="btt" type="submit" value="Ajouter" style="margin-top: 10px;"></td>
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

        

    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>
</body>
</html>