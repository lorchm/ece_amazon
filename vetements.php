<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

?>

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
<body class="page-vetement">

        <!-- Barre de navigation -->
    <?php include('header.php') ?>

<!--************************************ Liste des Livres ******************************************************-->
    <div class="description page-header header container-fluid"> 
        <h1>Vêtements et Chaussures</h1> 
        <p>Coucou les boyz and girlz , regardez les dernières tendances ;)</p> 
    </div>
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
                <div class="description-prod">Chaussures plutot comfortable</div>
            </div>
            <!-- 3. REMPLIR INFOS -->
            <div class="col-md-4">
                <div class="remplir-infos-vet">
                    <form>
                        <table>
                            <!-- QUANTITE -->
                            <tr>
                                <td>
                                    <label style="color:grey;">Quantité  </label><input type="number" name="quantite" id="quantite" style="width: 50px; margin-left: 10px; font-size: 12px;">
                                </td>
                            </tr>
                            <!-- COULEUR -->
                            <tr>
                                <td>
                                    <label style="color:grey;">Couleur</label>
                                    <select style="width: 50px; margin-left:12px;"><OPTION><OPTION>Bleu <OPTION>Rouge <OPTION>Vert <OPTION>Blanc <OPTION>Noir <OPTION>Jaune<OPTION>Rose</select>
                                </td>
                            </tr>
                            <!-- SEXE -->
                            <tr>
                                <td>
                                    <input type="radio" id="femme" name="sexe" ><label style="color:grey; margin-left: 10px;" for="femme">Femelle</label>
                                    <input type="radio" id="homme" name="sexe" style="margin-left: 10px;"><label style="color:grey; margin-left: 10px;" for="homme">Male</label></td>
                                </td>
                            </tr>
                            <!-- TAILLE -->
                            <tr>
                                <td>
                                    <label style="color:grey;">Sélectionnez une taille</label>
                                    <select style=" width: 50px;" ><OPTION><OPTION>XS <OPTION>S <OPTION>M <OPTION>L <OPTION>XL</select>
                                </td>
                                <td>
                                    <label style="color:grey;">Sélectionnez une pointure</label>
                                    <select name="pointure" style=" width: 50px;"><OPTION><OPTION>36 <OPTION>37 <OPTION>38 <OPTION>39 <OPTION>40 <OPTION>41 <OPTION>42 <OPTION>43 <OPTION>44 <OPTION>45 </select>
                                    </td>
                            </tr>
                            <!-- AJOUTER AU PANIER -->
                            <tr>
                                <td><input type="button" id="ajout-panier" name="ajout-panier" value="Ajouter au panier" class="ajout-panier-btn"></td>
                            </tr>
                        </table>
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
    
    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>
</body>
</html>
