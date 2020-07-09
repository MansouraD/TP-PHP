<?php

function ajouterCompte($type_compte, $numero_agence, $numero_compte, $cle_rib, $frais_ouverture, $liaison){

    $requeteInsertion ="INSERT INTO compte (type_compte, agence, numero_compte, cle_rib, frais_ouverture, _cni, _ninea) 
    VALUES ('$type_compte', '$numero_agence', '$numero_compte', '$cle_rib', '$frais_ouverture', '$liaison')";
    
    return executeRequete($requeteInsertion);
   
}


?>