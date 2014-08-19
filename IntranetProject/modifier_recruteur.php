<?php	
session_start();
 include_once("config.php");
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
$smarty->display("modifier_recrutor.html");



}
 
else

 {
	$smarty->display('error.html');
 }

?>