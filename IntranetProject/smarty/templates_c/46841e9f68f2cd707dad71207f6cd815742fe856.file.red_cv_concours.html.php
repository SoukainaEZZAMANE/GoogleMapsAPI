<?php /* Smarty version Smarty-3.1.12, created on 2013-01-10 22:50:58
         compiled from "smarty\templates\red_cv_concours.html" */ ?>
<?php /*%%SmartyHeaderCode:902150dafcf446b597-63666413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46841e9f68f2cd707dad71207f6cd815742fe856' => 
    array (
      0 => 'smarty\\templates\\red_cv_concours.html',
      1 => 1357858244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '902150dafcf446b597-63666413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50dafcf4517254_55425105',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50dafcf4517254_55425105')) {function content_50dafcf4517254_55425105($_smarty_tpl) {?><!DOCTYPE html>
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
            <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
               <a  data-rel="back" data-icon="back" data-iconpos="left">BACK</a>
            <h1>GUIDE UTILISATEURS POUR LES CONCOURS</h1> 
           </div>
           <div data-role="content">
        	
		<ul data-role="listview">
			 
				<li id="l"><a href="detail_cv.php">
				<h3>Comment Rédiger votre CV</h3>
				<p>Exemple1</p></a>
			</li>
            	<li id="l"><a href="detail_cv1.php">
				<h3>Comment Rédiger votre CV</h3>
				<p>Exemple2</p></a>
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