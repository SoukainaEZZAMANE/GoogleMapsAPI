<?php 
session_start();
require_once'config.php';
require_once('ikra.php');
require_once('BD.php');

$table1 = $ikra->Table('stage');


$query1 = $ikra->Query("SELECT distinct secteur_s FROM stage");
$query2 = $ikra->Query("SELECT distinct  ville_s FROM stage");

	foreach ($query1 as $row) {

		$return1[]=array(
					
					"secteur_s"=>$row['secteur_s'],		
			);
	}
	foreach ($query2 as $row) {

		$return2[]=array(
					
					
					"ville_s"=>$row['ville_s'],
					
			);
	}
		
		
$smarty->assign("return1",$return1);
$smarty->assign("return2",$return2);
$smarty->display("opt_rech_stages.html")
?>