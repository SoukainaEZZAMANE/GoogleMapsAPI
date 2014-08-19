<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 23:30:55
         compiled from "smarty\templates\demande_connexion_echec_e.html" */ ?>
<?php /*%%SmartyHeaderCode:1643850dd0ef81a9824-98305209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f81a31a08483dbadced525f7115bcddd7aa3dc61' => 
    array (
      0 => 'smarty\\templates\\demande_connexion_echec_e.html',
      1 => 1357116520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1643850dd0ef81a9824-98305209',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50dd0ef8220e60_11789106',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50dd0ef8220e60_11789106')) {function content_50dd0ef8220e60_11789106($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <style>  
   #ac
	  
	  {
		  
		  background:url(img/i2.jpg); background-repeat:no-repeat;}
		  #ac:hover
		  { background:url(img/i4.png);
		  }</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"
        />
        	<link rel="stylesheet" href="css/jquery-mobile.css" />
            <link rel="stylesheet" href="css/finder.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
</head>


<body>
    <div data-role="page" style="background:url(img/form1.png); background-repeat:no-repeat;" >
            <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
		<a href="" data-rel="back" data-role="button" rel="external">Back</a>
			<h1>Connexion</h1>
		</div>
		<div data-role="content" >
        <p align="center" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Email ou Mot de passe erroné. Veuillez essayer à nouveau</p> 
			<form id="form" method="POST"  action="guid_emplois.php">

				<label class="username">
				<span>Email</span>
				<input id="username" name="username" value="" type="text">
				</label>

				<label class="password">
				<span>Mot de passe</span>
				<input id="password" name="password" value="" type="password">
				</label>
				
				<input type="submit" value="Connexion" data-theme="f">
			</form>
			<div>
<p><a href="new_recrutor.php" data-role="button" data-theme="b">S'inscrire</a></p>
</div>
</div>
		<div data-theme="a" data-role="footer" data-position="fixed">
               
           
            <div data-role="navbar" data-iconpos="top" >
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
</body>
</html><?php }} ?>