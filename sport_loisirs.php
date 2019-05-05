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

    <script type="text/javascript"> function valide(){ alert("Le produit a bien été ajouté") } </script>

</head>
<body class="page-sport">

    <!-- Barre de navigation -->
    <?php include('header.php') ?>

<!--************************************ Liste des sports ******************************************************-->
    <div class="description page-header header container-fluid"> 
        <h1>Sport et Loisirs <img src="img/ball.png" style="width: 50px; height: 50px;"></h1> 
        <p>Besoin d'idées pour des activités ?</p> 
    </div>

    <?php 
        //si le BDD existe, faire le traitement
        if($db_found) {

            $sql="SELECT * FROM sportloisir";
            $result=mysqli_query($db_handle, $sql);

            //début boucle
            while ($data = mysqli_fetch_assoc($result)) {       
    ?>

    <div class="cadre-prod container-fluid">
        <div class="row">
            <!-- 1. IMAGE -->
            <div class="col-md-3 col-sm-12">
                <a href="<?php echo $data['url_img']?>" target="_blank"><img class="img-fluid" src="<?php echo $data['url_img']?>" style="width: auto; height: 185px;"></a>
            </div>
            <!-- 2. DETAIL ARTICLE -->
            <div class="col-md-3 col-sm-12" style="margin-top: 10px;">
                <div class="en-tete-prod"> <b><?php echo $data['nom']?> </b></div>
                <div class="prix-prod"><?php echo $data['prix']?> &euro;</div>
                <div class="reference-prod">Référence <?php echo $data['ref']?></div>
                <div class="description-prod"><?php echo $data['descri']?></div>
            </div>

            <!-- 3. AFFICHER LA VIDEO -->
            <div class="col-md-3 col-sm-12" style="margin-top: 10px;">
                <div style="position : relative;"><?php echo $data['lien_video'] ?></div>
            </div>

            <!-- 4. REMPLIR INFOS -->
            <div class="col-md-3 col-sm-12">
                <div class="remplir-infos-prod">
                    <form action="ajout_sportloisirs.php" method="post">
                        <!-- QUANTITE -->
                        <tr>
                            <td>
                                <label style="color:grey; margin-left: 70px;">Quantité  </label><input required type="number" name="quantite" id="quantite" style="width: 50px; margin-left: 10px; font-size: 12px;">
                            </td>
                        </tr>
                        <!-- AJOUTER PANIER -->
                        <tr>
                            <input type="hidden" name="recup" value="<?php echo $data['ref']?> ">
                            <td><input type="submit" id="ajout-panier" onclick="valide()" name="ajout-panier" value="Ajouter au panier" class="ajout-panier-btn" style="margin-top:20px; "></td>
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

    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>
</body>
</html>