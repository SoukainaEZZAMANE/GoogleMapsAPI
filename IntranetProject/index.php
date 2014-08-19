<?php
session_start();
require_once('config.php');
require_once('BD.php');
//require_once('connect.php');
//$_SESSION['tr']=0;
extract($_POST);
$_SESSION['nv']=0;
$_SESSION['nvf']=0;
$_SESSION['nvs']=0;
$_SESSION['nve']=0;

if (isset($_SESSION['login_user']))
 {
	$tr=1;
 }
elseif ( isset($_SESSION['login_nuser']))
 {
	$tr=2;
 }
elseif( isset($_POST) && (!empty($email)) && (!empty($password)) ) 
 {
			// username and password sent from form 
			$myusername=addslashes($email); 
			$mypassword=addslashes($password); 

			    $requete1 = "SELECT email ,pass_r, id_r FROM compte_recruteur WHERE email LIKE '". $myusername ."'";
				$requete2 = "SELECT email_u ,pass_u, id_u , dernier_connexion FROM compte_utilisateur WHERE email_u LIKE '". $myusername ."'";
				$resultat1 = mysql_query($requete1) or die('Erreur SQL !<br>'.$requete1.'<br>'.mysql_error()); 
				$resultat2 = mysql_query($requete2) or die('Erreur SQL !<br>'.$requete2.'<br>'.mysql_error()); 
				if(!mysql_num_rows($resultat1) && !mysql_num_rows($resultat2))

						{	 
							$smarty->display('demande_connexion_echec.html');
						}
						
				else if(mysql_num_rows($resultat1) && !mysql_num_rows($resultat2))
	
		
			{
				while($data = mysql_fetch_assoc($resultat1)) 
				 {
					if ($myusername ==  $data['email'] && $mypassword ==  $data['pass_r'] )
						{				
							$_SESSION['login_user']=$myusername;
							$_SESSION['idr']=$data['id_r'];
							$tr=1;
						}
						
				 }
			}
			
			else if(!mysql_num_rows($resultat1) && mysql_num_rows($resultat2))
	
		
			{
				while($data = mysql_fetch_assoc($resultat2)) 
				 {
					if ($myusername ==  $data['email_u'] && $mypassword ==  $data['pass_u'] )
						{
							
							$_SESSION['login_nuser']=$myusername;
							$_SESSION['idu']=$data['id_u'];
							$_SESSION['connexion']=$data['dernier_connexion'];
							$requete1 = "SELECT count(id_c) as s FROM concour WHERE date_depot_c > '".$_SESSION['connexion']."'" ;
											$resultat1 = mysql_query($requete1) or die('Erreur SQL !<br>'.$requete1.'<br>'.mysql_error()); 
											while($data1 = mysql_fetch_assoc($resultat1)) 
													{											
													 $result=$data1['s'];
													$_SESSION['nv']=$result;
													
														
											}
							$requete2 = "SELECT count(id_e) as ss FROM emploi WHERE date_depot_e > '".$_SESSION['connexion']."'" ;
											$resultat2 = mysql_query($requete2) or die('Erreur SQL !<br>'.$requete2.'<br>'.mysql_error()); 
											while($data2 = mysql_fetch_assoc($resultat2)) 
													{											
													 $result2=$data2['ss'];
													$_SESSION['nve']=$result2;
													
												
											}
							$requete3 = "SELECT count(id_f) as s2 FROM formation WHERE date_depot_f > '".$_SESSION['connexion']."'" ;
											$resultat3 = mysql_query($requete3) or die('Erreur SQL !<br>'.$requete3.'<br>'.mysql_error()); 
											while($data3 = mysql_fetch_assoc($resultat3)) 
													{											
													 $result3 =$data3['s2'];
													$_SESSION['nvf']=$result3;
													
											}
							$requete4 = "SELECT count(id_s) as s3 FROM stage WHERE date_depot_s > '".$_SESSION['connexion']."'" ;
											$resultat4 = mysql_query($requete4) or die('Erreur SQL !<br>'.$requete4.'<br>'.mysql_error()); 
											while($data4 = mysql_fetch_assoc($resultat4)) 
													{											
													 $result4=$data4['s3'];
													$_SESSION['nvs']=$result4;
													
														
											}
											
										
										$tr=2;	
						}
				 }
			}
}
else
{
	$tr=0;
}

$_SESSION['tr']=$tr;
$smarty->display('finder.html');
?>
