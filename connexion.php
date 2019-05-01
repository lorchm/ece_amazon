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

    <nav class="navbar navbar-expand-md">

        <a class="navbar-brand" href="squelette.html"> <img src="img/logo.png"> </a>         
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">      
            <span class="navbar-toggler-icon"></span>        
        </button>        


        <div class="collapse navbar-collapse" id="main-navigation">   


            <ul class="navbar-nav">             
                <li class="nav-cat"><a class="nav-link" href="#">Catégories</a>   
                    <ul class="submenu">
                        <li><a href="#">Livres</a></li>
                        <li><a href="#">Musiques</a></li>
                        <li><a href="#">Vêtements</a></li>
                        <li><a href="#">Sports et Loisirs</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="#">Ventes Flash</a></li>             
                <li class="nav-item"><a class="nav-link" href="#">Vendre</a></li> 
                <li class="nav-item"><a class="nav-link" href="#">Votre Compte</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Admin</a></li>     
                <li class="nav-item"><a class="nav-link" href="#">Panier</a></li> 
            </ul> 
            
        </div> 



    </nav>

    <body>
        <header class="page-header header container-fluid">

            <div class="overlay"></div> 
            <div class="description">

               <h1 >Se connecter</h1>

        </header> 

        <br>
           <div class="container fluid center_div" >

            <form action ="tconnexion.php" method="post">

                <table>
                    <tr>
                     <label>Login</label> <input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="login" size="10" /><br> <br>
                 </tr>

                 <tr>
                   <label>Mot de passe</label><input class="form-control"  style="width: 250px;margin-left: 240px;" type="password" name="password" size ="25"/><br><br>
               </tr>


            </table>

           </div>

            <div class="center-block">

                    <div class="but">

                         <tr>
                              <td><input class="btn btn-primary" style="width:150px;" type="submit" value="Se connecter"></td>

                        </tr>

                    


                        <tr>
                                
                                <td><input class="btn btn-primary" style="width:150px;"  type="reset" value="Réinitialiser"></a>
                                 
                                </td>
                         </tr>

                    </div>

                    <br>
                    <br>

                </div>

            </form> 
    
    <div class="center-block">

        <a href="compte2.html"style="text-decoration: underline;">Se créer un compte</a>

    </div>

<footer> Copyright &copy; 2019 ECE Amazon <br/>
    <a href="mailto:ece.amazon@pro.com"> ece.amazon@pro.com</a>
</footer>

</body>

</html>