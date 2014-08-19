<?php /* Smarty version Smarty-3.1.12, created on 2013-01-02 17:54:21
         compiled from "smarty\templates\ajout_stage.html" */ ?>
<?php /*%%SmartyHeaderCode:2907050d58cc06909e8-94116081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dc7cbf8187c980a48a9c31eaa99eecac2680774' => 
    array (
      0 => 'smarty\\templates\\ajout_stage.html',
      1 => 1357137893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2907050d58cc06909e8-94116081',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d58cc06d0ab7_52234355',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d58cc06d0ab7_52234355')) {function content_50d58cc06d0ab7_52234355($_smarty_tpl) {?>﻿<!DOCTYPE html>
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
       <script src="js/verification/ver_sta.js"></script>
    
       
    </head>
    
    <body>
      
       <div data-role="page" style="background:url(img/form1.png);background-repeat:no-repeat;" >
           <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
	      <a data-rel="back" data-icon="back" >Back</a>
                            
           
                      
            
	   <a href ="deconnexion.php"> Déconnexion </a>
              <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
            </div>
<p align="center" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; " >Saisire les informations concernant votre annonce de Stage:</p>


<form id="form1" method="post" enctype="multipart/form-data" data-transition="flow" >

<div data-role="fieldcontain">
<label for="entreprise_s" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Nom de l'entreprise:</label>
<input type="text" name="entreprise_s" id="entreprise_s" data-mini="false" placeholder="Nom entreprise"/>
</div>

<div data-role="fieldcontain">
			<label for="avatar" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Logo de l'entreprise:</label>
			<input type="file" name="avatar">
					<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
</div>

<div data-role="fieldcontain">
<label for="desc_entr_s" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Description de l'entreprise:</label>
<textarea id="desc_entr_s" name="desc_entr_s" placeholder="Description de l'entreprise"></textarea>
</div>
<div data-role="fieldcontain">
<label for="ville_s" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Ville:</label>
<input type="text" name="ville_s" id="ville_s" value="" data-mini="false" placeholder="Entrer prenom" width="1200" />
</div>
<div data-role="fieldcontain">

<label for="secteur_s" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Secteur:</label>
<input type="text" name="secteur_s" id="secteur_s" value="" data-mini="false" placeholder="Secteur" width="1200" />
</div>
<div data-role="fieldcontain">

<label for="lieu_s" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Adresse:</label>
<textarea id="lieu_s" name="lieu_s" placeholder="Adresse"></textarea>
</div>

<div data-role="fieldcontain">

<label for="tel_s" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Téléphone:</label>
<input type="number" name="tel_s" id="tel_s" data-mini="false" placeholder="Téléphone" width="1200" />
</div>

<div data-role="fieldcontain">

<label for="email_s" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Email:</label>
<input type="email" name="email_s" id="email_s" data-mini="false" placeholder="Email" width="1200" />
</div>

<div data-role="fieldcontain">

<label for="site_s" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Site web:</label>
<input type="text" name="site_s" id="site_s" data-mini="false" placeholder="Entrer site web" width="1200" />
</div>

<div data-role="fieldcontain">

<label for="dure_s" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">La durée de stage:</label>
<input type="text" name="dure_s" id="dure_s" data-mini="false" placeholder="Durée de stage" width="1200" />
</div>

<div data-role="fieldcontain">

<label for="remunere" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Rémuniré:</label>
<input type="text" id="remunere" name="remunere" placeholder="Rémuniration">
</div>
<div data-role="fieldcontain">

<label for="nbr_poste" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Nombre de postes:</label>
<input type="number" name="nbr_poste" id="nbr_poste" data-mini="false" placeholder="Nombre de postes" width="1200" />
</div>

<div data-role="fieldcontain">

<label for="niveau_s" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Niveau demandé:</label>
<input type="text" name="niveau_s" id="niveau_s" data-mini="false" placeholder="Entrer niveau" width="1200" />
</div>

<div data-role="fieldcontain">

<label for="demarrage_s" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Date début:</label>
<input type="text" name="demarrage_s" id="demarrage_s" data-mini="false" placeholder="Entrer date début" width="1200" />
</div>

<div data-role="fieldcontain">

<label for="mission_s" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Mission de stage:</label>
<textarea id="mission_s" name="mission_s" placeholder="Mission de stage"></textarea>
</div>

<input type="button" value="ajouter" id="subs" name="subs" data-theme="b">
<input type="reset" value="Annuler" >

</form>
</div>

                    
<div data-theme="a" data-role="footer" data-position="fixed">
               
           
            <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home">
                            Accueil
                        </a>
                    </li>
                    <li>
                       <a href="contact.php" data-rel="dialog"  data-theme="" data-icon="star"  data-transition="fade" >
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.html" data-transition="fade" data-theme="" data-icon="info">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</div>
</html>
<?php }} ?>