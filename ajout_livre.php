<?php
//ajouter un livre
    Session_start();
   $N=$_SESSION["livre"];
    
     $A= isset($_POST["test"])?$_POST["test"]:"";
     echo "$A";
    $Q= isset($_POST["quantite"])?$_POST["quantite"]:"";
    $nb_vendu = 0;

    // INSERTION LIVRE

 
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
   
    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

                  

    if($db_found) {

             echo "$Q";

      // if($_POST["ajout_livre"]){
        //faire if != pour blindage
         $sql ="INSERT INTO obj_panier (ref_panier,pseudo, categorie, id, quantite) VALUES ('9','gege2020','2', '$A', '$Q')";
         
          $result = mysqli_query($db_handle, $sql);
       }
   
    
    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else

    mysqli_close($db_handle);

  

?>