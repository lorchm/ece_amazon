<?php

    Session_start();
    $N=$_SESSION["login"];

    $a0= isset($_POST["ref"])?$_POST["ref"]:"";
    $a1= isset($_POST["titre"])?$_POST["titre"]:"";
    $a2= isset($_POST["auteur"])?$_POST["auteur"]:"";
    $a3= isset($_POST["editeur"])?$_POST["editeur"]:"";
    $a4= isset($_POST["annee"])?$_POST["annee"]:"";
    $a5= isset($_POST["descri"])?$_POST["descri"]:"";
    $a6= isset($_POST["prix"])?$_POST["prix"]:"";
    $a7= isset($_POST["photo"])?$_POST["photo"]:"";

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
   
    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found) {

        $var = "img/articles/".$a7; 

        //variable qui contient le pseudo de la personne à qui faut changer
        $sql = "INSERT INTO livre (ref, titre,auteur,annee,prix,editeur,descri,nb_vendu,id_vendeur, url_img) VALUES ('$a0','$a1','$a2','$a4','$a6','$a3','$a5','0','$N', '$var')";
        $result = mysqli_query($db_handle, $sql);
    }
    else {
        echo"Database not found";
    }

    mysqli_close($db_handle);
        
    header('Location: vendre.php');
?>