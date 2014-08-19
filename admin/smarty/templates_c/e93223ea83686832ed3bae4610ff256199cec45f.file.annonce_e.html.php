<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 15:16:28
         compiled from "smarty\templates\annonce_e.html" */ ?>
<?php /*%%SmartyHeaderCode:2633350d6dde5af29c5-26374681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e93223ea83686832ed3bae4610ff256199cec45f' => 
    array (
      0 => 'smarty\\templates\\annonce_e.html',
      1 => 1356294450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2633350d6dde5af29c5-26374681',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d6dde5c71b41_37885979',
  'variables' => 
  array (
    'return' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d6dde5c71b41_37885979')) {function content_50d6dde5c71b41_37885979($_smarty_tpl) {?>﻿<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Annonce d'emlpois</title>
  <link rel="shortcut icon" href="favicon.gif">
  <!---CSS Files-->
 <link rel="stylesheet" href="css/pop.css">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/tables.css">
  <link rel="stylesheet" href="css/iphone-check.css">
  <link rel="stylesheet" href="css/egg/jquery-ui.css">
  <!---jQuery Files-->
   <script src="js/jquery-1.7.1.min.js"></script>
  <script src="js/jquery-ui-1.8.17.min.js"></script>
  <script src="js/styler.js"></script>
  <script src="js/jquery.tipTip.js"></script>
  <script src="js/colorpicker.js"></script>
  <script src="js/sticky.full.js"></script>
  <script src="js/global.js"></script>
  <script src="js/flot/jquery.flot.min.js"></script>
  <script src="js/flot/jquery.flot.resize.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/forms/fileinput.js"></script>
  <script src="js/forms/iphone-check.js"></script>
 <script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
  <script type="text/javascript" src="js/verification/fun_mod_emp.js"></script>
	<script type="text/javascript" src="js/verification/fun_aj_emp.js"></script>
  <!---Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lte IE 8]>
  <script language="javascript" type="text/javascript" src="js/flot/excanvas.min.js"></script>
  <![endif]-->
</head>
<body>

  <!--- HEADER -->

	<div class="header">
   <a href="dashboard.html"><img src="img/logo.png" alt="Logo" /></a> 
   <div class="styler">
     <ul class="styler-show">
       <li><div id="colorSelector-top-bar"></div></li>
       <li><div id="colorSelector-box-head"></div></li>
     </ul>
   </div>
  </div>

  <div class="top-bar">
      <ul id="nav">
        <li id="user-panel">
          <img src="img/nav/usr-avatar.jpg" id="usr-avatar" alt="" />
          <div id="usr-info">
            <p id="usr-name">Bienvenue Admin.</p>
           
            <p><a href="profil.php">Profil</a><a href="logout.php">Déconnexion</a></p>
          </div>
        </li>
        <li>
        <ul id="top-nav">
         <li class="nav-item">
           <a href="admin.php"><img src="img/nav/dash.png" alt="" /><p>Accueil</p></a>
         </li>
         <li class="nav-item">
           <a href="concours.php"><img src="img/nav/anlt.png" alt="" /><p>Concours</p></a>
         </li>
         <li class="nav-item">
           <a href="formations.php"><img src="img/nav/tb.png" alt="" /><p>Formations</p></a>
         </li>
         <li class="nav-item">
           <a href="emplois.php"><img src="img/nav/cal.png" alt="" /><p>Emplois</p></a>
         </li>
         <li class="nav-item">
           <a href="stages.php"><img src="img/nav/widgets.png" alt="" /><p>Stages</p></a>
         </li>
         <li class="nav-item">
           <a href="utilisateurs.php"><img src="img/nav/grid.png" alt="" /><p>Utilisateurs</p></a>
           
         </li>
         <li class="nav-item">
           <a href="recruteurs.php"><img src="img/nav/flm.png" alt="" /><p>Recruteurs </p></a>
         </li>
         <li class="nav-item">
           <a href="messages.php"><img src="img/nav/gal.png" alt="" /><p>Messages</p></a>
         </li>
		 <li class="nav-item">
           <a href="annonce.php"><img src="img/nav/advertising-active.png" alt="" /><p>Annonce</p></a>
           <ul class="sub-nav">
            <li><a href="annonce.php">Concours </a></li>
            <li><a href="annonce_e.php">Emplois </a></li>
			 <li><a href="annonce_f.php">Formations </a></li>
			 <li><a href="annonce_s.php">Stage </a></li>
          </ul>
         </li>
       </ul>
      </li>
     </ul>
  </div>
    <script>
    $(function() {
        $( ".datepicker" ).datepicker();
        $( ".format" ).change(function() {
            $( ".datepicker" ).datepicker( "option", "dateFormat", "d,M, y" );
        });
    });

    </script>

  <!--- CONTENT AREA -->

  <div class="content container_12">  
      <div class="box grid_12">
        <div class="box-head"><h2 style ="display:inline-block;">Liste des annonces des emplois</h2>  </div>
        <div class="box-content no-pad">
         <table class="display" id="example">
        <thead>
          <tr>
			<th hidden='true'></th>
			<th hidden='true'></th>
			<th hidden='true'></th>
			<th hidden='true'></th>
			<th hidden='true'></th>
			<th hidden='true'></th>
			<th hidden='true'></th>
			<th>Entreprise</th>
            <th>Description</th>
            <th>Domaine</th>
            <th>type de contrat</th>
            <th>Rénumération</th>
            <th>Niveau</th>
             <th>Adresse</th>
            <th> Action </th>
			<th>Détails </th>
          </tr>
          
        </thead>
        <tbody>
       <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
         <tr align="center" id = "<?php echo $_smarty_tpl->tpl_vars['data']->value['id_e'];?>
">    
			<td class = "id_e"  hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['id_e'];?>
</td> 
			<td class = "tel"  hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['tel_e'];?>
</td>
				<td class = "site"  hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['site_e'];?>
</td>
			<td class = "email"  hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['email_e'];?>
</td>
			<td class = "nbr"  hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['nbr_poste_e'];?>
</td>
			<td class = "ville"  hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['Ville_e'];?>
</td>
			<td class = "date"  hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['date_depot_e'];?>
</td>
            <td class ="entreprise"><?php echo $_smarty_tpl->tpl_vars['data']->value['entreprise_e'];?>
</td>              
            <td class = 'desc'><?php echo $_smarty_tpl->tpl_vars['data']->value['desc_entr_e'];?>
</td> 
            <td class = 'secteur'><?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_e'];?>
</td>			
            <td class = 'type'><?php echo $_smarty_tpl->tpl_vars['data']->value['type_contrat_e'];?>
</td>
			<td class = 'ren'><?php echo $_smarty_tpl->tpl_vars['data']->value['renumeration_e'];?>
</td> 
			 <td class = 'niveau'><?php echo $_smarty_tpl->tpl_vars['data']->value['niveau_e'];?>
</td>
			<td class = 'lieu'><?php echo $_smarty_tpl->tpl_vars['data']->value['lieu_e'];?>
</td> 
		    <td>
				<a href="#?action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_e'];?>
" class="open" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_e'];?>
" > <IMG SRC=img/nav/edit.png border=0 alt=Modifier align=center></a>
				<a href="?&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_e'];?>
"  ><IMG SRC=img/nav/delete.png border=0 alt=Supprimer  align=center></a>
			</td> 
			 <td>
				<a href="#" class="open_plus" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_e'];?>
"> <IMG SRC=img/nav/details.png border=0 alt=Modifier align=center></a>
				<a href="?&action=valider&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_e'];?>
"  ><IMG SRC=img/nav/valider.png border=0 alt=valider  align=center></a>
			</td>
        </tr>                            
         <?php } ?>            
 
        </tbody>
      </table>
        </div>
		
      </div>

      

<div class="footer">
  <p>Développé par The finder 2012-2013</p>
</div>

<script> /* SCRIPTS */

//=======================================================================
//=================== script d'affichage de detail ======================
//=======================================================================
$(function(){
	$("#dialog_plus").dialog({
		autoOpen: false, 
		height: 350,
		width : 450,
		resizable : false
	});
	$(".open_plus").click(function(){
		var id = $(this).attr("id");
		var dated = $("#"+id+" .dated").text();
		var ville=$("#"+id+" .ville").text();
	    var email =$("#"+id+" .email").text();
		var tel =$("#"+id+" .tel").text();
	    var nbr =$("#"+id+" .nbr").text();
		var site =$("#"+id+" .site").text();
		
     
		$("#datedm").text(dated);
		$("#nbrm").text(nbr);
		$("#villem").text(ville);
		$("#emailm").text(email);
		$("#telm").text(tel);
		$("#sitem").text(site);
	
	
		$("#dialog_plus").dialog("open");
	});
})
//=======================================================================

//===========================================================================
//===========================script de modification==========================
//===========================================================================
$(function(){
	$("#dialog").dialog({
		autoOpen: false, 
		height: 600,
		width : 800,
		resizable : false
	});
	$(".open").click(function(){
		var id = $(this).attr("id");
		var entreprise_e = $("#"+id+" .entreprise").text();
		var desc_entr_e =$("#"+id+" .desc").text();
		var nbr_poste_e =$("#"+id+" .nbr").text();
		var lieu_e =$("#"+id+" .lieu").text();
		var date_depot_e =$("#"+id+" .date").text();
		var secteur_e =$("#"+id+" .secteur").text();
		var niveau_e =$("#"+id+" .niveau").text();
		var renumeration_e =$("#"+id+" .ren").text();
		var type_contrat_e =$("#"+id+" .type").text();
		var ville_e =$("#"+id+" .ville").text();
		var email_e =$("#"+id+" .email").text();
		var tel_e =$("#"+id+" .tel").text();
		var site_e =$("#"+id+" .site").text();

		
		$("#id_e").val(id);
		$("#entreprise_e").val(entreprise_e);
		$("#desc_entr_e").val(desc_entr_e);
		$("#nbr_poste_e").val(nbr_poste_e);
		$("#lieu_e").val(lieu_e);
		$("#date_depot_e").val(date_depot_e);
		$("#secteur_e").val(secteur_e);
		$("#niveau_e").val(niveau_e);
		$("#ren_e").val(renumeration_e);
		$("#type_e").val(type_contrat_e);
		$("#ville_e").val(ville_e);
		$("#email_e").val(email_e);
		$("#tel_e").val(tel_e);
		$("#site_e").val(site_e);
		
		$("#dialog").dialog("open");
	});
})
//=======================================================================


 //=====================================================================
  $(function () {
      var sin = [], cos = [];
      for (var i = 0; i < 14; i += 0.5) {
          sin.push([i, Math.sin(i)]);
          cos.push([i, Math.cos(i)]);
      }
      var plot = $.plot($("#flot-demo"),
             [ { data: sin, label: "Green", color: "#71a100"}, { data: cos, label: "Blue", color: "#308eef" } ], {
                 series: {
                     lines: { show: true },
                     points: { show: true }
                 },
                 grid: { hoverable: true },
                 yaxis: { min: -1.2, max: 1.2 }
               });
      var previousPoint = null;
      $("#flot-demo").bind("plothover", function (event, pos, item) {
          if ($("#enablePosition:checked").length > 0) {
              var str = "(" + pos.x.toFixed(2) + ", " + pos.y.toFixed(2) + ")";
              $("#hoverdata").text(str);
          }
      });
  });/* for the flot chart demo */

  $('#example').dataTable( {
      "bJQueryUI": true
  }); /* For the data tables */

 
  /* for the iPhone style checkbox, colorpicker and datepicker */




</script>
	<!--====================================================================================================-->
	<!-- /////////////////////////////////////////dialog d'affichage ///////////////////////////////////////-->
    <!--====================================================================================================-->
	<div id="dialog_plus" title="Annonce détails">
	<form id='form_af' method="POST">
          <div class="form-row">
            <p class="form-label"><b>Date dépot:</b></p>
            <div class="form-item"><label id="datedm"></label><span class="error"></span></div>
           </div> </br>
		   <div class="form-row">
            <p class="form-label"><b>Nombre de poste :</b></p>
            <div class="form-item"><label id="nbrm"></label><span class="error"></span></div>
           </div></br>
		   <div class="form-row">
            <p class="form-label"><b>Ville :</b></p>
            <div class="form-item"><label id="villem"></label><span class="error"></span></div>
           </div></br>
          <div class="form-row">
            <p class="form-label"><b>Email: </b></p>
            <div class="form-item"><label id="emailm"></label><span class="error"></span></div>
           </div></br>
           <div class="form-row">
            <p class="form-label"><b>Téléphone :</b></p>
            <div class="form-item"><label id="telm"></label><span class="error"></span></div>
           </div>
		     <div class="form-row">
            <p class="form-label"><b>Site:</b></p>
            <div class="form-item"><label id="sitem"></label><span class="error"></span></div>
           </div>
     		
          </form>
</div>
<!--*************************************************************************************************** -->


<div id="dialog" title="Modifier des annonces des emplois">
	<!--====================================================================================================-->
	<!-- /////////////////////////////////////////formulaire modifier ///////////////////////////////////////-->
    <!--====================================================================================================-->
	<form id='form' method="POST"  enctype="multipart/form-data" action ="modif_a_e.php">
        
		      
            <input type="text" placeholder="Placeholder Text"  name='id_e' id="id_e" hidden='true'/>
			<table width="100%" align ="center" class="t" >
	<tr>
		  <td> <div class="form-row">
            <p class="form-label">Entreprise </p>
            <div class="form-item"><input type="text"  placeholder="Tapez le nom de l'entreprise"   name='entreprise_e' id="entreprise_e"/><span class="error"></span></div>
           </div></td>
		   
           <td><div class="form-row">
            <p class="form-label">Déscription </p>
            <div class="form-item"></p><textarea placeholder="Tapez le but de l'emploi"  cols="30" rows="3"type="text"name='desc_entr_e' id="desc_entr_e"/></textarea><span class="error"></span></div>
           </div></td>
    </tr>
	<tr>
		    <td><div class="form-row">
            <p class="form-label">Domaine</p><input placeholder="Tapez le domaine de l'emploi" type="text" name="secteur_e" class="secteur_e" id="secteur_e" /><span class="error"></span>
			</div> </td>
			<td><div class="form-row">
            <p class="form-label">Type de contrat</p><input placeholder="EX: " type="text" name="type_e" class="type_e" id="type_e" /><span class="error"></span>
			</div> </td>
			</tr>
			<tr>
			<td><div class="form-row">
            <p class="form-label">Rénumération</p><input placeholder="2000dh � 4000dh" type="text" name="ren_e" class="ren_e" id="ren_e" /><span class="error"></span>
			</div></td>
			<td><div class="form-row">
            <p class="form-label">Niveau</p><input placeholder="Tapez le niveau d'�tude souhait�"  type="text" name="niveau_e" class="niveau_e" id="niveau_e" /><span class="error"></span>
			</div></td>
			</tr>
			<tr>
			<td><div class="form-row">
            <p class="form-label">Adresse</p>
            <div class="form-item"><textarea placeholder="Ex:13,rue Y,Fes" cols="30" rows="3"type="text" name='lieu_e' id="lieu_e"></textarea><span class="error"></span></div>
           </div></td>
           <td><div class="form-row">
            <p class="form-label">Nombre de poste</p>
            <div class="form-item"><input placeholder="Ex: 5,7" type="text" name='nbr_poste_e' id="nbr_poste_e"/><span class="error"></span></div>
           </div></td>
		   </tr>
		   <tr>
		   <td><div class="form-row">
            <p class="form-label">Date de dépôt</p>
            <div class="form-item"><input type="text" placeholder="Cliquez pour ajouter une date"  name="date_depot_e" class="datepicker" id="date_depot_e" /><span class="error"></span></div>
           </div></td>
		    <td><div class="form-row">
		    <p class="form-label">Ville</p>
            <div class="form-item"><input type="text" placeholder="Ex: Agadir"  name="ville_e" id="ville_e" /><span class="error"></span></div>
            </div></td>
		</tr>
		<tr>
			<td>
				<div class="form-row">
				<p class="form-label">Email</p>
				<div class="form-item"><input placeholder="Ex: thefinder@site.com"  type="text" name="email_e" class="datepicker" id="email_e" /><span class="error"></span></div>
				</div>
		    </td>
			<td>
				<div class="form-row">
				<p class="form-label">Téléphone</p>
				<div class="form-item"><input type="text" placeholder="Ex: +212666123456"  name="tel_e" id="tel_e" /><span class="error"></span></div>
				</div>
			</td>
		</tr>
		<tr>
		  <td>
		    <div class="form-row">
		     <p class="form-label">site</p>
             <div class="form-item"><input type="text" placeholder="Ex: +212666123456"  name="site_e" id="site_e" /><span class="error"></span></div>
            </div>
		  </td>
		  </tr>
	         	  
		  
		  
		  </table></br>
		  
               <input  type="submit"   value='valider' class="button green" />
			    <input  type="reset"   value='Renitialiser' class="button blue"  />
				
          </form>
</div>



</body>



</html><?php }} ?>