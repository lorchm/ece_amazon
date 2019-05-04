<!DOCTYPE html>
<html>
<head>
	<title>ECE Amazon :: Ajouter un article</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
    <!-- utile pour la galerie qui défile-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 

    <script type="text/javascript" src="program.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css" />

      <script type="text/javascript">
        function ajout_livre(){
          alert("Votre article a bien été ajouté !");
        }
  </script>

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

    <!-- titre -->
    <div class="description page-header header container-fluid"> 
        <h1>Ajouter un article</h1> 
    </div>

    <!-- milieu de la page -->
    
<!-- AJOUT VETEMENT -->
<div class="row">

  <div class="col-md-3">

    <form action ="ajout_vetement.php" method="post">

      <div class="container fluid center_block" >
        <h2>Vêtements</h2>

         <table>
            <tr>
             <label >Référence : </label><input class="form-control" style="width: 300px;" type="text" name="ref"/><br><br>
            </tr>

            <tr>
             <label>Nom du produit :</label><input class="form-control" style="width: 300px;" type="text" name="nom"/><br><br>
            </tr>
            <tr>
             <label>Sexe : </label><input class="form-control" style="width: 300px;" ype="text" name="sexe"/><br><br>
            </tr>

            <tr>
             <label>Couleur : </label><input class="form-control" style="width: 300px;" ype="text" name="couleur" /><br><br>
            </tr>

            <tr>
             <label>Type : </label><input class="form-control" style="width: 300px;" ype="text" name="type"/><br><br>
            </tr>

            <tr>
             <label>Pointures (si chaussures) : </label><input class="form-control" style="width: 300px;" ype="text" name="Pointuer"/><br><br>
            </tr>

            <tr>
             <label>Taille (si vêtements) : </label><input class="form-control" style="width: 300px;" ype="text" name="taille" /><br><br>
            </tr>

            <tr>
             <label>Description : </label><textarea class="form-control" style="width: 300px; display: block;" type="text" nom="descri"/></textarea><br><br>
            </tr>


           <tr>
             <label>Prix : </label><input class="form-control" style="width: 300px;" ype="text" name="prix" /><br><br>
           </tr>

            <tr>
             <label>Photo :</label><input class="form-control" style="width: 300px;" type="text" name="photo"/><br><br>
            </tr>

       </table>

        <tr>
<<<<<<< HEAD
          <td><input id="ajout_vetement" name="ajout_vetement" class="btn btn-primary" style="width:80px;" type="submit" value="Ajouter"></td>
=======
          <td><button name="ajout_vetement" class="btn btn-primary" style="width:80px;" type="submit">Ajouter</button></td>
>>>>>>> c901673bd62e48b931465b9a0f5ca39ded2a279e
        </tr>

     </div>

   </form>

  </div>

<!-- AJOUT MUSIQUE -->
<div class="col-md-3">

  <form action ="ajout_musique.php" method="post">

    <div class="container fluid center_block" >

      <h2>Musique</h2>
        <table>
        <tr>
         <label>Référence: </label><input class="form-control" style="width: 300px;" type="text" nom="ref"/> <br> <br>
        </tr>
        <tr>
           <label>Titre :</label><input class="form-control" style="width: 300px;" type="text" nom="titre"/><br><br>
        </tr>

        <tr>
           <label>Artiste : </label><input class="form-control" style="width: 300px;" type="text" nom="artiste"/><br><br>
        </tr>

        <tr>
           <label>Album :</label><input class="form-control" style="width: 300px;" type="text" nom="album"/><br><br>
        </tr>

        <tr>
           <label>Année :</label><input class="form-control" style="width: 300px;" type="text" nom="annee"/><br><br>
        </tr>

        <tr>
          <label>Description :</label><textarea class="form-control" style="width: 300px;" type="text" nom="descri"/></textarea><br><br>
        </tr>

        <tr>
           <label>Prix :</label><input  class="form-control" style="width: 300px;" type="text" nom="prix"/><br><br>
        </tr>

        <tr>
           <label>Photo :</label><input  class="form-control" style="width: 300px;" type="text" nom="photo"/><br><br>
        </tr>

        <tr>
<<<<<<< HEAD
          <td><input id="ajout_musique" name="ajout_musique" class="btn btn-primary" style="width:80px;" type="submit" value="Ajouter"></td>
=======
          <td><button name="ajout_musique" class="btn btn-primary" style="width:80px;" type="submit">Ajouter</button></td>
>>>>>>> c901673bd62e48b931465b9a0f5ca39ded2a279e
        </tr>

      </table>
    </div>
  </form>
</div>

<!-- AJOUT LIVRES -->
<div class="col-md-3">

  <form action ="ajout_livre.php" method="post">

    <div class="container fluid center_block" >

      <h2>Livres</h2>
      <table>

        <tr>
          <label>Référence :</label><input class="form-control" style="width: 300px;" type="text" nom="ref"/><br><br>
        </tr>

        <tr>
         <label>Titre :</label><input class="form-control" style="width: 300px;" type="text" nom="titre"/><br><br>
        </tr>

        <tr>
          <label>Auteur :</label><input class="form-control" style="width: 300px;" type="text" nom="auteur" /><br><br>
        </tr>

        <tr>
         <label>Maison d'édition :</label><input class="form-control" style="width: 300px;" type="text" nom="editeur" /><br><br>
        </tr>

       <tr>
         <label>Année :</label><input class="form-control" style="width: 300px;" type="text" nom="annee"/><br><br>
       </tr>

        <tr>
         <label>Description :</label><textarea class="form-control" style="width: 300px;" type="text" nom="descri"/></textarea><br><br>
       </tr>

       <tr>
         <label>Prix :</label><input class="form-control" style="width: 300px;" type="text" nom="prix" /><br><br>
       </tr>

       <tr>
         <label>Photo :</label><input class="form-control" style="width: 300px;" type="text" nom="photo" /><br><br>
       </tr>

       <tr>
<<<<<<< HEAD
          <td><input id="ajout_livre" name="ajout_livre" class="btn btn-primary" style="width:80px;" type="submit" value="Ajouter"></td>
=======
          <td><input name="ajout_livre" onclick="ajout_livre()" class="btn btn-primary" style="width:80px;" type="submit" value=" Ajouter"/></td>
>>>>>>> c901673bd62e48b931465b9a0f5ca39ded2a279e
        </tr>

      </table>

    </div>

  </form>

</div>

<!-- AJOUT SPORT LOISIRS -->
<div class="col-md-3">

  <form action ="ajout_sportloisirs.php" method="post">

    <div class="container fluid center_block" >

      <h2>Sports/Loisirs</h2>
      <table>

        <tr>
          <label>Référence :</label><input class="form-control" style="width: 300px;" type="text" nom="ref"/><br><br>
        </tr>

        <tr>
         <label>Nom :</label><input class="form-control" style="width: 300px;" type="text" nom="nom"/><br><br>
       </tr>

       <tr>
         <label>Description :</label><textarea class="form-control" style="width: 300px;" type="text" nom="descri"/></textarea><br><br>
       </tr>

       <tr>
         <label>Prix :</label><input class="form-control" style="width: 300px;" type="text" nom="prix"/><br><br>
       </tr>

       <tr>
         <label>Photo :</label><input class="form-control" style="width: 300px;" type="text" nom="photos"/><br><br>
       </tr>

       <tr>
         <label>Vidéos :</label><input class="form-control" style="width: 300px;" type="text" nom="videos"/><br><br>
       </tr>

        <tr>
<<<<<<< HEAD
          <td><input id="ajout_sportloisirs" name="ajout_sportloisirs" class="btn btn-primary" style="width:80px;" type="submit" value="Ajouter"></td>
=======
          <td><button name="ajout_sportloisirs" class="btn btn-primary" style="width:80px;" type="submit" value="Ajouter"></button></td>
>>>>>>> c901673bd62e48b931465b9a0f5ca39ded2a279e
        </tr>

      </table>

    </div>

  </form>

</div>
</div>
    <!-- pied de page -->
    <?php include('footer.php') ?>

</body>
</html>