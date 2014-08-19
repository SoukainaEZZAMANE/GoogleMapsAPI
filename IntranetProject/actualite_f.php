<?php
session_start(); 
header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');

$requete = "SELECT * FROM formation WHERE date_depot_f > '".$_SESSION['connexion']."'" ;
$resultat1 = mysql_query($requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysql_error()); 
											
	while($row = mysql_fetch_assoc($resultat1)) 
		{														 
			 $return[]=array( 
			"id_f"=>$row['id_f'],
			"desc_f"=>$row['desc_f'],
			"secteur_f"=>$row['secteur_f'],
			"date_depot_f"=>$row['date_depot_f'],
			"dure_f"=>$row['dure_f'],
			"organisation_f"=>$row['organisation_f'],
			"lieu_f"=>$row['lieu_f'],	   
			"ville_f"=>$row['ville_f'], 
			"image_f"=>$row['image_f'], 
			"nbr_poste_f"=>$row['nbr_poste_f'],
				);														
		}

# # remettre le nombre d'actualité a 0
$_SESSION['nvf']=0;

$smarty->assign("return",$return);
$smarty->display('actualite_f.html');

if (empty($return ))
echo "aucun résultat trouvé";
												

?>
