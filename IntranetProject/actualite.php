<?php session_start(); 
header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');


if (isset($_SESSION['login_nuser']))
	{	
		$tr=1;
		$smarty->assign('tr',$tr);
		$smarty->display('actualite.html');
	}

else 
		$smarty->display('finder.html');
?>