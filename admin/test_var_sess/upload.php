<html><head>
<title>UPLOAD et EFFACEMENT de FICHIERS</title>
</head>
<body><center>
<? 
/*********************************
UPLOAD et EFFACEMENT de FICHIERS

Voici une fa�on tr�s simple pour g�rer les uploads
L'upload, c'est le transfert de fichiers
 de votre disque dur vers l'Internet (un t�l�chargement invers�):
** download != upload **
Habituellement, pour faire ce type de manipulation,
on passe par le ftp... Ce qui veut dire dans le code:
    une connexion par ftp, des codes tr�s long pour pas grand chose.
Nous allons voir une fonction qui fait la m�me chose en une ligne !!!
Nous allons aussi �tudier l'effacement de fichiers par une fonction
simple - et non par ftp.

Ici on va se servir des formulaires pour ex�cuter les fonctions...
 ...histoire de simplifier la chose

Ce script est libre d'utilisation. Enjoy !
ludovic giambiasi
Pour tout probl�me...
		 ludo@informaticien.com
**********************************/

// la fonction est simple et s'appelle tout simplement copy
// copy(source, destination);

// c'est tr�s simple, seulement il faut faire attention � quelques petits d�tails...
// lors de l'utilisation d'un formulaire comme nous allons essayer tout de suite...

if ($test=="upload"){ // test
// le basename est l� pour s�parer le nom du fichier et le nom du dossier
   copy($fichier, basename($fichier));
   echo "<font color=red>FICHIER COPIE AVEC SUCCE !</font><br /><br />";}
// bien �videmment � la place de basename($fichier) vous pouvez
// ins�rer le chemin et le nom de fichier que vous souhaitez
// attention, le chemin sp�cifi� doit toutefois exister, il ne se cr�era pas tout seul !


if ($test=="efface"){ // test
   unlink($fichier);
// la commande unlink permet d'effacer un fichier � partir d'une adresse et de son nom
   echo "<font color=red>FICHIER EFFACE AVEC SUCCES !</font><br /><br />";}
?>

<form method="post" ACTION="upload.php?test=upload" enctype="multipart/form-data">
<input type="file" name="fichier"><br /><br />
<input type="submit" value=" UPLOAD " style="cursor:hand;">
</form>
<hr />
<form method="post" ACTION="upload.php?test=efface">
<input type="file" name="fichier"><br /><br />
<input type="submit" value=" EFFACE " style="cursor:hand;">
</form>

</center>


</body>
</html>
