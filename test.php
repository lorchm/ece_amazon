<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    //si le BDD existe, faire le traitement
    if($db_found) {

        $sql="SELECT * FROM livre";
        $result=mysqli_query($db_handle, $sql);

        while ($data = mysqli_fetch_assoc($result)) {
            echo $data['titre'] . "<br>";
        }
    }

    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else

    mysqli_close($db_handle);
?>