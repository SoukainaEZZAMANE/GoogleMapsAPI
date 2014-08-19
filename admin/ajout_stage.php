<?php	

session_start();
	include_once("config.php");
	require_once('ikra.php');
	require_once('BD.php');
	header('Content-Type:text/html;charset=utf-8');
	extract($_POST);

//======================================================================================================
//*************************** fonction adresse ---> att,lang *******************************************
//======================================================================================================
	function getCoordonnees($adresse){
    $apiKey = "000824788445984525451:fkamkqgo6se";//Indiquez ici votre clé Google maps !
    $url = "http://maps.google.com/maps/geo?q=".urlencode($adresse)."&output=csv&key=".$apiKey;

    $csv = file($url);
    $donnees = explode(",",$csv[0]); 
	$t = array($donnees[2],$donnees[3]);
	
    return $t;
	} 
//=======================================================================================================


//================================================================
//************************ upload d'image ************************
//================================================================
/*$extension_upload = strtolower(  substr(  strrchr($_FILES['avatar']['name'], '.')  ,1)  );

$nom = "image/{$_FILES['avatar']['name']}";
$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'],$nom);
if ($resultat) echo "Transfert réussi";*/


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
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
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

if (isset($_SESSION['login_user']))
 {

// database( your_database_user , your_database_password , your_database , your_server );
# Add Insert Object
$adr=$lieu_s;
$t= getCoordonnees($adr);
$att=$t[0];
$leng=$t[1];


$d=explode('/',$demarrage_s);
$dep=explode('/',$date_depot_s);
$datd=$dep[2]."-".$dep[0]."-".$dep[1];
$dat=$d[2]."-".$d[0]."-".$d[1];

$datd = date("Y-m-d H:i:s");


	   $dr = $ikra->InsertSQL('stage', array ('niveau_s','secteur_s','dure_s','entreprise_s','remunere','nbr_poste','desc_entr_s','date_depot_s','demarrage_s','lieu_s','email_s','ville_s','tel_s','attitude','langitude','mission_s','site_s','image_s'),
	 array($niveau_s,$secteur_s,$dure_s,$entreprise_s,$remunere,$nbr_poste,$desc_entr_s,$datd,$dat,$lieu_s,$email_s,$ville_s,$tel_s,$att,$leng,$mission_s,$site_s,$_FILES['avatar']['name']));
	 header('location:stages.php'); 
}
else
 {
	$smarty->display('index.html');
 }
 