<?php
                                  
function ajouterClientParticulier($nom_client, $prenom_client, $datenaiss, $cni, $adresse_client, $tel_client, $email_client, $profession, $statut, $salaire){

    $requeteInsertion = "INSERT INTO client_particulier (nom, prenom, date_de_naissance, cni, adresse, téléphone, email, profession, statut, salaire)
    VALUES ('$nom_client', '$prenom_client', '$datenaiss', '$cni', '$adresse_client', '$tel_client', '$email_client', '$profession', '$statut', '$salaire')";

    return executeRequete($requeteInsertion);

}




?>