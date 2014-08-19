<?php	
session_start();
 include_once("config.php");
	require_once('ikra.php');
	require_once('BD.php');
	//header('Content-section:text/html;charset=utf-8');
	extract($_POST);
	

if (isset($_SESSION['login_nuser']))
 {
	 $_SESSION['se']=$section;
	$str=date("Y-m-d");
	$id=$_SESSION['idu'];

	
	 $dr = $ikra->InsertSQL('forum', array ('titre','sujet','type','date_depot','idu'),
	 array($titre,$sujet,$section,$str,$id));
	 
	if ($section == "concours")
		{$smarty->display('fc_aj_succes.html');}
	elseif ($section == "formations")
		{$smarty->display('ff_aj_succes.html');}
	elseif ($section == 'emplois')
		{$smarty->display('fe_aj_succes.html');}
	else
		{$smarty->display('fs_aj_succes.html');}
  
  }
else

 {
	 
if ($section == "concours")
{$smarty->display('connexion_f_concours.html');}
elseif ($section == "formations")
  {$smarty->display('connexion_f_formations.html');}
elseif ($section == 'emplois')
  {$smarty->display('connexion_f_emplois.html');}
else
  {$smarty->display('connexion_f_stages.html');}
	
 }

?>

