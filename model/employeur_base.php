<?php

function ajouterEmployeur($numero_identification, $raison_social, $denomination, $adresse_employeur){
     
    $requeteInsertion ="INSERT INTO employeur (numero_identification, raison_social, denomination, adresse) 
    VALUES ('$numero_identification', '$raison_social', '$denomination', '$adresse_employeur')";

    return executeRequete($requeteInsertion);

}


?>