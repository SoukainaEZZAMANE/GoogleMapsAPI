<?php /* Smarty version Smarty-3.1.12, created on 2013-01-02 09:02:52
         compiled from "smarty\templates\actualite_f.html" */ ?>
<?php /*%%SmartyHeaderCode:992450df0f75a2da31-89868629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8a8f59779cb7c854b8d0711099324952997e9a1' => 
    array (
      0 => 'smarty\\templates\\actualite_f.html',
      1 => 1357066436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '992450df0f75a2da31-89868629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50df0f75b14239_73009506',
  'variables' => 
  array (
    'return' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50df0f75b14239_73009506')) {function content_50df0f75b14239_73009506($_smarty_tpl) {?><!DOCTYPE html>
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
             <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"/>
        	<link rel="stylesheet" href="css/jquery-mobile.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
        <link rel="stylesheet" href="css/my.css" />
       
        <script src="js/my.js">
        </script>
    </head>
    
    <body>
  <div data-role="page" style="background:url(img/images.jpg); background-repeat:no-repeat;" >
       <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
             <a data-rel="back" data-icon="back" >Back</a>
                <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
            </div>
<div data-role="content">

<div >	
				<ul data-role="listview" data-filter="true" data-filter-placeholder="Rechercher..." data-inset="true">
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?> 
				<li><a href="formations_details.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_f'];?>
" rel="external">
				<img src="../admin/image/<?php echo $_smarty_tpl->tpl_vars['data']->value['image_f'];?>
">
				<h3><?php echo $_smarty_tpl->tpl_vars['data']->value['organisation_f'];?>
</h3>
				<p><?php echo $_smarty_tpl->tpl_vars['data']->value['desc_f'];?>
</p>
			</a></li>	
            <?php } ?>
					
</ul>



</div>
</div>
 <div data-theme="a" data-role="footer" data-position="fixed">
              
           
            <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home" id="ac">
                            Accueil
                        </a>
                    </li>
                    <li>
                      <a href="contact.php" data-rel="popup"  data-theme="" data-icon="star"  data-transition="fade" id="ac" >
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