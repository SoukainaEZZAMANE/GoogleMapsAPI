<?php /* Smarty version Smarty-3.1.12, created on 2014-02-21 00:02:27
         compiled from "smarty\templates\actualite.html" */ ?>
<?php /*%%SmartyHeaderCode:1777950dede745aed40-38035555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84fe390f2ab2f1d3138563a135fa8aaa600b29b0' => 
    array (
      0 => 'smarty\\templates\\actualite.html',
      1 => 1358280448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1777950dede745aed40-38035555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50dede745fb2e5_52049962',
  'variables' => 
  array (
    'tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50dede745fb2e5_52049962')) {function content_50dede745fb2e5_52049962($_smarty_tpl) {?>﻿<!DOCTYPE html>
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
         <link rel="stylesheet" href="css/finder.css" />
        <link rel="stylesheet" href="css/my.css" />
       
        <script src="js/my.js">
        </script>
    </head>
    
    <body>
        <div data-role="page" style="background:url(img/Black%20Background%20Wood%20-%202560x1600%20by%20Freeman.jpg); background-repeat:no-repeat;" >
            <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
               <a data-rel="back" data-icon="back" >Back</a>
            <h1>Actualité</h1>  
			<?php if ($_smarty_tpl->tpl_vars['tr']->value==1){?>
				<a href ="deconnexion.php" rel="external"> Déconnexion </a>        
            <?php }?>
			 <?php if ($_smarty_tpl->tpl_vars['tr']->value==2){?>
				<a href ="deconnexion2.php" rel="external"> Déconnexion </a>         
            <?php }?>			
            </div>

            <div data-role="content" >
				<?php if ($_SESSION['nv']==0){?>
					<a href="#"  class="link"> <input type="button" value="Vous avez <?php echo $_SESSION['nv'];?>
 nouveaux conocurs" data-theme="f" disabled="disabled"></a><br> <?php }else{ ?>
					<a href="actualite_c.php"  class="link"> <input type="button" value="Vous avez <?php echo $_SESSION['nv'];?>
 nouveaux conocurs" data-theme="f"></a><br>     
				<?php }?>
           
		   		<?php if ($_SESSION['nve']==0){?>
					<a href="#" class="link"> <input type="button" value="Vous avez <?php echo $_SESSION['nve'];?>
 nouveaux  emplois" data-theme="f" disabled="disabled"></a><br> <?php }else{ ?>
					<a href="actualite_e.php"  class="link"> <input type="button" value="Vous avez <?php echo $_SESSION['nve'];?>
 nouveaux  emplois" data-theme="f"></a><br>   
				<?php }?>

				<?php if ($_SESSION['nvf']==0){?>
					<a href="#" class="link"> <input type="button" value="Vous avez <?php echo $_SESSION['nvf'];?>
 nouveaux  formations" data-theme="f"  disabled="disabled"></a><br>   
				<?php }else{ ?>
					<a href="actualite_f.php"  class="link"> <input type="button" value="Vous avez <?php echo $_SESSION['nvf'];?>
 nouveaux  formations" data-theme="f"></a><br>  
				<?php }?>

				<?php if ($_SESSION['nvs']==0){?>
					<a href="#" class="link"> <input type="button" value="Vous avez <?php echo $_SESSION['nvs'];?>
 nouveaux  stages" data-theme="f" disabled="disabled"></a><br>   
				<?php }else{ ?>
					<a href="actualite_s.php" class="link"> <input type="button" value="Vous avez <?php echo $_SESSION['nvs'];?>
 nouveaux stages" data-theme="f"></a><br>   
				<?php }?>
			</div>
<div  data-role="footer" data-position="fixed">
              <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home"  id="ac">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="custom"  id="ac">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="info"  id="ac">
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