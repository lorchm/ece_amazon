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
     <script type="text/javascript" src="co_deco.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Barre de navigation -->
    <?php include('header.php') ?>

    <!-- milieu de la page -->
    <div class="row">
        <div class="col-md-4 col-sm-12" >
            <div class="description page-header header container-fluid"> 
                <h1> BIENVENUE SUR ECE AMAZON</h1>
                <img src="img/home.png">
            </div>
        </div>
        <div class="col-md-8 col-sm-12">
            <div id="galerie" style=" margin-top: 50px; margin-left: 250px;">
                <ul>
                    <li><img src="img/articles/m4.jpg" width="400" height="300" style="border-radius: 5px; border-color: red; " /></li>
                    <li><img src="img/articles/v2.jpg" width="400" height="300" style="border-radius: 5px; border-color: white;"/></li>
                    <li><img src="img/articles/sl4.jpg" width="400" height="300" style="border-radius: 5px; border-color: white;"/></li>
                    <li><img src="img/articles/sl3.jpg" width="400" height="300" style="border-radius: 5px; border-color: white;"/></li>
                    <li><img src="img/articles/l1.jpg" width="400" height="300" style="border-radius: 5px; border-color: white;"/></li>
                </ul>
            </div>
            <div class="row" style="text-align: center; margin-top: 50px;">
                <div style="margin-left: 190px;"><a><img src="img/book.png" style="width: 50px; height: 50px;"> <a href="livres.php"><button style="margin-left: 10px;" class="button1">Shop now !</button></a></div>

                <div style="margin-left: 30px;"><a><img src="img/music.png" style="width: 50px; height: 50px;"><a href="musique.php"><button style="margin-left: 10px;" class="button1">Shop now !</button></a></div>

                <div style="margin-left: 30px;"><a><img src="img/ball.png" style="width: 50px; height: 50px;"> <a href="sport_loisirs.php"><button style="margin-left: 10px;" class="button1">Shop now !</button></a></div>
                
                <div style="margin-left: 30px;"><a><img src="img/laundry.png" style="width: 50px; height: 50px;"><a href="vetements.php"><button style="margin-left: 10px;" class="button1">Shop now !</button></a></div>
            </div>         
        </div>
    </div>
    
    <!-- PIED DE PAGE -->
    <?php include('footer.php') ?>
</body>
</html>