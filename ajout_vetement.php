<?php

    Session_start();
    $L = $_SESSION["login"];
    $I = isset($_POST["recup"])?$_POST["recup"]:"";
    $Q = isset($_POST["quantite"])?$_POST["quantite"]:"";

    // INSERTION LIVRE
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
   
    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);
   
                      

    if($db_found){

        //determination de la ref_panier
        $sql = "SELECT MAX(ref_panier) FROM obj_panier";
        $result = mysqli_query($db_handle, $sql);
        $refs = mysqli_fetch_row($result);
        $N = $refs[0] + 1;

        //Ajout
        $sql1 ="INSERT INTO obj_panier (ref_panier,pseudo, categorie, id, quantite) VALUES ('$N','$L','3', '$I', '$Q')";
        $result1 = mysqli_query($db_handle, $sql1);
       }
   
    
    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else*/

    mysqli_close($db_handle);

    header('Location: vetements.php');

  

?>