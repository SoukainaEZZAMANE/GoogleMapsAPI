<?php /* Smarty version Smarty-3.1.12, created on 2012-12-28 21:56:00
         compiled from "detail_l_emploi.html" */ ?>
<?php /*%%SmartyHeaderCode:1388250de1570f24c35-29717896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70de077fbbb5d371613ee1f5591852292d996afe' => 
    array (
      0 => 'detail_l_emploi.html',
      1 => 1356731753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1388250de1570f24c35-29717896',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50de1571037ef8_15614872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50de1571037ef8_15614872')) {function content_50de1571037ef8_15614872($_smarty_tpl) {?><!DOCTYPE html>
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
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
         <link rel="stylesheet" href="css/finder.css" />
        <link rel="stylesheet" href="css/my.css" />
      
        <script src="js/my.js">
        </script>
    </head>
    
    <body>
             <div data-role="page" style="background:url(img/images.jpg); background-repeat:no-repeat;" >
           <div data-role="header" style="background:url(img/images8.png); background-repeat:no-repeat;">
               <a  data-rel="back" data-icon="back" data-iconpos="left">BACK</a>
            <h1>GUIDE UTILISATEURS POUR LES STAGES</h1> 
           </div>
           <div data-role="content">
        	
		  <object data="pdf/cv.pdf" type="text/html" codetype="application/pdf" ></object> 
        
        
          </div>   
       
   
        
   
<div  data-role="footer" data-position="fixed">
              <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home" id="ac">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="custom" id="ac">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="info" id="ac">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</div>       
<body>

</html>
<?php }} ?>