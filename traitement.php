<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    

    //identifier le nom de base de données
    $database = "ECEAmazon";

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    //si le BDD existe, faire le traitement
    if($db_found) {
        
        //Création des tables de la BDD
        $sql = "CREATE TABLE Vetement (ref INT(6) PRIMARY KEY, type_vet ENUM('0','1'),nom VARCHAR(50) NOT NULL,descri TEXT(30) NOT NULL,prix INT(6),sexe ENUM('0','1'),pointure INT(2),taille INT(3),marque VARCHAR(30))";
        $result = mysqli_query($db_handle, $sql);

        $sql1 = "CREATE TABLE Musique (ref INT(6) PRIMARY KEY,titre VARCHAR(50) NOT NULL,artiste VARCHAR(30) NOT NULL,album VARCHAR(30),annee INT(4),prix INT(6))";
        $result1 = mysqli_query($db_handle, $sql1);

        $sql2 = "CREATE TABLE Livre (ref INT(6) PRIMARY KEY,titre VARCHAR(50) NOT NULL,auteur VARCHAR(30) NOT NULL,annee INT(4),prix INT(6),editeur VARCHAR(40),descri TEXT)";
        $result2 = mysqli_query($db_handle, $sql2);

        $sql3 = "CREATE TABLE SportLoisir (ref INT(6) PRIMARY KEY,nom VARCHAR(50) NOT NULL,prix INT(6),descri TEXT)";
        $result3 = mysqli_query($db_handle, $sql3);

        $sql4 = "CREATE TABLE Vendeur (pseudo VARCHAR(20) PRIMARY KEY,admins ENUM('0','1'),mdp VARCHAR(20),email VARCHAR(50),nom VARCHAR(40),)";
        $result4 = mysqli_query($db_handle, $sql4);

        $sql5 = "CREATE TABLE Acheteur (pseudo VARCHAR(20) PRIMARY KEY,mdp VARCHAR(20),email VARCHAR(50),nom VARCHAR(20),prenom VARCHAR(20),adresse1 VARCHAR(50),adresse2 VARCHAR(50),
            code_bp INT(5),ville VARCHAR(40),pays VARCHAR(20),tel INT(10),card_type VARCHAR(15),card_number INT(16),card_name VARCHAR(50),exp_date DATE,sec_code INT(3))";
        $result5 = mysqli_query($db_handle, $sql5);

        $sql32 = "CREATE TABLE obj_panier (pseudo VARCHAR(20) NOT NULL, categorie int(1) NOT NULL,id int(6),PRIMARY KEY (pseudo))";
        $result32 = mysqli_query($db_handle, $sql32);

        //Insertion d'acheteurs
        $sql6 = "INSERT INTO `acheteur` (`pseudo`, `mdp`, `email`, `nom`, `prenom`, `adresse1`, `adresse2`, `code_bp`, `ville`, `pays`, `tel`, `card_type`, `card_number`, `card_name`, `exp_date`, `sec_code`) VALUES ('gege2020', '0000', 'gege@edu.ece.fr', 'Pertier', 'Gege', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
        $result6 = mysqli_query($db_handle, $sql6);

        //Insertion de l'admin
        $sql7 = "INSERT INTO `vendeur` (`pseudo`, `admins`, `mdp`, `email`, `nom`) VALUES ('admin', '1', '0000', 'laure.chamouard@edu.ece.fr', 'ECE')";
        $result7 = mysqli_query($db_handle, $sql7);

        //Insertion des articles
        //Vetements
        $sql8 = "INSERT INTO `vetement` (`ref`, `type_vet`, `nom`, `descri`, `prix`, `sexe`, `pointure`, `taille`, `marque`) VALUES ('1','0','Chaussettes pour chien','Protégez les petits petons de vos toutous préférés','6',NULL,NULL,NULL,NULL)";
        $result8 = mysqli_query($db_handle, $sql8);

        $sql9 = "INSERT INTO `vetement` (`ref`, `type_vet`, `nom`, `descri`, `prix`, `sexe`, `pointure`, `taille`, `marque`) VALUES ('2','1','Bandana rafraichissant','Gardez un bon style pour votre chien tout en le protégeant de la chaleur','7','',NULL,'','')";
        $result9 = mysqli_query($db_handle, $sql9);

        $sql10 = "INSERT INTO `vetement` (`ref`, `type_vet`, `nom`, `descri`, `prix`, `sexe`, `pointure`, `taille`, `marque`) VALUES ('3','0','Bottes confort','Favorise la cicatrisation des blessures','12','','',NULL,'')";
        $result10 = mysqli_query($db_handle, $sql10);

        $sql11 = "INSERT INTO `vetement` (`ref`, `type_vet`, `nom`, `descri`, `prix`, `sexe`, `pointure`, `taille`, `marque`) VALUES ('4','1','Noeud papillon','Accessorisez votre chien pour une classe légendaire',5,'',NULL,'','')";
        $result11 = mysqli_query($db_handle, $sql11);

        $sql12 = "INSERT INTO `vetement` (`ref`, `type_vet`, `nom`, `descri`, `prix`, `sexe`, `pointure`, `taille`, `marque`) VALUES ('5','1','Deguisement Captain America','A la sortie du dernier Avenger, soyez sûrs que votre animal reste dans la mode',7,'',NULL,'','')";
        $result12 = mysqli_query($db_handle, $sql12);

        $sql13 = "INSERT INTO `vetement` (`ref`, `type_vet`, `nom`, `descri`, `prix`, `sexe`, `pointure`, `taille`, `marque`) VALUES ('6','1','Pull Over Langley','Pour vos longues soirées d'hiver, couvrez vos animaux d'un bon pull en laine','17',NULL,'','')";
        $result13 = mysqli_query($db_handle, $sql13);

        //Mus
        $sql14 = "INSERT INTO `musique` (`ref`, `titre`, `artiste`, `album`, `annee`, `prix`) VALUES ('1', 'Black Dog', 'Led Zeppelin', 'Led Zeppelin IV', '1971', '3')";
        $result14 = mysqli_query($db_handle, $sql14);

        $sql15 = "INSERT INTO `musique` (`ref`, `titre`, `artiste`, `album`, `annee`, `prix`) VALUES ('2', 'Who Let the Dogs Out?', 'Baha Men', 'Who Let the Dogs Out', '2000', '3')";
        $result15 = mysqli_query($db_handle, $sql15);

        $sql16 = "INSERT INTO `musique` (`ref`, `titre`, `artiste`, `album`, `annee`, `prix`) VALUES ('3', 'The Dogs Of War', 'Pink Floyd', 'A Momentary Lapse of Reason', '1988', '3')";
        $result16 = mysqli_query($db_handle, $sql16);

        $sql17 = "INSERT INTO `musique` (`ref`, `titre`, `artiste`, `album`, `annee`, `prix`) VALUES ('4', 'Hey Bulldog', 'The Beatles', 'Yellow Submarine', '1969', '3')";
        $result17 = mysqli_query($db_handle, $sql17);

        $sql18 = "INSERT INTO `musique` (`ref`, `titre`, `artiste`, `album`, `annee`, `prix`) VALUES ('5', 'Given The Dog A Bone', 'AC/DC', 'Back in Black', '1980', '3')";
        $result18 = mysqli_query($db_handle, $sql18);

        $sql19 = "INSERT INTO `musique` (`ref`, `titre`, `artiste`, `album`, `annee`, `prix`) VALUES ('6', 'Hound Dog', 'Elvis Presley', 'Dont Be Cruel', '1956', '3')";
        $result19 = mysqli_query($db_handle, $sql19);


        //Sp&L
        $sql20 = "INSERT INTO `sportloisir` (`ref`, `nom`, `prix`, `descri`) VALUES ('1', 'Agility', '45', 'L'agility (signifiant tout simplement « agilité » en anglais), ou agilité, est un sport canin, dans lequel le chien évolue sur un parcours d'obstacles sous la conduite de son maître.')";
        $result20 = mysqli_query($db_handle, $sql20);

        $sql21 = "INSERT INTO `sportloisir` (`ref`, `nom`, `prix`, `descri`) VALUES ('2', 'Freesbee', '5', 'Disque en plastique, légèrement bombé, que les joueurs se lancent et qui plane en tournant sur lui-même.')";
        $result21 = mysqli_query($db_handle, $sql21);

        $sql22 = "INSERT INTO `sportloisir` (`ref`, `nom`, `prix`, `descri`) VALUES ('3', 'Lancé de baton', '2', 'Long morceau de bois rond que l on peut tenir à la main.')";
        $result22 = mysqli_query($db_handle, $sql22);

        $sql23 = "INSERT INTO `sportloisir` (`ref`, `nom`, `prix`, `descri`) VALUES ('4', 'Lancé de balle', '3', 'Petite sphère, boule élastique dont on se sert pour divers jeux.')";
        $result23 = mysqli_query($db_handle, $sql23);

        $sql24 = "INSERT INTO `sportloisir` (`ref`, `nom`, `prix`, `descri`) VALUES ('5', 'Promenade', '1', 'Action de se promener ; trajet fait en se promenant.')";
        $result24 = mysqli_query($db_handle, $sql24);

        $sql25 = "INSERT INTO `sportloisir` (`ref`, `nom`, `prix`, `descri`) VALUES ('6', 'Manger le canapé', '300', 'Action de manger un ong siège à dossier où plusieurs personnes peuvent s'asseoir ensemble.')";
        $result25 = mysqli_query($db_handle, $sql25);

        //Livres
        $sql26 = "INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`) VALUES ('1', 'Petit ABC Rustica de l éducation positive', 'Chloe Fesch', '2018', '20', 'Rustica', 'Apprendre à son chien des règles de vie, l éduquer avec respect et bienveillance, lui permettre de se dépenser suffisamment et opter pour une attitude cohérente')";
        $result26 = mysqli_query($db_handle, $sql26);

        $sql27 = "INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`) VALUES ('2', 'Le Petit Larousse des chiens', 'Dorling Kindersley', '2017', '23', 'Larousse', 'La bible pour choisir en toute connaissance de cause votre compagnon')";
        $result27 = mysqli_query($db_handle, $sql27);

        $sql28 = "INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`) VALUES ('3', 'Encyclopédie visuelle des races de chien', 'Alain Fournier', '2009', '29', 'ECE Event', 'La présentation toute illustrée des 337 races de chiens référencées par la FCI ( fédération canine internationale.)')";
        $result28 = mysqli_query($db_handle, $sql28);

        $sql29 = "INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`) VALUES ('4', 'Eduquer son chien pour les Nuls', 'Jack VOLHARD', '2012', '13', 'Les Nuls', 'Assis, debout, couché ! Eduquez votre animal de compagnie préféré !')";
        $result29 = mysqli_query($db_handle, $sql29);

        $sql30 = "INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`) VALUES ('5', 'Comment élever son chiot (au top !)', 'Gwen Bailey', '2012', '12', 'Larissa', 'Ce guide donne les clés d’une éducation réussie fondée sur la confiance, l’amour et surtout un apprentissage positif des règles de vie.')";
        $result30 = mysqli_query($db_handle, $sql30);

        $sql31 = "INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`) VALUES ('6', '365 idées pour rendre mon chien heureux', 'Laetitia OuafMag', '2016', '15', 'Ouafmag', 'Vous cherchez des idées pour occuper votre chien, lui faire développer ses talents, briser la routine, devenir plus complices… en voici 365 !')";
        $result31 = mysqli_query($db_handle, $sql31);


    }
    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else

    mysqli_close($db_handle);

?>