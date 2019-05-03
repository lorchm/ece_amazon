

function ajout_article(test,cat)
{
	
	define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
   

    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    if($db_found) {

    	$sql = "INSERT INTO obj_panier (ref_panier, pseudo,categorie,id) VALUES ('6', 'bonjour','cat','test')";
        $result = mysqli_query($db_handle, $sql);
    }

    else
    {
        echo"Database not found";
    }

        mysqli_close($db_handle);
        header('Location: livres.php');
       
        
}