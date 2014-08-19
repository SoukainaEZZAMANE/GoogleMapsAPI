<?php
session_start(); 
header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');


$requete = "SELECT * FROM concour WHERE date_depot_c > '".$_SESSION['connexion']."'" ;
$resultat1 = mysql_query($requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysql_error());

# remplissage du tableau 											
	while($row = mysql_fetch_assoc($resultat1)) 
		{											
			 $return[]=array( 
				"id_c"=>$row['id_c'],
				"organisme_c"=>$row['organisme_c'],
				"date_depot_c"=>$row['date_depot_c'],
				"date_fin_c"=>$row['date_fin_c'],
				"desc_c"=>$row['desc_c'],
				"niveau_c"=>$row['niveau_c'],
				"lieu_c"=>$row['lieu_c'],
				"date_c"=>$row['date_c'],
				"email_c"=>$row['email_c'],
				"tel_c"=>$row['tel_c'],
				"pieces_c"=>$row['pieces_c'],
				"ville_c"=>$row['ville_c'],
				"domaine_c"=>$row['domaine_c'],
			    "condition_c"=>$row['condition_c'],
				"site_c"=>$row['site_c'],
				"image_c"=>$row['image_c'],
				);														
		}
# remettre le nombre d'actualité a 0
$_SESSION['nv']=0;

$smarty->assign("return",$return);
$smarty->display('actualite_c.html');

if (empty($return ))
echo "aucun résultat trouvé";
												

?>
