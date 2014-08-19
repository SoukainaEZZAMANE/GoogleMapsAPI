<?php /* Smarty version Smarty-3.1.12, created on 2013-12-10 21:58:10
         compiled from "smarty\templates\opt_rech_emplois.html" */ ?>
<?php /*%%SmartyHeaderCode:1578950ca57b4be27a9-93733352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da2334b03c0439ed6dbc6426a32e9f98a838029b' => 
    array (
      0 => 'smarty\\templates\\opt_rech_emplois.html',
      1 => 1358036414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1578950ca57b4be27a9-93733352',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ca57b4c28037_20332416',
  'variables' => 
  array (
    'return3' => 0,
    'data' => 0,
    'return1' => 0,
    'return2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ca57b4c28037_20332416')) {function content_50ca57b4c28037_20332416($_smarty_tpl) {?><!DOCTYPE html>
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
        <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"
        />
        	<link rel="stylesheet" href="css/jquery-mobile.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
        <link rel="stylesheet" href="css/my.css" />
         <link rel="stylesheet" href="css/finder.css" />
        <script src="js/my.js">
        </script>
        	
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
    <div data-role="content" >
        <div>
            <p style="text-align: center; font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">
               Chercher  par:
            </p>
        </div>
        <form method="post" action="emplois.php" >
            <div data-role="fieldcontain">
           
                <label for="ville">Ville:</label>
               	<select name="ville" id="ville" data-mini="true" data-native-menu="false" >
                <option value="e" name="e">Ville</option>
                <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ville_e'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['ville_e'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['ville_e'];?>

                </option>
                <?php } ?>
           		</select>
        </div>
            <div data-role="fieldcontain">
            
				<label for="niv">Niveau</label>
				<select name="niv" id="niv" data-mini="true" data-native-menu="false" >
                   <option value="e">Niveau</option>
					  <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['niveau_e'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['niveau_e'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['niveau_e'];?>

                </option>
                <?php } ?>
				</select>
			</div>
        <div data-role="fieldcontain">
            <label for="domaine">
                Domaine:
            </label>
            <select name="domaine" id="domaine" data-mini="true" data-native-menu="false">
            <option value="e">
                    Domaine
                </option>
                  <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_e'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_e'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_e'];?>

                </option>
                <?php } ?>
            </select>
        </div>
        <input data-theme="f" value="Chercher" type="submit">
        </form>
    </div>
<div  data-role="footer" data-position="fixed">

              <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home" id="ac">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="custom" id="ac">
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
</div>       
   
<body>
</body>
</html>
<?php }} ?>