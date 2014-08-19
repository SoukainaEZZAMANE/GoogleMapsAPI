<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 23:47:10
         compiled from "smarty\templates\opt_rech_formations.html" */ ?>
<?php /*%%SmartyHeaderCode:2340950ca55e79ba7e3-51479540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c439df5cd9fff588e1429857f309c7361b038d60' => 
    array (
      0 => 'smarty\\templates\\opt_rech_formations.html',
      1 => 1358036374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2340950ca55e79ba7e3-51479540',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ca55e7a12f49_24779815',
  'variables' => 
  array (
    'return1' => 0,
    'data' => 0,
    'return2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ca55e7a12f49_24779815')) {function content_50ca55e7a12f49_24779815($_smarty_tpl) {?>r<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        </title>
 <style>  
   #ac
	  
	  {
		  
		  background:url(img/i2.jpg); background-repeat:no-repeat;}
		  #ac:hover
		  { background:url(img/i4.png);
		  }</style>
          <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"/>
        	<link rel="stylesheet" href="css/jquery-mobile.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
        <link rel="stylesheet" href="css/my.css" />
        <link rel="stylesheet" href="css/finder.css" />
        
        
        <script src="js/my.js">
        </script>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    
    </head>
    
    <body>
         <div data-role="page" style="background:url(img/form1.png);background-repeat:no-repeat;">
    <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
        <a data-rel="back" data-icon="back" rel="external">Back</a>
        <?php if ($_SESSION['tr']==1){?>
            <a href ="deconnexion.php" rel="external"> Déconnexion </a>
                      
            <?php }?>
			 <?php if ($_SESSION['tr']==2){?>
            <a href ="deconnexion2.php" rel="external"> Déconnexion </a>
                      
            <?php }?>
       <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
    </div>
    <div data-role="content">
        <div>
            <p style="text-align: center; font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">
               Chercher par:
            </p>
        </div>
        <form action="formations.php" method="post" >
          <div data-role="fieldcontain">
           
                <label for="ville">
                    Ville:
                </label>
                <select name="ville" id="ville" data-mini="true" data-native-menu="false" >
            <option value="e">
                    Ville
                </option>
                  <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ville_f'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['ville_f'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['ville_f'];?>

                </option>
                <?php } ?>
            </select>
          </div>
          <div data-role="fieldcontain">
				<label for="dure" class="select">Durée:</label>
				<select name="dure" id="dure" data-native-menu="false" data-bind="selectedOptions: currentPropertyType" >
					<option value="e">Durée de stage</option>
                    <option value="0">Moins 3 mois</option>
					<option value="3">Plus de trois mois</option>
				</select>
			</div>
            
        
        <div data-role="fieldcontain">
            <label for="domaine">
                Domaine:
            </label>
            <select name="domaine" id="domaine" data-mini="true" data-native-menu="false" >
             	<option value="e">
                    Domaine
                </option>
                    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_f'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_f'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_f'];?>

                </option>
                <?php } ?>
                </select>
        </div>
        <input data-theme="f" value="Chercher" type="submit" >
        </form>
    </div>
<div data-theme="a" data-role="footer" data-position="fixed">
             
            <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home" id="ac">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="star" id="ac">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="info" id="ac">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
       
       
<body>
</body>
</html>
<?php }} ?>