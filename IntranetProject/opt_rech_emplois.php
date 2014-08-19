<?php 
session_start();
require_once'config.php';
require_once('ikra.php');
require_once('BD.php');

$table1 = $ikra->Table('emploi');


$query1 = $ikra->Query("SELECT DISTINCT  secteur_e FROM emploi");
$query2 = $ikra->Query("SELECT DISTINCT  ville_e FROM emploi");
$query3 = $ikra->Query("SELECT DISTINCT  niveau_e FROM emploi");
	foreach ($query3 as $row) {

		$return1[]=array(
					
					"niveau_e"=>$row['niveau_e'],
			);
								
	}
foreach ($query1 as $row) {

		$return2[]=array(
					"secteur_e"=>$row['secteur_e'],
					
					
			);
								
	}
foreach ($query2 as $row) {

		$return3[]=array(
					
					"ville_e"=>$row['ville_e'],
					
			);
								
	}



$smarty->assign("return1",$return1);
$smarty->assign("return2",$return2);
$smarty->assign("return3",$return3);
$smarty->display("opt_rech_emplois.html")
?>