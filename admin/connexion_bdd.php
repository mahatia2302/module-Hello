<?php

    $host = 'localhost' ; // nom de l'hôte 
    $username = 'root' ; //nom de l'admin serveur
    $password = '' ; // mot de passe
    $db_name = 'hello'; // nom de la bdd (base de données)

    $connect_db = new mysqli ($host , $username , $password, $db_name); //ce connecter à la base de données

    // if ($connect_db->connect_error){
    //     echo "échec de la connexion";
    // }
    // else {
    //     echo "connexion réussi";
    // }