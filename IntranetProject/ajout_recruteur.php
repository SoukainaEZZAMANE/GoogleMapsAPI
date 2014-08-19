<?php	
session_start();

 include_once("config.php");
	require_once('ikra.php');
	require_once('BD.php');
	//header('Refresh: 1');
	header('Content-Type:text/html;charset=utf-8');
	extract($_POST);

if(isset($_POST))
{

	# ajout d'une annonce concours
	 $dr = $ikra->InsertSQL('compte_recruteur', array ('nom_r','prenom_r','civilite_r','email','pass_r','departement','fonction','tel_r','fax_r'),
	 array($nom,$prenom,$civi,$email,$password,$departement,$fonction,$tel,$fax));

	$tr=1;
	$smarty->assign('tr',$tr);
	$smarty->display('finder.html');

}
 
else

 {
	$smarty->display('error.html');
 }

?>