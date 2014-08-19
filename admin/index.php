<?php
session_start(); 
header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');
$_SESSION['m']='1';


if (isset($_SESSION['login_user']))
{	
  $query1 = $ikra->Query("SELECT count(id_c)  FROM concour ");
  $query2 = $ikra->Query("SELECT count(id_e)  FROM emploi ");
  $query3 = $ikra->Query("SELECT count(id_f)  FROM formation ");
  $query4 = $ikra->Query("SELECT count(id_s)  FROM stage ");

  $query5 = $ikra->Query("SELECT count(id_r)  FROM compte_recruteur ");
  $query6 = $ikra->Query("SELECT count(id_u)  FROM compte_utilisateur ");

  foreach ($query1 as $row) {$concours= $row["count(id_c)"];}
  foreach ($query2 as $row) {$emploi= $row["count(id_e)"];}
  foreach ($query3 as $row) {$formation= $row["count(id_f)"];}
  foreach ($query4 as $row) {$stage= $row["count(id_s)"];}
  foreach ($query5 as $row) {$recruteur= $row["count(id_r)"];}
  foreach ($query6 as $row) {$utilisateur= $row["count(id_u)"];}

  $return = array(
			"concours"=>$concours,
			"emploi"=>$emploi,
			"formation"=>$formation,
			"stage"=>$stage,
	         "recruteur"=>$recruteur,
	         "utilisateur"=>$utilisateur,
  );
  $smarty->assign('c',$concours);
  $smarty->assign('return',$return); 
  $smarty->display('dashboard.html');
}
else
{
$smarty->display('index.html');
}
