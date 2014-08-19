<?php /* Smarty version Smarty-3.1.12, created on 2013-01-10 22:38:18
         compiled from "smarty\templates\new_user.html" */ ?>
<?php /*%%SmartyHeaderCode:1753550bf572e7f4d15-71335051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '670348c079c0a4cc8abd769984e6ef3fd993265c' => 
    array (
      0 => 'smarty\\templates\\new_user.html',
      1 => 1357857359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1753550bf572e7f4d15-71335051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bf572e845146_20206665',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bf572e845146_20206665')) {function content_50bf572e845146_20206665($_smarty_tpl) {?><!DOCTYPE html>
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
        
		
        <script src="js/my.js">
        </script>
        <script src="js/verification/ver_us.js">
        </script>
        
        <!--datepicker-->
         
	<link href="css/mobiscroll-2.3.1.custom.min.css" rel="stylesheet" type="text/css" />
	<script src="js/mobiscroll-2.3.1.custom.min.js" type="text/javascript"></script>
    <script>
    	$(function(){
    $('#i').mobiscroll().date({
        invalid: { daysOfWeek: [0, 6], daysOfMonth: ['5/1', '12/24', '12/25'] },
        theme: 'default',
        lang: 'fr',
        display: 'bubble',
        mode: 'scroller',
        dateOrder: 'mmD ddyy'
    });    
$('#show').click(function(){ $('#i').mobiscroll('show'); return false; }); $('#clear').click(function () { $('#i').val(''); return false; });

});
    </script>
    <!--Fin datepicker-->
    </head>
    
    <body>
	 	 <div data-role="page" style="background:url(img/form1.png);background-repeat:no-repeat;">
    <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
	          <a data-rel="back" data-icon="back" rel="external">Back</a>
                <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
            </div>
	<div data-role="content" >
		<form method="post" id="form_us" >
			<div data-role="fieldcontain">
			<label for="nom" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Nom:</label>
			<input type="text"  name="nom" id="nom" data-mini="true" placeholder="Entrer Nom"/>
			</div>
			<div data-role="fieldcontain">
	         <label for="prenom" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Prenom:</label>
	        <input type="text" name="prenom" id="prenom" value=""  data-mini="true" placeholder="Entrer prenom" width="1200" />
			</div>
            <div data-role="fieldcontain">
            <label for="i" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Date de naissance:</label>
			<input type="text" id="i" name="i"  data-mini="true" placeholder="Date de naissance" width="1200"/>

			</div>
			<div data-role="fieldcontain">
			    <fieldset data-role="controlgroup" data-mini="true" >
			    	<legend  ><span style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Civilité:</span></legend>
			         	<input type="radio" id="radio-choice-1" name="civi" value="m" checked="checked" />
			         	<label for="radio-choice-1">M.</label>

			         	<input type="radio"  id="radio-choice-2" name="civi" value="mme"  />
			         	<label for="radio-choice-2">Mme</label>
                        <input type="radio"  id="radio-choice-3" name="civi" value="mlle"  />
			         	<label for="radio-choice-3">Mlle</label>
			    </fieldset>
			</div>
            <div data-role="fieldcontain">
	         <label for="email" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">E-mail:</label>
	         <input type="email" name="email" id="email" value=""  data-mini="true" placeholder="Entrer E-mail"/>
			</div>
			<div data-role="fieldcontain">
	         <label for="password" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Password:</label>
	         <input type="password" name="password" id="password" value=""  data-mini="true" placeholder="Entrer Password" />
			</div>
            <div data-role="fieldcontain">
	         <label for="password" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Confirmer Password:</label>
	         <input type="password" name="cpassword" id="cpassword" value=""  data-mini="true" placeholder="Confirmer password" />
			</div>
			<div data-role="fieldcontain">
            <label for="niveau" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Niveau:</label>
			<input type="text" name="niveau" id="niveau" data-mini="true" placeholder="Votre niveau"  />
			</div>
			<div data-role="fieldcontain">
            <label for="secteur" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Domaine:</label>
			<input type="text" name="secteur" id="secteur" data-mini="true" placeholder="Domaine"  />
			</div>
            <div data-role="content">

	<input type="button" id="sub" name="sub" data-theme="b" data-mini="false"  value="S'inscrire">	
	<input type="reset" id="an" name="an" data-theme="d" data-mini="false" value="Annuler">
	</div>
            </form>
</div>

<div data-theme="a" data-role="footer" data-position="fixed" >
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
                        <a href="contact.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="info" id="ac">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
 </div>
</body>
</html>
<?php }} ?>