<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 23:33:11
         compiled from "smarty\templates\guid_emplois.html" */ ?>
<?php /*%%SmartyHeaderCode:482250d7778890f539-17698931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a8b15723219a7ebafad44e6620ef6412ca9a57' => 
    array (
      0 => 'smarty\\templates\\guid_emplois.html',
      1 => 1357861574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '482250d7778890f539-17698931',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d77788958933_64759384',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d77788958933_64759384')) {function content_50d77788958933_64759384($_smarty_tpl) {?><!DOCTYPE html>
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
       <div data-role="page" style="background:url(img/form1.png); background-repeat:no-repeat;">
           <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
            <a data-rel="back" data-icon="back" >Back</a>
            <h1>GUIDE UTILISATEURS POUR LES EMPLOIS</h1> 
 			
            </div>
            <div data-role="content" >
            <fieldset><span style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Ce guide va vous aider à bien comprendre comment rédiger les différents documents nécessaire pour la recherche et la condidature pour un emploi.</span></fieldset><br> 
            <a href="red_cv_emploi.php" class="link"><input type="button" value="Comment rédiger mon CV ?" data-theme="f" ></a><br>     
            <a href="red_l_emploi.php" class="link"><input type="button" value="Comment rédiger lettre de motivation?" data-theme="f"></a><br>
            <a href="red_ch_emploi.php" class="link"> <input type="button" value="Comment bien chercher sur un emploi?" data-theme="f"></a><br> 
             <a href="red_en_emploi.php" class="link"ff><input type="button" value="Comment réussire mon entretien d'embauche?" data-theme="f"></a><br>               
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

</body>
</html>
<?php }} ?>