<?php 
session_start();
require_once'config.php';
require_once'ikra.php';
require_once('BD.php');
$id=$_GET['id'];


# Add Table List Object
$table1 = $ikra->Table('concour');
$query1 = $ikra->Query("SELECT * FROM concour WHERE id_c='".$id."'");
foreach($query1 as $row)
{
	
$return[]=array(
			"id_c"=>$row['id_c'],
			"organisme_c"=>$row['organisme_c'],
			"date_depot_c"=>$row['date_depot_c'],
			"date_fin_c"=>$row['date_fin_c'],
			"desc_c"=>$row['desc_c'],
			"date_c"=>$row['date_c'],
			"image_c"=>$row['image_c'],
			"niveau_c"=>$row['niveau_c'],
		    "lieu_c"=>$row['lieu_c'],
			"email_c"=>$row['email_c'],
			"tel_c"=>$row['tel_c'],
			"pieces_c"=>$row['pieces_c'],
			"ville_c"=>$row['ville_c'],
			"domaine_c"=>$row['domaine_c'],
			"condition_c"=>$row['condition_c'],

			);
}
$smarty->assign("data",$return[0]);
$smarty->display("concours_details.html")
?>