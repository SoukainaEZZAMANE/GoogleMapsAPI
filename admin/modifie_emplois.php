<?php
session_start(); 
include_once("config.php");
require_once('ikra.php');
require_once('BD.php');

extract($_POST);

function getCoordonnees($adresse){
    $apiKey = "000824788445984525451:fkamkqgo6se";//Indiquez ici votre cl� Google maps !
    $url = "http://maps.google.com/maps/geo?q=".urlencode($adresse)."&output=csv&key=".$apiKey;

    $csv = file($url);
    $donnees = explode(",",$csv[0]); 
	$t = array($donnees[2],$donnees[3]);
	
    return $t;
	} 

//===============================================================================================
//***************************** upload *********************************************************
//===============================================================================================
	$dossier = 'image/';
	$fichier = basename($_FILES['avatar']['name']);
	$taille_maxi = 1048576;
	$taille = filesize($_FILES['avatar']['tmp_name']);
	$extensions = array('.png', '.gif', '.jpg', '.jpeg','');
	$extension = strrchr($_FILES['avatar']['name'], '.'); 
//D�but des v�rifications de s�curit�...
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
          '����������������������������������������������������', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que �a a fonctionn�...
     {
          echo 'Upload effectu� avec succ�s !';
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
//===========================================================================================

#verification du session
if (isset($_SESSION['login_user']))
 {	
 $adr=$lieu_e;
$t= getCoordonnees($adr);
$att=$t[0];
$leng=$t[1];
	# modification d'emploi 
	 if($_FILES['avatar']['name']=='')
	  $sql = "UPDATE emploi SET entreprise_e='".$entreprise_e."', desc_entr_e='".$desc_entr_e."',nbr_poste_e='".$nbr_poste_e."', lieu_e='".$lieu_e."', date_depot_e='".$date_depot_e."',secteur_e='".$secteur_e."', tel_e='".$tel_e."',type_contrat_e='".$type_e."',renumeration_e='".$ren_e."',email_e='".$email_e."',ville_e='".$ville_e."',site_e='".$site_e."',attitude='".$att."',langitude='".$leng."' WHERE id_e='".$id_e."'";
	
	 else
	  $sql = "UPDATE emploi SET entreprise_e='".$entreprise_e."', desc_entr_e='".$desc_entr_e."',nbr_poste_e='".$nbr_poste_e."', lieu_e='".$lieu_e."', date_depot_e='".$date_depot_e."',secteur_e='".$secteur_e."', tel_e='".$tel_e."',type_contrat_e='".$type_e."',renumeration_e='".$ren_e."',email_e='".$email_e."',ville_e='".$ville_e."',site_e='".$site_e."',attitude='".$att."',langitude='".$leng."',image_e='".$_FILES['avatar']['name']."' WHERE id_e='".$id_e."'";

	 $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  // on envoie la requ�te 
	 header('location:emplois.php'); 
  }
else
 {
	$smarty->display('index.html');
 }
