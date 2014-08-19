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
	  $table1=$ikra->DeleteSQL('annoce_e', "WHERE id_e ='" .$id."'");
	 }
    //===========================================================================


	 //=========================================================================================
	 //========================= valider une annonce ===========================================
	 //=========================================================================================
		if (!empty($action) && $action=='valider')
	 {
		$table2=$ikra->Query("SELECT * FROM annoce_e where id_e=".$id."");
 
foreach ($table2 as $row) {
		
				$id_e=$row['id_e'];
				$entreprise_e=$row['entreprise_e'];
				$desc_entr_e=$row['desc_entr_e'];
				$nbr_poste_e=$row['nbr_poste_e'];
				$lieu_e=$row['lieu_e'];
				$date_depot_e=$row['date_depot_e'];
				$secteur_e=$row['secteur_e'];
				$niveau_e=$row['niveau_e'];
				$tel_e=$row['tel_e'];
				$type_contrat_e=$row['type_contrat_e'];
				$renumeration_e=$row['remuniration_e'];
				$email_e=$row['email_e'];
				$ville_e=$row['ville_e'];
				$site_e=$row['site_e'];
				$id_r=$row['id_r'];
				$att=$row['attitude'];
				$leng=$row['langitude'];
				$image_e=$row['image_e'];
			

	}
	 $dr = $ikra->InsertSQL('emploi', array ('entreprise_e','desc_entr_e','nbr_poste_e','lieu_e','date_depot_e','secteur_e','niveau_e','tel_e','type_contrat_e','renumeration_e','email_e','Ville_e','site_e','attitude','langitude','image_e'),
	 array($entreprise_e,$desc_entr_e,$nbr_poste_e,$lieu_e,$date_depot_e,$secteur_e,$niveau_e,$tel_e,$type_contrat_e,$renumeration_e,$email_e,$ville_e,$site_e,$att,$leng,$image_e));

		$table1=$ikra->DeleteSQL('annoce_e', "WHERE id_e ='" .$id."'");
		}

	 //=========================================================================================


	//===========================================================================
	//===================== remplissage du tableau de formation =================
	//===========================================================================
	# Add Table List Object
	$table1 = $ikra->Table('annoce_e');
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
				"renumeration_e"=>$row['remuniration_e'],
				"email_e"=>$row['email_e'],
				"Ville_e"=>$row['ville_e'],
				"site_e"=>$row['site_e'],
				"id_r"=>$row['id_r'],
				"image_e"=>$row['image_e'],
			
				);

	}
	$smarty->assign("return",$return);
	$smarty->display('annonce_e.html');
    //===========================================================================
}
else
 {
  $smarty->display('index.html');
 }
 