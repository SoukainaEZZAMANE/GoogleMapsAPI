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
		$table1=$ikra->DeleteSQL('annonce_f', "WHERE id_f ='".$id."'");
	 }
	//===========================================================================

	 //=========================================================================================
	 //========================= valider une annonce ===========================================
	 //=========================================================================================
		if (!empty($action) && $action=='valider')
	 {
		$table2=$ikra->Query("SELECT * FROM annonce_f where id_f=".$id."");
 

		foreach ($table2 as $row) {
		
				$id_f=$row['id_f'];
				$desc_f=$row['desc_f'];
				$secteur_f=$row['secteur_f'];
				$dure_f=$row['dure_f'];
				$organisation_f=$row['organisation_f'];
				$lieu_f=$row['lieu_f'];	    
				$nbr_poste_f=$row['nbr_poste_f'];
				$ville_f=$row['ville_f'];
				$email_f=$row['email_f'];
				$tel_f=$row['tel_f'];
				$resp_f=$row['resp_f'];
				$date_depot_f=$row['date_depot_f'];
				$site_f=$row['site_f'];
				$id_r=$row['id_r'];
				$att= $row['attitude'];
				$leng=$row['langitude'];
				$image=$row['image_f'];
	}

 $dr = $ikra->InsertSQL('formation', array ('desc_f','secteur_f','dure_f','organisation_f','lieu_f','nbr_poste_f','ville_f','email_f','tel_f','resp_f','date_depot_f','site_f','attitude','langitude','image_f'),
	 array($desc_f,$secteur_f,$dure_f,$organisation_f,$lieu_f,$nbr_poste_f,$ville_f,$email_f,$tel_f,$resp_f,$date_depot_f,$site_f,$att,$leng,$image));
		$table1=$ikra->DeleteSQL('annonce_f', "WHERE id_f ='" .$id."'");
		}

	 //=========================================================================================



	//===========================================================================
	//===================== remplissage du tableau de annonce formation =================
	//===========================================================================
	# Add Table List Object
	$table1 = $ikra->Table('annonce_f');
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
				"id_r"=>$row['id_r'],
				
				);
	  }
	$smarty->assign("return",$return);
	$smarty->display('annonce_f.html');
	//==========================================================================
 }
else
 {
	$smarty->display('index.html');
 }


