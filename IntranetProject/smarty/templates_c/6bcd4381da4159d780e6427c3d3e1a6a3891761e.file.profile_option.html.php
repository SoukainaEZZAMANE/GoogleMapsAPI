<?php /* Smarty version Smarty-3.1.12, created on 2012-12-28 01:34:42
         compiled from "smarty\templates\profile_option.html" */ ?>
<?php /*%%SmartyHeaderCode:645550d7745d0335d0-47266152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bcd4381da4159d780e6427c3d3e1a6a3891761e' => 
    array (
      0 => 'smarty\\templates\\profile_option.html',
      1 => 1356722858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '645550d7745d0335d0-47266152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d7745d076c08_94294952',
  'variables' => 
  array (
    'return' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d7745d076c08_94294952')) {function content_50d7745d076c08_94294952($_smarty_tpl) {?><!DOCTYPE html>
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
		  
		  background:url(img/images8.png); background-repeat:no-repeat;}
		  #ac:hover
		  { background:url(img/imghover.png);
			  }
 </style>
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
         <link rel="stylesheet" href="css/finder.css" />
        <link rel="stylesheet" href="css/my.css" />
      
        <script src="js/my.js">
        </script>
    </head>
    
    <body>
       <div data-role="page" style="background:url(img/imag.png); background-repeat:no-repeat;" >
           <div data-role="header" style="background:url(img/images8.png); background-repeat:no-repeat;">
                    <a data-rel="back" data-icon="back" rel="external">Back</a>
               <a href="deconnexion.php" data-rel="external" rel="external" >DECONNEXION</a>       
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
                                Nom: <?php echo $_smarty_tpl->tpl_vars['return']->value['nom_r'];?>

                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false" >
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                Prenom: <?php echo $_smarty_tpl->tpl_vars['return']->value['prenom_r'];?>

                            </li>
                        </ul>
                         <ul data-role="listview" data-divider-theme="f" data-inset="false" >
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                Civilité: <?php echo $_smarty_tpl->tpl_vars['return']->value['civilite_r'];?>

                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                Département: <?php echo $_smarty_tpl->tpl_vars['return']->value['departement'];?>

                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                Fonction: <?php echo $_smarty_tpl->tpl_vars['return']->value['fonction'];?>

                            </li>
                        </ul>
                         <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                Téléphone: <?php echo $_smarty_tpl->tpl_vars['return']->value['tel_r'];?>

                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                Fax: <?php echo $_smarty_tpl->tpl_vars['return']->value['fax_r'];?>

                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                Email: <?php echo $_smarty_tpl->tpl_vars['return']->value['email'];?>

                            </li>
                        </ul>
                       
                                 <a href="modifier_recruteur.php" rel="external" ><input  data-icon="check" data-iconpos="left" value="Modifier vos informations"
                type="button" data-theme="b"></a>
                
                           
                        
                </div>
               
                <div data-role="collapsible" data-collapsed="true" data-theme="f" >
                        <h3>
                           Déposer une annonce
                        </h3>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                <a href="concour_ajout.php" rel="external" data-transition="slide" >
                                   Concours
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                <a  href="ajout_emplois.php" rel="external" data-transition="slide">
                                    Emplois
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                <a  href="ajout_stage.php" rel="external" data-transition="slide">
                                    Stages
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c" style="background:url(img/imag.png); background-repeat:no-repeat;">
                                <a  href="ajout_formation.php" rel="external" data-transition="slide">
                                    Formations
                                </a>
                            </li>
                        </ul>
                        </div>
                          <a href="modifier_recruteur.php" rel="external"  ><div data-role="button" style="text-align:left; text-decoration: none;" data-theme="f" data-icon="check">Voir vos annonces</div></a>
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