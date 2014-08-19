<?php
session_start(); 
header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');


$requete = "SELECT  * FROM emploi WHERE date_depot_e > '".$_SESSION['connexion']."'" ;
$resultat1 = mysql_query($requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysql_error()); 

# remplissage du tableau d'actualité emploi											
	while($row = mysql_fetch_assoc($resultat1)) 
		{											
			 $return[]=array( 
			"id_e"=>$row['id_e'],
			"entreprise_e"=>$row['entreprise_e'],
			"desc_entr_e"=>$row['desc_entr_e'],
			"nbr_poste_e"=>$row['nbr_poste_e'],
			"lieu_e"=>$row['lieu_e'],
		    "date_depot_e"=>$row['date_depot_e'],
		    "secteur_e"=>$row['secteur_e'],
			"ville_e"=>$row['ville_e'],
			"image_e"=>$row['image_e'],
			"niveau_e"=>$row['niveau_e'],
			"tel_e"=>$row['tel_e'],
			"site_e"=>$row['site_e'],
			"email_e"=>$row['email_e'],
			"type_contrat_e"=>$row['type_contrat_e'],
			"renumeration_e"=>$row['renumeration_e'],
				);	
		}
# remettre le nombre d'actualité a 0
$_SESSION['nve']=0;

$smarty->assign("return",$return);
$smarty->display('actualite_e.html');

if (empty($return ))
echo "aucun résultat trouvé";
												

?>
