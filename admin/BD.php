<?php
# connexion au base de donnes
	
	$ikra = new database('root','', 'thefinder','localhost');

	$db = mysql_connect('localhost', 'root', '') or die(mysql_error()); 
    // on s�lectionne la base 
    mysql_select_db('thefinder',$db); 