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
<body class="page-musique">

    <!-- Barre de navigation -->
    <?php include('header.php') ?>


<!--************************************ Liste des musiques ******************************************************-->
    <div class="description page-header header container-fluid"> 
        <h1>Musique</h1> 
        <p> Découvrez les derniers hit du moment YEAAAH !!</p> 
    </div>

    <?php 
        //si le BDD existe, faire le traitement
        if($db_found) {

        $sql="SELECT * FROM musique";
        $result=mysqli_query($db_handle, $sql);

        //début boucle
        while ($data = mysqli_fetch_assoc($result)) {      
    ?>

    <div class="cadre-prod">
        <div class="row">
            <!-- 1. IMAGE -->
            <div class="col-md-3">
                <a href="img/aya.jpg" target="_blank"><img src="img/aya.jpg" style="width: 100%; height: 185px;"></a>
            </div>
            <!-- 2. DETAILS ARTICLE -->
            <div class="col-md-5" style="margin-top: 10px;">
                <div class="en-tete-prod"> <b><?php echo $data['titre']?> </b></div>
                <div class="en-tete-prod-deux"> <p><?php echo $data['artiste']." - ".$data['annee']?></p> </div>
                <div class="prix-prod"><?php echo $data['prix']?> &euro;</div>
                <div class="reference-prod">Référence <?php echo $data['ref']?></div>
            </div>
            <!-- 3. REMPLIR INFOS -->
            <div class="col-md-4">
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

    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>
</body>
</html>