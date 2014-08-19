<?php
session_start(); 
header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');
$_SESSION['m']='1';
extract($_POST);
extract($_GET);

 # verification du session
if (isset($_SESSION['login_user']))
 {	

     //=========================================================================================
	 //========================= valider une annonce ===========================================
	 //=========================================================================================
		if (!empty($action) && $action=='valider')
	 {
		$table2=$ikra->Query("SELECT * FROM annonce_c where id_c=".$id."");
 
foreach ($table2 as $row) {
		
				$id_c=$row['id_c'];
				$organisme_c=$row['organisme_c'];
				$date_depot_c=$row['date_depot_c'];
				$desc_c=$row['desc_c'];
				$niveau_c=$row['niveau_c'];
				$lieu_c=$row['lieu_c'];
				$date_c=$row['date_c'];
				$email_c=$row['email_c'];
				$tel_c=$row['tel_c'];
				$pieces_c=$row['pieces_c'];
				$ville_c=$row['ville_c'];
				$domaine_c=$row['domaine_c'];
			    $condition_c=$row['condition_c'];
				$site_c=$row['site_c'];
				$id_r=$row['id_r'];
				$fin= $row['date_fin_c'];
				$att=$row['attitude'];
				$lang=$row['langitude']; 
				$image_c=$row['image_c']; 

	}
	 $dr = $ikra->InsertSQL('concour', array ('organisme_c','date_depot_c','date_fin_c','date_c','desc_c','niveau_c','lieu_c','email_c','tel_c','pieces_c','ville_c','domaine_c','condition_c','site_c','attitude','langitude','image_c'),array($organisme_c,$date_depot_c,$fin,$date_c,$desc_c,$niveau_c,$lieu_c,$email_c,$tel_c,$pieces_c,$ville_c,$domaine_c,$condition_c,$site_c,$att,$lang,$image_c));

		$table1=$ikra->DeleteSQL('annonce_c', "WHERE id_c ='" .$id."'");
		}

	 //=========================================================================================


	//==========================================================================================
	//================ suppression d'une annonce concour================================================
	//==========================================================================================
	
	if (!empty($action) && $action=='supprimer_c')
  	 {
		$table1=$ikra->DeleteSQL('annonce_c', "WHERE id_c ='" .$id."'");
	 }
	//==========================================================================================

	//==========================================================================================
	//======= remplissage du tableau annonce concours a afficher dans 'annonce.html'============
	//==========================================================================================

	$table1 = $ikra->Table('annonce_c');
	foreach ($table1 as $row) {
		$return[]=array(
				"id_c"=>$row['id_c'],
				"organisme_c"=>$row['organisme_c'],
				"date_depot_c"=>$row['date_depot_c'],
				"date_fin_c"=>$row['date_fin_c'],
				"desc_c"=>$row['desc_c'],
				"niveau_c"=>$row['niveau_c'],
				"lieu_c"=>$row['lieu_c'],
				"date_c"=>$row['date_c'],
				"email_c"=>$row['email_c'],
				"tel_c"=>$row['tel_c'],
				"pieces_c"=>$row['pieces_c'],
				"ville_c"=>$row['ville_c'],
				"domaine_c"=>$row['domaine_c'],
			    "condition_c"=>$row['condition_c'],
				"site_c"=>$row['site_c'],
				"id_r"=>$row['id_r'],
			);
	}
	$smarty->assign("return",$return);
	$smarty->display('annonce.html');
	//==============================================================================================	
 }
else
 {
	$smarty->display('index.html');
 }

