<?php
session_start();

//header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');
extract($_POST);




if( empty($_POST))
{
$query1 = $ikra->Query("SELECT * FROM stage");
}

else
{
$d=explode('/',$debut);
$dd=$d[2]."-".$d[0]."-".$d[1];
if( $ville=="a" && $domaine=="a" && empty($dd) && $dure=="a")
{
$query1 = $ikra->Query("SELECT * FROM stage");
}
/*2*/
else if($ville!="a" && $domaine=="a" && empty($dd) && $dure=="a")
{
$query1 = $ikra->Query("SELECT * FROM stage where ville_s='".$ville."'");
}
/*3*/
else if($ville=="a" && $domaine !="a" && empty($dd) && $dure=="a")
{
$query1 = $ikra->Query("SELECT * FROM stage where secteur_s='".$domaine."' ");
}
/*4*/
else if($ville=="a" && $domaine =="a" && !empty($dd) && $dure=="a")
{
$query1 = $ikra->Query("SELECT * FROM stage where demarrage_s >='".$dd."'  ");
}
/*5*/
else if($ville=="a" && $domaine =="a" && empty($dd) && $dure!="a")
{
	if($dure==0)
{$query1 = $ikra->Query("SELECT * FROM stage where dure_s <='".$d."'  ");}
	else
{$query1 = $ikra->Query("SELECT * FROM stage where dure_s >='".$d."'  ");}
}
/*5*/
else if($ville!="a" && $domaine !="a" && empty($dd) && $dure=="a")
{
$query1 = $ikra->Query("SELECT * FROM stage where ville_s='".$ville."' AND secteur_s= '".$domaine."'  ");

}
/*6*/
else if($ville!="a" && $domaine =="a" && !empty($dd) && $dure=="a")
{
$query1 = $ikra->Query("SELECT * FROM stage where ville_s='".$ville."' AND demarrage_s >= '".$dd."'  ");
}
/*7*/
else if($ville!="a" && $domaine =="a" && empty($dd) && $dure!="a")
{
$query1 = $ikra->Query("SELECT * FROM stage where ville_s='".$ville."' AND dure_s= '".$dure."'  ");
}
/*8*/
else if($ville!="a" && $domaine !="a" && !empty($dd) && $dure=="a")
{
$query1 = $ikra->Query("SELECT * FROM stage where secteur_s='".$domaine."' AND demarrage_s >= '".$dd."'");
}
/*9*/
else if($ville=="a" && $domaine !="a" && empty($dd) && $dure!="a")
{
	if($dure==0)
{$query1 = $ikra->Query("SELECT * FROM stage where secteur_s='".$domaine."' AND dure_s <= '".$dure."'");}
	else
{$query1 = $ikra->Query("SELECT * FROM stage where secteur_s='".$domaine."' AND dure_s >= '".$dure."'");}
}
/*10*/
else if($ville=="a" && $domaine =="a" && !empty($dd) && $dure!="a")
{
	if($dure==0)
{$query1 = $ikra->Query("SELECT * FROM stage where demarrage_s >= '".$dd."' AND dure_s <= '".$dure."'");}
	else
{$query1 = $ikra->Query("SELECT * FROM stage where demarrage_s >= '".$dd."' AND dure_s >= '".$dure."'");}
}
/*11*/
else if($ville=="a" && $domaine !="a" && !empty($dd) && $dure!="a")
{
	if($dure==0)
{$query1 = $ikra->Query("SELECT * FROM stage where secteur_s='".$domaine."' AND demarrage_s >= '".$dd."' AND dure_s <= '".$dure."'");}
	else
{$query1 = $ikra->Query("SELECT * FROM stage where secteur_s='".$domaine."' AND demarrage_s >= '".$dd."' AND dure_s >= '".$dure."'");}
}
/*12*/
else if($ville!="a" && $domaine =="a" && !empty($dd) && $dure!="a")
{
	if($dure==0)
{$query1 = $ikra->Query("SELECT * FROM stage where ville_s='".$ville."' AND demarrage_s >= '".$dd."' AND dure_s <= '".$dure."'");}
	else
{$query1 = $ikra->Query("SELECT * FROM stage where ville_s='".$ville."' AND demarrage_s >= '".$dd."' AND dure_s >= '".$dure."'");}
}
/*13*/
else if($ville!="a" && $domaine !="a" && empty($dd) && $dure!="a")
{
	if($dure==0)
{$query1 = $ikra->Query("SELECT * FROM stage where ville_s='".$ville."' AND secteur_s='".$domaine."' AND dure_s <= '".$dure."'");}
	else
{$query1 = $ikra->Query("SELECT * FROM stage where ville_s='".$ville."' AND secteur_s='".$domaine."' AND dure_s >= '".$dure."'");}
}
/*14*/
else if($ville!="a" && $domaine !="a" && !empty($dd) && $dure=="a")
{
$query1 = $ikra->Query("SELECT * FROM stage where ville_s='".$ville."' AND secteur_s='".$domaine."' AND demarrage_s >= '".$dd."'");
}
/*15*/
else if($ville!="a" && $domaine !="a" && !empty($dd) && $dure=="a")
{
$query1 = $ikra->Query("SELECT * FROM stage where ville_s='".$ville."' AND secteur_s='".$domaine."' AND demarrage_s >= '".$dd."'");
}
else 
{
$query1 = $ikra->Query("SELECT * FROM stage where ville_s='".$ville."' AND secteur_s='".$domaine."' AND demarrage_s >= '".$dd."' AND dure_s='".$dure."'");
}
}

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
			 "ville_s"=>$row['ville_s'],
			"dure_s"=>$row['dure_s'],
			"date_depot_s"=>$row['date_depot_s'],
			"demarrage_s"=>$row['demarrage_s'],
			"secteur_s"=>$row['secteur_s'],
			"image_s"=>$row['image_s'],
			"nbr_poste"=>$row['nbr_poste'],
			"email_s"=>$row['email_s'],
			"tel_s"=>$row['tel_s'],
          );
}

$smarty->assign("return",$return);

$smarty->display("stages.html");

if(empty($return))
{ echo 'Aucun resultat';
	}



