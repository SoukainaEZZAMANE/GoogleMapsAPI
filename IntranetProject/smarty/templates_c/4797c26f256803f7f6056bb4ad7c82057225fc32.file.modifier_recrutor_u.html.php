<?php /* Smarty version Smarty-3.1.12, created on 2014-02-21 00:02:44
         compiled from "smarty\templates\modifier_recrutor_u.html" */ ?>
<?php /*%%SmartyHeaderCode:3001650e354bb034946-66128010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4797c26f256803f7f6056bb4ad7c82057225fc32' => 
    array (
      0 => 'smarty\\templates\\modifier_recrutor_u.html',
      1 => 1358280802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3001650e354bb034946-66128010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e354bb1193a9_41101270',
  'variables' => 
  array (
    'return' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e354bb1193a9_41101270')) {function content_50e354bb1193a9_41101270($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html>
    
    <head>
       

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        </title>                        		    <style>  
		#ac
		{  
		  background:url(img/i2.jpg); background-repeat:no-repeat;}
	    #ac:hover
		  {
		  background:url(img/i4.png);
		  }
		  </style>
            <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"/>
        	<link rel="stylesheet" href="css/jquery-mobile.css" />
			<script src="js/jquery.js"></script>
			<script src="js/jquery-mobile.js"></script>
			<link rel="stylesheet" href="css/my.css" />
			<script src="js/my.js"></script>
			<script src="js/verification/ver_uti_mod.js"></script>
        <script>
    	$(function(){
			$('#date').mobiscroll().date({
			invalid: { daysOfWeek: [0, 6], daysOfMonth: ['5/1', '12/24', '12/25'] },
			theme: 'default',
			lang: 'fr',
			display: 'bubble',
			mode: 'scroller',
			dateOrder: 'mmD ddyy'
			});    
			$('#show').click(function(){ $('#date').mobiscroll('show'); return false; }); $('#date').click(function () { $('#date').val(''); return false; });
			});
		</script>
    </head>
    
    <body>
    <div data-role="page" style="background:url(img/form.png); background-repeat:no-repeat;" >
           <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
	  
	           <a data-rel="back" data-icon="back" rel="external">Back</a>
	  
              <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
            </div>
<div data-role="content">
<form id="form_rec" method="POST"   >

<div data-role="fieldcontain">
			<label for="nom" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center;">Nom:</label>
			<input type="text"  name="nom" id="nom" data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['nom_u'];?>
"/>
</div>


			<div data-role="fieldcontain">
	         <label for="prenom"  style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Prenom:</label>
	        <input type="text" name="prenom" id="prenom"  data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['prenom_u'];?>
" width="1200" />
			</div>
             <div data-role="fieldcontain">
			    <fieldset data-role="controlgroup" data-mini="true">
			    	<legend ><span  style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Civilité:</span></legend>
			         	<input type="radio" id="radio-choice-1" name="civi" value="m" checked="checked" />
			         	<label for="radio-choice-1">M.</label>

			         	<input type="radio"  id="radio-choice-2" name="civi" value="mme"  />
			         	<label for="radio-choice-2">Mme</label>
                        <input type="radio"  id="radio-choice-3" name="civi" value="mlle"  />
			         	<label for="radio-choice-3">Mlle</label>
			    </fieldset>
</div>

   
            <div data-role="fieldcontain">
	         <label for="fonction"  style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Fonction</label>
	         <input type="text" name="fonction" id="fonction"   data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['secteur_u'];?>
" />
			</div>
            
<div data-role="fieldcontain">
	         <label for="email"  style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">E-mail:</label>
	         <input type="email" name="email" id="email" data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['email_u'];?>
" />
			</div>
            
            <div data-role="fieldcontain">
	         <label for="date"  style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Date de naissance:</label>
	         <input type="date" name="date" id="date" data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['date_n'];?>
" />
			</div>
            
            
            <div data-role="fieldcontain">
	         <label for="password"  style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Password:</label>
	         <input type="text" name="password" id="password" data-mini="true" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['pass_u'];?>
" />
			</div>
            <div data-role="fieldcontain">
	         <label for="cpassword"  style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Confirmer Password:</label>
	         <input type="text" name="cpassword" id="cpassword"   data-mini="true" value="" />
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