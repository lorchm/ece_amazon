<?php
	

session_start();

	$N= isset($_POST["login"])?$_POST["login"]:"";
	$P= isset($_POST["mdp"])?$_POST["mdp"]:"";
	$error=0;

	define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    //identifier le nom de base de données
    $database = "ECEamazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found) {
        
        $sql = 'SELECT pseudo,mdp FROM acheteur ';
        $result = mysqli_query($db_handle, $sql);
        while($data = mysqli_fetch_assoc($result)) {
          	if($N==$data['pseudo'] && $P==$data['mdp'])
          	{
               $_SESSION["login"]=$N;
             header('Location: info_compte.php'); 

              }
          	else
          	{
          		 
              $sql1 = 'SELECT pseudo,mdp FROM vendeur ';
              $result1 = mysqli_query($db_handle, $sql1);
              while($data = mysqli_fetch_assoc($result1)) {

                  if($N==$data['pseudo'] && $P==$data['mdp'])
                  {
                       $_SESSION["login"]=$N;
                       header('Location: info_compte.php'); 

                  }

                  else
                    {
                      // echo "<script>alert("Erreur de connexion")</script>";
                    header('Location: connexion.php');
                    
                    }

                }   

              
          	 }

      }
         

   }

           else {
            echo "Database not found";
          }//end else

    mysqli_close($db_handle);
 
?>


