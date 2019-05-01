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
        
        $sql = "CREATE TABLE Vetement (
            ref INT(6) PRIMARY KEY,
            nom VARCHAR(50) NOT NULL,
            descri TEXT(30) NOT NULL,
            prix INT(6),
            sexe ENUM('0','1'),
            pointure INT(2),
            marque VARCHAR(30)
            )";
        $result = mysqli_query($db_handle, $sql);

        $sql1 = "CREATE TABLE Musique (
            ref INT(6) PRIMARY KEY,
            titre VARCHAR(50) NOT NULL,
            artiste VARCHAR(30) NOT NULL,
            album VARCHAR(30),
            annee INT(4),
            prix INT(6)
            )";
        $result1 = mysqli_query($db_handle, $sql1);

        $sql2 = "CREATE TABLE Livre (
            ref INT(6) PRIMARY KEY,
            titre VARCHAR(50) NOT NULL,
            auteur VARCHAR(30) NOT NULL,
            annee INT(4),
            prix INT(6),
            editeur VARCHAR(40),
            descri TEXT
            )";
        $result2 = mysqli_query($db_handle, $sql2);

        $sql3 = "CREATE TABLE SportLoisir (
            ref INT(6) PRIMARY KEY,
            nom VARCHAR(50) NOT NULL,
            prix INT(6),
            descri TEXT
            )";
        $result3 = mysqli_query($db_handle, $sql3);

        $sql4 = "CREATE TABLE Vendeur (
            pseudo VARCHAR(20) PRIMARY KEY,
            admins ENUM('0','1'),
            mdp VARCHAR(20),
            email VARCHAR(50),
            nom VARCHAR(40),
            )";
        $result4 = mysqli_query($db_handle, $sql4);

        $sql5 = "CREATE TABLE Acheteur (
            pseudo VARCHAR(20) PRIMARY KEY,
            mdp VARCHAR(20),
            email VARCHAR(50),
            nom VARCHAR(20),
            prenom VARCHAR(20),
            adresse1 VARCHAR(50),
            adresse2 VARCHAR(50),
            code_bp INT(5),
            ville VARCHAR(40),
            pays VARCHAR(20),
            tel INT(10),
            card_type VARCHAR(15),
            card_number INT(16),
            card_name VARCHAR(50),
            exp_date DATE,
            sec_code INT(3)
            )";
        $result5 = mysqli_query($db_handle, $sql5);

        $sql6 = "INSERT INTO `acheteur` (`pseudo`, `mdp`, `email`, `nom`, `prenom`, `adresse1`, `adresse2`, `code_bp`, `ville`, `pays`, `tel`, `card_type`, `card_number`, `card_name`, `exp_date`, `sec_code`) VALUES ('gege2020', '0000', 'gege@edu.ece.fr', 'Pertier', 'Gege', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
        $result6 = mysqli_query($db_handle, $sql6);

        $sql7 = "INSERT INTO `vendeur` (`pseudo`, `admins`, `mdp`, `email`, `nom`) VALUES ('admin', '1', '0000', 'laure.chamouard@edu.ece.fr', 'ECE')";
        $result7 = mysqli_query($db_handle, $sql7);



    }
    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else

    mysqli_close($db_handle);

?>