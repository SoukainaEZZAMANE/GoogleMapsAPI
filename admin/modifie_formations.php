<?php
session_start(); 
include_once("config.php");
require_once('ikra.php');
require_once('BD.php');

extract($_POST);
//========================================================================================
//******************** fonction pour transformer une adresse en att et lang***************
//=========================================================================================
function getCoordonnees($adresse){
    $apiKey = "000824788445984525451:fkamkqgo6se";//Indiquez ici votre clé Google maps !
    $url = "http://maps.google.com/maps/geo?q=".urlencode($adresse)."&output=csv&key=".$apiKey;

    $csv = file($url);
    $donnees = explode(",",$csv[0]); 
	$t = array($donnees[2],$donnees[3]);
	
    return $t;
	} 
//============================================================================================

//===============================================================================================
//***************************** upload *********************************************************
//===============================================================================================
$dossier = 'image/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 1048576;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg','');
$extension = strrchr($_FILES['avatar']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
	 echo "<script>alert(\"Vous devez uploader un fichier de type png, gif, jpg, jpeg\")</script>"; 
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
	 	 echo "<script>alert(\"Le fichier est trop gros...\")</script>"; 

}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜİàáâãäåçèéêëìíîïğòóôõöùúûüıÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
		 
     }
}
else
{
     echo $erreur;
}


#verification du session
if (isset($_SESSION['login_user']))
 {	

$adr=$lieu;
$t= getCoordonnees($adr);
$att=$t[0];
$leng=$t[1];
	# modification de formation
	if($_FILES['avatar']['name']=='')
	 $sql = "UPDATE formation SET desc_f='".$desc."', secteur_f='".$secteur."',dure_f='".$duree."', organisation_f='".$organisme."', lieu_f='".$lieu."',nbr_poste_f='".$nbr."', ville_f='".$ville."',email_f='".$email."',tel_f='".$tel."',resp_f='".$resp."',attitude='".$att."',langitude='".$leng."',site_f='".$site."',date_depot_f='".$date."' WHERE id_f='".$id_f."'";
	 
	else
	 $sql = "UPDATE formation SET desc_f='".$desc."', secteur_f='".$secteur."',dure_f='".$duree."', organisation_f='".$organisme."', lieu_f='".$lieu."',nbr_poste_f='".$nbr."', ville_f='".$ville."',email_f='".$email."',tel_f='".$tel."',resp_f='".$resp."',attitude='".$att."',langitude='".$leng."',site_f='".$site."',date_depot_f='".$date."',image_f='".$_FILES['avatar']['name']."' WHERE id_f='".$id_f."'";

	 $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  // on envoie la requête 
	 header('location:formations.php'); 
  }
else
 {
	$smarty->display('index.html');
 }
