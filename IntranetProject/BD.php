<?php
# connexion au base de donnes
	require_once('ikra.php');
	$ikra = new database('root','', 'thefinder','localhost');

	$db = mysql_connect('localhost', 'root', '') or die(mysql_error()); 
    // on sélectionne la base 
    mysql_select_db('thefinder',$db); 