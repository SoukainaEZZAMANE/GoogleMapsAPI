<?php
session_start();
header('Content-Type:text/html;charset=utf-8');
include_once("config.php");
require_once('ikra.php');
require_once('BD.php');

# verification du session
if (isset($_SESSION['login_user']))
 { 
	# ajout d'un concours

//============================================================================================
//==================== récuperer les informations de l'admin connecté =======================
//============================================================================================
	$table1 = $ikra->Query("SELECT * FROM compte_admin where email_a='".$_SESSION['login_user']."'");
	foreach ($table1 as $row) {
		$return[]=array(
				"id_a"=>$row['id_a'],
				"nom_a"=>$row['nom_a'],
				"prenom_a"=>$row['prenom_a'],
				"email_a"=>$row['email_a'],
				
			);
	}
	$smarty->assign("return",$return); 
	$smarty->display('profil.html');
//=============================================================================================
 }
else
 {
	$smarty->display('index.html');
 }