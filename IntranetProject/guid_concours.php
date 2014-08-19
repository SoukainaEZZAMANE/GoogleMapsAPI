<?php 

session_start();
require_once'config.php';
require_once'BD.php';

	extract($_POST);

if (isset($_SESSION['login_nuser']))
{
$smarty->display("guid_concours.html");
}
else if( isset($_POST) && (!empty($username)) && (!empty($password)))
{
	
			// username and password sent from form 
			$myusername=addslashes($username); 
			$mypassword=addslashes($password); 
			
				$requete2 = "SELECT email_u ,pass_u, id_u FROM compte_utilisateur WHERE email_u LIKE '". $myusername ."'";
	
				$resultat2 = mysql_query($requete2) or die('Erreur SQL !<br>'.$requete2.'<br>'.mysql_error()); 
				if(!mysql_num_rows($resultat2))

						{	 
							$smarty->display('demande_connexion_echec_c.html');
						}
						
				else 
	
		
			{
				while($data = mysql_fetch_assoc($resultat2)) 
				 {
					if ($myusername ==  $data['email_u'] && $mypassword ==  $data['pass_u'] )
						{
							
							
							$_SESSION['login_nuser']=$myusername;
							$_SESSION['idu']=$data['id_u'];

							$smarty->display('guid_concours.html');
							
						}
						
				 }
			}
			
			
}

else
{
	$smarty->display("demande_connexion_echec_c.html");
}
?>