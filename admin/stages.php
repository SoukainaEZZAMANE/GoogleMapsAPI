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
	 //==========================================================================================
	 //======================= suppression d'un stage ===========================================
	 //==========================================================================================	
		if (!empty($action) && $action=='supprimer')
		{
		$table1=$ikra->DeleteSQL('stage', "WHERE id_s =$id");
		}
     //===========================================================================================

	 //===========================================================================================
	 //================================ remplissage du tableau Stage =============================
	 //===========================================================================================
	 $table1 = $ikra->Table('stage');
	 foreach ($table1 as $row) {
	 	$return[]=array(
				"id_s"=>$row['id_s'],
				"niveau_s"=>$row['niveau_s'],
				"secteur_s"=>$row['secteur_s'],
				"dure_s"=>$row['dure_s'],
				"entreprise_s"=>$row['entreprise_s'],
				
				"remunere"=>$row['remunere'],
				"nbr_poste"=>$row['nbr_poste'],
				"desc_entr_s"=>$row['desc_entr_s'],
				"date_depot_s"=>$row['date_depot_s'],
				"demarrage_s"=>$row['demarrage_s'],
				"lieu_s"=>$row['lieu_s'],
				"email_s"=>$row['email_s'],
				"ville_s"=>$row['ville_s'],
				"tel_s"=>$row['tel_s'],
				"mission_s"=>$row['mission_s'],
				"site_s"=>$row['site_s'],
				"image_s"=>$row['image_s'],
				
				
				);
	  }
	 $smarty->assign("return",$return);
	 $smarty->display('stage.html');
	//===========================================================================================
 }
else
 {
	$smarty->display('index.html');
 }

