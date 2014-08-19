<?php /* Smarty version Smarty-3.1.12, created on 2013-01-01 17:21:54
         compiled from "smarty\templates\fr_details.html" */ ?>
<?php /*%%SmartyHeaderCode:2332550e31b32a89133-19556812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd455720e8194cb3913f79122f133f78dbda9adfd' => 
    array (
      0 => 'smarty\\templates\\fr_details.html',
      1 => 1357060788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2332550e31b32a89133-19556812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'data2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e31b32bf3600_77131765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e31b32bf3600_77131765')) {function content_50e31b32bf3600_77131765($_smarty_tpl) {?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        </title>
        <link rel="stylesheet" href="themes/theme.min.css" />
           <link rel="stylesheet" href="themes/theme.css" />
         <link rel="stylesheet" href="css/finder.css" />
        <link rel="stylesheet" href="css/my.css" />
   <style>  
   #ac
	  
	  {
		  
		  background:url(img/images8.png); background-repeat:no-repeat;}
		  #ac:hover
		  { background:url(img/imghover.png);
			  }</style>
        <script src="js/my.js">
        </script>
         <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"
        />
        
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
    <!-- Put the following javascript before the closing </head> tag. -->


<!-- Place this tag where you want both of the search box and the search results to render -->

    </head>
    
    <body>
       
            <div data-role="header" style="background:url(img/images8.png); background-repeat:no-repeat;">
          <?php if ($_smarty_tpl->tpl_vars['data']->value['type']=="concours"){?>
			<a href="f_concours.php" data-icon="back" >Back</a>
            <?php }elseif($_smarty_tpl->tpl_vars['data']->value['type']=="stages"){?>
            <a href="f_stages.php" data-icon="back" >Back</a>
            <?php }elseif($_smarty_tpl->tpl_vars['data']->value['type']=="formations"){?>
            <a href="f_formations.php" data-icon="back" >Back</a>
            <?php }else{ ?>
            <a href="f_emplois.php" data-icon="back" >Back</a>
            <?php }?>
            <a href ="deconnexion2.php" rel="external"> Déconnexion </a>
                      
        
                <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>    
            </div>
            <div data-role="content" style="background:url(img/2-blue-green-rainbow.jpg); background-repeat:no-repeat;">
         
                
                
                    		<div data-role="collapsible" data-collapsed="false">
                        	
                        <h3>
                           <?php echo $_smarty_tpl->tpl_vars['data']->value['titre'];?>

                        </h3>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                            <p align="right"><?php echo $_smarty_tpl->tpl_vars['data']->value['date_depot'];?>
</p>
                                <?php echo $_smarty_tpl->tpl_vars['data2']->value['civilite_u'];?>
.<?php echo $_smarty_tpl->tpl_vars['data2']->value['nom_u'];?>
 <?php echo $_smarty_tpl->tpl_vars['data2']->value['prenom_u'];?>
 a dit:<br>
                                <?php echo $_smarty_tpl->tpl_vars['data']->value['sujet'];?>

                            </li>
                        </ul>
                </div>
              
                
				
                <div data-role="collapsible" data-collapsed-icon="arrow-r" data-collapsed="true"  >
                        <h3 >
                            Répondre à ce sujet:
                        </h3>
<form method="post" action="r_ajout.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['idf'];?>
">
                        
                             <input name="titre" id="titre" placeholder="Titre" type="text" >
                                <textarea id="sujet" name="sujet" placeholder="Sujet" ></textarea>
							 </fieldset>
                                <input type="submit" value="Ajouter" data-theme="b">
</form>            
                    </div>
                
                
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
                        <a href="contact.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="plus" id="ac">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.php" data-rel="dialog" data-transition="fade" data-theme="" id="ac" data-icon="info">
                            A propos
                        </a>
                    </li>
					
                  
					
                   
                   <li>
                     
            <a href ="profile_option.php" data-transition="fade" data-icon="grid" id="ac"> Profile </a>
            </li>
            
            
                </ul>
            </div>
        </div>
</div>       
</body>
</html>
<?php }} ?>