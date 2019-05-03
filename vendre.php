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
    </div>

    <div  class="container" style="background-image: url('img/aya.jpg');">
        <div class="row">
            <div class="col-md-9 col-sm-12"> 
                <div class="row">
                    <div class="col-md-4">

                        <!-- Ajouter un produit -->
                        <h3 style="color:#04263F; background-color:#C1E7ED; width: 170px; margin-top: 20px; margin-left: 30px;">Ajouter un Article</h3>
                        <a href="ajout_article.php"><button  id="ajouter_produit" class="btt" style="background-color:#C1E7ED; color:#04263F; margin-top: 10px; width: 230px; height: 30px;">Ajouter</button></a>

                    </div>
                    
                    <div class="col-md-4">

                        <!-- Supprimer un produit -->
                        <h3 style="color:#04263F; background-color:#C1E7ED; width : 200px; margin-top: 20px;  margin-left: 20px;">Supprimer un Article</h3>
                                        
                        <form action="supprimer_prod" method="post">
                            <table>
                                <tr>
                                    <td><label style="color:grey;">Référence de l'article : </label><input class="form-control" style="background-color:#f7f7f7;width: 230px; height: 30px;" type="text" name="reference"/></td>
                                </tr>
                                <tr>
                                    <td><label style="color:grey; margin-top: 10px;">Type de l'article : </label><br><select style="width: 230px;"><OPTION><OPTION>Livre <OPTION>Musique <OPTION>Vetement <OPTION>Sport et Loisir</select></td>
                                </tr>
                                <tr>
                                    <td><input id="supprimer_produit" class="btt" type="submit" value="Supprimer" style="color:#04263F ;background-color:#C1E7ED; margin-top:10px;"></td>
                                </tr>
                                </table>
                        </form>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12"> 
                <div class = "profil"> 
                        <img src="img/shiba.jpg" class="roundedImage" style="width : 100px;height : 100px;"> <br>
                        <b class="pseud"> Patrick </b>
                </div>
            </div>
        </div>
    </div>


    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>
</body>
</html>