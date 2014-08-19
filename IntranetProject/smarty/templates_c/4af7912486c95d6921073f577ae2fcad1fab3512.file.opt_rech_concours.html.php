<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 12:27:24
         compiled from "smarty\templates\opt_rech_concours.html" */ ?>
<?php /*%%SmartyHeaderCode:601250ca5db529a0b3-91188755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4af7912486c95d6921073f577ae2fcad1fab3512' => 
    array (
      0 => 'smarty\\templates\\opt_rech_concours.html',
      1 => 1357146662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '601250ca5db529a0b3-91188755',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ca5db52e0077_95967323',
  'variables' => 
  array (
    'return1' => 0,
    'data' => 0,
    'return2' => 0,
    'return3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ca5db52e0077_95967323')) {function content_50ca5db52e0077_95967323($_smarty_tpl) {?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        </title>
	<style>  
		#ac 
			{
			background:url(img/i2.jpg); background-repeat:no-repeat;
			}
		#ac:hover
		  { background:url(img/i4.png);
		  }
		  </style>
    	    <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"/>
        	<link rel="stylesheet" href="css/jquery-mobile.css" />
            <link rel="stylesheet" href="css/finder.css" />
			<script src="js/jquery.js"></script>
			<script src="js/jquery-mobile.js"></script>
			<link rel="stylesheet" href="css/my.css" /> 
			<script src="js/my.js"></script>
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
			<form method="post" action="concours.php">
			<div data-role="fieldcontain" >
           
                <label for="ville">
                    Ville:
                </label>
                
                <select name="ville" id="ville" data-mini="true" data-native-menu="false"  style="text-align: center; font-size:25px; color:white; font-family: times new roman,times;" data-theme="c">
                
					<option value="b" name="b">
						Ville
					</option>
					<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ville_c'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['ville_c'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['ville_c'];?>

					</option>
					<?php } ?>
				</select>
			</div>
            
			<div data-role="fieldcontain">
				<label for="domaine">
					Domaine:
				</label>
				<select name="domaine" id="domaine" data-mini="true" data-native-menu="false" >
					<option value="b" name="b">
						Domaine
					</option>
                <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['domaine_c'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['domaine_c'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['domaine_c'];?>

					</option>
                <?php } ?>
	          </select>
			</div>
            
			<div data-role="fieldcontain" data-mini="true">
				<label for="niv">Niveau</label>
				<select name="niv" id="niv" data-mini="true" data-native-menu="false" >
                   <option value="b">Niveau</option>
					 <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
            	   <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['niveau_c'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['niveau_c'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['data']->value['niveau_c'];?>

				    </option>
					<?php } ?>
				</select>
			</div>
        
    
        <input  value="Chercher" type="submit"  data-theme="f">
        
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