<?php /* Smarty version Smarty-3.1.12, created on 2012-11-07 09:50:16
         compiled from "smarty\templates\form.html" */ ?>
<?php /*%%SmartyHeaderCode:12570506c7994f12980-90705999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a927e77575aa0bc5ad7a748566f4bcbf26477e8' => 
    array (
      0 => 'smarty\\templates\\form.html',
      1 => 1352281767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12570506c7994f12980-90705999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_506c799563c002_93880541',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506c799563c002_93880541')) {function content_506c799563c002_93880541($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <script type="text/javascript">

  function verifier()
  {

    var sdate1 = document.getElementById('a').value
    var date1 = new Date();
    date1.setFullYear(sdate1.substr(6,4));
    date1.setMonth(sdate1.substr(3,2));
    date1.setDate(sdate1.substr(2,0));
  //date1.setHours(0);
  //date1.setMinutes(0);
  //date1.setSeconds(0);
  //date1.setMilliseconds(0);
    var d1=date1.getTime()


    var dateactuel=new Date(); 

  //si la date actuelle est superieur a la system en afficher un message d'erreur
    if(d1>dateactuel)
      {	
         alert('Vous avez selection un date incorrect!!')
         return false;
       }
  }

</script>
 <FORM action='ajout.php' method="post" name='Form2' id='Form2' onsubmit ="return verifier()">

 <table>
  <tr>
      <td align="right">Nom :</td>
      <td> <input type="text" name="nom" width="250"/></td>
  </tr>
 
  <tr>
      <td align="right">prenom :</td>
      <td> <input type="text" name="prenom" width="250"/></td>
  </tr>

  <tr>
      <td align="right">date de naissance:</td>
      <td> <input type="text" name="datee" id="a" width="250"/>  </td>
  </tr>
   <tr>
      <td align="right">tel:</td>
      <td> <input type="text" name="tel" width="250"/>  </td>
  </tr>
   <tr>
      <td align="right">email :</td>
      <td> <input type="text" name="mail"  width="250"/>  </td>
  </tr>

 
  <tr>
    <td>
	   <Input Type="submit" value="Valider" width="150"> 
	   <Input Type="button" value="Annuler" onclick="javascript:history.go(-1)">
	</td>
  </tr>
 <br>

<!--<tr>
   <td>
       <input type="text" name="mail"  width="250"/>
       <Input Type="button" value="supprimer" onclick="return supprimer()">
   </td>
</tr>-->
 <tr>
   <td>
     <a href="index.php"> page d'accueil</a>
   </td>
 </tr>

</html>
<?php }} ?>