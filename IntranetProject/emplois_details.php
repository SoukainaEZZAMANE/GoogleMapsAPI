<?php 
session_start();
require_once'config.php';
require_once'ikra.php';
require_once('BD.php');
$id=$_GET['id'];


# Add Table List Object
$table1 = $ikra->Table('concour');
$query1 = $ikra->Query("SELECT * FROM emploi WHERE id_e='".$id."'");
foreach($query1 as $row)
{
	
$return[]=array(
			"id_e"=>$row['id_e'],
			"entreprise_e"=>$row['entreprise_e'],
			"desc_entr_e"=>$row['desc_entr_e'],
			"nbr_poste_e"=>$row['nbr_poste_e'],
			"lieu_e"=>$row['lieu_e'],
		    "date_depot_e"=>$row['date_depot_e'],
		    "secteur_e"=>$row['secteur_e'],
			"ville_e"=>$row['ville_e'],
			"image_e"=>$row['image_e'],
			"niveau_e"=>$row['niveau_e'],
			"tel_e"=>$row['tel_e'],
			"site_e"=>$row['site_e'],
			"email_e"=>$row['email_e'],
			"type_contrat_e"=>$row['type_contrat_e'],
			"renumeration_e"=>$row['renumeration_e'],
			);
}
$smarty->assign("data",$return[0]);
$smarty->display("emplois_details.html")
?>