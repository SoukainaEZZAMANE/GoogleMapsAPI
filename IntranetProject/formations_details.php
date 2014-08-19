<?php 
session_start();
require_once'config.php';
require_once'ikra.php';
require_once('BD.php');
$id=$_GET['id'];



$table1 = $ikra->Table('formation');
$query1 = $ikra->Query("SELECT * FROM formation WHERE id_f='".$id."'");
foreach($query1 as $row)
{
	
$return[]=array(
		    "id_f"=>$row['id_f'],
			"desc_f"=>$row['desc_f'],
			"secteur_f"=>$row['secteur_f'],
			"date_depot_f"=>$row['date_depot_f'],
			"dure_f"=>$row['dure_f'],
			"organisation_f"=>$row['organisation_f'],
			"lieu_f"=>$row['lieu_f'],
			"ville_f"=>$row['ville_f'],	
			"email_f"=>$row['email_f'],	    
			"tel_f"=>$row['tel_f'],
			"resp_f"=>$row['resp_f'],		
			"nbr_poste_f"=>$row['nbr_poste_f'],
			"image_f"=>$row['image_f'],	
			"site_f"=>$row['site_f'],		
			);
}
$smarty->assign("data",$return[0]);
$smarty->display("formations_details.html")
?>