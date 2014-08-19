<?php 
session_start();
//header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');
extract($_POST);


if(empty($_POST)) 
{
$query1 = $ikra->Query("SELECT * FROM concour");
}
/*1*/
else if($ville=="b"  && $domaine=="b" &&  $niv=="b" )
{
$query1 = $ikra->Query("SELECT * FROM concour");
}
/*2*/
else if($ville!="b" && $domaine=="b" && $niv=="b")
{
$query1 = $ikra->Query("SELECT * FROM concour  where ville_c='".$ville."'");
}
/*3*/
else if($ville=="b" && $domaine !="b" && $niv=="b")
{
$query1 = $ikra->Query("SELECT * FROM concour where domaine_c='".$domaine."' ");
}
/*4*/


/*5*/
else if($ville=="b" && $domaine =="b" && $niv!="b")
{
$query1 = $ikra->Query("SELECT * FROM concour where niveau_c='".$niv."'  ");

}
/*5*/
else if($ville!="b" && $domaine !="b" && $niv=="b")
{
$query1 = $ikra->Query("SELECT * FROM concour where ville_c='".$ville."' AND domaine_c= '".$domaine."'  ");

}
/*6*/

/*7*/
else if($ville!="b" && $domaine =="b" && $niv!="b")
{
$query1 = $ikra->Query("SELECT * FROM concour where ville_c='".$ville."' AND niveau_c= '".$niv."' ");
}
/*13*/
else if($ville!="b" && $domaine !="b" && $niv!="b")
{
$query1 = $ikra->Query("SELECT * FROM concour where ville_c='".$ville."' AND  domaine_c='".$domaine."' AND niveau_c= '".$niv."'");
}
foreach ($query1 as $row) {

	$return[]=array(
			"id_c"=>$row['id_c'],
			"organisme_c"=>$row['organisme_c'],
			"date_depot_c"=>$row['date_depot_c'],
			"image_c"=>$row['image_c'],
			"ville_c"=>$row['ville_c'],
			"date_fin_c"=>$row['date_fin_c'],
			"desc_c"=>$row['desc_c'],
		    "niveau_c"=>$row['niveau_c'],
		    "lieu_c"=>$row['lieu_c'],
		    "email_c"=>$row['email_c'],
			"condition_c"=>$row['condition_c'],
		    "tel_c"=>$row['tel_c'],
			"domaine_c"=>$row['domaine_c'],
		    "date_c"=>$row['date_c'],
			"pieces_c"=>$row['pieces_c'],
			);
}
$smarty->assign("return",$return);
$smarty->display('concours.html');

if (empty($return ))
echo "aucun résultat trouvé";
