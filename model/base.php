<?php

function se_connecter(){

    $server = "localhost"; // $serveur = "127.0.0.1"
    $user = "root";
    $password = "";
    $base = "banque_du_peuple";

    $connexion = mysqli_connect($server, $user, $password, $base);

    if (!$connexion) {
     return die("Connexion échouée: " . mysqli_connect_error());
    } else {
        return $connexion;
        }
}

function executeRequete($requete){

    $connexion = se_connecter();

    return mysqli_query($connexion, $requete);
}



?>