<?php
session_start();
header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');
extract($_POST);

$d=3;

if(empty($_POST))
{
$query1 = $ikra->Query("SELECT * FROM formation");
}

/*1*/
else if($ville=="e" && $domaine=="e" &&  $dure=="e")
{
$query1 = $ikra->Query("SELECT * FROM formation");
}
/*2*/
else if($ville!="e" && $domaine=="e"  && $dure=="e")
{
$query1 = $ikra->Query("SELECT * FROM formation where ville_f='".$ville."'");
}
/*3*/
else if($ville=="e" && $domaine!="e"  && $dure=="e")
{
$query1 = $ikra->Query("SELECT * FROM formation where secteur_f='".$domaine."' ");
}
/*4*/
else if($ville=="e" && $domaine=="e" && $dure == 0)
{
$query1 = $ikra->Query("SELECT * FROM formation where dure_f <='".$d."'");
}
/*5*/
else if($ville=="e" && $domaine=="e" && $dure == 3 )
{
$query1 = $ikra->Query("SELECT * FROM formation where dure_f >='".$d."' ");

}
/*5*/
else if($ville!="e" && $domaine!="e" && $dure=="e" )
{
$query1 = $ikra->Query("SELECT * FROM formation where ville_f='".$ville."' AND secteur_f= '".$domaine."'  ");

}
/*6*/
else if($ville!="e" && $domaine=="e" && $dure == 0 )
{
$query1 = $ikra->Query("SELECT * FROM formation where ville_f='".$ville."' AND dure_f <='".$d."'");
}
else if($ville!="e" && $domaine=="e" && $dure == 3 )
{
$query1 = $ikra->Query("SELECT * FROM formation where ville_f='".$ville."' AND dure_f >='".$d."'");
}
/*7*/
else if($ville=="e" && $domaine!="e" && $dure == 0)
{
$query1 = $ikra->Query("SELECT * FROM formation where secteur_f='".$domaine."' AND dure_f <='".$d."'");
}
else if($ville=="e" && $domaine!="e" && $dure == 3)
{
$query1 = $ikra->Query("SELECT * FROM formation where secteur_f='".$domaine."' AND dure_f >='".$d."'");
}
/*8*/
else 
{
	if($dure==0)
{$query1 = $ikra->Query("SELECT * FROM formation where secteur_f='".$domaine."' AND dure_f <= '".$d."' && ville_f='".$ville."' ");}
	else
{$query1 = $ikra->Query("SELECT * FROM formation where secteur_f='".$domaine."' AND dure_f >= '".$d."' && ville_f='".$ville."' ");}
}
foreach ($query1 as $row) {

	$return[]=array(
			"id_f"=>$row['id_f'],
			"desc_f"=>$row['desc_f'],
			"secteur_f"=>$row['secteur_f'],
			"date_depot_f"=>$row['date_depot_f'],
			"dure_f"=>$row['dure_f'],
			"organisation_f"=>$row['organisation_f'],
			"lieu_f"=>$row['lieu_f'],	   
			"ville_f"=>$row['ville_f'], 
			"image_f"=>$row['image_f'], 
			"nbr_poste_f"=>$row['nbr_poste_f'],
		    
			);
}
$smarty->assign("return",$return);
$smarty->display('formations.html');

if(empty($return))
{ echo 'Aucun resultat';
	}
