<?php

    session_start();
    $N=$_SESSION["login"];
    $a0= isset($_POST["login"])?$_POST["login"]:"";
    $a1= isset($_POST["mdp"])?$_POST["mdp"]:"";
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
        
        echo "$a0";
        echo "$N";

        /*$a0 = $_POST['pseudo'];*/
        $sql0 = 'UPDATE acheteur SET pseudo="'.$a0.'" WHERE pseudo="'.$N.'"';
        $result0 = mysqli_query($db_handle, $sql0);

       //$a1 = $_POST['mdp'];
        $sql1 = 'UPDATE acheteur SET mdp=("'.$a1.'") WHERE pseudo=("'.$N.'")';
        $result1 = mysqli_query($db_handle, $sql1);

       /* $a2 = $_POST['email'];
        $sql2 = 'UPDATE acheteur SET email=$a2 WHERE pseudo="$personne_co"';
        $result2 = mysqli_query($db_handle, $sql2);

        $a3 = $_POST['nom'];
        $sql3 = 'UPDATE acheteur SET nom=$a3 WHERE pseudo="$personne_co"';
        $result3 = mysqli_query($db_handle, $sql3);

        $a4 = $_POST['prenom'];
        $sql4 = 'UPDATE acheteur SET prenom=$a4 WHERE pseudo="$personne_co"';
        $result4 = mysqli_query($db_handle, $sql4);

        $a5 = $_POST['adresse1'];
        $sql5 = 'UPDATE acheteur SET adresse1=$a5 WHERE pseudo="$personne_co"';
        $result5 = mysqli_query($db_handle, $sql5);

        $a6 = $_POST['adresse2'];
        $sql6 = 'UPDATE acheteur SET adresse2=$a6 WHERE pseudo="$personne_co"';
        $result6 = mysqli_query($db_handle, $sql6);

        $a7 = $_POST['code_bp'];
        $sql7 = 'UPDATE acheteur SET code_bp=$a7 WHERE pseudo="$personne_co"';
        $result7 = mysqli_query($db_handle, $sql7);

        $a8 = $_POST['ville'] ;
        $sql8 = 'UPDATE acheteur SET ville=$a8 WHERE pseudo="$personne_co"';
        $result8 = mysqli_query($db_handle, $sql8);

        $a9 = $_POST['pays'];
        $sql9 = 'UPDATE acheteur SET pays=$a9 WHERE pseudo="$personne_co"';
        $result9 = mysqli_query($db_handle, $sql9);

        $a10 = $_POST['tel'];
        $sql10 = 'UPDATE acheteur SET tel=$a10 WHERE pseudo="$personne_co"';
        $result10 = mysqli_query($db_handle, $sql10);

        $a11 = $_POST['card_type'];
        $sql11 = 'UPDATE acheteur SET card_type=$a11 WHERE pseudo="$personne_co"';
        $result11 = mysqli_query($db_handle, $sql11);

        $a12 = $_POST['card_number'];
        $sql12 = 'UPDATE acheteur SET card_number=$a12 WHERE pseudo="$personne_co"';
        $result12 = mysqli_query($db_handle, $sql12);

        $a13 = $_POST['card_name'];
        $sql13 = 'UPDATE acheteur SET card_name=$a13 WHERE pseudo="$personne_co"';
        $result13 = mysqli_query($db_handle, $sql13);

        $a14 = $_POST['exp_date'];
        $sql14 = 'UPDATE acheteur SET exp_date=$a14 WHERE pseudo="$personne_co"';
        $result14 = mysqli_query($db_handle, $sql14);

        $a15 = $_POST['sec_code'];
        $sql15 = 'UPDATE acheteur SET sec_code=$a15 WHERE pseudo="$personne_co"';
        $result15 = mysqli_query($db_handle, $sql15);*/

    }
    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else

    mysqli_close($db_handle);
?>