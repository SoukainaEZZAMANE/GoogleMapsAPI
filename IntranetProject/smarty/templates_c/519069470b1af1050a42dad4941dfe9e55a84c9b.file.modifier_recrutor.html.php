<?php /* Smarty version Smarty-3.1.12, created on 2012-12-28 01:34:50
         compiled from "smarty\templates\modifier_recrutor.html" */ ?>
<?php /*%%SmartyHeaderCode:3108650d92946da57d0-53949552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '519069470b1af1050a42dad4941dfe9e55a84c9b' => 
    array (
      0 => 'smarty\\templates\\modifier_recrutor.html',
      1 => 1356721066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3108650d92946da57d0-53949552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d92946ed98f5_24451352',
  'variables' => 
  array (
    'return' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d92946ed98f5_24451352')) {function content_50d92946ed98f5_24451352($_smarty_tpl) {?>﻿<!DOCTYPE html>
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
			   #v:hover
		  { color:#036; 
			  }
			  
 </style>
            <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"
        />
        	<link rel="stylesheet" href="css/jquery-mobile.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
        <link rel="stylesheet" href="css/my.css" />
       
        <script src="js/my.js">
        </script>
		<script src="js/verification/ver_rec_mod.js">
        </script>
      
    </head>
    
    <body>
    <div data-role="page" style="background:url(img/form.png);background-repeat:no-repeat;">
    <div style="background:url(img/images8.png); background-repeat:no-repeat;" data-role="header">
	  
	           <a data-rel="back" data-icon="back" rel="external">Back</a>
	  
              <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
            </div>
<div data-role="content">
<form id="form_rec" method="POST"   >

<div data-role="fieldcontain">
			<label for="nom" style=" font-size:25px; color:white; font-family: times new roman,times;" data-mce-style="text-align: center;">Nom:</label>
			<input type="text"  name="nom" id="nom" data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['nom_r'];?>
"/>
</div>


			<div data-role="fieldcontain">
	         <label for="prenom"  style=" font-size:25px; color:white; font-family: times new roman,times;" data-mce-style="text-align: center; ">Prenom:</label>
	        <input type="text" name="prenom" id="prenom"  data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['prenom_r'];?>
" width="1200" />
			</div>
             <div data-role="fieldcontain">
			    <fieldset data-role="controlgroup" data-mini="true">
			    	<legend ><span  style=" font-size:25px; color:white; font-family: times new roman,times;" data-mce-style="text-align: center; ">Civilité:</span></legend>
			         	<input type="radio" id="radio-choice-1" name="civi" value="m" checked="checked" />
			         	<label for="radio-choice-1">M.</label>

			         	<input type="radio"  id="radio-choice-2" name="civi" value="mme"  />
			         	<label for="radio-choice-2">Mme</label>
                        <input type="radio"  id="radio-choice-3" name="civi" value="mlle"  />
			         	<label for="radio-choice-3">Mlle</label>
			    </fieldset>
</div>

     <div data-role="fieldcontain">
			<label for="departement"  style=" font-size:25px; color:white; font-family: times new roman,times;" data-mce-style="text-align: center; ">Département</label>
			<input type="text"  name="departement" id="departement" data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['departement'];?>
"/>
</div>
            <div data-role="fieldcontain">
	         <label for="fonction"  style=" font-size:25px; color:white; font-family: times new roman,times;" data-mce-style="text-align: center; ">Fonction</label>
	         <input type="text" name="fonction" id="fonction"   data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['fonction'];?>
" />
			</div>
            <div data-role="fieldcontain">
			<label for="tel"  style=" font-size:25px; color:white; font-family: times new roman,times;" data-mce-style="text-align: center; ">Tel</label>
			<input type="tel"  name="tel" id="tel" data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['tel_r'];?>
"/>
</div>
<div data-role="fieldcontain">
			<label for="fax"  style=" font-size:25px; color:white; font-family: times new roman,times;" data-mce-style="text-align: center; ">Fax</label>
			<input type="text"  name="fax" id="fax" data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['fax_r'];?>
"/>
</div>

<div data-role="fieldcontain">
	         <label for="email"  style=" font-size:25px; color:white; font-family: times new roman,times;" data-mce-style="text-align: center; ">E-mail:</label>
	         <input type="email" name="email" id="email" data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['email'];?>
" />
			</div>
            <div data-role="fieldcontain">
	         <label for="password"  style=" font-size:25px; color:white; font-family: times new roman,times;" data-mce-style="text-align: center; ">Password:</label>
	         <input type="text" name="password" id="password" data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['pass_r'];?>
" />
			</div>
            <div data-role="fieldcontain">
	         <label for="cpassword"  style=" font-size:25px; color:white; font-family: times new roman,times;" data-mce-style="text-align: center; ">Confirmer Password:</label>
	         <input type="text" name="cpassword" id="cpassword"   data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['pass_r'];?>
" />
			</div>
            
<div data-role="content">

	<input type="button" id="subm" name="subm" data-theme="b" data-mini="false"  value="Modifier">	
	<input type="reset" id="an" name="an" data-theme="d" data-mini="false" value="Annuler">
	</div>
	    

     
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
                       <a href="contact.php" data-rel="dialog"  data-theme="" data-icon="star"  data-transition="fade" id="ac" >
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.html" data-transition="fade" data-theme="" data-icon="info" id="ac">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</div>
</html>
<?php }} ?>