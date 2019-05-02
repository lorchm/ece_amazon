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

        <header class="page-header header container-fluid">

            <div class="overlay"></div>

                <div class="description">

                    <h1 >Creation de votre compte</h1>
         </header> 

    <br> 
    <br>

    <div class="row">
    <div class="container fluid center_div"  >

        <form action ="sql_creation.php" method="post">
            <h2>Informations personnelles</h2>

                 <table>

                     <tr>
                         <label>Login</label> <input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="login" size="25" /><br> <br>
                    </tr>

                      <tr>
                         <label>Mot de passe</label> <input class="form-control center-con"  style="width: 250px;margin-left: 240px;" type="text" name="mdp" size="25" /><br> <br>
                    </tr>


                    <tr>
                         <label>Nom</label> <input class="form-control center-con"  style="width: 250px; " type="text" name="nom" size="25" /><br> <br>
                    </tr>

                    <tr>
                        <label>Prenom</label><input class="form-control center-con"  style="width: 250px;" type="text" name="prenom" size ="25"/><br><br>
                    </tr>

                    <tr>
                         <label>Adresse</label><input class="form-control center-con"  style="width: 250px;" type="text" name="adresse" size ="25"/><br><br>
                    </tr>

                    <tr>
                         <label>Email</label><input class="form-control center-con"  style="width: 250px;" type="text" name="email" size ="25" /><br><br>
                    </tr>

            <h2>Informations sur le site de livraison</h2>

                    <tr>
                         <label>Adresse 1</label> <input class="form-control center-con"  style="width: 250px; " type="text" name="adresse1" size="25" /><br> <br>
                    </tr>

                    <tr>
                        <label>Adresse 2</label><input class="form-control center-con"  style="width: 250px; " type="text" name="adresse2" size ="25"/><br><br>
                    </tr>

                    <tr>
                         <label>Code Postal</label><input class="form-control center-con"  style="width: 250px; "type="text" name="code_bp" size ="25"/><br><br>
                    </tr>

                    <tr>
                         <label>Ville</label><input class="form-control center-con"  style="width: 250px;" type="text" name="ville" size ="25" /><br><br>
                    </tr>

                    <tr>
                         <label>Pays</label><input class="form-control center-con"  style="width: 250px;" type="text" name="pays" size ="25" /><br><br>
                    </tr>

                    <tr>
                         <label>Portable</label><input class="form-control center-con"  style="width: 250px;" type="text" name="tel" size ="25" /><br><br>
                    </tr>

            <h2>Informations bancaires</h2>

                    <tr>
                         <label>Type de carte</label> <input class="form-control center-con"  style="width: 250px;" type="text" name="card_type" size="25" /><br> <br>
                    </tr>

                    <tr>
                        <label>Numéro de carte</label><input class="form-control center-con"  style="width: 250px;" type="text" name="card_number" size ="25"/><br><br>
                    </tr>

                    <tr>
                         <label>Nom sur la carte</label><input class="form-control center-con"  style="width: 250px;"type="text" name="card_name" size ="25"/><br><br>
                    </tr>

                    <tr>
                         <label>Date d'expiration</label><input class="form-control center-con"  style="width: 250px;" type="text" name="exp_date" size ="25" /><br><br>
                    </tr>

                    <tr>
                         <label>Code Secret</label><input class="form-control center-con"  style="width: 250px;" type="password" name="sec_code" size ="25" /><br><br>
                    </tr>

                    <tr>
                         <label>Portable</label><input class="form-control center-con"  style="width: 250px;" type="text" name="tel" size ="25" /><br><br>
                    </tr>

             
             </table>

    </div>
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
<?php include('footer.php') ?>
</body>

</html>