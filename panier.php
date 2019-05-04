<?php
//ajouter un livre
    Session_start();
    $N=$_SESSION["login"];

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
   
    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database); 

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
<body class="page-livres">

    <!-- Barre de navigation -->
    <?php include('header.php') ?>

<!--************************************ Liste articles du panier ******************************************************-->

<!--     <div class="page-venteflash container">
 -->        <!-- Titre -->
        <div class="description page-header header container-fluid"> 
            <h1>Mon Panier</h1> 
        </div>

        <?php

            $sql= "SELECT * FROM obj_panier WHERE pseudo LIKE '".$N."'";
            $result = mysqli_query($db_handle, $sql);

            $Q = "SELECT SUM(quantite) FROM obj_panier WHERE pseudo LIKE '".$N."'";
            $q = mysqli_query($db_handle, $Q);
            $quantite_panier = mysqli_fetch_row($q);

            $payer=0;
            //on parcours tout les articles du clients
            while ($data = mysqli_fetch_assoc($result)){
                //Si Livres
                if($data['categorie'] == 0){
                    //nouvelle requete pour identifier quel article il a dans cette categorie
                    $sql1 = "SELECT * FROM livre WHERE ref = " .$data['id'];
                    $result1 = mysqli_query($db_handle, $sql1);

                    while ($data1 = mysqli_fetch_assoc($result1)){
                        $payer += $data['quantite']*$data1['prix'];
                        //on affiche le livre qui correspond à l'id
        ?>

        <div class="cadre-prod container">
            <div class="row">
                <!-- 1. IMAGE -->
                <div class="col-md-3 col-sm-12">
                    <a href="<?php echo $data1['url_img']?>" target="_blank"><img class="img-fluid" src="<?php echo $data1['url_img']?>" style="width: auto; height: 185px;"></a>
                </div>
                <!-- 2. DETAIL ARTICLE -->
                <div class="col-md-5 col-sm-12" style="margin-top: 10px;">
                    <div class="en-tete-prod"> <b><?php echo $data1['titre']?> </b></div>
                    <div class="en-tete-prod-deux"> <p><?php echo $data1['auteur']." - ".$data1['annee']." - ".$data1['editeur']?></p> </div>
                    <div class="prix-prod"><?php echo $data1['prix']?> &euro;</div>
                    <div class="reference-prod">Référence <?php echo $data1['ref']?></div>
                </div>
                <!-- 3. REMPLIR INFOS -->
                <div class="col-md-4  col-sm-12">
                    <div class="remplir-infos-prod">
                        <p style="color:grey;">Quantité : <?php echo $data['quantite']?></p>
                        <b style="color:red;"> Prix total =  <?php echo $data['quantite']*$data1['prix']?> &euro;</b>
                    </div>
                    <div style="position: absolute; bottom: 5px; right: 20px; "><button class="btn-delete"><img src="img/delete.png" style="width:20px; height: 20px;"></button> </div>
                </div>
            </div>
        </div>

        <?php 
                }//fin while id livre
            }//fin if livre

            // Si Musique
            if($data['categorie'] == 1){
                //nouvelle requete pour identifier quel article il a dans cette categorie
                $sql2 = "SELECT * FROM musique WHERE ref = " .$data['id'];
                $result2 = mysqli_query($db_handle, $sql2);

                while ($data2 = mysqli_fetch_assoc($result2)){
                    $payer += $data['quantite']*$data2['prix'];
        ?>
        <!-- MUSIQUE -->
        <div class="cadre-prod container">
            <div class="row">
                <!-- 1. IMAGE -->
                <div class="col-md-3 col-sm-12">
                    <a href="<?php echo $data2['url_img']?>" target="_blank"><img class="img-fluid" src="<?php echo $data2['url_img']?>" style="width: auto; height: 185px;"></a>
                </div>
                <!-- 2. DETAIL ARTICLE -->
                <div class="col-md-5 col-sm-12" style="margin-top: 10px;">
                    <div class="en-tete-prod"> <b><?php echo $data2['titre']?> </b></div>
                    <div class="en-tete-prod-deux"> <p><?php echo $data2['artiste']." - ".$data2['annee']?></p> </div>
                    <div class="prix-prod"><?php echo $data2['prix']?> &euro;</div>
                    <div class="reference-prod">Référence <?php echo $data2['ref']?></div>
                </div>
                <!-- 3. REMPLIR INFOS -->
                <div class="col-md-4  col-sm-12">
                    <div class="remplir-infos-prod">
                        <p style="color:grey;">Quantité : <?php echo $data['quantite']?></p>
                        <b style="color:red;"> Prix total =  <?php echo $data['quantite']*$data2['prix']?> &euro;</b>
                    </div>
                    <div style="position: absolute; bottom: 5px; right: 20px; "><button class="btn-delete"><img src="img/delete.png" style="width:20px; height: 20px;"></button> </div>
                </div>
            </div>
        </div>

        <?php
                }//fin while musique
            }//fin if musique

            //Si Sport et Loisirs
            if($data['categorie'] == 2){
                //nouvelle requete pour identifier quel article il a dans cette categorie
                $sql3 = "SELECT * FROM sportloisir WHERE ref = " .$data['id'];
                $result3 = mysqli_query($db_handle, $sql3);

                while ($data3 = mysqli_fetch_assoc($result3)){
                    $payer += $data['quantite']*$data3['prix'];
        ?>
        <!-- SPORT ET LOISIRS -->
        <div class="cadre-prod container">
            <div class="row">
                <!-- 1. IMAGE -->
                <div class="col-md-3 col-sm-12">
                    <a href="<?php echo $data3['url_img']?>" target="_blank"><img class="img-fluid" src="<?php echo $data3['url_img']?>" style="width: auto; height: 185px;"></a>
                </div>
                <!-- 2. DETAIL ARTICLE -->
                <div class="col-md-5 col-sm-12" style="margin-top: 10px;">
                    <div class="en-tete-prod"> <b><?php echo $data3['nom']?> </b></div>
                    <div class="prix-prod" style="margin-top: 1rem;" ><?php echo $data3['prix']?> &euro;</div>
                    <div class="reference-prod">Référence <?php echo $data3['ref']?></div>
                </div>
                <!-- 3. REMPLIR INFOS -->
                <div class="col-md-4  col-sm-12">
                    <div class="remplir-infos-prod">
                        <p style="color:grey;">Quantité : <?php echo $data['quantite']?></p>
                        <b style="color:red;"> Prix total =  <?php echo $data['quantite']*$data3['prix']?> &euro;</b>
                    </div>
                    <div style="position: absolute; bottom: 5px; right: 20px; "><button class="btn-delete"><img src="img/delete.png" style="width:20px; height: 20px;"></button> </div>
                </div>
            </div>
        </div>

        <?php
                }//fin while sport et loisir
            }//fin if sport et loisir
            //Si Vetement
            if($data['categorie'] == 3){
                //nouvelle requete pour identifier quel article il a dans cette categorie
                $sql4 = "SELECT * FROM vetement WHERE ref = " .$data['id'];
                $result4 = mysqli_query($db_handle, $sql4);

                while ($data4 = mysqli_fetch_assoc($result4)){
                    $payer += $data['quantite']*$data4['prix'];
        ?>

        <!-- POUR VETEMENTS -->
        <div class="cadre-prod container">
            <div class="row">
                <!-- 1. IMAGE -->
                <div class="col-md-3 col-sm-12">
                    <a href="<?php echo $data4['url_img']?>" target="_blank"><img class="img-fluid" src="<?php echo $data4['url_img']?>" style="width: 100%; height: 185px;"></a>
                </div>
                <!-- 2. DETAIL ARTICLE -->
                <div class="col-md-5 col-sm-12" style="margin-top: 10px;">
                    <div class="en-tete-prod"><b><?php echo $data4['nom']?> </b></div>
                    <div class="prix-prod"><?php echo $data4['prix']?> &euro;</div>
                    <div class="reference-prod">Référence <?php echo $data4['ref']?></div>
                </div>
                <!-- 3. REMPLIR INFOS -->
                <div class="col-md-4 col-sm-12">
                    <div class="remplir-infos-vet">
                        <p style="color:grey;">Quantité : <?php echo $data['quantite']?></p>
                        <p style="color:grey;">Couleur : ...</p>
                        <p style="color:grey;">Sexe : ...</p>
                        <!-- TAILLE -->
                        <?php 
                            if($data4['type_vet'] == 1){
                        ?>
                        <p style="color:grey;">Taille : ...</p>
                        <?php
                            }//fin if pour typ_vet = vetements                    
                                else if ($data4['type_vet'] == 0) {    
                        ?>
                        <p style="color:grey;">Pointure : ...</p>
                        <?php
                            }//fin else if type_vet = chaussures
                        ?>
                        <b style="color:red;"> Prix total =  <?php echo $data['quantite']*$data4['prix']?> &euro;</b> 
                    </div>
                    <div style="position: absolute; bottom: 5px; right: 20px; "><button class="btn-delete"><img src="img/delete.png" style="width:20px; height: 20px;"></button> </div>
                </div>
            </div>
        </div>


<!-- FIN AFFICHAGE DES ARTICLES DU PANIER -->
<?php
                }//fin while vetement
            }//fin while vetement
        } //fin while du pseudo
?>

        <div class ="total container">
            <div class= "row">
                <div class= "col-md-9 col-sm-12">
                    <b style="color:#ffa630;">Nombre d'articles total : <?php echo $quantite_panier[0];?></b>
                    <b style="color:#ffa630; margin-left: 10px;">PRIX TOTAL : <?php echo $payer; $_SESSION['payer'] = $payer;?> &euro;</b>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div style="position: absolute; bottom: 0px;">
                        <form method=POST action=payer.php>
                                                    <a href="homepage.php"><button class="btt"> Retourner à mes achats </button></a>
                        <a href="payer.php"><button class="btt"> Payer </button></a>
                           <input type="hidden" name="var1" value="<?php echo "".$payer."" ?>"></input>
                        </form>


                    </div>
                </div>
            </div>
        </div>

<?php
    } //fin du if database found
    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else

    mysqli_close($db_handle);
?>
<!--     </div>
 -->

    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>
</body>
</html>