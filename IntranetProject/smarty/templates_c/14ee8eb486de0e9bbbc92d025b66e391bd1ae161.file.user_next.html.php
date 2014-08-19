<?php /* Smarty version Smarty-3.1.12, created on 2012-12-20 16:13:56
         compiled from "smarty\templates\user_next.html" */ ?>
<?php /*%%SmartyHeaderCode:2534750c64c86805151-85854257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14ee8eb486de0e9bbbc92d025b66e391bd1ae161' => 
    array (
      0 => 'smarty\\templates\\user_next.html',
      1 => 1356020032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2534750c64c86805151-85854257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c64c86846f98_06588625',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c64c86846f98_06588625')) {function content_50c64c86846f98_06588625($_smarty_tpl) {?><!DOCTYPE html>
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
         <div data-theme="a" data-role="header">
              <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
            </div>
<div data-role="content" data-theme="a">
<form action="aj.php" method="post" id="form" data-transition="flow"  >

   <div data-role="fieldcontain">
	         <label for="emaill">Password:</label>
	         <input type="password" name="emaill" id="emaill" value=""  data-mini="true" placeholder="Entrer Password" />
			</div>
            <div data-role="fieldcontain">
	         <label for="email">Confirmer Password:</label>
	         <input type="password" name="email" id="email" value=""  data-mini="true" placeholder="Confirmer password" />
			</div>
          <div data-role="fieldcontain">
            <label for="niv">Niveau:</label>
<input type="text" name="niv" id="niv"  />
</div>
<div data-role="fieldcontain">
            <label for="secteur">Secteur:</label>
<input type="text" name="secteur" id="secteur"  />
</div>
            <div data-role="fieldcontain">
			<label for="tel">Tel</label>
			<input type="tel"  name="tel" id="tel" data-mini="true" placeholder="Entrer Tel"/>
</div>
<p><a href="new_user.php" data-role="button" data-theme="e">PRECEDENT</a></p><br/>
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
                        <a href="contac.php" data-rel="dialog" data-theme="" data-icon="star"  data-transition="fade" >
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.php" data-transition="fade" data-theme="" data-icon="info">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</div>

</html>
<?php }} ?>