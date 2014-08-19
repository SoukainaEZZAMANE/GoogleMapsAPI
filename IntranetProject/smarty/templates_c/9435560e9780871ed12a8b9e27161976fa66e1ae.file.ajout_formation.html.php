<?php /* Smarty version Smarty-3.1.12, created on 2013-01-02 13:58:16
         compiled from "smarty\templates\ajout_formation.html" */ ?>
<?php /*%%SmartyHeaderCode:2871250d595c37d9165-75278686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9435560e9780871ed12a8b9e27161976fa66e1ae' => 
    array (
      0 => 'smarty\\templates\\ajout_formation.html',
      1 => 1357134902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2871250d595c37d9165-75278686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d595c3819ab8_31467629',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d595c3819ab8_31467629')) {function content_50d595c3819ab8_31467629($_smarty_tpl) {?>﻿<!DOCTYPE html>
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
        <link rel="stylesheet" href="css/my.css" />
    <script src="js/verification/ver_for.js"></script>
    
       
    </head>
    
    <body>
     <div data-role="page" style="background:url(img/form1.png);background-repeat:no-repeat;" >
        <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
	      <a data-rel="back" data-icon="back" >Back</a>
                           
            <a href ="deconnexion.php" rel="external"> Déconnexion </a>
                      
           
	   
              <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
            </div>
<div data-role="content" >

<p align="center" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; " >Saisire les informations concernant votre annonce de formation:</p>

<form id="form" method="post" enctype="multipart/form-data" data-transition="flow" >

	<div data-role="fieldcontain">
		<label for="organisation_f" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Nom de l'entreprise:</label>
		<input type="text" name="organisation_f" id="organisation_f" data-mini="false" placeholder="Nom entreprise"/>
	</div>
	<div data-role="fieldcontain">
		<label for="avatar" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Logo de l'entreprise:</label>	
		<input type="file" id="image_f" name="avatar">
		<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
	</div>
	<div data-role="fieldcontain">
		<label for="desc_f" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; " style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Description de l'entreprise:</label>
		<textarea id="desc_f" name="desc_f" placeholder="Description de l'entreprise"></textarea>
	</div>

	<div data-role="fieldcontain">
		<label for="ville_f" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Ville:</label>
		<input type="text" name="ville_f" id="ville_f" value="" data-mini="false" placeholder="Entrer ville" width="1200" />
	</div>
	<div data-role="fieldcontain">
		<label for="secteur_f" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Secteur:</label>
		<input type="text" name="secteur_f" id="secteur_f" value="" data-mini="false" placeholder="Secteur" width="1200" />
	</div>
	<div data-role="fieldcontain">
		<label for="lieu_f" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Adresse:</label>
		<textarea id="lieu_f" name="lieu_f" placeholder="Adresse"></textarea>
	</div>

	<div data-role="fieldcontain">

		<label for="tel_f" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Téléphone:</label>
		<input type="number" name="tel_f" id="tel_f" data-mini="false" placeholder="Téléphone" width="1200" />
	</div>

	<div data-role="fieldcontain">

		<label for="email_f" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Email:</label>
		<input type="email" name="email_f" id="email_f" data-mini="false" placeholder="Email" width="1200" />
	</div>

	<div data-role="fieldcontain">

		<label for="site_f" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Site web:</label>
		<input type="text" name="site_f" id="site_f" data-mini="false" placeholder="Entrer site web" width="1200" />
	</div>

	<div data-role="fieldcontain">

		<label for="dure_f" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">La durée de la formation:</label>
		<input type="text" name="dure_f" id="dure_f" data-mini="false" placeholder="Durée de formation en mois" width="1200" />
	</div>

	<div data-role="fieldcontain">

		<label for="resp_f" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Responsable de la formation:</label>
		<textarea id="resp_f" name="resp_f" placeholder="Responsable de la formation"></textarea>
	</div>
	<div data-role="fieldcontain">

		<label for="nbr_poste_f" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Nombre de postes:</label>
		<input type="number" name="nbr_poste_f" id="nbr_poste_f" data-mini="false" placeholder="Nombre de postes" width="1200" />
	</div>

	<div data-role="fieldcontain">

		<label for="niveau_f" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Niveau demandé: </label>
		<input type="text" name="niveau_f" id="niveau_f" data-mini="false" placeholder="Entrer niveau" width="1200" />
	</div>
	<input type="button" id="subf" value="Ajouter" data-theme="b">
	<input type="reset" value="Annuler">
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
                       <a href="contact.php" data-rel="dialog"  data-theme="" data-icon="star"  data-transition="fade" id="ac" >
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.html" data-transition="fade" data-theme="" data-icon="info" id="ac">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</div>
</html>
<?php }} ?>