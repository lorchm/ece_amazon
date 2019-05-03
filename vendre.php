<?php

    Session_start();
    $N = $_SESSION["login"];

    
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

?>

<html>
<head>
	<title>ECE Amazon :: Vendre</title>
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
        <!-- ***** PARTIE DU PROFIL ET DES BOUTONS ***** -->
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

        <!--********** PARTIE AFFICHAGE DES PRODUITS EN VENTE SELON LE PSEUDO *********** -->
        <?php 
        //si le BDD existe, faire le traitement
        if($db_found) {

        $sql='SELECT * FROM musique WHERE id_vendeur =".$N."';
        $result=mysqli_query($db_handle, $sql);

        //début boucle
        while ($data = mysqli_fetch_assoc($result)) {      
        ?>

        <div class="cadre-prod container">
        <div class="row">
            <!-- 1. IMAGE -->
            <div class="col-md-3 col-sm-12">
                <a href="img/aya.jpg" target="_blank"><img class="img-fluid" src="img/aya.jpg" style="width: auto; height: 185px;"></a>
            </div>
            <!-- 2. DETAILS ARTICLE -->
            <div class="col-md-5 col-sm-12" style="margin-top: 10px;">
                <div class="en-tete-prod"> <b><?php echo $data['titre']?> </b></div>
                <div class="en-tete-prod-deux"> <p><?php echo $data['artiste']." - ".$data['annee']?></p> </div>
                <div class="prix-prod"><?php echo $data['prix']?> &euro;</div>
                <div class="reference-prod">Référence <?php echo $data['ref']?></div>
            </div>
            <!-- 3. REMPLIR INFOS -->
            <div class="col-md-4 col-sm-12">
                <div class="remplir-infos-prod">
                    <form>
                        <!-- QUANTITE -->
                        <tr>
                            <td>
                                <label style="color:grey; margin-left: 70px;">Quantité  </label><input type="number" name="quantite" id="quantite" style="width: 50px; margin-left: 10px; font-size: 12px;">
                            </td>
                        </tr>
                        <!-- AJOUTER PANIER -->
                        <tr>
                            <td><input type="button" id="ajout-panier" name="ajout-panier" value="Ajouter au panier" class="ajout-panier-btn" style="margin-top:20px; "></td>
                        </tr>
                    </form> 
                </div> 
            </div>
        </div>
    </div>

    <?php 
            }//fin boucle
        }//fin if

        //si la BDD n'existe pas
        else {
            echo "Database not found";
        }//end else

        mysqli_close($db_handle);
    ?>






    </div>


    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>
</body>
</html>