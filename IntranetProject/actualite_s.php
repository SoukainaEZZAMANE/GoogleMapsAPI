<?php
session_start(); 
header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');

$requete = "SELECT * FROM stage WHERE date_depot_s > '".$_SESSION['connexion']."'" ;
$resultat1 = mysql_query($requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysql_error()); 
											
	while($row = mysql_fetch_assoc($resultat1)) 
		{											
			 $return[]=array( 
			"id_s"=>$row['id_s'],
			"entreprise_s"=>$row['entreprise_s'],
			"mission_s"=>$row['mission_s'],
			"remunere"=>$row['remunere'],
			"desc_entr_s"=>$row['desc_entr_s'],
		    "niveau_s"=>$row['niveau_s'],
		    "lieu_s"=>$row['lieu_s'],
			 "ville_s"=>$row['ville_s'],
			"dure_s"=>$row['dure_s'],
			"date_depot_s"=>$row['date_depot_s'],
			"demarrage_s"=>$row['demarrage_s'],
			"secteur_s"=>$row['secteur_s'],
			"image_s"=>$row['image_s'],
			"nbr_poste"=>$row['nbr_poste'],
			"email_s"=>$row['email_s'],
			"tel_s"=>$row['tel_s'],
				);	
		}

# remettre le nombre d'actualité a 0
$_SESSION['nvs']=0;

$smarty->assign("return",$return);
$smarty->display('actualite_s.html');

if (empty($return ))
	echo "aucun résultat trouvé";
												

?>
