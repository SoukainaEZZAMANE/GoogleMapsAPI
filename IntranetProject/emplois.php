<?php
session_start();
//session_start(); 
//header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');
extract($_POST);

if(empty($_POST))
{
	$query1 = $ikra->Query("SELECT * FROM emploi");
}
else if( $ville == "e" && $domaine == "e" &&  $niv=="e" )
{
	$query1 = $ikra->Query("SELECT * FROM emploi");
}

else if($ville!="e" && $domaine=="e" && $niv=="e")
{
	$query1 = $ikra->Query("SELECT * FROM emploi where ville_e='".$ville."'");
}
/*3*/
else if($ville=="e" && $domaine!="e"  && $niv=="e")
{
	$query1 = $ikra->Query("SELECT * FROM emploi where secteur_e='".$domaine."'");
}
/*4*/
else if($ville=="e" && $domaine=="e" && $niv!="e")
{
	$query1 = $ikra->Query("SELECT * FROM emploi where niveau_e='".$niv."'");
}

/*5*/
else if($ville!="e" && $domaine!="e" && $niv=="e" )
{
	$query1 = $ikra->Query("SELECT * FROM emploi where ville_e='".$ville."' AND secteur_e= '".$domaine."'");
}
/*6*/
else if($ville!="e" && $domaine =="e" && $niv!="e" )
{
	$query1 = $ikra->Query("SELECT * FROM emploi where ville_e='".$ville."' AND niveau_e= '".$niv."'");
}
/*7*/
else if($ville=="e" && $domaine !="e" && $niv!="e" )
{
	$query1 = $ikra->Query("SELECT * FROM emploi where secteur_e='".$domaine."' AND niveau_e= '".$niv."'");
}
/*8*/
else 
{
	$query1 = $ikra->Query("SELECT * FROM emploi where secteur_e='".$domaine."' AND niveau_e= '".$niv."' && ville_e ='".$ville."'");
}
foreach ($query1 as $row) {

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

$smarty->assign("return",$return);
$smarty->display('emplois.html');

if(empty($return))
{
	 echo 'Aucun résultat trouvé';
}
