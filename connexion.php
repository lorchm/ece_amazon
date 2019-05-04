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
  
            
        if($_SESSION["login"]!="")
        {
            header('Location: info_compte.php');
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
                         <label>Login</label> <input class="form-control center-con container"  style="width: 250px; " type="text" name="login" size="10" /><br> <br>
                        </tr>

                        <tr>
                           <label>Mot de passe</label><input class="form-control center-con container"  style="width: 250px;" type="password" name="mdp" size ="25"/><br><br>
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