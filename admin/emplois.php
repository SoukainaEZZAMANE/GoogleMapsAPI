<?php

session_start(); 
header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');

extract($_POST);
extract($_GET);

# verification du session
if (isset($_SESSION['login_user']))
{	
	//===========================================================================
	//================= suppression d'une offre d'emploi ========================
	//===========================================================================
	if (!empty($action) && $action=='supprimer')
	 {
	  $table1=$ikra->DeleteSQL('emploi', "WHERE id_e ='" .$id."'");
	 }
    //===========================================================================

	//===========================================================================
	//===================== remplissage du tableau de formation =================
	//===========================================================================
	# Add Table List Object
	$table1 = $ikra->Table('emploi');
	foreach ($table1 as $row) {

		$return[]=array(
				"id_e"=>$row['id_e'],
				"entreprise_e"=>$row['entreprise_e'],
				"desc_entr_e"=>$row['desc_entr_e'],
				"nbr_poste_e"=>$row['nbr_poste_e'],
				"lieu_e"=>$row['lieu_e'],
				"date_depot_e"=>$row['date_depot_e'],
				"secteur_e"=>$row['secteur_e'],
				"niveau_e"=>$row['niveau_e'],
				"tel_e"=>$row['tel_e'],
				"type_contrat_e"=>$row['type_contrat_e'],
				"renumeration_e"=>$row['renumeration_e'],
				"email_e"=>$row['email_e'],
				"Ville_e"=>$row['ville_e'],
				"site_e"=>$row['site_e'],
				"image_e"=>$row['image_e'],
				);
	}
	$smarty->assign("return",$return);
	$smarty->display('emplois.html');
    //===========================================================================
}
else
 {
  $smarty->display('index.html');
 }
 