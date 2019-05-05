<?php

    Session_start();
    $N=$_SESSION["login"];

    $a0= isset($_POST["ref"])?$_POST["ref"]:"";
    $a1= isset($_POST["nom"])?$_POST["nom"]:"";
    $a2= isset($_POST["descri"])?$_POST["descri"]:"";
    $a3= isset($_POST["prix"])?$_POST["prix"]:"";
    $a4= isset($_POST["photos"])?$_POST["photos"]:"";
    $a5= isset($_POST["videos"])?$_POST["videos"]:"";   
    $a7= isset($_POST["video"])?$_POST["video"]:"";
   
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
   
    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found) {

        //variable qui contient le pseudo de la personne à qui faut changer
        $sql = "INSERT INTO sportloisir (ref,nom,prix,descri,nb_vendu,id_vendeur, url_img, lien_video) VALUES ('$a0', '$a1','$a3','$a2','0','$N','$a4', '$a7')";
        
        $result = mysqli_query($db_handle, $sql);
    }
    else {
        echo"Database not found";
    }

    mysqli_close($db_handle);
        
    header('Location: vendre.php');
?>