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

</head>

<!-- <script>
function connexion()
{
    echo"BONJOUR";
    if($_SESSION["login"]=="")
    {
        header('Location: connexion.php');
    }
    else
    {
        $_SESSION["login"]="";
        header('Location: connexion.php');
    }
}
function deconnexion()
{
    echo"BONJOUR";
    if($_SESSION["login"]=="")
    {
        echo"Vous avez été deconnecté";
    }
    else
    {
        $_SESSION["login"]="";
    }
}
</script> -->

<body>
    <!-- Barre de navigation -->
    <?php include('header.php') ?>


    <!-- milieu de la page -->
    <div id="galerie">
        <ul>
            <li><img src="img/aya.jpg" width="500" height="400" /></li>
            <li><img src="img/sport.jpg" width="500" height="400" /></li>
            <li><img src="img/livre.jpg" width="500" height="400" /></li>
            <li><img src="img/shoes.jpg" width="500" height="400" /></li>
            <li><img src="img/therapie_taxi.jpg" width="500" height="400" /></li>
        </ul>
    </div>
    <div>
        <input type="button" value="Précédent" class="prev btn-galerie">
        <input type="button" value="Suivant" class="next btn-galerie">
    </div> 


<!--******************** PIED DE PAGE *********************************************************************************-->
    <?php include('footer.php') ?>
</body>
</html>