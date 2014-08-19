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

$adr=$lieu;
$t= getCoordonnees($adr);
$att=$t[0];
$leng=$t[1];
	
	 $sql = "UPDATE annonce_f SET desc_f='".$desc."', secteur_f='".$secteur."',dure_f='".$duree."', organisation_f='".$organisme."', lieu_f='".$lieu."',nbr_poste_f='".$nbr."', ville_f='".$ville."',email_f='".$email."',tel_f='".$tel."',resp_f='".$resp."',attitude='".$att."',langitude='".$leng."',site_f='".$site."',date_depot_f='".$date."' WHERE id_f='".$id_f."'";
	
	 $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  // on envoie la requête 
	 header('location:annonce_f.php'); 
  }
else
 {
	$smarty->display('index.html');
 }
