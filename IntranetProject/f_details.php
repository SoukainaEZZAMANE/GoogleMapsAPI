<?php 
require_once'config.php';
require_once'ikra.php';
require_once('BD.php');
$id=$_GET['id'];
$test=0;

$query1 = $ikra->Query("SELECT * FROM forum WHERE idf='".$id."'");
$query2 = $ikra->Query("SELECT * FROM compte_utilisateur c, forum f WHERE c.id_u=f.idu");

$query3 = $ikra->Query("SELECT * FROM reponse r, compte_utilisateur c WHERE r.idf='".$id."' AND r.idu=c.id_u ORDER BY date_depot DESC;");


 



foreach ($query1 as $row) {

	$return[]=array(
			"idf"=>$row['idf'],
			"titre"=>$row['titre'],
			"sujet"=>$row['sujet'],
			"type"=>$row['type'],
			"date_depot"=>$row['date_depot'],
			"idu"=>$row['idu'],

			);
}

foreach ($query2 as $row) {

	$return2[]=array(
			"nom_u"=>$row['nom_u'],
			"prenom_u"=>$row['prenom_u'],
			"civilite_u"=>$row['civilite_u'],
			);
}

if (mysql_query("SELECT * FROM reponse r, compte_utilisateur c WHERE r.idf='".$id."' AND r.idu=c.id_u ORDER BY date_depot DESC;"))
{

foreach ($query3 as $row) {

	$return3[]=array(
			"idr"=>$row['idr'],
			"nom_u"=>$row['nom_u'],
			"prenom_u"=>$row['prenom_u'],
			"civilite_u"=>$row['civilite_u'],
			"titre"=>$row['titre'],
			"sujet"=>$row['sujet'],
			"date_depot"=>$row['date_depot'],
			);




}
}
if(isset($return3))
{$test=1;

$smarty->assign("data3",$return3);
}
$smarty->assign("test",$test);
$smarty->assign("data",$return[0]);
$smarty->assign("data2",$return2[0]);
$smarty->display("f_details.html");
?>