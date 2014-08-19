<?php /* Smarty version Smarty-3.1.12, created on 2013-12-02 12:58:49
         compiled from "smarty\templates\contact.html" */ ?>
<?php /*%%SmartyHeaderCode:3174350c78cee25cfe7-04105189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50a2a0be75d8878d95ce309d281f92e8aa30648a' => 
    array (
      0 => 'smarty\\templates\\contact.html',
      1 => 1357141334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3174350c78cee25cfe7-04105189',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c78cee294612_20581696',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c78cee294612_20581696')) {function content_50c78cee294612_20581696($_smarty_tpl) {?>c<!DOCTYPE html>
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
        
        <script src="js/my.js">
        </script>
</head>

<body>
<div data-role="page">
 <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;"><h1>Message</h1></div>

<div data-role="content">
<form method="POST" acion="ajout_msg.php">
	<input type="text" name="objet" id="objet" placeholder="Objet">
	<textarea type="text" name="msg" id="msg" placeholder="Taper votre message..."></textarea>
<input type="submit" value="Envoyer" data-theme="f"></form>


</div>
<div data-theme="a" data-role="footer" data-position="fixed">
                
            </div>
            <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home" id="ac">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" data-rel="popup" data-transition="fade" data-theme="" data-icon="star" id="ac">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="#" data-transition="fade" data-theme="" data-icon="info" id="ac">
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