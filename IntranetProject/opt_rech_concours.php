<?php 
session_start();
require_once'config.php';
require_once('ikra.php');
require_once('BD.php');

$table1 = $ikra->Table('concour');


$query1 = $ikra->Query("SELECT distinct ville_c FROM concour");
$query2 = $ikra->Query("SELECT distinct domaine_c FROM concour");
$query3 = $ikra->Query("SELECT distinct niveau_c FROM concour");
	foreach ($query1 as $row) {

		$return1[]=array(
					
						"ville_c"=>$row['ville_c'],	
					
			);
	}
foreach ($query2 as $row) {

		$return2[]=array(
					"domaine_c"=>$row['domaine_c'],
			);
	}
	foreach ($query3 as $row) {

		$return3[]=array(
						
						"niveau_c"=>$row['niveau_c'],
						
			);
	}



$smarty->assign("return1",$return1);
$smarty->assign("return2",$return2);
$smarty->assign("return3",$return3);
$smarty->display("opt_rech_concours.html")
?>