<?php /* Smarty version Smarty-3.1.12, created on 2013-12-10 21:58:00
         compiled from "smarty\templates\opt_rech_stages.html" */ ?>
<?php /*%%SmartyHeaderCode:1159850ca532c066db0-88863408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7925cfb29cb670bfe9fdcc63befaf6c72b9a121' => 
    array (
      0 => 'smarty\\templates\\opt_rech_stages.html',
      1 => 1357860746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1159850ca532c066db0-88863408',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ca532c0bfee6_98374200',
  'variables' => 
  array (
    'return2' => 0,
    'data' => 0,
    'return1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ca532c0bfee6_98374200')) {function content_50ca532c0bfee6_98374200($_smarty_tpl) {?><!DOCTYPE html>
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
       
        </script>
        
        <!--datepicker-->
         
	<link href="css/mobiscroll-2.3.1.custom.min.css" rel="stylesheet" type="text/css" />
	<script src="js/mobiscroll-2.3.1.custom.min.js" type="text/javascript"></script>
    <script>
    	$(function(){
    $('#debut').mobiscroll().date({
        invalid: { daysOfWeek: [0, 6], daysOfMonth: ['5/1', '12/24', '12/25'] },
        theme: 'default',
        lang: 'fr',
        display: 'bubble',
        mode: 'scroller',
        dateOrder: 'mmD ddyy'
    });    
$('#show').click(function(){ $('#debut').mobiscroll('show'); return false; }); $('#debut').click(function () { $('#debut').val(''); return false; });

});
    </script>
    </head>
    
    <body>
    <div data-role="page" style="background:url(img/form1.png);background-repeat:no-repeat;">
     <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
	        <a data-rel="back" data-icon="back" rel="external">Back</a>
        <?php if ($_SESSION['tr']==1){?>
            <a href ="deconnexion.php" rel="external"> Déconnexion </a>
                      
            <?php }?>
			 <?php if ($_SESSION['tr']==2){?>
            <a href ="deconnexion2.php" rel="external"> Déconnexion </a>
                      
            <?php }?>
      <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
    </div>
    <div data-role="content">
        <div>
            <p style="text-align: center; font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">
               Chercher par:
            </p>
        </div>

        <form method="POST" action="stages.php">
			<div data-role="fieldcontain">
                <label for="ville">
                    Ville:
                </label>
                <select name="ville" id="ville" data-mini="true" data-native-menu="false" >
					<option value="a" id="a" name="a"> Ville </option>
					<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ville_s'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['ville_s'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['ville_s'];?>

					</option>
					<?php } ?>
				</select>
			 </div>
        
			 <div data-role="fieldcontain">
				<label for="domaine">
					Domaine:
				</label>
				<select name="domaine" id="domaine" data-mini="true" data-native-menu="false" >
					<option value="a" name="a">Domaine</option>
	                <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
		            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_s'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_s'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_s'];?>

			        </option>
				    <?php } ?>
				</select>
			</div>
            
			<div data-role="fieldcontain">
				<label for="dure" class="select">Durée</label>
				<select name="dure" id="dure" data-native-menu="false" data-bind="selectedOptions: currentPropertyType" >
					<option value="a">Durée de stage</option>
                    <option value="0">Moins de 3 mois</option>
					<option value="1">Plus de 3 mois</option>
				</select>
			</div>
            
			<div data-role="fieldcontain">
				<label for="debut" class="select">Début de Stage</label>
				<input type="text" name="debut" id="debut" value=""  />	
			</div>
       <input  value="Chercher" type="submit" data-theme="f" rel="external">
      </form>
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
                        <a href="contact.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="star" id="ac">
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
       

</body>
</html>
<?php }} ?>