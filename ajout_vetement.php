<?php

    Session_start();
    $L = $_SESSION["login"];
    $I = isset($_POST["recup"])?$_POST["recup"]:"";
    $Q = isset($_POST["quantite"])?$_POST["quantite"]:"";
    $T = isset($_POST["type_vet"])?$_POST["type_vet"]:"";
    $C = isset($_POST["couleur"])?$_POST["couleur"]:"";

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

        if ($T == 1)
        {
            $taille = isset($_POST["taille"])?$_POST["taille"]:"";
            ///VETEMENT
            if (isset($_POST['Femelle']))
            {
                $sql1 ="INSERT INTO obj_panier (ref_panier,pseudo, categorie, id, quantite, couleur, taille, pointure, sexe) VALUES ('$N','$L','3', '$I', '$Q', '$C', '$taille',NULL,'Femelle')";
                $result1 = mysqli_query($db_handle, $sql1);
            }
            else
            {
                $sql1 ="INSERT INTO obj_panier (ref_panier,pseudo, categorie, id, quantite, couleur, taille, pointure, sexe) VALUES ('$N','$L','3', '$I', '$Q', '$C', '$taille',NULL,'Male')";
                $result1 = mysqli_query($db_handle, $sql1);
            }
            
        }
        else
        {
            $pointure = isset($_POST["pointure"])?$_POST["pointure"]:"";
            ///CHAUSSURES

            if(isset($_POST['Femelle']))
            {
                $sql1 ="INSERT INTO obj_panier (ref_panier,pseudo, categorie, id, quantite, couleur, taille, pointure, sexe) VALUES ('$N','$L','3', '$I', '$Q', '$C', NULL,'$pointure','Femelle')";
                $result1 = mysqli_query($db_handle, $sql1);
            }
            else
            {
                $sql1 ="INSERT INTO obj_panier (ref_panier,pseudo, categorie, id, quantite, couleur, taille, pointure, sexe) VALUES ('$N','$L','3', '$I', '$Q', '$C', NULL,'$pointure','Male')";
                $result1 = mysqli_query($db_handle, $sql1);
            }
            
        }
        
    }
   
    
    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else*/

    mysqli_close($db_handle);

    header('Location: vetements.php');

?>