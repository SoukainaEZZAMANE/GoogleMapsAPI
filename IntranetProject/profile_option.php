<?php 
session_start();
require_once'config.php';
require_once('ikra.php');
require_once('BD.php');

if (isset($_SESSION['login_user']))
{
$query1 = $ikra->Query("SELECT * FROM compte_recruteur WHERE id_r = '".$_SESSION['idr']."'");

foreach($query1 as $row)
{	
$return[]=array(
			"id_r"=>$row['id_r'],
			"nom_r"=>$row['nom_r'],
			"prenom_r"=>$row['prenom_r'],
			"civilite_r"=>$row['civilite_r'],
			"email"=>$row['email'],
		    "pass_r"=>$row['pass_r'],
		    "departement"=>$row['departement'],
			 "fonction"=>$row['fonction'],
			"tel_r"=>$row['tel_r'],
			"fax_r"=>$row['fax_r'],
		);
}
$smarty->assign('return',$return[0]);
$smarty->display("r_profile_option.html");
}


elseif (isset($_SESSION['login_nuser']))
{
	$query1 = $ikra->Query("SELECT * FROM compte_utilisateur WHERE id_u = '".$_SESSION['idu']."'");

foreach($query1 as $row)
{	
$return[]=array(
			"id_u"=>$row['id_u'],
			"nom_u"=>$row['nom_u'],
			"prenom_u"=>$row['prenom_u'],
			"civilite_u"=>$row['civilite_u'],
			"email_u"=>$row['email_u'],
		    "pass_u"=>$row['pass_u'],
		    "secteur_u"=>$row['secteur_u'],
			"date_n"=>$row['date_n'],
		);
}
$smarty->assign('return',$return[0]);
$smarty->display("u_profile_option.html");
	
}
else
	{
		header('Location: index.php');
	
	}
?>