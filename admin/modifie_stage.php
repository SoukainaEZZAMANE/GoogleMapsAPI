<?php
session_start(); 
include_once("config.php");
require_once('ikra.php');
require_once('BD.php');

extract($_POST);
 print_r($_POST);
function getCoordonnees($adresse){
    $apiKey = "000824788445984525451:fkamkqgo6se";//Indiquez ici votre clé Google maps !
    $url = "http://maps.google.com/maps/geo?q=".urlencode($adresse)."&output=csv&key=".$apiKey;

    $csv = file($url);
    $donnees = explode(",",$csv[0]); 
	$t = array($donnees[2],$donnees[3]);
	
    return $t;
	} 

//================================================================
//************************ upload d'image ************************
//================================================================

	$dossier = 'image/';
	$fichier = basename($_FILES['avatar']['name']);
	$taille_maxi = 1048576;
	$taille = filesize($_FILES['avatar']['tmp_name']);
	$extensions = array('.png', '.gif', '.jpg', '.jpeg');
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

#verification du sesion
if (isset($_SESSION['login_user']))
 {	
 
 $adr=$lieu_s;
$t= getCoordonnees($adr);
$att=$t[0];
$leng=$t[1];
	# Modification de stage
	if($_FILES['avatar']['name']=='')
	$sql = "UPDATE stage SET niveau_s='".$niveau_s."', secteur_s='".$secteur_s."',dure_s='".$dure_s."', entreprise_s='".$entreprise_s."', remunere='".$remunere."',nbr_poste='".$nbr_poste."',desc_entr_s='".$desc_entr_s."',date_depot_s='".$date_depot_s."',demarrage_s='".$demarrage_s."',lieu_s='".$lieu_s."',ville_s='".$ville_s."',email_s='".$email_s."',tel_s='".$tel_s."',site_s='".$site_s."',mission_s='".$mission_s."',attitude='".$att."',langitude='".$leng."' WHERE id_s='".$id_s."'";
   
    else
	$sql = "UPDATE stage SET niveau_s='".$niveau_s."', secteur_s='".$secteur_s."',dure_s='".$dure_s."', entreprise_s='".$entreprise_s."', remunere='".$remunere."',nbr_poste='".$nbr_poste."',desc_entr_s='".$desc_entr_s."',date_depot_s='".$date_depot_s."',demarrage_s='".$demarrage_s."',lieu_s='".$lieu_s."',ville_s='".$ville_s."',email_s='".$email_s."',tel_s='".$tel_s."',site_s='".$site_s."',mission_s='".$mission_s."',attitude='".$att."',langitude='".$leng."',image_s='".$_FILES['avatar']['name']."' WHERE id_s='".$id_s."'";
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());   // on envoie la requête 
    header('location:stages.php'); 
 }
else
 {
	$smarty->display('index.html');
 }
