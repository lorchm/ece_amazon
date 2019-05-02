<?php

    session_start();
    $N=$_SESSION["login"];
    $a0= isset($_POST["login"])?$_POST["login"]:"";
    $a1= isset($_POST["mdp"])?$_POST["mdp"]:"";
    $a2= isset($_POST["email"])?$_POST["email"]:"";
    $a3= isset($_POST["nom"])?$_POST["nom"]:"";
    $a4= isset($_POST["prenom"])?$_POST["prenom"]:"";
    $a5= isset($_POST["adresse1"])?$_POST["adresse1"]:"";
    $a6= isset($_POST["adresse2"])?$_POST["adresse2"]:"";
    $a7= isset($_POST["code_bp"])?$_POST["code_bp"]:"";
    $a8= isset($_POST["ville"])?$_POST["ville"]:"";
    $a9= isset($_POST["pays"])?$_POST["pays"]:"";
    $a10= isset($_POST["tel"])?$_POST["tel"]:"";
    $a11= isset($_POST["card_type"])?$_POST["card_type"]:"";
    $a12= isset($_POST["card_number"])?$_POST["card_number"]:"";
    $a13= isset($_POST["card_name"])?$_POST["card_name"]:"";
    $a14= isset($_POST["date_exp"])?$_POST["date_exp"]:"";
    $a15= isset($_POST["sec_code"])?$_POST["sec_code"]:"";

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
   
   /*<!-- ATTENTION CA CRACHE QUAND ON CHANGE LE PSEUDO PUISQUE CE QUE N EST PLUS LE BON PSEUDO QUI EST CO A LA SESSION -->
*/
    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found) {

        //variable qui contient le pseudo de la personne à qui faut changer
   
        $sql0 = 'UPDATE acheteur SET pseudo="'.$a0.'" WHERE pseudo="'.$N.'"';
        $result0 = mysqli_query($db_handle, $sql0);

        $sql1 = 'UPDATE acheteur SET mdp="'.$a1.'" WHERE pseudo="'.$N.'"';
        $result1 = mysqli_query($db_handle, $sql1);

       
        $sql2 = 'UPDATE acheteur SET email="'.$a2.'"" WHERE pseudo="'.$N.'"';
        $result2 = mysqli_query($db_handle, $sql2);

        $sql3 = 'UPDATE acheteur SET nom="'.$a3.'" WHERE pseudo="'.$N.'"';
        $result3 = mysqli_query($db_handle, $sql3);

        $sql4 = 'UPDATE acheteur SET prenom="'.$a4.'" WHERE pseudo="'.$N.'"';
        $result4 = mysqli_query($db_handle, $sql4);

        $sql5 = 'UPDATE acheteur SET adresse1="'.$a5.'" WHERE pseudo="'.$N.'"';
        $result5 = mysqli_query($db_handle, $sql5);

        $sql6 = 'UPDATE acheteur SET adresse2="'.$a6.'" WHERE pseudo="'.$N.'"';
        $result6 = mysqli_query($db_handle, $sql6);

        $sql7 = 'UPDATE acheteur SET code_bp="'.$a7.'" WHERE pseudo="'.$N.'"';
        $result7 = mysqli_query($db_handle, $sql7);

        $sql8 = 'UPDATE acheteur SET ville="'.$a8.'" WHERE pseudo="'.$N.'"';
        $result8 = mysqli_query($db_handle, $sql8);

        $sql9 = 'UPDATE acheteur SET pays="'.$a9.'" WHERE pseudo="'.$N.'"';
        $result9 = mysqli_query($db_handle, $sql9);

        $sql10 = 'UPDATE acheteur SET tel="'.$a10.'" WHERE pseudo="'.$N.'"';
        $result10 = mysqli_query($db_handle, $sql10);

        $sql11 = 'UPDATE acheteur SET card_type="'.$a11.'" WHERE pseudo="'.$N.'"';
        $result11 = mysqli_query($db_handle, $sql11);

        $sql12 = 'UPDATE acheteur SET card_number="'.$a12.'" WHERE pseudo="'.$N.'"';
        $result12 = mysqli_query($db_handle, $sql12);

        $sql13 = 'UPDATE acheteur SET card_name="'.$a13.'" WHERE pseudo="'.$N.'"';
        $result13 = mysqli_query($db_handle, $sql13);

        $sql14 = 'UPDATE acheteur SET exp_date="'.$a14.'" WHERE pseudo="'.$N.'"';
        $result14 = mysqli_query($db_handle, $sql14);
       
        $sql15 = 'UPDATE acheteur SET sec_code="'.$a15.'" WHERE pseudo="'.$N.'"';
        $result15 = mysqli_query($db_handle, $sql15);

    }
    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else

    mysqli_close($db_handle);
    $_SESSION["login"]="$a0";
    header('Location: info_compte.php');
?>