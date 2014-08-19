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
//===============================================================================================================
if (isset($_SESSION['login_user']))
 {	
 $adr=$lieu;
$t= getCoordonnees($adr);
$att=$t[0];
$leng=$t[1];

    # mise a jour d'un concour
	
		 $sql = "UPDATE annonce_c SET organisme_c='".$organisme."', date_depot_c='".$date_debut."',date_fin_c='".$date_fin."', date_c='".$date_c."', desc_c='".$desc."',niveau_c='".$niveau."', lieu_c='".$lieu."',email_c='".$email."',tel_c='".$tel."',pieces_c='".$pieces."',ville_c='".$ville."',domaine_c='".$domaine."',lieu_c='".$lieu."',condition_c='".$condition."',site_c='".$site."',attitude='".$att."',langitude='".$leng."' WHERE id_c='".$id_c."'";
	
		 
	 $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  // on envoie la requête 
     header('location:annonce.php'); 
 }
else
 {
	$smarty->display('index.html');
 }
