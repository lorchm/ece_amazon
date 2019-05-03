<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    //si le BDD existe, faire le traitement
    if($db_found) {

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

    <!-- Barre de navigation -->
    <?php include('header.php') ?>

<!-- debut page des best seller -->
    <div class="page-venteflash container">
        <!-- Titre -->
        <div class="description page-header header container-fluid"> 
            <h1>Ventes Flash</h1> 
            <p>Retrouvez nos meilleures ventes</p> 
        </div>

        <!--**** BEST SELLERS LIVRES****-->
        <div class="best-livres">
            <h2 style="margin-left: 55px;">Livre</h2>
            <?php 
                    $top=1; //sert vous affihez le num des best sellers
                    $sql="SELECT * FROM livre ORDER BY nb_vendu DESC";
                    $result=mysqli_query($db_handle, $sql);
                    $i=0;
                    //début boucle
                    while ($data = mysqli_fetch_assoc($result)) { 
                        if($i < 4){     
            ?>
            <h2 style="margin-left: 55px;">#<?php echo $top ?></h2>
            <div class="cadre-prod container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <a href="img/livre.jpg" target="_blank"><img class="img-fluid" src="img/livre.jpg" style="width: auto; height: 185px;"></a>
                    </div>
                    <div class="col-md-5 col-sm-12" style="margin-top: 10px;">
                        <div class="en-tete-prod"> <b><?php echo $data['titre']?> </b></div>
                        <div class="en-tete-prod-deux"> <p><?php echo $data['auteur']." - ".$data['annee']." - ".$data['editeur']?></p> </div>
                        <div class="prix-prod"><?php echo $data['prix']?> &euro;</div>
                        <div class="reference-prod">Référence <?php echo $data['ref']?></div>
                        <div class="description-prod"><?php echo $data['descri']?></div>
                    </div>
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
                $i++;
                $top++;
                    }//fin du if affiche les 4 best sellers 
                }//fin du while
            ?>
        <!-- fin pour les livres -->

<!--**** BEST SELLERS MUSIQUE****-->
        <div class="best-musique">
            <h2 style="margin-left: 55px;">Musique</h2>
            <?php 
                $top=1; //sert vous affihez le num des best sellers
                $sql="SELECT * FROM musique ORDER BY nb_vendu DESC";
                $result=mysqli_query($db_handle, $sql);
                $i=0;
                //début boucle
                while ($data = mysqli_fetch_assoc($result)) { 
                    if($i < 4){     
            ?>
            <h2 style="margin-left: 55px;">#<?php echo $top ?></h2>
            <div class="cadre-prod container">
                <div class="row">
                    <!-- 1. IMAGE -->
                    <div class="col-md-3 col-sm-12">
                        <a href="img/aya.jpg" target="_blank"><img class="img-fluid" src="img/aya.jpg" style="width: auto; height: 185px;"></a>
                    </div>
                    <!-- 2. DETAIL ARTICLE -->
                    <div class="col-md-5 col-sm-12" style="margin-top: 10px;">
                        <div class="en-tete-prod"> <b><?php echo $data['titre']?> </b></div>
                        <div class="en-tete-prod-deux"> <p><?php echo $data['artiste']." - ".$data['annee']?></p> </div>
                        <div class="prix-prod"><?php echo $data['prix']?> &euro;</div>
                        <div class="reference-prod">Référence <?php echo $data['ref']?></div>
                    </div>
                    <!-- REMPLIR INFOS -->
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
                $i++;
                $top++;
                    }//fin du if affiche les 4 best sellers 
                }//fin du while
            ?>
        </div>



<!--**** BEST SELLERS VETEMENTS ET CHASSURES****-->
        <div class="best-vetement">
            <h2 style="margin-left: 50px;">Vetements et Chaussures</h2>
            <?php 
                $top=1; //sert vous affihez le num des best sellers
                $sql="SELECT * FROM vetement ORDER BY nb_vendu DESC";
                $result=mysqli_query($db_handle, $sql);
                $i=0;
                //début boucle
                while ($data = mysqli_fetch_assoc($result)) { 
                    if($i < 4){     
            ?>
            <h2 style="margin-left: 50px;">#<?php echo $top ?></h2>
            <!-- POUR CHAUSSURES ET VETEMENTS-->
            <div class="cadre-prod container">
                <div class="row">
                    <!-- 1. IMAGE -->
                    <div class="col-md-3 col-sm-12">
                        <a href="img/shoes.jpg" target="_blank"><img class="img-fluid" src="img/shoes.jpg" style="width: auto; height: 185px;"></a>
                    </div>
                    <!-- 2. DETAIL ARTICLE -->
                    <div class="col-md-5 col-sm-12" style="margin-top: 10px;">
                        <div class="en-tete-prod"> <b><?php echo $data['nom']?> </b></div>
                        <div class="en-tete-prod-deux"> <p><?php echo $data['marque']?></p> </div>
                        <div class="prix-prod"><?php echo $data['prix']?> &euro;</div>
                        <div class="reference-prod">Référence <?php echo $data['ref']?></div>
                        <div class="description-prod"><?php echo $data['descri']?></div>
                    </div>
                    <!-- 3. REMPLIR INFOS -->
                    <div class="col-md-4 col-sm-12">
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
                                    <?php 
                                        if($data['type_vet'] == 1){

                                    ?>
                                    <tr>
                                        <td>
                                            <label style="color:grey;">Sélectionnez une taille</label>
                                            <select style=" width: 50px;" ><OPTION><OPTION>XS <OPTION>S <OPTION>M <OPTION>L <OPTION>XL</select>
                                        </td>
                                        <?php
                                            }//fin if pour typ_vet = vetements
                                            
                                            else if ($data['type_vet'] == 0) {
                                            
                                        ?>
                                        <td>
                                            <label style="color:grey;">Sélectionnez une pointure</label>
                                            <select name="pointure" style=" width: 50px;"><OPTION><OPTION>36 <OPTION>37 <OPTION>38 <OPTION>39 <OPTION>40 <OPTION>41 <OPTION>42 <OPTION>43 <OPTION>44 <OPTION>45 </select>
                                        </td>

                                        <?php
                                            }//fin else if type_vet = chaussures
                                        ?>

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
                $i++;
                $top++;
                    }//fin du if affiche les 4 best sellers 
                }//fin du while
            ?>
        </div>

<!--**** BEST SELLERS SPORTS ET LOISIRS****-->
        <div class="best-sport">
            <h2 style="margin-left: 55px;">Sports et Loisirs</h2>
            <?php 
                $top=1; //sert vous affihez le num des best sellers
                $sql="SELECT * FROM sportloisir ORDER BY nb_vendu DESC";
                $result=mysqli_query($db_handle, $sql);
                $i=0;
                //début boucle
                while ($data = mysqli_fetch_assoc($result)) { 
                    if($i < 4){     
            ?>
            <h2 style="margin-left: 55px;">#<?php echo $top ?></h2>
                <div class="cadre-prod container">
                    <div class="row">
                        <!-- 1. IMAGE -->
                        <div class="col-md-3 col-sm-12">
                            <a href="img/sport.jpg" target="_blank"><img class="img-fluid" src="img/sport.jpg" style="width: auto; height: 185px;"></a>
                        </div>
                        <!-- 2. DETAIL ARTICLE -->
                        <div class="col-md-5 col-sm-12" style="margin-top: 10px;">
                            <div class="en-tete-prod"> <b><?php echo $data['nom']?> </b></div>
                            <div class="prix-prod"><?php echo $data['prix']?> &euro;</div>
                            <div class="reference-prod">Référence <?php echo $data['ref']?></div>
                            <div class="description-prod"><?php echo $data['descri']?></div>
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
                    $i++;
                    $top++;
                        }//fin du if affiche les 4 best sellers 
                    }//fin du while
                ?>
            </div>
        <!-- fin div page-venteflash -->
        </div>

        <?php
             }//fin du if
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
