<!DOCTYPE html>
<html>
<head>
    <title>ECE Amazon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 

    <script type="text/javascript" src="program.js"></script>
    <link href="styles.css" rel="stylesheet" type="text/css" />
</head>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-md">

        <a class="navbar-brand" href="homepage.php"> <img src="img/logo.png"> </a>         
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">      
            <span class="navbar-toggler-icon"></span>        
        </button>        

        <div class="collapse navbar-collapse" id="main-navigation">   
            <ul class="navbar-nav">             
                <li class="nav-cat"><a class="nav-link" href="#">Catégories</a>   
                    <ul class="submenu">
                        <li><a href="livres.php">Livres</a></li>
                        <li><a href="musique.php">Musiques</a></li>
                        <li><a href="vetements.php">Vêtements</a></li>
                        <li><a href="sport_loisirs.php">Sports et Loisirs</a></li>
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

<!-- debut page des best seller -->
    <div class="page-venteflash">
        <!-- Titre -->
        <div class="description page-header header container-fluid"> 
            <h1>Ventes Flash</h1> 
            <p>Retrouvez nos meilleures ventes</p> 
        </div>

<!--**** BEST SELLERS LIVRES****-->
        <div class="best-livres">
            <h2 style="margin-left: 50px;">Livre</h2>
            <h2 style="margin-left: 50px;">#1</h2>
            <div class="cadre-prod">
                <div class="row">
                    <div class="col-md-3">
                        <a href="img/livre.jpg" target="_blank"><img src="img/livre.jpg" style="width: 100%; height: 185px;"></a>
                    </div>
                    <div class="col-md-5" style="margin-top: 10px;">
                        <div class="en-tete-prod">Titre de Auteur | Annee publication  | Edition</div>
                        <div class="prix-prod">Mettre le prix &euro;</div>
                        <div class="reference-prod">La référence RS55ZQ</div>
                        <div class="description-prod">Description balblabal 100% coton et bien éduqué. Il fait ouaf ouaf quand il est content et vous mort à la carotide quand pas content. voilà</div>
                    </div>
                    <div class="col-md-4">
                        <div class="remplir-infos-prod">
                            <form>
                                <!-- QUANTITE -->
                                <tr>
                                    <td>
                                        <label style="color:grey; margin-left: 70px;">Quantité  </label><input type="number" name="quantite" id="quantite" style="width: 50px; margin-left: 10px; font-size: 12px;">
                                    </td>
                                </tr>
                                <!-- AJOUTER PANIER -->
                                <tr>
                                    <td><input type="button" id="ajout-panier" name="ajout-panier" value="Ajouter au panier" class="ajout-panier-btn" style="margin-top:20px; "></td>
                                </tr>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>

        </div>
            <h2 style="margin-left: 50px;">#2</h2>
            <h2 style="margin-left: 50px;">#3</h2>
            <h2 style="margin-left: 50px;">#4</h2>
<!--**** BEST SELLERS MUSIQUE****-->
        <div class="best-musique">
            <h2 style="margin-left: 50px;">Musique</h2>
            <h2 style="margin-left: 50px;">#1</h2>
            <div class="cadre-prod">
                <div class="row">
                    <!-- 1. IMAGE -->
                    <div class="col-md-3">
                        <a href="img/aya.jpg" target="_blank"><img src="img/aya.jpg" style="width: 100%; height: 185px;"></a>
                    </div>
                    <!-- 2. DETAIL ARTICLE -->
                    <div class="col-md-5" style="margin-top: 10px;">
                        <div class="en-tete-prod">Album de Artiste</div>
                        <div class="prix-prod">Mettre le prix &euro;</div>
                        <div class="reference-prod">La référence RS55ZQ</div>
                        <div class="description-prod">Description Aya la best.</div>
                    </div>
                    <!-- REMPLIR INFOS -->
                    <div class="col-md-4">
                        <div class="remplir-infos-prod">
                            <form>
                                <!-- QUANTITE -->
                                <tr>
                                    <td>
                                        <label style="color:grey; margin-left: 70px;">Quantité  </label><input type="number" name="quantite" id="quantite" style="width: 50px; margin-left: 10px; font-size: 12px;">
                                    </td>
                                </tr>
                                <!-- AJOUTER PANIER -->
                                <tr>
                                    <td><input type="button" id="ajout-panier" name="ajout-panier" value="Ajouter au panier" class="ajout-panier-btn" style="margin-top:20px; "></td>
                                </tr>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--**** BEST SELLERS VETEMENTS ET CHASSURES****-->
        <div class="best-vetement">
            <h2 style="margin-left: 50px;">Vetements et Chaussures</h2>
            <h2 style="margin-left: 50px;">#1</h2>
            <!-- POUR CHAUSSURES ET VETEMENTS-->
            <div class="cadre-prod">
                <div class="row">
                    <!-- 1. IMAGE -->
                    <div class="col-md-3">
                        <a href="img/shoes.jpg" target="_blank"><img src="img/shoes.jpg" style="width: 100%; height: 185px;"></a>
                    </div>
                    <!-- 2. DETAIL ARTICLE -->
                    <div class="col-md-5" style="margin-top: 10px;">
                        <div class="en-tete-prod">Marque - Nom de la Chaussures</div>
                        <div class="prix-prod">Mettre le prix &euro;</div>
                        <div class="reference-prod">La référence RS55ZQ</div>
                        <div class="description-prod">Chaussures plutot comfortable</div>
                    </div>
                    <!-- 3. REMPLIR INFOS -->
                    <div class="col-md-4">
                        <div class="remplir-infos-vet">
                            <form>
                                <table>
                                    <!-- QUANTITE -->
                                    <tr>
                                        <td>
                                            <label style="color:grey;">Quantité  </label><input type="number" name="quantite" id="quantite" style="width: 50px; margin-left: 10px; font-size: 12px;">
                                        </td>
                                    </tr>
                                    <!-- COULEUR -->
                                    <tr>
                                        <td>
                                            <label style="color:grey;">Couleur</label>
                                            <select style="width: 50px; margin-left:12px;"><OPTION><OPTION>Bleu <OPTION>Rouge <OPTION>Vert <OPTION>Blanc <OPTION>Noir <OPTION>Jaune<OPTION>Rose</select>
                                        </td>
                                    </tr>
                                    <!-- SEXE -->
                                    <tr>
                                        <td>
                                            <input type="radio" id="femme" name="sexe" ><label style="color:grey; margin-left: 10px;" for="femme">Femelle</label>
                                            <input type="radio" id="homme" name="sexe" style="margin-left: 10px;"><label style="color:grey; margin-left: 10px;" for="homme">Male</label></td>
                                        </td>
                                    </tr>
                                    <!-- TAILLE -->
                                    <tr>
                                        <td>
                                            <label style="color:grey;">Sélectionnez une taille</label>
                                            <select style=" width: 50px;" ><OPTION><OPTION>XS <OPTION>S <OPTION>M <OPTION>L <OPTION>XL</select>
                                        </td>
                                        <td>
                                            <label style="color:grey;">Sélectionnez une pointure</label>
                                            <select name="pointure" style=" width: 50px;"><OPTION><OPTION>36 <OPTION>37 <OPTION>38 <OPTION>39 <OPTION>40 <OPTION>41 <OPTION>42 <OPTION>43 <OPTION>44 <OPTION>45 </select>
                                            </td>
                                    </tr>
                                    <!-- AJOUTER AU PANIER -->
                                    <tr>
                                        <td><input type="button" id="ajout-panier" name="ajout-panier" value="Ajouter au panier" class="ajout-panier-btn"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>                             
                    </div>
                </div>
            </div>
        </div>

<!--**** BEST SELLERS SPORTS ET LOISIRS****-->
        <div class="best-sport">
            <h2 style="margin-left: 50px;">Sports et Loisirs</h2>
            <h2 style="margin-left: 50px;">#1</h2>
                <div class="cadre-prod">
                    <div class="row">
                        <!-- 1. IMAGE -->
                        <div class="col-md-3">
                            <a href="img/sport.jpg" target="_blank"><img src="img/sport.jpg" style="width: 100%; height: 185px;"></a>
                        </div>
                        <!-- 2. DETAIL ARTICLE -->
                        <div class="col-md-5" style="margin-top: 10px;">
                            <div class="en-tete-prod">Nom</div>
                            <div class="prix-prod">Mettre le prix &euro;</div>
                            <div class="reference-prod">La référence RS55ZQ</div>
                            <div class="description-prod">j'aime le foot.</div>
                        </div>
                        <!-- 3. REMPLIR INFOS -->
                        <div class="col-md-4">
                            <div class="remplir-infos-prod">
                                <form>
                                    <!-- QUANTITE -->
                                    <tr>
                                        <td>
                                            <label style="color:grey; margin-left: 70px;">Quantité  </label><input type="number" name="quantite" id="quantite" style="width: 50px; margin-left: 10px; font-size: 12px;">
                                        </td>
                                    </tr>
                                    <!-- AJOUTER PANIER -->
                                    <tr>
                                        <td><input type="button" id="ajout-panier" name="ajout-panier" value="Ajouter au panier" class="ajout-panier-btn" style="margin-top:20px; "></td>
                                    </tr>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- fin div page-venteflash -->
        </div>

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
