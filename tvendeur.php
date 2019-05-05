<?php
	

session_start();

	$error=0;
	$N=$_SESSION["login"];

	define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    //identifier le nom de base de données
    $database = "ECEamazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);


    if($db_found) {

    		if($N=="")
    		{	
    			
    			header('Location: connexion.php');
    		}
    		else
    		{
       
    			 $sql = "SELECT pseudo FROM vendeur ";
			     $result = mysqli_query($db_handle, $sql);
           
			     while($data = mysqli_fetch_assoc($result)) {

          			if($data['pseudo']==$N)
          				{
                    
                    $error=1;
                     header('Location: vendre.php'); 


             			 }
            } 
            if($error==0)
            {
              
                    $_SESSION["login"]="";
                    header('Location: connexion.php');
            }
		    
          		     
       		
  	    }
     }
    

       else {
        echo "Database not found";
    }//end else

    mysqli_close($db_handle);
 
?>


