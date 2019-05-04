<?php

    Session_start();
    $N=$_SESSION["login"];

    $a0= isset($_POST["ref"])?$_POST["ref"]:"";
    $a1= isset($_POST["nom"])?$_POST["nom"]:"";
    $a2= isset($_POST["sexe"])?$_POST["sexe"]:"";
    $a3= isset($_POST["couleur"])?$_POST["couleur"]:"";
    $a4= isset($_POST["type"])?$_POST["type"]:"";
    $a5= isset($_POST["pointure"])?$_POST["pointure"]:"";
    $a6= isset($_POST["taille"])?$_POST["taille"]:"";
    $a7= isset($_POST["descri"])?$_POST["descri"]:"";
    $a8= isset($_POST["prix"])?$_POST["prix"]:"";
    $a9= isset($_POST["photo"])?$_POST["photo"]:"";

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
   
    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found) {

        if($a4 == 0){
            $sql = "INSERT INTO vetement (ref,type_vet,nom,descri,prix,sexe,pointure,taille,nb_vendu,id_vendeur, url_img) VALUES ('$a0','$a4','$a1','$a7','$a8','$a2','$a5',NULL,'0','$N', '$a9')";
            $result = mysqli_query($db_handle, $sql);
        }
        else{
            $sql = "INSERT INTO vetement (ref,type_vet,nom,descri,prix,sexe,pointure,taille,nb_vendu,id_vendeur, url_img) VALUES ('$a0','$a4','$a1','$a7','$a8','$a2',NULL,'$a6','0','$N', '$a9')";
            $result = mysqli_query($db_handle, $sql);
        }
    }
    else {
        echo"Database not found";
    }

    mysqli_close($db_handle);
        
    header('Location: vendre.php');
?>