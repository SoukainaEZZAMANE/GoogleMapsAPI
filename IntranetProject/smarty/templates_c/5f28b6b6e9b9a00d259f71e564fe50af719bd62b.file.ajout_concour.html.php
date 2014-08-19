<?php /* Smarty version Smarty-3.1.12, created on 2013-01-02 12:31:53
         compiled from "smarty\templates\ajout_concour.html" */ ?>
<?php /*%%SmartyHeaderCode:3241750d447c9ec82d2-87919620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f28b6b6e9b9a00d259f71e564fe50af719bd62b' => 
    array (
      0 => 'smarty\\templates\\ajout_concour.html',
      1 => 1357129909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3241750d447c9ec82d2-87919620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d447ca030950_11131645',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d447ca030950_11131645')) {function content_50d447ca030950_11131645($_smarty_tpl) {?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
		   <script src="js/verification/ver_con.js">
            </script>
        
        <script src="js/my.js">
        </script>
        <!--datepicker-->
         
	<link href="css/mobiscroll-2.3.1.custom.min.css" rel="stylesheet" type="text/css" />
	<script src="js/mobiscroll-2.3.1.custom.min.js" type="text/javascript"></script>
    <script>
    	$(function(){
    $('#date_fin_c').mobiscroll().date({
        invalid: { daysOfWeek: [0, 6], daysOfMonth: ['5/1', '12/24', '12/25'] },
        theme: 'default',
        lang: 'fr',
        display: 'bubble',
        mode: 'scroller',
        dateOrder: 'mmD ddyy'
    });    
$('#show').click(function(){ $('#date_fin_c').mobiscroll('show'); return false; }); $('#date_fin_c').click(function () { $('#date_fin_c').val(''); return false; });

});

$(function(){
    $('#date_c').mobiscroll().date({
        invalid: { daysOfWeek: [0, 6], daysOfMonth: ['5/1', '12/24', '12/25'] },
        theme: 'default',
        lang: 'fr',
        display: 'bubble',
        mode: 'scroller',
        dateOrder: 'mmD ddyy'
    });    
$('#show').click(function(){ $('#date_c').mobiscroll('show'); return false; }); $('#date_c').click(function () { $('#date_c').val(''); return false; });

});
    </script>
    </head>
    
    <body>
            <div data-role="page" style="background:url(img/form1.png); background-repeat:no-repeat;" >
           <div data-role="header" style="background:url(img/i2.png); background-repeat:no-repeat;">
       <a data-rel="back" data-icon="back" >Back</a>
                        
            
                      
            
	   <a href ="deconnexion.php" rel="external"> Déconnexion </a>
              <div style=" text-align:center;">
                    <img style="width: 200px; height: 90px; text-align:center;" src="img/iconfinder-logo.png">
                </div>
            </div>
<div data-role="content">

<p align="center" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; " >Saisire les informations concernant votre Concours:</p>

<form  id="form_con" method="POST"   enctype="multipart/form-data" data-transition="flow">

<div data-role="fieldcontain">
			<label for="organisme_c" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Nom de l'organisme:</label>
			<input type="text"  name="organisme_c" id="organisme_c" data-mini="false" placeholder=""/>
</div>

<div data-role="fieldcontain">
			<label for="avatar" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Logo de l'organisme:</label>
			<input type="file" name="avatar" id="avatar">
					<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
</div>


			<div data-role="fieldcontain">
	         <label for="ville_c" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center;">Ville:</label>
	        <input type="text" name="ville_c" id="ville_c" value=""  data-mini="false" placeholder="Entrer prenom" width="1200" />
			</div>
             <div data-role="fieldcontain">
			   
			    	<label><span style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Dérnière date pour postuler:</span></label>
                    
			         	<input type="text" name="date_fin_c" id="date_fin_c" value=""  data-mini="false" placeholder="" width="1200" />
</div>

	
             <div data-role="fieldcontain">
			   
			    	<label for="date_c" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">La date du concours:</label>
			         	<input type="text" name="date_c" id="date_c" data-mini="false" placeholder="" width="1200" />
</div>

             <div data-role="fieldcontain">
			   
			    	<label for="pieces_c" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center;">Les pièces demandées:</label>
			         	<textarea id="pieces_c" name="pieces_c" placeholder=""></textarea>
</div>

             <div data-role="fieldcontain">
			   
			    	<label for="niveau_c" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Niveau demandé:</label>
			         	<input type="text" name="niveau_c" id="niveau_c" data-mini="false" placeholder="" width="1200" />
</div>


 <div data-role="fieldcontain">
			   
			    	<label for="desc_c" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Description du concour: </label>
			         	<textarea id="desc_c" name="desc_c" placeholder=""></textarea>
</div>



<div data-role="fieldcontain">
			   
			    	<label for="domaine_c" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Domaine:</label>
			         	<input type="text" name="domaine_c" id="domaine_c" data-mini="false" placeholder="" width="1200" />
</div>

<div data-role="fieldcontain">
			   
			    	<label for="condition_c" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; "  >Conditions de postulation:</label>
			         	<textarea id="condition_c" name="condition_c" placeholder=""></textarea>
</div>

<div data-role="fieldcontain">
			   
			    	<label for="lieu_c" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Adresse:</label>
			         	<textarea id="lieu_c" name="lieu_c" placeholder=""></textarea>
</div>


<div data-role="fieldcontain">
			   
			    	<label for="tel_c" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Téléphone:</label>
			         	<input type="number" name="tel_c" id="tel_c" data-mini="false" placeholder="" width="1200" />
</div>

<div data-role="fieldcontain">
			   
			    	<label for="email_c" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Email:</label>
			         	<input type="text" name="email_c" id="email_c" data-mini="false" placeholder="" width="1200" />
</div>

<div data-role="fieldcontain">
			   
			    	<label for="site_c" style=" font-size:25px; color:black; font-family: times new roman,times;" data-mce-style="text-align: center; ">Site web:</label>
			         	<input type="text" name="site_c" id="site_c" data-mini="false" placeholder="" width="1200" />
</div>

<div data-role="content">

     <input type="button" id="subc" name="subc" data-theme="b" data-mini="false"  value="Ajouter">	
	<input type="reset" id="an" name="an" data-theme="d" data-mini="false" value="Annuler">
 </div>
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
                        <a href="about.html" data-transition="fade" data-rel="dialog" data-theme="" data-icon="info" id="ac">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</div>
</html>
<?php }} ?>