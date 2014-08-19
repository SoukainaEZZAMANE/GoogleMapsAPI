<?php
session_start(); 
include_once("config.php");
require_once('ikra.php');
require_once('BD.php');

extract($_POST);

//======================================================================================================
//*************************** fonction adresse ---> att,lang *******************************************
//======================================================================================================
function getCoordonnees($adresse){
    $apiKey = "000824788445984525451:fkamkqgo6se";//Indiquez ici votre clé Google maps !
    $url = "http://maps.google.com/maps/geo?q=".urlencode($adresse)."&output=csv&key=".$apiKey;

    $csv = file($url);
    $donnees = explode(",",$csv[0]); 
	$t = array($donnees[2],$donnees[3]);
	
    return $t;
	} 
//=======================================================================================================
	

#verification du session
if (isset($_SESSION['login_user']))
 {	
 $adr=$lieu_e;
$t= getCoordonnees($adr);
$att=$t[0];
$leng=$t[1];
	
	# modification d'emploi 
	  $sql = "UPDATE annoce_e SET entreprise_e='".$entreprise_e."', desc_entr_e='".$desc_entr_e."',nbr_poste_e='".$nbr_poste_e."', lieu_e='".$lieu_e."', date_depot_e='".$date_depot_e."',secteur_e='".$secteur_e."', tel_e='".$tel_e."',type_contrat_e='".$type_e."',remuniration_e='".$ren_e."',email_e='".$email_e."',ville_e='".$ville_e."',site_e='".$site_e."',attitude='".$att."',langitude='".$leng."' WHERE id_e='".$id_e."'";

	 $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  // on envoie la requête 
	 header('location:annonce_e.php'); 
  }
else
 {
	$smarty->display('index.html');
 }
