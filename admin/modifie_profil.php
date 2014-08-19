<?php
session_start(); 
include_once("config.php");
require_once('ikra.php');
require_once('BD.php');

extract($_POST);


# verification du session
if (isset($_SESSION['login_user']))
 {	
    # mise a jour d'un concour
	 $sql = "UPDATE compte_admin SET nom_a='".$nom."', prenom_a='".$prenom."',email_a='".$email."' WHERE id_a='".$id_a."'";
	 $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  // on envoie la requête 
     header('location:profil.php'); 
 }
else
 {
	$smarty->display('index.html');
 }
