<html><head>
<title>UPLOAD et EFFACEMENT de FICHIERS</title>
</head>
<body><center>
<? 
/*********************************
UPLOAD et EFFACEMENT de FICHIERS

Voici une façon très simple pour gérer les uploads
L'upload, c'est le transfert de fichiers
 de votre disque dur vers l'Internet (un téléchargement inversé):
** download != upload **
Habituellement, pour faire ce type de manipulation,
on passe par le ftp... Ce qui veut dire dans le code:
    une connexion par ftp, des codes très long pour pas grand chose.
Nous allons voir une fonction qui fait la même chose en une ligne !!!
Nous allons aussi étudier l'effacement de fichiers par une fonction
simple - et non par ftp.

Ici on va se servir des formulaires pour exécuter les fonctions...
 ...histoire de simplifier la chose

Ce script est libre d'utilisation. Enjoy !
ludovic giambiasi
Pour tout problème...
		 ludo@informaticien.com
**********************************/

// la fonction est simple et s'appelle tout simplement copy
// copy(source, destination);

// c'est très simple, seulement il faut faire attention à quelques petits détails...
// lors de l'utilisation d'un formulaire comme nous allons essayer tout de suite...

if ($test=="upload"){ // test
// le basename est là pour séparer le nom du fichier et le nom du dossier
   copy($fichier, basename($fichier));
   echo "<font color=red>FICHIER COPIE AVEC SUCCE !</font><br /><br />";}
// bien évidemment à la place de basename($fichier) vous pouvez
// insérer le chemin et le nom de fichier que vous souhaitez
// attention, le chemin spécifié doit toutefois exister, il ne se créera pas tout seul !


if ($test=="efface"){ // test
   unlink($fichier);
// la commande unlink permet d'effacer un fichier à partir d'une adresse et de son nom
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
