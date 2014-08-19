<?php /* Smarty version Smarty-3.1.12, created on 2012-12-30 16:47:33
         compiled from "smarty\templates\f_concours.html" */ ?>
<?php /*%%SmartyHeaderCode:2562850e0469c6b1ea5-88260032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1e6111095c9357e38fbef4b1916c7dd72409590' => 
    array (
      0 => 'smarty\\templates\\f_concours.html',
      1 => 1356884889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2562850e0469c6b1ea5-88260032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e0469c736b97_55489983',
  'variables' => 
  array (
    'return' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e0469c736b97_55489983')) {function content_50e0469c736b97_55489983($_smarty_tpl) {?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        </title>
                        		    <style>
      #ac
	  
	  {
		  
		  background:url(img/images8.png); background-repeat:no-repeat;}
		  #ac:hover
		  { background:url(img/imghover.png);
			  }
 </style>
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
           <div data-role="header" style="background:url(img/images8.png); background-repeat:no-repeat;">
               <a data-rel="back" data-icon="back" >Back</a>
            <h1>LISTE DES SUJETS DU CONCOURS</h1>  
 	
            </div>
            <div data-role="content">

<div >	
				<ul data-role="listview" data-filter="true" data-filter-placeholder="Rechercher..." data-inset="true">
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?> 
				<li><a href="f_concours_details.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['idf'];?>
" rel="external">
				<p align="right"><?php echo $_smarty_tpl->tpl_vars['data']->value['date_depot'];?>
</p>
                <h3><?php echo $_smarty_tpl->tpl_vars['data']->value['titre'];?>
</h3>
			</a></li>	
            <?php } ?>
					
</ul>



</div>
</div>
            
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

</html>
<?php }} ?>