<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and array_key_exists('add_modele', $_POST))
    {
    //     func();
    // }
    // function func()
    // {
        echo "This is Add Modele Button that is selected"; 

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "opineletmoi";
            
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO MODELES (designation, taille, id_serie, annee, nb_exemplaire, numerote, texte) 
        VALUES ('$_POST[designation]', $_POST[taille], $_POST[serie], $_POST[annee], $_POST[nbexemplaire], $_POST[numerote], '$_POST[texte]')";
        
        try {
            mysqli_query($conn, $sql);
        } catch (Exception $e) {
            echo "<br>Erreur : " . $sql . "<br>" . mysqli_error($conn);
            return;
        } 

        echo "<br>Nouveau enregistrement créé avec succès";

        // $result = mysqli_query($conn, $sql);
        // if (mysqli_query($conn, $sql)) {
        //     echo "Nouveau enregistrement créé avec succès";
        // } else {
        //         echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
        // }
    
    
    }


    mysqli_close($conn);
