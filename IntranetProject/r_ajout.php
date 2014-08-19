<?php	
session_start();
 include_once("config.php");
	require_once('ikra.php');
	require_once('BD.php');
	extract($_POST);
	extract($_GET);
	

if (isset($_SESSION['login_nuser']))
 {
	 
	

$str=date("Y-m-d");
$idu=$_SESSION['idu'];


	
	 $dr = $ikra->InsertSQL('reponse', array ('titre','sujet','idu','idf','date_depot'),
	 array($titre,$sujet,$idu,$id,$str));
	 $smarty->assign("idf",$id);
	   $smarty->display("rc_aj_succes.html");  
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

