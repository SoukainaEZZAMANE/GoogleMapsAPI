<?php	
session_start();
 include_once("config.php");
	require_once('ikra.php');
	require_once('BD.php');
	header('Content-Type:text/html;charset=utf-8');
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


if (isset($_SESSION['login_user']))
 {
 print_r($_POST);

# Add Insert Object
$adr=$lieu;
$t= getCoordonnees($adr);
$att=$t[0];
$leng=$t[1];

 
	# ajout d'un concours
	 $dr = $ikra->InsertSQL('concour', array ('organisme_c','date_depot_c','date_fin_c','date_c','desc_c','niveau_c','lieu_c','email_c','tel_c','pieces_c','ville_c','domaine_c','condition_c','site_c','attitude','langitude','image_c'),
	 array($organisme,$date_debut,$date_fin,$date_c,$desc,$niveau,$lieu,$email,$tel,$pieces,$ville,$domaine,$condition,$site,$att,$leng,''));
	header('location:annonce.php'); 
 }
else
 {
	$smarty->display('index.html');
 }
?>