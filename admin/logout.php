<?php
require_once('config.php');
session_start();
unset($_SESSION['login_user']);
if(session_destroy())
{
$smarty->display('index.html'); 
}
?>