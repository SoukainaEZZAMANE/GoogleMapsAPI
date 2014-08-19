<?php /* Smarty version Smarty-3.1.12, created on 2013-01-02 15:22:35
         compiled from "smarty\templates\connexion_f.html" */ ?>
<?php /*%%SmartyHeaderCode:775550d595b8850c11-46976712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0119478aff56ebcf43f96a3f78ada8a76756cd3' => 
    array (
      0 => 'smarty\\templates\\connexion_f.html',
      1 => 1357112576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '775550d595b8850c11-46976712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d595b8893100_80566903',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d595b8893100_80566903')) {function content_50d595b8893100_80566903($_smarty_tpl) {?><!DOCTYPE html>
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
            <link rel="stylesheet" href="css/finder.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
        <link rel="stylesheet" href="css/my.css" />
       
       
</head>

<body>
    <div data-role="page" style="background:url(img/form1.png); background-repeat:no-repeat;" >
            <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;"><a href="" data-rel="back" data-role="button">Back</a><h1>Connexion</h1></div>

<div data-role="content" >
<form id="form1" method="POST"  action="ajout_formation.php">

				<label class="us">
				<span>Email</span>
				<input type="text" id="username" name="username" >
				</label>

				<label class="pa">
				<span>Mot de passe</span>
				<input type="password"id="password" name="password"  >
				</label>
				
				<input type="submit" value="Connexion" data-theme="f">
			</form>
			<div>
<p><a href="new_recrutor.php" data-role="button" >S'inscrir</a></p>
</div></div>
<div data-theme="a" data-role="footer" data-position="fixed">
                
         
            <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home" id="ac">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="star" id="ac">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.php" data-transition="fade" data-theme="" data-icon="info" id="ac">
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