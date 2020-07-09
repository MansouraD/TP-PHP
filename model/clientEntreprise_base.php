<?php

function ajouterClientEntreprise($statut_juridique, $nom_entreprise, $ninea, $adresse_entreprise, $tel_entreprise, $email_entreprise){
 
    $requeteInsertion ="INSERT INTO client_entreprise (statut, denomination, ninea, adresse, telephone, mail) 
    VALUES ('$statut_juridique', '$nom_entreprise', '$ninea', '$adresse_entreprise', '$tel_entreprise', '$email_entreprise')";

    return executeRequete($requeteInsertion);

}


?>