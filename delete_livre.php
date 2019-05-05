<?php

    Session_start();
    $L = $_SESSION["login"];
    $I = isset($_POST["recup"])?$_POST["recup"]:"";

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
        $sql = "DELETE FROM obj_panier WHERE ref_panier = ".$I;
        $result = mysqli_query($db_handle, $sql);
    }
   
    
    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else*/

    mysqli_close($db_handle);

    header('Location: panier.php');

  

?>