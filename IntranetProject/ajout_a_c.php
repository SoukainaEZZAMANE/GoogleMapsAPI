<?php	
session_start();
 include_once("config.php");
	require_once('ikra.php');
	require_once('BD.php');
	//header('Content-Type:text/html;charset=utf-8');
	extract($_POST);
	//fonction de convetion:
	
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
          'ہءآأؤإابةتثجحخدزسشصضظعغـفàلâمنهçèéêëىيîïًٍَôُِùْûü‎ے', 
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


	
	function getCoordonnees($lieu_c){
    $apiKey = "000824788445984525451:fkamkqgo6se";//Indiquez ici votre clé Google maps !
    $url = "http://maps.google.com/maps/geo?q=".urlencode($lieu_c)."&output=csv&key=".$apiKey;

    $csv = file($url);
    $donnees = explode(",",$csv[0]); 
	$t = array($donnees[2],$donnees[3]);
	
    return $t;
}  


if (isset($_SESSION['login_user']))
 {
 //print_r($_POST);



$adr=$lieu_c;
$t= getCoordonnees($adr);
$att=$t[0];
$leng=$t[1];

# Add Insert Object
$str=date("Y-m-d");
$id=$_SESSION['idr'];

# verification du session
 
	
	
	 $dr = $ikra->InsertSQL('annonce_c', array ('organisme_c','date_depot_c','date_fin_c','date_c','desc_c','niveau_c','lieu_c','email_c','tel_c','pieces_c','ville_c','domaine_c','condition_c','site_c','attitude','langitude','id_r','image_c'),
	 array($organisme_c,$str,$date_fin_c,$date_c,$desc_c,$niveau_c,$lieu_c,$email_c,$tel_c,$pieces_c,$ville_c,$domaine_c,$condition_c,$site_c,$att,$leng,$id,$_FILES['avatar']['name']));
//	header('location:concours.php'); 
	$smarty->display('aj_succes.html');
 }
else

 {
	$smarty->display('demande_connexion.html');
 }

?>

