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

                <li class="nav-item"><a class="nav-link" href="venteflash.php">Ventes Flash</a></li>             
                <li class="nav-item"><a class="nav-link" href="vendre.php">Vendre</a></li> 
                <li class="nav-item"><a class="nav-link" href="info_compte.php">Votre Compte</a></li>
                <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>     
                <li class="nav-item"><a class="nav-link" href="panier.php">Panier</a></li> 
            </ul> 
            
        </div> 



    </nav>

    

     <body>

        <header class="page-header header container-fluid">

            <div class="overlay"></div>

                <div class="description">

                    <h1 >Creation de votre compte</h1>
         </header> 

    <br> 
    <br>

    <div class="container fluid center_div" >

        <form action ="bddinscription.php" method="post">

            <h2>Informations personnelles</h2>

                 <table>

                    <tr>
                         <label>Login</label> <input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="login" size="25" /><br> <br>
                    </tr>

                    <tr>
                         <label>Mot de passe</label> <input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="password" name="mdp" size="25" /><br> <br>
                    </tr>

                    <tr>
                         <label>Nom</label> <input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="nom" size="25" /><br> <br>
                    </tr>

                    <tr>
                        <label>Prenom</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="prenom" size ="25"/><br><br>
                    </tr>

                    <tr>
                         <label>Adresse</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;"type="text" name="adresse" size ="25"/><br><br>
                    </tr>

                    <tr>
                         <label>Email</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="email" size ="25" /><br><br>
                    </tr>

            <h2>Informations sur le site de livraison</h2>

                    <tr>
                         <label>Adresse 1</label> <input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="adresse1" size="25" /><br> <br>
                    </tr>

                    <tr>
                        <label>Adresse 2</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="adresse2" size ="25"/><br><br>
                    </tr>

                    <tr>
                         <label>Code Postal</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;"type="text" name="code_bp" size ="25"/><br><br>
                    </tr>

                    <tr>
                         <label>Ville</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="ville" size ="25" /><br><br>
                    </tr>

                    <tr>
                         <label>Pays</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="pays" size ="25" /><br><br>
                    </tr>

                    <tr>
                         <label>Portable</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="tel" size ="25" /><br><br>
                    </tr>

            <h2>Informations bancaires</h2>

                    <tr>
                         <label>Type de carte</label> <input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="card_type" size="25" /><br> <br>
                    </tr>

                    <tr>
                        <label>Numéro de carte</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="card_number" size ="25"/><br><br>
                    </tr>

                    <tr>
                         <label>Nom sur la carte</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;"type="text" name="card_name" size ="25"/><br><br>
                    </tr>

                    <tr>
                         <label>Date d'expiration</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="date" name="exp_date" size ="25" /><br><br>
                    </tr>

                    <tr>
                         <label>Code Secret</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="password" name="sec_code" size ="25" /><br><br>
                    </tr>

                    <tr>
                         <label>Portable</label><input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="tel" size ="25" /><br><br>
                    </tr>

             
             </table>

    </div>


        <div class="center-block">

            <tr>
                <td><input class="bouton-relief" type="submit" value="Suivant"/></td>
            
            </tr>

            <br>
            <br>

            <tr>
                    <td><a class="bouton-relief" type="reset">Reinitialiser</a><td> 
                    
            </tr>

            <br>
            <br>
    </div>
</form> 

<!--******************** PIED DE PAGE *********************************************************************************-->
    <footer class="page-footer">
       <div class="container">
           <div class="row">
                <div class="col-lg-4">
                <p style="color:#ffa630; margin-left: 50px;">INFORMATIONS ADDITIONNNELLES</p><p style="margin-left: 50px;">Notre equipe<br>Laure CHAMOUARD<br>Barbara GERMANEAU<br>Victor LABEYRIE</p>
                </div>
                <div class="col-lg-4">
                    <img src="img/shiba_footer.png" style="margin-left:100px;margin-top: 20px; width:90px;height: 90px;">
                </div>
                <div class="col-lg-4">
                   <p style="color:#ffa630;">CONTACT</p><p>
                       37, quai de Grenelle, 75015 Paris, France <br>
                       <a href="mailto:ece.amazon@pro.com" style="color:#ffa630;"> ece.amazon@pro.com</a> <br>
                       +33 01 02 03 04 05 <br>
                       +33 01 03 02 05 04
                   </p>
               </div>
            </div>
            <div class="footer-copyright text-center" style="text-align: center;">&copy; 2019 ECE Amazon | Droit d'auteur: BLV</div>
        </div>
    </footer>
</body>
</html>