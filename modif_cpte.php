<?php

session_start();

	   
    $N=$_SESSION["login"];

	define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    
    //identifier le nom de base de données
    $database = "ECEamazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found){
        
        $sql = 'SELECT * FROM acheteur WHERE pseudo="'.$N.'"';
        
        $result = mysqli_query($db_handle, $sql);
        while($data = mysqli_fetch_assoc($result)) {

            $Ps=$data['pseudo'];
            $M=$data['mdp'];
            $Mail=$data['email'];
            $Nom=$data['nom'];
            $Prenom=$data['prenom'];
            $Adresse1=$data['adresse1'];
            $Adresse2=$data['adresse2'];
            $CP=$data['code_bp'];
            $Ville=$data['ville'];
            $Pays=$data['pays'];
            $Tel=$data['tel'];
            $Carte=$data['card_type'];
            $Carte_num=$data['card_number'];
            $Carte_name=$data['card_name'];
            $Date_exp=$data['exp_date'];
            $Code=$data['sec_code'];

           
        
       }
   }
   else
   {
    echo "Database not found";
   }
       
    
    
    mysqli_close($db_handle);
 
 
?>


