<?php 
session_start();
require_once'config.php';
require_once'ikra.php';
require_once('BD.php');
$id=$_GET['id'];

$table1 = $ikra->Table('stage');
$query1 = $ikra->Query("SELECT * FROM stage WHERE id_s='".$id."'");
foreach($query1 as $row)
{
	
$return[]=array(
			"id_s"=>$row['id_s'],
			"entreprise_s"=>$row['entreprise_s'],
			"mission_s"=>$row['mission_s'],
			"remunere"=>$row['remunere'],
			"desc_entr_s"=>$row['desc_entr_s'],
		    "niveau_s"=>$row['niveau_s'],
		    "lieu_s"=>$row['lieu_s'],
			"dure_s"=>$row['dure_s'],
			"date_depot_s"=>$row['date_depot_s'],
			"demarrage_s"=>$row['demarrage_s'],
			"email_s"=>$row['email_s'],
			"ville_s"=>$row['ville_s'],
			"tel_s"=>$row['tel_s'],
			"image_s"=>$row['image_s'],
			"site_s"=>$row['site_s'],
			"secteur_s"=>$row['secteur_s'],
			"nbr_poste"=>$row['nbr_poste'],
			
          );
}
$smarty->assign("data",$return[0]);
$smarty->display("stages_details.html")
?>