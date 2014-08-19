<?php	
session_start();
 include_once("config.php");
 require_once('ikra.php');
 require_once('BD.php');
 header('Content-Type:text/html;charset=utf-8');

	extract($_POST);
	
	//fonction de convetion:
	function getCoordonnees($lieu_e){
    $apiKey = "000824788445984525451:fkamkqgo6se";//Indiquez ici votre clé Google maps !
    $url = "http://maps.google.com/maps/geo?q=".urlencode($lieu_e)."&output=csv&key=".$apiKey;

    $csv = file($url);
    $donnees = explode(",",$csv[0]); 
	$t = array($donnees[2],$donnees[3]);
    return $t;
}  


if (isset($_SESSION['login_user']))
 {

$adr=$lieu_e;
//================================================================
//************************ upload d'image ************************
//================================================================

$dossier = '../admin/image/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 1048576;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.JPG' , '.jpeg','');
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
//$id=$_SESSION['id_r'];

//==============================================================================================================
//***************************************** ajout d'une annonce emploi *****************************************
//==============================================================================================================
	$dr = $ikra->InsertSQL('annoce_e', array ('entreprise_e','desc_entr_e','nbr_poste_e','lieu_e','date_depot_e','secteur_e','niveau_e','tel_e','type_contrat_e','remuniration_e','email_e','ville_e','attitude','langitude','image_e','site_e'),
	 array($entreprise_e,$desc_entr_e,$nbr_poste_e,$lieu_e,$str,$secteur_e,$niveau_e,$tel_e,$type_contrat_e,$renumeration_e,$email_e,$ville_e,$att,$leng,$_FILES['avatar']['name'],$site_e));
 //==============================================================================================================
	 

	$smarty->display('aj_succes.html');
 }
else

 {
	$smarty->display('connexion.html');
 }
?>