<?php
session_start();
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');
$_SESSION['m']='1';


							//===============================================================================================
							//**********************statistique de la base de donn�es****************************************
							//===============================================================================================
									$query1 = $ikra->Query("SELECT count(id_c)  FROM concour ");
									$query2 = $ikra->Query("SELECT count(id_e)  FROM emploi ");
									$query3 = $ikra->Query("SELECT count(id_f)  FROM formation ");
									$query4 = $ikra->Query("SELECT count(id_s)  FROM stage ");

									$query5 = $ikra->Query("SELECT count(id_r)  FROM compte_recruteur ");
								    $query6 = $ikra->Query("SELECT count(id_u)  FROM compte_utilisateur ");

									foreach ($query1 as $row) {$concours= $row["count(id_c)"];}
								    foreach ($query2 as $row) {$emploi= $row["count(id_e)"];}
								    foreach ($query3 as $row) {$formation= $row["count(id_f)"];}
								    foreach ($query4 as $row) {$stage= $row["count(id_s)"];}
								    foreach ($query5 as $row) {$recruteur= $row["count(id_r)"];}
								    foreach ($query6 as $row) {$utilisateur= $row["count(id_u)"];}

									$return = array(
													"concours"=>$concours,
													"emploi"=>$emploi,
													"formation"=>$formation,
													"stage"=>$stage,
													"recruteur"=>$recruteur,
													"utilisateur"=>$utilisateur,
												);
								    $smarty->assign('return',$return);
								
							//===============================================================================================


# test de la session 
if (isset($_SESSION['login_user']))
{	
	$smarty->display('dashboard.html');
}

else 
   {
	  if ( isset($_POST) && (!empty($_POST['name'])) && (!empty($_POST['pass'])) ) 
	     {
			// username and password sent from form 
			$myusername=addslashes($_POST['name']); 
			$mypassword=addslashes($_POST['pass']); 
				
			    $requete = "SELECT email_a,pass_a FROM compte_admin WHERE email_a LIKE '$myusername'";
				$resultat = mysql_query($requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysql_error()); 

				$email1="";
				$pass="";
				while($data = mysql_fetch_assoc($resultat)) 
				 {
					$email1= $data['email_a'];
					$pass=$data['pass_a'];
				 }

				 if ($myusername == $email1 && $mypassword == $pass )
						{
							$_SESSION['login_user']=$myusername;
							$smarty->display('dashboard.html');
						}
					else 
						{
						     $_SESSION['m']='0';
							 $smarty->display('index.html');
						}
	     }
	   else 
	    {
		  $smarty->display('index.html');
		}
    }
	
