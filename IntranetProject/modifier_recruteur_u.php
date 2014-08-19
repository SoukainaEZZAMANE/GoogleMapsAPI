<?php	
session_start();
 include_once("config.php");
	require_once('ikra.php');
	require_once('BD.php');
 
if (isset($_SESSION['login_nuser']))
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
$smarty->display("modifier_recrutor_u.html");



}
 
else

 {
	$smarty->display('error.html');
 }

?>