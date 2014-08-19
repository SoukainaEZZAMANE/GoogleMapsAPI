<?php	
session_start();
 include_once("config.php");
	require_once('ikra.php');
	require_once('BD.php');
 extract($_POST);

 
if (isset($_SESSION['login_user']))
{



$sql = "UPDATE compte_recruteur SET nom_r='".$nom."', prenom_r='".$prenom."',civilite_r='".$civi."', departement='".$departement."', fonction='".$fonction."',tel_r='".$tel."', fax_r='".$fax."',email='".$email."',pass_r='".$password."' WHERE id_r='".$_SESSION['idr']."'";

	 $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  // on envoie la requête 
     header('location: profile_option.php'); 



}
 
else

 {
	$smarty->display('error.html');
 }

?>