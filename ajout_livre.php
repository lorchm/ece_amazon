<?php
//ajouter un livre
    Session_start();
    $N=$_SESSION["login"];

    $nb_vendu = 0;

    // INSERTION LIVRE
    $ref=isset($_POST["ref"])?$_POST["ref"] : "";
    $titre = isset($_POST["titre"])?$_POST["titre"] : "";
    $auteur = isset($_POST["auteur"])?$_POST["auteur"] : "";
    $annee = isset($_POST["annee"])?$_POST["annee"] : "";
    $prix = isset($_POST["prix"])?$_POST["prix"] : "";
    $editeur = isset($_POST["editeur"])?$_POST["editeur"] : "";
    $descri = isset($_POST["descri"])?$_POST["descri"] : "";

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
   
    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found) {
      echo "2";
      // if($_POST["ajout_livre"]){
        //faire if != pour blindage
          $sql ='INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`, `nb_vendu`, `id_vendeur`) VALUES ("'.$ref.'","'.$titre.'", "'.$auteur.'", "'.$annee.'", "'.$prix.'", "'.$editeur.'", "'.$descri.'", "'.$nb_vendu.'", "'.$N.'")';
          echo "requate sql";
          $result = mysqli_query($db_handle, $sql);
          echo "result";
          if ($result == true) {
              echo "c bon";
          }

        echo "bal";
      // }
    }

    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else

    mysqli_close($db_handle);
?>