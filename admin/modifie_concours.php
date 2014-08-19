<?php
session_start(); 
include_once("config.php");
require_once('ikra.php');
require_once('BD.php');


extract($_POST);
//===============================================================================================
//***************************** fonction adresse ---> att ,lang *********************************
//===============================================================================================
function getCoordonnees($adresse){
    $apiKey = "000824788445984525451:fkamkqgo6se";//Indiquez ici votre clÈ Google maps !
    $url = "http://maps.google.com/maps/geo?q=".urlencode($adresse)."&output=csv&key=".$apiKey;

    $csv = file($url);
    $donnees = explode(",",$csv[0]); 
	$t = array($donnees[2],$donnees[3]);
	
    return $t;
	} 
//===============================================================================================


//===============================================================================================
//***************************** upload **********************************************************
//===============================================================================================
$dossier = 'image/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 1048576;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg','');
$extension = strrchr($_FILES['avatar']['name'], '.'); 
//DÈbut des vÈrifications de sÈcuritÈ...
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
          '¿¡¬√ƒ≈«»… ÀÃÕŒœ“”‘’÷Ÿ⁄€‹›‡·‚„‰ÂÁËÈÍÎÏÌÓÔÚÛÙıˆ˘˙˚¸˝ˇ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que Áa a fonctionnÈ...
     {
          echo 'Upload effectuÈ avec succËs !';
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

//=======================================================================================================

print_r($_FILES);
# verification du session
if (isset($_SESSION['login_user']))
 {	
 $adr=$lieu;
$t= getCoordonnees($adr);
$att=$t[0];
$leng=$t[1];

    # mise a jour d'un concour
	if ($_FILES['avatar']['name']=='')
		 $sql = "UPDATE concour SET organisme_c='".$organisme."',date_fin_c='".$date_fin."', date_c='".$date_c."', desc_c='".$desc."',niveau_c='".$niveau."', lieu_c='".$lieu."',email_c='".$email."',tel_c='".$tel."',pieces_c='".$pieces."',ville_c='".$ville."',domaine_c='".$domaine."',lieu_c='".$lieu."',condition_c='".$condition."',site_c='".$site."',attitude='".$att."',langitude='".$leng."' WHERE id_c='".$id_c."'";
	else
		 $sql = "UPDATE concour SET organisme_c='".$organisme."',date_fin_c='".$date_fin."', date_c='".$date_c."', desc_c='".$desc."',niveau_c='".$niveau."', lieu_c='".$lieu."',email_c='".$email."',tel_c='".$tel."',pieces_c='".$pieces."',ville_c='".$ville."',domaine_c='".$domaine."',lieu_c='".$lieu."',condition_c='".$condition."',site_c='".$site."',attitude='".$att."',langitude='".$leng."',image_c='".$_FILES['avatar']['name']."' WHERE id_c='".$id_c."'";

	 $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  // on envoie la requÍte 
     header('location:concours.php'); 
 }
else
 {
	$smarty->display('index.html');
 }
