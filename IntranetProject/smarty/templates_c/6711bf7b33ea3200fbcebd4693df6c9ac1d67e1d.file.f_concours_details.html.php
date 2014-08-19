<?php /* Smarty version Smarty-3.1.12, created on 2012-12-31 00:15:33
         compiled from "smarty\templates\f_concours_details.html" */ ?>
<?php /*%%SmartyHeaderCode:3225050e0702c6c2d40-95934888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6711bf7b33ea3200fbcebd4693df6c9ac1d67e1d' => 
    array (
      0 => 'smarty\\templates\\f_concours_details.html',
      1 => 1356912928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3225050e0702c6c2d40-95934888',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e0702c7e2706_64144985',
  'variables' => 
  array (
    'data' => 0,
    'data2' => 0,
    'data3' => 0,
    'rep' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e0702c7e2706_64144985')) {function content_50e0702c7e2706_64144985($_smarty_tpl) {?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        </title>
        <link rel="stylesheet" href="themes/theme.min.css" />
           <link rel="stylesheet" href="themes/theme.css" />
         <link rel="stylesheet" href="css/finder.css" />
        <link rel="stylesheet" href="css/my.css" />
   <style>  
   #ac
	  
	  {
		  
		  background:url(img/images8.png); background-repeat:no-repeat;}
		  #ac:hover
		  { background:url(img/imghover.png);
			  }</style>
        <script src="js/my.js">
        </script>
         <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"
        />
        
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
    <!-- Put the following javascript before the closing </head> tag. -->


<!-- Place this tag where you want both of the search box and the search results to render -->

    </head>
    
    <body>
       
            <div data-role="header" style="background:url(img/images8.png); background-repeat:no-repeat;">
          
			
            <a href ="deconnexion2.php" rel="external"> Déconnexion </a>
                      
        
                <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>    
            </div>
            <div data-role="content" style="background:url(img/2-blue-green-rainbow.jpg); background-repeat:no-repeat;">
         
                
                
                    		<div data-role="collapsible" data-collapsed="false">
                        	
                        <h3>
                           <?php echo $_smarty_tpl->tpl_vars['data']->value['titre'];?>

                        </h3>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                            <p align="right"><?php echo $_smarty_tpl->tpl_vars['data']->value['date_depot'];?>
</p>
                                <?php echo $_smarty_tpl->tpl_vars['data2']->value['civilite_u'];?>
.<?php echo $_smarty_tpl->tpl_vars['data2']->value['nom_u'];?>
 <?php echo $_smarty_tpl->tpl_vars['data2']->value['prenom_u'];?>
 a dit:<br>
                                <?php echo $_smarty_tpl->tpl_vars['data']->value['sujet'];?>

                            </li>
                        </ul>
                </div>
                <?php  $_smarty_tpl->tpl_vars['rep'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rep']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rep']->key => $_smarty_tpl->tpl_vars['rep']->value){
$_smarty_tpl->tpl_vars['rep']->_loop = true;
?>
              	<div data-role="collapsible" data-collapsed="false">
                        	
                        <h3>
                           <?php echo $_smarty_tpl->tpl_vars['rep']->value['titre'];?>

                        </h3>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                            <p align="right"><?php echo $_smarty_tpl->tpl_vars['rep']->value['date_depot'];?>
</p>
                               <?php echo $_smarty_tpl->tpl_vars['rep']->value['civilite_u'];?>
. <?php echo $_smarty_tpl->tpl_vars['rep']->value['nom_u'];?>
 <?php echo $_smarty_tpl->tpl_vars['rep']->value['prenom_u'];?>
 a répondu:<br>
                                <?php echo $_smarty_tpl->tpl_vars['rep']->value['sujet'];?>

                            </li>
                        </ul>
                </div>
                <?php } ?>
				
            </div>
           
<div  data-role="footer" data-position="fixed">
              <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="#" data-transition="fade" data-theme="" data-icon="home" id="ac">
                            Accueil
                        </a>
                    </li>
                    
                    <li>
                        <a href="contact.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="plus" id="ac">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.php" data-rel="dialog" data-transition="fade" data-theme="" id="ac" data-icon="info">
                            A propos
                        </a>
                    </li>
					
                   <li>
                     
						<a href ="actualite.php" data-transition="fade" data-icon="grid" id="ac"> Vous avez <?php echo $_SESSION['nv'];?>
 actualités</a>
					</li>
					
                   
                   <li>
                     
            <a href ="profile_option.php" data-transition="fade" data-icon="grid" id="ac"> Profile </a>
            </li>
            
            
                </ul>
            </div>
        </div>
</div>       
</body>
</html>
<?php }} ?>