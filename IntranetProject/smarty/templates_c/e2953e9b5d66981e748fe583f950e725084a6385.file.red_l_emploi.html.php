<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 23:39:35
         compiled from "smarty\templates\red_l_emploi.html" */ ?>
<?php /*%%SmartyHeaderCode:1878950de156fae7e16-74046366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2953e9b5d66981e748fe583f950e725084a6385' => 
    array (
      0 => 'smarty\\templates\\red_l_emploi.html',
      1 => 1358280072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1878950de156fae7e16-74046366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50de156fb456d4_08216319',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50de156fb456d4_08216319')) {function content_50de156fb456d4_08216319($_smarty_tpl) {?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        </title>
 <style>  
  #l
			  { background:url(img/ill.png); background-repeat:no-repeat;}
			  #l:hover
			  {  background:url(img/il.png); }
			  
    
   #ac
	  
	  {
		  
		  background:url(img/i2.jpg); background-repeat:no-repeat;}
		  #ac:hover
		  { background:url(img/i4.png);
		  }</style>
      <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"/>
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
          <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
               <a  data-rel="back" data-icon="back" data-iconpos="left">BACK</a>
            <h1>GUIDE UTILISATEURS POUR UN EMPLOI</h1> 
           </div>
           <div data-role="content">
        	
		<ul data-role="listview">
			 
					<li id="l"><a href="detail_l_emploi.php">
				<h3>Rédiger une lettre de motivation  pour un emploi</h3>
				<p>exemple1</p></a>
			</li>
            	<li id="l"><a href="detail_l_emploi1.php">
				<h3>Rédiger une lettre de motivation  pour un emploi</h3>
				<p>exemple2</p></a>
			</li>
		</ul> 
        
        
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