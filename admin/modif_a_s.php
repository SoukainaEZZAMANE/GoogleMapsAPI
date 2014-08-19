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

#verification du sesion
if (isset($_SESSION['login_user']))
 {	
	$adr=$lieu_s;
	$t= getCoordonnees($adr);
	$att=$t[0];
	$leng=$t[1];


	# Modification de stage
		$sql = "UPDATE annonce_s SET niveau_s='".$niveau_s."', secteur_s='".$secteur_s."',dure_s='".$dure_s."', entreprise_s='".$entreprise_s."', remunere='".$remunere."',nbr_poste='".$nbr_poste."',desc_entr_s='".$desc_entr_s."',date_depot_s='".$date_depot_s."',demarrage_s='".$demarrage_s."',lieu_s='".$lieu_s."',ville_s='".$ville_s."',email_s='".$email_s."',tel_s='".$tel_s."',site_s='".$site_s."',mission_s='".$mission_s."',attitude='".$att."',langitude='".$leng."' WHERE id_s='".$id_s."'";
   
		$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());   // on envoie la requête 
		header('location:annonce_s.php'); 
 }
else
 {
	$smarty->display('index.html');
 }
