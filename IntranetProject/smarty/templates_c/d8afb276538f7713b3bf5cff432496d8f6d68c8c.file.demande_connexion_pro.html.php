<?php /* Smarty version Smarty-3.1.12, created on 2012-12-25 00:22:37
         compiled from "smarty\templates\demande_connexion_pro.html" */ ?>
<?php /*%%SmartyHeaderCode:3167850d8eeeac2d314-25617098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8afb276538f7713b3bf5cff432496d8f6d68c8c' => 
    array (
      0 => 'smarty\\templates\\demande_connexion_pro.html',
      1 => 1356394752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3167850d8eeeac2d314-25617098',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d8eeeac9e126_24865122',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d8eeeac9e126_24865122')) {function content_50d8eeeac9e126_24865122($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"
        />
        	<link rel="stylesheet" href="css/jquery-mobile.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
</head>


<body>
  <div data-role="page" data-theme="a">
  
		<div data-role="header">
		<a href="" data-rel="back" data-role="button">Back</a>
			<h1>Connexion</h1>
		</div>
		<div data-role="content" data-theme="a">
			<form id="form" method="POST"  action="index.php">

				<label class="username">
				<span>Email</span>
				<input id="username" name="username" value="" type="text">
				</label>

				<label class="password">
				<span>Mot de passe</span>
				<input id="password" name="password" value="" type="password">
				</label>
				
				<input type="submit" value="Connexion">
			</form>
			<div>
<p><a href="new_recrutor.php" data-role="button" data-theme="b">S'inscrire</a></p>
</div>
</div>
		<div data-theme="a" data-role="footer" data-position="fixed">
               
           
            <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home">
                            Accueil
                        </a>
                    </li>
                    <li>
                       <a href="contact.php" data-rel="dialog"  data-theme="" data-icon="star"  data-transition="fade" >
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.html" data-transition="fade" data-theme="" data-icon="info">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</div>
</body>
</html><?php }} ?>