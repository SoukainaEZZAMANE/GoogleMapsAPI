<?php 
session_start();
require_once'config.php';
require_once('ikra.php');
require_once('BD.php');

$table1 = $ikra->Table('formation');


$query1 = $ikra->Query("SELECT distinct ville_f FROM formation");
$query2 = $ikra->Query("SELECT distinct  secteur_f FROM formation");

	foreach ($query1 as $row) {

		$return1[]=array(
					
					
					"ville_f"=>$row['ville_f'],
     				
					);
	}

	foreach ($query2 as $row) {

		$return2[]=array(
					
					"secteur_f"=>$row['secteur_f'],
					
					);
	}



$smarty->assign("return1",$return1);
$smarty->assign("return2",$return2);
$smarty->display("opt_rech_formations.html")
?>