<?php	
session_start();
 include_once("config.php");
	require_once('ikra.php');
	require_once('BD.php');
 extract($_POST);

 
if (isset($_SESSION['login_nuser']))
{




$sql = "UPDATE compte_utilisateur SET nom_u='".$nom."', prenom_u='".$prenom."', date_n='".$date."', civilite_u='".$civi."',  secteur_u='".$fonction."',email_u='".$email."',pass_u='".$password."' WHERE id_u='".$_SESSION['idu']."'";

	 $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  // on envoie la requête 
     header('location: profile_option.php'); 



}
 
else

 {
	$smarty->display('error.html');
 }

?>