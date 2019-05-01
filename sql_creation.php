<?php

  
        
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
        $sql0 = 'INSERT INTO `acheteur` (`pseudo`, `mdp`, `email`, `nom`, `prenom`, `adresse1`, `adresse2`, `code_bp`, `ville`, `pays`, `tel`, `card_type`, `card_number`, `card_name`, `exp_date`, `sec_code`) VALUES ("'.$Ps.'", "'.$M.'", "'.$Mail.'", "'.$Nom.'", "'.$Prenom.'", "'.$Adresse1.'","'.$Adresse2.'", "'.$CP.'", "'.$Ville.'", "'.$Pays.'", "'.$Tel.'", "'.$Carte.'","'.$Carte_num.'", "'.$Carte_name.'", "'.$Date_exp.'","'.$Code.'");';
        $result0 = mysqli_query($db_handle, $sql0);

    }
    else
    {
        echo"Database not found";
    }

        mysqli_close($db_handle);
?>