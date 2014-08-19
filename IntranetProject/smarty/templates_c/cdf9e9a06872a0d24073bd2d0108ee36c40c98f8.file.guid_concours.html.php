<?php /* Smarty version Smarty-3.1.12, created on 2013-01-10 22:45:47
         compiled from "smarty\templates\guid_concours.html" */ ?>
<?php /*%%SmartyHeaderCode:177750d7777856e0b8-55298490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdf9e9a06872a0d24073bd2d0108ee36c40c98f8' => 
    array (
      0 => 'smarty\\templates\\guid_concours.html',
      1 => 1357857824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177750d7777856e0b8-55298490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d777785b82d8_54297757',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d777785b82d8_54297757')) {function content_50d777785b82d8_54297757($_smarty_tpl) {?><!DOCTYPE html>
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
         <link rel="stylesheet" href="css/finder.css" />
        <link rel="stylesheet" href="css/my.css" />
       
        <script src="js/my.js">
        </script>
    </head>
    
    <body>
       <div data-role="page" style="background:url(img/form1.png); background-repeat:no-repeat;" >
            <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
               <a data-rel="back" data-icon="back" >Back</a>
            <h1>GUIDE UTILISATEURS POUR LES CONCOURS</h1>  
 	
            </div>
            <div data-role="content" >
            <fieldset><span style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Ce guide va vous aider à bien comprendre comment rédiger les différents documents nécessaire pour la condidature à un concours.</span></fieldset><br> 
           <a href="red_cv_concours.php" class="link"> <input type="button" value="Comment rédiger mon CV ?" data-theme="f"></a><br>     
             <a href="red_let_concours.php" class="link"><input type="button" value="Comment rédiger lettre de motivation?" data-theme="f"></a><br>
             <a href="red_r_concours.php" class="link"> <input type="button" value="Comment réussire son concour?" data-theme="f"></a><br>               
            </div>
<div  data-role="footer" data-position="fixed">
              <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home"  id="ac">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="custom"  id="ac">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="info"  id="ac">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</div>       

</html>
<?php }} ?>