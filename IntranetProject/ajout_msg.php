
<?php
session_start();
 include_once("config.php");
	require_once('ikra.php');
	require_once('BD.php');

	extract($_POST);

	$dr = $ikra->InsertSQL('contact', array ('objet_m','message'),array($objet,$msg));