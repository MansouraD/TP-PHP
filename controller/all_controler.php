<?php

require_once '../model/base.php';
require_once '../model/clientParticulier_base.php';
require_once '../model/clientEntreprise_base.php';
require_once '../model/compte_base.php';
require_once '../model/employeur_base.php';

if(isset($_POST['soumettre'])){
    extract($_POST);

    if($_POST['check1']=='Particulier'){


        if(!empty($nom_client)  && !empty($prenom_client) && !empty($datenaiss) && !empty($cni) && !empty($adresse_client) && !empty($tel_client)){
           // if(!preg_match("/^[a-zA-Z ]{2,20}$/",$nom_client,$prenom_client)){

                $result = ajouterClientParticulier($nom_client, $prenom_client, $datenaiss, $cni, $adresse_client, $tel_client, $email_client, $profession, $statut, $salaire);
                if($result==1){     
                    $liaison = $cni;
                    //if(!empty($type_compte)){
                        $resultc = ajouterCompte($type_compte,$numero_agence,$numero_compte,$cle_rib, $frais_ouverture, $liaison);
                   // }
                    if($_POST['check3']=='salarie'){
                        $statut = 1;
                        if(!empty($denomination)  && !empty($adresse_employeur)){ 
                            //if(!preg_match("/^[a-zA-Z ]{2,20}$/",$raison_social,$denomination)){
                                $resulte = ajouterEmployeur($numero_identification, $raison_social, $denomination, $adresse_employeur);
                            //}
                        }
                    }else if($_POST['check3']=='autres'){
                        $statut = 0;
                    }header("location:../view/index.php?ok=$result"); 
                }
           // }
               
        }else{
            header("location:../view/index.php?ok=$result");
        }

     
        
    } else if($_POST['check1']=='Entreprise'){

        if(!empty($statut_juridique)  && !empty($nom_entreprise) && !empty($adresse_entreprise) && !empty($tel_entreprise)&& !empty($ninea)){
          //  if(preg_match("/^[a-zA-Z ]{2,20}$/",$raison_social,$denomination)){

                $result = ajouterClientEntreprise($statut_juridique, $nom_entreprise, $ninea, $adresse_entreprise, $tel_entreprise, $email_entreprise);
                if($result==1){ 
                    $liaison = $ninea;  
                   // if(!empty($type_compte){ 
                        $resultc = ajouterCompte($type_compte, $numero_agence, $numero_compte, $cle_rib, $frais_ouverture, $liaison);
                   // }
                }header("location:../view/index.php?ok=$result");   
          //  }  
        }else{
            header("location:../view/index.php?ok=$result");
        }


    }

  

}








?>