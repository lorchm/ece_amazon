<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css" />

    
</head>

<body>

    <!-- Barre de navigation -->
    <?php include('header.php') ?>

<?php 
    session_start();
 /* $_SESSION["login"]="";*/
        if($_SESSION["login"]!="")
        {
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
                    
                    $sql = 'SELECT pseudo FROM acheteur ';
                    $result = mysqli_query($db_handle, $sql);
                    while($data = mysqli_fetch_assoc($result)) {

                        if($N==$data['pseudo'])
                        {
                         header('Location: info_compte.php'); 

                        }
                    }
                     $sql1 = 'SELECT pseudo FROM vendeur ';
                    $result1 = mysqli_query($db_handle, $sql1);
                    while($data1 = mysqli_fetch_assoc($result1)) {

                        if($N==$data1['pseudo'])
                        {
                         header('Location: info_vendeur.php'); 

                        }
                    }
                }
        
         else {
            echo "Database not found";
          }//end else

    mysqli_close($db_handle);
    }
     
?>

    <body>
        <!-- titre -->
        <div class="description page-header header container-fluid"> 
            <h1>Se connecter</h1> 
        </div>

           <div class="container fluid center_div" >

                <form action ="tconnexion.php" method="post">

                    <table>
                        <tr>
                         <label>Login</label> <input required class="form-control center-con container"  style="width: 250px; " type="text" name="login" size="10" /><br> <br>
                        </tr>

                        <tr>
                           <label>Mot de passe</label><input required class="form-control center-con container"  style="width: 250px;" type="password" name="mdp" size ="25"/><br><br>
                       </tr>
                    </table>

                    <div class="center-block">
                        <div class="but">
                            <tr>
                                <td><input class="btn btn-primary" style="width:150px;" type="submit" value="Se connecter"></td>
                            </tr>
                            <tr>     
                                <td><input class="btn btn-primary" style="width:150px;"  type="reset" value="Réinitialiser"></a></td>
                             </tr>
                        </div>
                        <br>
                        <br>
                    </div>
                </form>
            </div>
    
    <div class="center-block">

        <a href="creation.php"style="text-decoration: underline;">Se créer un compte</a>

    </div>


    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>

</body>
</html>