<?php
session_start(); 
header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
require_once('BD.php');
extract($_POST);
extract($_GET);


 # verification du session

if (isset($_SESSION['login_user']))
 {	
//=======================================================================================
//===================================== auto complet ====================================
//=======================================================================================
// si on reçoit une donnée
if(isset($_GET['q'])) {
    $q = htmlentities($_GET['q']); // protection
      
    // écriture de la requête
    $requete = "SELECT organisme_c FROM concour WHERE organisme_c LIKE '". $q ."%' LIMIT 0, 10";
    // exécution de la requête
     $resultat = mysql_query($requete) or die('Erreur SQL !<br>'.$requete.'<br>'.mysql_error()); 
    // affichage des résultats
	while($data = mysql_fetch_assoc($resultat)) {
        echo $data['organisme_c'] ."\n";
    
	}
	mysql_close(); 
}
//========================================================================================


	//==========================================================================================
	//================ suppression d'un concour ================================================
	//==========================================================================================
	
	if (!empty($action) && $action=='supprimer')
  	 {
		$table1=$ikra->DeleteSQL('concour', "WHERE id_c ='" .$id."'");
	 }
	//==========================================================================================

	//==========================================================================================
	//============== remplissage du tableau concours a aficher dans 'concours.html'============
	//==========================================================================================

	$table1 = $ikra->Table('concour');
	foreach ($table1 as $row) {
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
	$smarty->assign("return",$return);
	$smarty->display('concours.html');
	//==========================================================================================
 }
else
 {
	$smarty->display('index.html');
 }

