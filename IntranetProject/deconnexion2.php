<?php
require_once('config.php');
session_start();
require_once('ikra.php');
require_once('BD.php');
 $sql = "UPDATE compte_utilisateur SET dernier_connexion = '".date('Y-m-d H:i:s')."' WHERE id_u='".$_SESSION['idu']."'";
 $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
unset($_SESSION['login_nuser']);
unset($_SESSION['tr']);
if(session_destroy())
{

	header('Location: index.php'); 
}