<?php /* Smarty version Smarty-3.1.12, created on 2013-12-02 12:58:37
         compiled from "smarty\templates\finder.html" */ ?>
<?php /*%%SmartyHeaderCode:591550b9e81d811219-42343373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13a61ebc769a09c15e4fe18494763ed531e13970' => 
    array (
      0 => 'smarty\\templates\\finder.html',
      1 => 1358281712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '591550b9e81d811219-42343373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b9e81dafa7e7_58811658',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b9e81dafa7e7_58811658')) {function content_50b9e81dafa7e7_58811658($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '../outils/Smarty/libs/plugins\\function.math.php';
?><!DOCTYPE html>
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
		  background:url(img/i2.jpg); background-repeat:no-repeat;}
		  #ac:hover
		  { background:url(img/i4.png);
		  }</style>
        <script src="js/my.js">
        </script>
         <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"
        />
        
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
    <!-- Put the following javascript before the closing </head> tag. -->
<script>
  (function() {
    var cx = '000824788445984525451:fkamkqgo6se';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>

<!-- Place this tag where you want both of the search box and the search results to render -->

    </head>
    
    <body>
        <div data-role="page" >
                    <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
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
           <div data-role="content" style="background:url(img/i1.png);  background-repeat:no-repeat;">
         
                
                <div class="ui-grid-a">
                    <div class="ui-block-a">
					<div style=" text-align:center">
                       <a href="opt_rech_concours.php" rel="external" class="police"> 
                            <img style="width: 90px; height: 90px" src="img/concour.png" alt="image">
                        </div>
                        <div>
                            <p style="text-align: center;">
                                <b>
                                    CONCOURS
                                </b>
                                <br>
                            </p>
							</a>
                        </div>
                        
                               
                        <div style=" text-align:center">
                        <a href="opt_rech_stages.php" data-transition="fade" class="police" rel="external">
                            <img style="width: 90px; height: 90px" src="img/stage.png">
                        </div>
                        <div>
                            <p style="text-align: center;">
                                <b>
                             STAGES
                                </b>
                                <br>
                            </p>
                        </div>
                        </a>
                    </div>
                    <div class="ui-block-b">
					 <div style=" text-align:center">
                      <a href="opt_rech_emplois.php" rel="external" class="police">
                      
                            <img style="width: 90px; height: 90px" src="img/emploi.png">
                        </div>
                        <div>
                            <p style="text-align: center;">
                                <b>
                                    EMPLOIS
                                </b>
                                <br>
                            </p>
							</a>
                        </div>
						<div style=" text-align:center">
                       <a href="opt_rech_formations.php" rel="external" class="police">
                        
                            <img style="width: 90px; height: 90px" src="img/formation.png">
                        </div>
                        <div>
                            <p style="text-align: center;">
                                <b>
                                    FORMATIONS
                                </b>
                                <br>
                            </p>
                        </div>
						</a>
                    </div>
                </div>
                   
                <div data-role="collapsible-set" data-theme="f">
                <?php if ($_SESSION['tr']==0){?>
                    <div data-role="collapsible" data-collapsed="true"  >
                        <h3 >
                            Connexion
                        </h3>
                        <form method="post" action="index.php">
                            <fieldset data-role="controlgroup" data-theme="d">
                                <label for="email">
                                </label>
                                <input name="email" id="email" placeholder="Email" type="text">
                            </fieldset>
                        
                        
                            <fieldset data-role="controlgroup" data-theme="c">
                                <label for="password">
                                </label>
                                <input type="password" name="password" id="password" placeholder="Mot de Passe" type="text">
                                <input type="submit" value="Connexion" data-theme="b">
                            </fieldset>
                        </form>
                        
                    </div>
                    
                    <div data-role="collapsible" data-collapsed="true" >
                        <h3>
                           Inscription
                        </h3>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false" >
                            <li data-theme="c" rel="external">
                                <a href="new_recrutor.php" rel="external" data-transition="slide">
                                   Nouveau Recruteur
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a href="new_user.php" rel="external" data-transition="slide">
                                    Nouveau Utilisateur
                                </a>
                            </li>
                        </ul>
                    </div>
                    <?php }?>
                    <div data-role="collapsible" data-collapsed="true">
                        <h3>
                           Naviguer par Map
                        </h3>
                        <ul data-role="listview" data-divider-theme="f" >
                            <li data-theme="c">
                                <a href="json_c.php" rel="external" data-transition="slide" >
                                   Concour
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a  href="json_e.php" rel="external" data-transition="slide">
                                    Emploi
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a  href="json_s.php" rel="external" data-transition="slide">
                                    Stage
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a  href="json_f.php" rel="external" data-transition="slide">
                                    Formation
                                </a>
                            </li>
                        </ul>
                    </div>
                    <?php if ($_SESSION['tr']==0||$_SESSION['tr']==1){?>
					<div data-role="collapsible" data-collapsed="true">
                        <h3>
                           Déposer une annonce
                        </h3>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a href="concour_ajout.php" rel="external" data-transition="slide">
                                   Concours
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a  href="ajout_emplois.php" rel="external" data-transition="slide">
                                    Emplois
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a  href="ajout_stage.php" rel="external" data-transition="slide">
                                    Stages
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a  href="ajout_formation.php" rel="external" data-transition="slide">
                                    Formations
                                </a>
                            </li>
                        </ul>
                        </div>
                        <?php }?>

                        <?php if ($_SESSION['tr']==2||$_SESSION['tr']==0){?>
                        <div data-role="collapsible" data-collapsed="true">
                        <h3>
                           Guide Utilisateur
                        </h3>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a href="guid_concours.php" data-transition="slide" rel="external">
                                   Concour
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a href="guid_emplois.php" data-transition="slide" rel="external">
                                    Emploi
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a href="guid_stages.php" data-transition="slide" rel="external">
                                    Stage
                                </a>
                            </li>
                        </ul>
                        
                    		
                </div>
                
                <?php }?>
                   <?php if ($_SESSION['tr']==2||$_SESSION['tr']==0){?>
                    		<div data-role="collapsible" data-collapsed="true">
                        <h3>
                           FORUM
                        </h3>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a href="f_concours.php" data-transition="slide" rel="external">
                                   Concours
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a href="f_emplois.php" data-transition="slide" rel="external">
                                    Emplois
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a href="f_stages.php" data-transition="slide" rel="external">
                                    Stages
                                </a>
                            </li>
                        </ul>
                        <ul data-role="listview" data-divider-theme="f" data-inset="false">
                            <li data-theme="c">
                                <a href="f_formations.php" data-transition="slide" rel="external">
                                    Formations
                                </a>
                            </li>
                        </ul>
                    		
                </div>
                <?php }?>
				
            </div>
           <gcse:search></gcse:search>
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
					<?php if ($_SESSION['tr']==2){?>
                   <li>
                     
						<a href ="actualite.php" data-transition="fade" data-icon="grid" id="ac"> Vous avez <?php echo smarty_function_math(array('equation'=>"x+y+v+z",'x'=>$_SESSION['nv'],'y'=>$_SESSION['nve'],'v'=>$_SESSION['nvf'],'z'=>$_SESSION['nvs']),$_smarty_tpl);?>
 actualités</a>
					</li>
					<?php }?>
                   <?php if ($_SESSION['tr']==1||$_SESSION['tr']==2){?>
                   <li>
                     
            <a href ="profile_option.php" data-transition="fade" data-icon="grid" id="ac"> Profile </a>
            </li>
            <?php }?>
            
                </ul>
            </div>
        </div>
</div> 
</body>
</html>
<?php }} ?>