<?php /* Smarty version Smarty-3.1.12, created on 2012-12-29 15:46:56
         compiled from "smarty\templates\actualite_s.html" */ ?>
<?php /*%%SmartyHeaderCode:107550df10700dbd65-61945666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccd2c39a39b48a4a100acdde72e7873f49ad948f' => 
    array (
      0 => 'smarty\\templates\\actualite_s.html',
      1 => 1356796010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107550df10700dbd65-61945666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50df1070181953_19399113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50df1070181953_19399113')) {function content_50df1070181953_19399113($_smarty_tpl) {?><!DOCTYPE html>
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
			  }</style>
           <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"
        />
        	<link rel="stylesheet" href="css/jquery-mobile.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
    </head>
        <script src="js/my.js">
        </script>
        <link rel="stylesheet" href="css/my.css" />
       
       
        <script src="js/my.js">
        </script>
    </head>
    <body>
          <div data-role="page" style="background:url(img/images.jpg); background-repeat:no-repeat;" >
       <div data-role="header" style="background:url(img/images8.png); background-repeat:no-repeat;">
           				        <a data-rel="back" data-icon="back" rel="external">Back</a>
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
		
			<li><a href="stages-details.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_s'];?>
" rel="external">
				<img src="../admin/image/<?php echo $_smarty_tpl->tpl_vars['data']->value['image_s'];?>
">
				<h3><?php echo $_smarty_tpl->tpl_vars['data']->value['entreprise_s'];?>
</h3>
				<p><?php echo $_smarty_tpl->tpl_vars['data']->value['mission_s'];?>
</p>
			</a></li>	
		
        <?php } ?>
        </ul>
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
                        <a href="contact" data-rel="dialog" data-theme="" data-icon="star"  data-transition="fade" id="ac" >
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