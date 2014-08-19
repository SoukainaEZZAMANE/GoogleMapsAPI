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
	    //===========================================================================================
    	//================================ suppression d'un message =================================
        //===========================================================================================
		 if (!empty($action) && $action=='supprimer')
		  {
		   $table1=$ikra->DeleteSQL('contact', "WHERE id_m ='" .$id."'");
	      }
		//==========================================================================================
		
		//==========================================================================================
		//============================= remplissage du tableau message =============================
		//==========================================================================================
		$table1 = $ikra->Table('contact');
		foreach ($table1 as $row) {
			$return[]=array(
					"id_m"=>$row['id_m'],
					"objet_m"=>$row['objet_m'],
					"email_m"=>$row['email_m'],
					"message"=>$row['message'],	
			);
		}
		$smarty->assign("return",$return);
		$smarty->display('message.html');
		//==========================================================================================
 }
else
 {
	$smarty->display('index.html');
 }

