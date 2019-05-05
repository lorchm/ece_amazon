<?php
//ajouter un livre
    Session_start();
    $N=$_SESSION["login"];

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
   
    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database); 

    if($db_found) {
  
            $error=1;
                if($_SESSION["login"]=="")
                {
                    header('Location: connexion.php');
                }
                else
                {
                    $N=$_SESSION["login"];
                    
 /* <!-- Test de connexion -->*/
            

                    $sql0="SELECT pseudo FROM vendeur ";
                    $result0=mysqli_query($db_handle, $sql0);
                    while ($data0= mysqli_fetch_assoc($result0)){
                    
                        if($data0['pseudo']==$N)
                        {

                                $sql = "SELECT admins FROM vendeur WHERE pseudo LIKE '".$N."'";
                                $result=mysqli_query($db_handle, $sql);
                        
                                while ($data = mysqli_fetch_assoc($result)){

                                       if($data['admins']==0 && $error!=0)
                                       {
                                         $_SESSION["login"]="";
                                        header('Location: connexion.php');
                                        $error=1;
                                       }
                                       else
                                       {
                                        $error=0;
                                       }

                                } 
                        }
                        else if($data0['pseudo']!=$N && $error!=0)
                        {
                            
                              $_SESSION["login"]="";
                            header('Location:connexion.php');
                        }
                    }
               
                    if($error==0)
                    {
                       
                    }
                }
                
     }

    if($db_found) {

        //SUPPRIMER UN PRODUIT
        if (isset($_POST['supprimer_produit']) AND $_POST['supprimer_produit']=='Supprimer') {
            $type= isset($_POST["type_prod"])?$_POST["type_prod"]:"";
            $ref= isset($_POST["ref"])?$_POST["ref"]:"";

            //livre
            if ($type == "Livre") {
                $sql= "DELETE FROM livre WHERE ref LIKE '".$ref."'";
                $result = mysqli_query($db_handle, $sql);
            }
            
            if ($type == "Musique") {
                $sql= "DELETE FROM musique WHERE ref LIKE '".$ref."'";
                $result = mysqli_query($db_handle, $sql);
            }

            if ($type == "Vetement") {
                $sql= "DELETE FROM sportloisir WHERE ref LIKE '".$ref."'";
                $result = mysqli_query($db_handle, $sql);
            }
            if ($type == "Sport et Loisir") {
                $sql= "DELETE FROM livre WHERE ref LIKE '".$ref."'";
                $result = mysqli_query($db_handle, $sql);
            }
        }
        
        //SUPPRIMER UN VENDEUR
        if (isset($_POST['supprimer_vendeur']) AND $_POST['supprimer_vendeur']=='Supprimer') {
            $pseudo= isset($_POST["pseudo"])?$_POST["pseudo"]:"";

            echo $pseudo;
            $sql= "DELETE FROM vendeur WHERE pseudo LIKE '".$pseudo."'";
            $result = mysqli_query($db_handle, $sql);
        }//fin if click

        //AJOUTER UN VENDEUR
        if (isset($_POST['ajouter_vendeur']) AND $_POST['ajouter_vendeur']=='Ajouter') {
            $pseudo= isset($_POST["pseudoV"])?$_POST["pseudoV"]:"";
            $nom= isset($_POST["nom"])?$_POST["nom"]:"";
            $email= isset($_POST["email"])?$_POST["email"]:"";
            $mdp= isset($_POST["mdp"])?$_POST["mdp"]:"";
            $photo_profil= isset($_POST["photo_profil"])?$_POST["photo_profil"]:"";
            $photo_couv= isset($_POST["photo_couv"])?$_POST["photo_couv"]:"";

            $pp= "img/pp/".$photo_profil;
            $pc= "img/pc/".$photo_couv;

            $sql= "INSERT INTO `vendeur` (`pseudo`, `admins`, `mdp`, `email`, `nom`, `url_pdp`, `url_pdc`) VALUES ('$pseudo', '0', '$mdp', '$email', '$nom', '$pp', '$pc' )";
            $result = mysqli_query($db_handle, $sql);
        }//fin if click

?>
<!DOCTYPE html>
<html>
<head>
	<title>ECE Amazon</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
    <!-- utile pour la galerie qui défile-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 

    <script type="text/javascript" src="program.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript">
        function supprV(){
            alert("Vendeur bien supprimé !");
        }
        function supprP(){
            alert("Article bien supprimé !");
        }
        function ajoutV(){
            alert("Un vendeur a bien été ajouté !");
        }
    </script>

</head>
<body>
    <!-- Barre de navigation -->
      <?php include('header.php') ?>
<!-- Page Admin -->
        <div class="description page-header header container-fluid"> 
            <h1>Admin</h1> 
        </div>

        <div style="margin:40px;">
            <div class="row">
                <!-- GESTION DES ARTICLES -->
                <div class="col-lg-4">
                    <div class="col1-admin">
                        <h2 style="color:#04263F; text-align: center; margin-top: 20px">Gestion des articles</h2>
                        
                        <div style="margin-left: 70px;">
                            <!-- Ajouter un produit -->
                            <h3 style="color:#DF912A; margin-top: 20px; margin-left: 30px;">Ajouter un Article</h3>
                            <a href="ajout_article.php"><button  id="ajouter_produit" class="btt" style="margin-top: 10px; width: 300px; height: 30px;">Ajouter</button></a>

                            <!-- Supprimer un produit -->
                            <h3 style="color:#DF912A; margin-top: 20px;  margin-left: 20px;">Supprimer un Article</h3>
                            
                            <form action="admin.php" method="post">
                                <table>
                                    <tr>
                                        <td><label style="color:grey;">Référence de l'article : </label><input required class="form-control" style="background-color:#f7f7f7;width: 300px; height: 30px;" type="text" name="ref"/></td>
                                   </tr>
                                   <tr>
                                        <td><label style="color:grey; margin-top: 10px;">Type de l'article : </label><br><select name="type_prod" style="width: 300px;"><OPTION><OPTION>Livre <OPTION>Musique <OPTION>Vetement <OPTION>Sport et Loisir</select></td>
                                   </tr>
                                    <tr>
                                        <td><input name="supprimer_produit" onclick="supprP()"class="btt" type="submit" value="Supprimer" style="margin-top: 10px;"></td>
                                    </tr>
                                 </table>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- GESTION DES VENDEURS -->
                <div class="col-lg-8">

                    <div class="col1-admin">
                        <h2 style="color:#04263F; text-align: center; margin-top: 20px;">Gestion des vendeurs</h2>
                        <div style="margin-left: 100px;  margin-top: 20px; ">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Ajouter vendeur -->
                                    <h3 style="color:#DF912A;">Ajouter un vendeur</h3>
                                    
                                    <form action="admin.php" method="post">
                                        <table>
                                            <tr>
                                                <td><label style="color:grey;">Nom : </label><input required class="form-control" style="background-color:#f7f7f7;width: 300px; height: 30px;" type="text" name="nom"/></td>
                                           </tr>
                                           <tr>
                                                <td><label style="color:grey;">Pseudo : </label><input required class="form-control" style="background-color:#f7f7f7;width: 300px; height: 30px;" type="text" name="pseudoV"/></td>
                                           </tr>
                                           <tr>
                                                <td><label style="color:grey;">Email : </label><input required class="form-control" style="background-color:#f7f7f7;width: 300px; height: 30px;" type="text" name="email" placeholder="votre.email@exemple.com" /></td>
                                           </tr>
                                           <tr>
                                                <td><label style="color:grey;">Mot de Passe : </label><input required class="form-control" style="background-color:#f7f7f7;width: 300px; height: 30px;" type="password" name="mdp"/></td>
                                           </tr>
                                           <tr>
                                                <td><label style="color:grey;">Photo de Profil: </label><input required class="form-control" style="background-color:#f7f7f7;width: 300px; height: 45px;" type="file" name="photo_profil"/></td>
                                           </tr>
                                           <tr>
                                                <td><label style="color:grey;">Photo de Couverture: </label><input required class="form-control" style="background-color:#f7f7f7;width: 300px; height: 45px;" type="file" name="photo_couv"/></td>
                                           </tr>
                                           <tr>
                                                <td><input name="ajouter_vendeur" onclick="ajoutV()" class="btt" type="submit" value="Ajouter" style="margin-top: 10px;"></td>
                                            </tr>
                                         </table>
                                    </form>
                                </div>

                                <div class="col-sm-6">
                                    <!-- Ajouter un produit -->
                                    <h3 style="color:#DF912A;">Supprimer un Vendeur</h3>
                                    <form action="admin.php" method="post">
                                        <table>
                                            <tr>
                                                <td><label style="color:grey;">Pseudo du vendeur : </label><input required class="form-control" style="background-color:#f7f7f7;width: 300px; height: 30px;" type="text" name="pseudo"/></td>
                                           </tr>
                                            <tr>
                                                <td><input name="supprimer_vendeur" class="btt" type="submit" value="Supprimer" onclick="supprV()"style="margin-top: 10px;"></td>
                                            </tr>
                                         </table>
                                    </form>
                                </div>
                            </div> 
                            <!-- fin row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    } //fin du if database found
    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else

    mysqli_close($db_handle);
?>
        

    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>
</body>
</html>