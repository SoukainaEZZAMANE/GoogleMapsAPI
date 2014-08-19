<?php /* Smarty version Smarty-3.1.12, created on 2012-12-20 16:02:59
         compiled from "smarty\templates\recrutor_next.html" */ ?>
<?php /*%%SmartyHeaderCode:2147950c65351229a44-40772074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0904bd13a3e43c31a5a11c41187707ade0fda17d' => 
    array (
      0 => 'smarty\\templates\\recrutor_next.html',
      1 => 1355904618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2147950c65351229a44-40772074',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c65351285532_42370425',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c65351285532_42370425')) {function content_50c65351285532_42370425($_smarty_tpl) {?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        </title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.css"
        />
        <link rel="stylesheet" href="css/my.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.js">
        </script>
        <script src="js/my.js">
        </script>
    </head>
    
    <body>
<div data-role="page" >
    <div data-theme="a" data-role="header">
               <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
            </div>
<div data-role="content" data-theme="a">
<form action="aj.php" method="post" id="form" data-transition="flow"  >

       <div data-role="fieldcontain">
				<label for="dep" class="select">D&eacute;partement</label>
				<select name="dep" id="dep" data-mini="true">
					<option value="dep1">Achats et Approvisionnements</option>
					<option value="dep2">Comptabilité et finance</option>
					<option value="dep3">Direction Général</option>
					<option value="dep4">Informatique & SI</option>
                    <option value="dep5">Ressources humaines</option>
				</select>
			</div>
            <div data-role="fieldcontain">
	         <label for="fonc">Fonction</label>
	         <input type="text" name="fonc" id="fonc"   data-mini="true" placeholder="Entrer Fonction" />
			</div>
            <div data-role="fieldcontain">
			<label for="tel">Tel</label>
			<input type="tel"  name="tel" id="tel" data-mini="true" placeholder="Entrer Tel"/>
</div>
<div data-role="fieldcontain">
			<label for="fax">Fax</label>
			<input type="text"  name="fax" id="fax" data-mini="true" placeholder="Entrer Fax"/>
</div>
<p><a href="new_recrutor.php" data-role="button" data-theme="e">PRECEDENT</a></p><br/>
<div class="ui-body ui-body-b">
		<fieldset class="ui-grid-a">
	<div class="ui-block-a"><button type="reset" data-theme="d" data-mini="true">Annuler</button></div>
	<div class="ui-block-b"><button type="submit" data-theme="b" data-mini="true" >Ajouter</button></div>
	    </fieldset>
</div>

</form>

</div>


<div data-theme="a" data-role="footer" data-position="fixed">
            
            <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home">
                            Accueil
                        </a>
                    </li>
                    <li>
                     <a href="contact.php" data-rel="dialog"  data-theme="" data-icon="star"  data-transition="fade" >
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="info">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
</div>

</html>
<?php }} ?>