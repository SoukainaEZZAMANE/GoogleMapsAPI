<?php /* Smarty version Smarty-3.1.12, created on 2013-01-15 18:40:50
         compiled from "smarty\templates\f_liste.html" */ ?>
<?php /*%%SmartyHeaderCode:857350e0de588977d6-78042861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6288be150c8a7feca7a1be5523b3ef07bb7399da' => 
    array (
      0 => 'smarty\\templates\\f_liste.html',
      1 => 1357921759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '857350e0de588977d6-78042861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e0de58a50b55_04391404',
  'variables' => 
  array (
    'return' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e0de58a50b55_04391404')) {function content_50e0de58a50b55_04391404($_smarty_tpl) {?><!DOCTYPE html>
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
       <div data-role="page" >
           <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
               <a href="index.php" data-icon="back" rel="external" >Back</a>
            <a href ="deconnexion2.php" rel="external"> Déconnexion </a>
            <h1>LISTE DES SUJETS</h1>  
 	
            </div>
            <div data-role="content">

<div >	
				<ul data-role="listview" data-filter="true" data-filter-placeholder="Rechercher..." data-inset="true">
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?> 
				<li id="l"><a href="f_details.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['idf'];?>
" rel="external">
				<p align="right"><?php echo $_smarty_tpl->tpl_vars['data']->value['date_depot'];?>
</p>
                <h3><?php echo $_smarty_tpl->tpl_vars['data']->value['titre'];?>
</h3>
			</a></li>	
            <?php } ?>
					
</ul>
<div data-role="collapsible" data-collapsed="true" data-theme="b">
                        <h3 >
                            Ajouter un sujet:
                        </h3>
<form method="post" id="foem" action="f_ajout.php">


                <select name="section" id="section" data-mini="true" data-native-menu="false"  style="text-align: center; 									  				font-size:25px; color:white; font-family: times new roman,times;" data-theme="c">
                            
                        <option value="concours" name="concours">
                            Concours
                        </option>
                        
                         <option value="formations" name="formations">
                            Formations
                        </option>
                         <option value="stages" name="stages">
                            Stages
                        </option>
                         <option value="emplois" name="emplois">
                            Emplois
                        </option>
                </select>
                      
                        
                             <input name="titre" id="titre" placeholder="Titre" type="text" >
                                <textarea id="sujet" name="sujet" placeholder="Sujet" ></textarea>
							 </fieldset>
                                <input type="submit" value="Ajouter" data-theme="b">
</form>
                        
                    </div>
</div>
<div data-theme="a" data-role="footer" data-position="fixed">
            
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