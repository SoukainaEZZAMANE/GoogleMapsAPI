<?php
session_start();
require_once('config.php');
require_once('BD.php');
extract($_POST);
if (isset($_SESSION['login_user']))
{	
$smarty->display('ajout_formation.html');
}
else
{
	if ( isset($_POST) && (!empty($username)) && (!empty($password)) ) 
		{
			// username and password sent from form 
			$myusername=addslashes($username); 
			$mypassword=addslashes($password); 
		
			    $requete = "SELECT email ,pass_r FROM compte_recruteur WHERE email LIKE '". $myusername."'";
				$resultat = mysql_query($requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysql_error()); 

				while($data = mysql_fetch_assoc($resultat)) 
				 {
					if ($myusername ==  $data['email'] && $mypassword ==  $data['pass_r'] )
						{
							$_SESSION['login_user']=$myusername;
							$_SESSION['id_r']=$data['id_r'];	
													
							$smarty->display('ajout_formation.html');
						}
					else 
						{
							 echo "email ou mot de passe �rron�";
							 $smarty->display('connexion_f.html');
						}
				 }
}
else
{
	
$smarty->display('connexion_f.html');	
}
}

