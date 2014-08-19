<?php /* Smarty version Smarty-3.1.12, created on 2013-01-01 17:43:30
         compiled from "smarty\templates\connexion_s.html" */ ?>
<?php /*%%SmartyHeaderCode:1619750d58de761d0f6-61445487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b00a794ea11e99f2836ac29445e6cdb03673b62' => 
    array (
      0 => 'smarty\\templates\\connexion_s.html',
      1 => 1356610334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1619750d58de761d0f6-61445487',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d58de76613d6_82504604',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d58de76613d6_82504604')) {function content_50d58de76613d6_82504604($_smarty_tpl) {?><!DOCTYPE html>
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
            <link rel="stylesheet" href="css/finder.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
        <link rel="stylesheet" href="css/my.css" />
       
        
</head>

<body>
<div data-role="page" style="background:url(img/Black%20Background%20Wood%20-%202560x1600%20by%20Freeman.jpg);background-repeat:no-repeat;" >
           <div data-role="header" style="background:url(img/images8.png); background-repeat:no-repeat;"><a href="" data-rel="back" data-role="button">Back</a><h1>Connexion</h1></div>

<div data-role="content" >
<form id="form1" method="POST"  action="ajout_stage.php">

				<label class="us">
				<span style=" font-size:25px; color:white; font-family: times new roman,times;" data-mce-style="text-align: center; ">Email</span>
				<input type="text" id="username" name="username" >
				</label>

				<label class="pa">
				<span style=" font-size:25px; color:white; font-family: times new roman,times;" data-mce-style="text-align: center; ">Mot de passe</span>
				<input type="password"id="password" name="password"  >
				</label>
				
				<input type="submit" value="Connexion" data-theme="f">
			</form>
			<div>
<p><a href="new_recrutor.php" data-role="button" data-theme="b">S'inscrire</a></p>
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