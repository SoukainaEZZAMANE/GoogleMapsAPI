<?php
require_once('config.php');
//require_once('connect.php');

if ( isset($_POST) && (!empty($_POST['username'])) && (!empty($_POST['password'])) ) 
{
// username and password sent from form 
$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 
if ($myusername == "admin" && $mypassword == "admin" )
{
$_SESSION['login_user']=$myusername;
session_start();
$smarty->display('welcome.html');
}
else 
$smarty->display('index.html');  
}
else 
{
$smarty->display('index.html');  

}
?>
