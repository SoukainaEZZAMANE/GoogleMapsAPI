<?php /* Smarty version Smarty-3.1.12, created on 2014-02-21 00:02:36
         compiled from "smarty\templates\u_profile_option.html" */ ?>
<?php /*%%SmartyHeaderCode:1043550e354b05d9d39-88060682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2df0f13507ca449951e0c4d5ed1eb09eae34b4b2' => 
    array (
      0 => 'smarty\\templates\\u_profile_option.html',
      1 => 1358280618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1043550e354b05d9d39-88060682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e354b06b9321_35237513',
  'variables' => 
  array (
    'return' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e354b06b9321_35237513')) {function content_50e354b06b9321_35237513($_smarty_tpl) {?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
           <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"
        />
        	<link rel="stylesheet" href="css/jquery-mobile.css" />
                 <style>  
   #ac
	  
	  {
		  
		  background:url(img/i2.jpg); background-repeat:no-repeat;}
		  #ac:hover
		  { background:url(img/i4.png);
		  }</style>
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
         <link rel="stylesheet" href="css/finder.css" />
        <link rel="stylesheet" href="css/my.css" />
      
        <script src="js/my.js">
        </script>
    </head>
    
    <body>
       <div data-role="page">
           <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
                    <a data-rel="back" data-icon="back" rel="external">Back</a>
               <a href="deconnexion2.php" data-rel="external" rel="external" >DECONNEXION</a>       
             <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
		     </div>
             <div data-role="content">
            <div data-role="collapsible" data-collapsed="true" data-theme="f">
                        <h3>
                           Vos informations personelles
                        </h3>
                        
                        <ul data-role="listview" data-divider-theme="f" data-inset="false" >
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                Nom: <?php echo $_smarty_tpl->tpl_vars['return']->value['nom_u'];?>

                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false" >
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                Prenom: <?php echo $_smarty_tpl->tpl_vars['return']->value['prenom_u'];?>

                            </li>
                        </ul>
                         <ul data-role="listview" data-divider-theme="f" data-inset="false" >
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                Email: <?php echo $_smarty_tpl->tpl_vars['return']->value['email_u'];?>

                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                Sécteur: <?php echo $_smarty_tpl->tpl_vars['return']->value['secteur_u'];?>

                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                Date de naissance: <?php echo $_smarty_tpl->tpl_vars['return']->value['date_n'];?>

                            </li>
                        </ul>
                         
                       
                                 <a href="modifier_recruteur_u.php" rel="external" class="link" ><input  data-icon="check" data-iconpos="left" value="Modifier vos informations"
                type="button" data-theme="b"></a>
                
                           
                        
                
               
                
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
                    <li>
                     
            <a href ="profile_option.php" data-transition="fade" data-icon="grid" id="ac"> Profile </a>
            </li>
                </ul>
            </div>
        </div>
</div>       
<body>
</body>
</html>
<?php }} ?>