<?php
require_once('config.php');
session_start();
unset($_SESSION['login_user']);
unset($_SESSION['tr']);
if(session_destroy())
{
	header('Location: index.php'); 
}