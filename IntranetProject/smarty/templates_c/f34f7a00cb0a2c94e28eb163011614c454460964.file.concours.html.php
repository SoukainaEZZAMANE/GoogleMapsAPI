<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 12:27:34
         compiled from "smarty\templates\concours.html" */ ?>
<?php /*%%SmartyHeaderCode:1065150bf59cdd1e044-28622739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f34f7a00cb0a2c94e28eb163011614c454460964' => 
    array (
      0 => 'smarty\\templates\\concours.html',
      1 => 1357146888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1065150bf59cdd1e044-28622739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bf59cdd629c2_73996843',
  'variables' => 
  array (
    'return' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bf59cdd629c2_73996843')) {function content_50bf59cdd629c2_73996843($_smarty_tpl) {?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        </title>
         <style> 
			#l
			  { background:url(img/ill.png); background-repeat:no-repeat;}
			#l:hover
			  {  background:url(img/il.png); }
			#ac
			 {
				background:url(img/i2.jpg); background-repeat:no-repeat;}
		  #ac:hover
			 { background:url(img/i4.png);
		  }
		  </style>

            <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"/>
        	<link rel="stylesheet" href="css/jquery-mobile.css" />
			<script src="js/jquery.js"></script>
			<script src="js/jquery-mobile.js"></script>
			<link rel="stylesheet" href="css/my.css" />
			<script src="js/my.js"></script>
    </head>
    
    <body>
       <div data-role="page">
        <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
            <a data-rel="back" data-icon="back" >Back</a>
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
		<div >	
		<ul data-role="listview" data-filter="true" data-filter-placeholder="Rechercher....." data-inset="true">
			<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
				<li id="l"><a href="concours_details.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_c'];?>
" rel="external">
					<img src="../admin/image/<?php echo $_smarty_tpl->tpl_vars['data']->value['image_c'];?>
">
					<h3><?php echo $_smarty_tpl->tpl_vars['data']->value['organisme_c'];?>
</h3>
					<p><?php echo $_smarty_tpl->tpl_vars['data']->value['desc_c'];?>
</p>
						 </a>
				</li>	
			<?php } ?>
        </ul>

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
                    <a href="about.php" data-transition="fade" data-theme="" data-icon="info" id="ac">
                        A propos
                    </a>
                </li>
            </ul>
        </div>
       
    </div>
        </div>
      </div>
        

</body>
</html>
<?php }} ?>