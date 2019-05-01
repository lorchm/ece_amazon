<?php


$Ps=isset($_POST["login"])?$_POST["login"]:"";
  $M=isset($_POST["mdp"])?$_POST["mdp"]:"";
  $Mail=isset($_POST["email"])?$_POST["email"]:"";
  $Nom=isset($_POST["nom"])?$_POST["nom"]:"";
  $Prenom=isset($_POST["prenom"])?$_POST["prenom"]:"";
  $Adresse1=isset($_POST["adresse1"])?$_POST["adresse1"]:"";
  $Adresse2=isset($_POST["adresse2"])?$_POST["adresse2"]:"";
  $CP=isset($_POST["code_bp"])?$_POST["code_bp"]:"";
  $Ville=isset($_POST["ville"])?$_POST["ville"]:"";
  $Pays=isset($_POST["pays"])?$_POST["pays"]:"";
  $Tel=isset($_POST["tel"])?$_POST["tel"]:"";
  $Carte=isset($_POST["card_type"])?$_POST["card_type"]:"";
  $Carte_num=isset($_POST["card_number"])?$_POST["card_number"]:"";
  $Carte_name=isset($_POST["card_name"])?$_POST["card_name"]:"";
  $Date_exp=isset($_POST["exp_date"])?$_POST["exp_date"]:"";
  $Code=isset($_POST["sec_code"])?$_POST["sec_code"]:"";


	
	define('DB_SERVER', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');



    //identifier le nom de base de données
    $database = "eceamazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found) {
        
        $sql ='INSERT INTO acheteur (`pseudo`, `mdp`, `email`, `nom`, `prenom`, `adresse1`, `adresse2`, `code_bp`, `ville`,
         `pays`, `tel`, `card_type`, `card_number`, `card_name`, `exp_date`, `sec_code`) 
         VALUES ("'.$Ps.'","'.$M.'", "'.$Mail.'", "'.$Nom.'", "'.$Prenom.'", "'.$Adresse1.'", "'.$Adresse2.'", "'.$CP.'", 
         "'.$Ville.'", "'.$Pays.'", "'.$Tel.'", "'.$Carte.'", "'.$Carte_num.'", "'.$Carte_name.'", "'.$Date_exp.'", "'.$Code.'")';

        $result = mysqli_query($db_handle, $sql);
       
       }
       else
       {
        echo "Database not found !";

       }

     mysqli_close($db_handle);
?>