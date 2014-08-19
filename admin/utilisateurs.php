<?php
session_start(); 
header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');

extract($_POST);
extract($_GET);

#verification du session
if (isset($_SESSION['login_user']))
 {	
	//===========================================================================
	//================= suppression d'une formation =============================
	//===========================================================================
	  if (!empty($action) && $action=='supprimer')
	  {
		$table1=$ikra->DeleteSQL('compte_utilisateur', "WHERE id_u ='" .$id."'");
   	  }
     //==========================================================================

	//===========================================================================
	//====================== remplissage du tableau utilisateurs ================
	//===========================================================================

	$table1 = $ikra->Table('compte_utilisateur');
	foreach ($table1 as $row) {

		$return[]=array(
				
				"nom_u"=>$row['nom_u'],
				"prenom_u"=>$row['prenom_u'],
				"date_n"=>$row['date_n'],
				"civilite_u"=>$row['civilite_u'],
				"email_u"=>$row['email_u'],
				"pass_u"=>$row['pass_u'],
				"secteur_u"=>$row['secteur_u'],
				"niveau"=>$row['niveau'],
				"id_u"=>$row['id_u'],
				);
	 }
	$smarty->assign("return",$return);
	$smarty->display('utilisateur.html');
	//==========================================================================
 }
else
 {
	$smarty->display('index.html');
 }