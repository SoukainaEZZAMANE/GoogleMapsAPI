<?php	
session_start();
 include_once("config.php");
	require_once('ikra.php');
	require_once('BD.php');
	//header('Content-Type:text/html;charset=utf-8');
	extract($_POST);
	
if(isset($_POST))
{

$datn=explode('/',$i);

$d=$datn[2]."-".$datn[1]."-".$datn[0];
# verification du session
	# ajout d'une annonce concours
	 $dr = $ikra->InsertSQL('compte_utilisateur', array ('nom_u','prenom_u','date_n','civilite_u','email_u','pass_u','secteur_u','niveau'),
	 array($nom,$prenom,$d,$sexe,$email,$password,$secteur,$niveau));
	$tr=0;
	$smarty->assign('tr',$tr);
	$smarty->display("finder.html");
	
	header('Location: index.php');
 }
 
else

 {
	$smarty->display('error.html');
 }
?>