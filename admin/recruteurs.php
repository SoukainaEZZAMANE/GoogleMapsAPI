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
	//==================== suppression d'un recruteur ===========================
	//===========================================================================
	 if (!empty($action) && $action=='supprimer')
	  {
		$table1=$ikra->DeleteSQL('compte_recruteur', "WHERE id_r ='" .$id."'");
	  }
	//===========================================================================

	//===========================================================================
	//===================== remplissage du tableau de formation =================
	//===========================================================================
	  $table1 = $ikra->Table('compte_recruteur');
	  foreach ($table1 as $row) {

	  	  $return[]=array(
				"id_r"=>$row['id_r'],
				"nom_r"=>$row['nom_r'],
				"prenom_r"=>$row['prenom_r'],
				"civilite_r"=>$row['civilite_r'],
				"email"=>$row['email'],
				"pass_r"=>$row['pass_r'],
				"departement"=>$row['departement'],
				"fonction"=>$row['fonction'],
				"tel_r"=>$row['tel_r'],
				"fax_r"=>$row['fax_r'],
				);
	    }
	  $smarty->assign("return",$return);
	  $smarty->display('recruteur.html');
	//==========================================================================================
 }
else
 {
	$smarty->display('index.html');
 }