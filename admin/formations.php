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
	//================= suppression d'une formation =============================
	//===========================================================================
	if (!empty($action) && $action=='supprimer')
	 {
		$table1=$ikra->DeleteSQL('formation', "WHERE id_f ='".$id."'");
	 }
	//===========================================================================

	//===========================================================================
	//===================== remplissage du tableau de formation =================
	//===========================================================================
	# Add Table List Object
	$table1 = $ikra->Table('formation');
	foreach ($table1 as $row) {
		$return[]=array(
				"id_f"=>$row['id_f'],
				"desc_f"=>$row['desc_f'],
				"secteur_f"=>$row['secteur_f'],
				"dure_f"=>$row['dure_f'],
				"organisation_f"=>$row['organisation_f'],
				"lieu_f"=>$row['lieu_f'],	    
				"nbr_poste_f"=>$row['nbr_poste_f'],
				"ville_f"=>$row['ville_f'],
				"email_f"=>$row['email_f'],
				"tel_f"=>$row['tel_f'],
				"resp_f"=>$row['resp_f'],
				"date_depot_f"=>$row['date_depot_f'],
				"site_f"=>$row['site_f'],
				"image_f"=>$row['image_f'],
		
				
				);
	  }
	$smarty->assign("return",$return);
	$smarty->display('formations.html');
	//==========================================================================
 }
else
 {
	$smarty->display('index.html');
 }


