<?php	
session_start();
 include_once("config.php");
	require_once('ikra.php');
	require_once('BD.php');

header('Content-Type:text/html;charset=utf-8');
//print_r($_GET);

	extract($_POST);
	
	//fonction de convetion:
	function getCoordonnees($lieu_s){
    $apiKey = "000824788445984525451:fkamkqgo6se";//Indiquez ici votre clé Google maps !
    $url = "http://maps.google.com/maps/geo?q=".urlencode($lieu_s)."&output=csv&key=".$apiKey;

    $csv = file($url);
    $donnees = explode(",",$csv[0]); 
	$t = array($donnees[2],$donnees[3]);
    return $t;
}  


if (isset($_SESSION['login_user']))
 {


$adr=$lieu_s;
//================================================================
//************************ upload d'image ************************
//================================================================


$dossier = '../admin/image/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 1048576;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.JPG' , '.jpeg');
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
          '?????????????????????????à?â???çèéêë??îï???ô??ù?ûü??', 
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

//================================================================

$t= getCoordonnees($adr);
$att=$t[0];
$leng=$t[1];

$str=date("Y-m-d");

$id= $_SESSION['idr'];

$d=explode('/',$demarrage_s);
$dd=$d[2]."-".$d[0]."-".$d[1];

 
	 $dr = $ikra->InsertSQL('annonce_s', array ('niveau_s','secteur_s','dure_s','entreprise_s','remunere','nbr_poste','desc_entr_s','date_depot_s','demarrage_s','lieu_s','email_s','ville_s','tel_s','attitude','langitude','mission_s','site_s','image_s'),
	 array($niveau_s,$secteur_s,$dure_s,$entreprise_s,$remunere,$nbr_poste,$desc_entr_s,$str,$dd,$lieu_s,$email_s,$ville_s,$tel_s,$att,$leng,$mission_s,$site_s,$_FILES['avatar']['name']));
	$smarty->display('aj_succes.html');
 }
else
 {
	$smarty->display('connexion_s.html');
 }