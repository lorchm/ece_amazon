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
        $prix= isset($_POST["prix"])?$_POST["prix"]:"";
        //pas connecté
        if ($_SESSION['login'] == "") {
            header('Location: connexion.php');
        }  
        //else connecté
        else{

            $card_name= isset($_POST["card_name"])?$_POST["card_name"]:"";
            $card_type= isset($_POST["card_type"])?$_POST["card_type"]:"";
            $card_number= isset($_POST["card_number"])?$_POST["card_number"]:"";
            $exp_date= isset($_POST["exp_date"])?$_POST["exp_date"]:"";
            $sec_code= isset($_POST["sec_code"])?$_POST["sec_code"]:"";

            $sql= "SELECT * FROM acheteur WHERE pseudo LIKE '".$N."'";
            $result = mysqli_query($db_handle, $sql);

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
 
    <div class="page-venteflash">
        <!-- Titre -->

        <div class="description page-header header container-fluid"> 
            <h1>Finalisation de la commande <img src="img/bags.png" style="width: 50px; height: 50px;"></h1>
            <h1>Total : <?php echo $prix;?> &euro;</h1>
        </div>


        <div class="container fluid center_div" >
                <!-- MESSAGE POUR DIRE COMMANDE VALILDER -->
                <?php
                    if (isset($_POST['Valider']) AND $_POST['Valider']=='valider') {
                        //on parcours tout les articles du clients
                        while ($data = mysqli_fetch_assoc($result)){
                            if ($card_name==$data['card_name'] && $card_type==$data['card_type'] && $card_number==$data['card_number'] && $exp_date==$data['exp_date'] && $sec_code==$data['sec_code']) {
                ?>
                <p style="color:grey;">Votre commmande a bien été validé. Vous serez livrez dans à peu près 10 minutes. Merci de faire confance à ECE AMAZON ! <img src="img/checked.png" style="width:30px; height: 30px;"></p>

                <!-- **************************RAJOUTER CODE POUR ENVOYER UN MAIL A LA PERSONNE APRES VALIDATION******************************************** -->
                <!-- *************************************************************************************************************************************** -->
                <?php 
                             }//fin if condition ok
                            else{ ?>
                <p style="color:grey;">Les informations saisies ne correspondent pas à celles enregistrées dans votre compte /!\ Veuillez ressaisir ou vérifier votre compte. <img src="img/wrong.png" style="width:30px; height: 30px;"></p>

                <?php
                            }//fin else condition pas bon
                        }//fin while
                    }//fin if click 
                ?>

                <form action ="payer.php" method="post">
                    <table>
                        <tr>
                             <label>Nom sur la carte</label><input class="form-control center-con container"  style="width: 250px;"type="text" name="card_name" size ="25" required/><br><br>
                        </tr>

                        <tr>
                            <label>Type de carte (visa, master card, american express)</label> <input class="form-control center-con container"  style="width: 250px; " type="text" name="card_type" size="10" required/><br> <br>
                        </tr>

                        <tr>
                           <label>Numero de carte</label><input class="form-control center-con container" style="width: 250px;" type="number" name="card_number" size ="25" maxlength="3" required/><br><br>
                       </tr>

                        <tr>
                             <label>Date d'expiration</label><input class="form-control center-con container"  style="width: 250px;" type="date" name="exp_date" size ="25" required/><br><br>
                        </tr>

                        <tr>
                             <label>Code Secret</label><input class="form-control center-con container"  style="width: 250px;" type="password" name="sec_code" size ="25" maxlength="3" required/><br><br>
                        </tr>
                    </table>

                    <div class="center-block">
                        <div class="but">
                            <tr>
                                <td><input class="btn btn-primary" style="width:150px;" type="submit" name="Valider" value="valider" ></td>
                            </tr>
                        </div>
                        <br>
                        <br>
                    </div>
                </form>
            </div>
    </div>

    <?php 
        }//fin else connecet 
    } //fin du if database found
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