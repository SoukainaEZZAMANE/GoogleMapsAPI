<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 15:14:11
         compiled from "smarty\templates\concours.html" */ ?>
<?php /*%%SmartyHeaderCode:1897653061bc3f2a461-52334017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f34f7a00cb0a2c94e28eb163011614c454460964' => 
    array (
      0 => 'smarty\\templates\\concours.html',
      1 => 1357142326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1897653061bc3f2a461-52334017',
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
  'unifunc' => 'content_53061bc42b0467_19973936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53061bc42b0467_19973936')) {function content_53061bc42b0467_19973936($_smarty_tpl) {?>﻿<!doctype html>
<html lang="en">

<!-- Mirrored from novalx.com/adminity/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:24:33 GMT -->
<head>
  <meta charset="utf-8">
  <title>Concours</title>
  <link rel="shortcut icon" href="favicon.gif">
  <!---CSS Files-->
  <link rel="stylesheet" href="css/pop.css">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/tables.css">
    <link rel="stylesheet" href="css/iphone-check.css">
	<link rel="stylesheet" href="css/egg/jquery-ui.css">
<link type="text/css" rel="stylesheet" href="css/jquery.autocomplete.css" />


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
<script src="js/jquery-ui.js"></script>
  <script type="text/javascript" src="js/verification/func_aj_cnc.js"></script>
  <script type="text/javascript" src="js/verification/func_mod_cnc.js"></script>

<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
  <script>
  // date picker
   $(function() {
        $( ".datepicker" ).datepicker();
        $( ".format" ).change(function() {
            $( ".datepicker" ).datepicker( "option", "dateFormat", "d,M, y" );
        });
    });

    </script>
  
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

	<div class="header" >
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
           <a href="concours.php"><img src="img/nav/anlt-active.png" alt="" /><p>Concours</p></a>
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
           <a href="annonce.php"><img src="img/nav/advertising.png" alt="" /><p>Annonce</p></a>
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

  <!--- CONTENT AREA -->

  <div class="content container_12">  
      <div class="box grid_12">
        <div class="box-head">
          <h2 style="display:inline-block;">	Liste des concours </h2>  <a href="#" class="open_aj" style='margin-left:700px; display:inline-block;'><img src=img/icons/basic/plus.png ></a><a href="pdf.php?&action=concours"  style='margin-left:10px;'><img src=img/icons/basic/print.png ></a>
        </div>
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
			<th hidden='true'></th>
            <th>Organisme</th>
			<th>Description</th>
		    <th>Date de concour </th>
			<th>Date fin</th>
            <th>domaine</th>
            <th>Niveau</th>
            <th>Adresse</th>
            <th> Action </th>
			<th> détails </th>
          </tr>
          
        </thead>
        <tbody>
       <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
        <tr align="center" id = "<?php echo $_smarty_tpl->tpl_vars['data']->value['id_c'];?>
"> 
            <td class ="id_c"  hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['id_c'];?>
</td>              
            <td class ="dated" hidden='true' ><?php echo $_smarty_tpl->tpl_vars['data']->value['date_depot_c'];?>
</td>  
			<td class ="site" hidden='true' ><?php echo $_smarty_tpl->tpl_vars['data']->value['site_c'];?>
</td> 
			<td class ="pieces" hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['pieces_c'];?>
</td>
			<td class ="email" hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['email_c'];?>
</td>
			<td class ="tel" hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['tel_c'];?>
</td>
			<td class ="condition" hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['condition_c'];?>
</td>
			<td class ="ville" hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['ville_c'];?>
</td>
            <td class ="organisme"><?php echo $_smarty_tpl->tpl_vars['data']->value['organisme_c'];?>
</td> 
			<td class ="desc"><?php echo $_smarty_tpl->tpl_vars['data']->value['desc_c'];?>
</td>
			<td class ="datec"><?php echo $_smarty_tpl->tpl_vars['data']->value['date_c'];?>
</td>
			<td class ="datef"><?php echo $_smarty_tpl->tpl_vars['data']->value['date_fin_c'];?>
</td>              
			<td class ="domaine"><?php echo $_smarty_tpl->tpl_vars['data']->value['domaine_c'];?>
</td>
			<td class ="niveau"><?php echo $_smarty_tpl->tpl_vars['data']->value['niveau_c'];?>
</td> 
			<td class ="lieu"><?php echo $_smarty_tpl->tpl_vars['data']->value['lieu_c'];?>
</td> 
			 <td><a href="#?action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_c'];?>
" class="open" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_c'];?>
" > <IMG SRC=img/nav/edit.png border=0 alt=Modifier align=center></a>
			 <a href="?&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_c'];?>
"><IMG SRC=img/nav/delete.png border=0 alt=Supprimer  align=center></a></td> 
			 <td><a href="#" class="open_plus" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_c'];?>
"> <IMG SRC=img/nav/details.png border=0 alt=Modifier align=center></a> </td>
        </tr>                            
         <?php } ?>            
 
        </tbody>
      </table>
        </div>
		<script type="text/javascript">

</script>
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
		height: 360,
		width : 470,
		resizable : false
	});
	$(".open_plus").click(function(){
		var id = $(this).attr("id");
		var dated = $("#"+id+" .dated").text();
		var pieces =$("#"+id+" .pieces").text();
	    var email =$("#"+id+" .email").text();
		var tel =$("#"+id+" .tel").text();
		var condition=$("#"+id+" .condition").text();
		var ville=$("#"+id+" .ville").text();
		var site=$("#"+id+" .site").text();
     
		$("#datedm").text(dated);
		$("#piecesm").text(pieces);
		$("#emailm").text(email);
		$("#telm").text(tel);
		$("#conditionm").text(condition);
		$("#villem").text(ville);
		$("#sitem").text(site);
		$("#dialog_plus").dialog("open");
	});
})
//=======================================================================

//=======================================================================
//=================== script de modification ============================
//=======================================================================
$(function(){
	$("#dialog").dialog({
		autoOpen: false, 
		height: 680,
		width : 800,
		resizable : false
	});
	$(".open").click(function(){
		var id = $(this).attr("id");
		var dated = $("#"+id+" .dated").text();
		var datef =$("#"+id+" .datef").text();
		var organisme =$("#"+id+" .organisme").text();
		var niveau =$("#"+id+" .niveau").text();
		var lieu =$("#"+id+" .lieu").text();
		var desc =$("#"+id+" .desc").text();
		var pieces =$("#"+id+" .pieces").text();
	    var email =$("#"+id+" .email").text();
		var tel =$("#"+id+" .tel").text();
		var condition=$("#"+id+" .condition").text();
		var ville=$("#"+id+" .ville").text();
        var domaine=$("#"+id+" .domaine").text();
		var datec=$("#"+id+" .datec").text();
		var site=$("#"+id+" .site").text();
 

		$("#id_c").val(id);
		$("#dated").val(dated);
		$("#datef").val(datef);
		$("#organisme").val(organisme);
		$("#niveau").val(niveau);
		$("#lieu").val(lieu);
		$("#desc").val(desc);
		$("#pieces").val(pieces);
		$("#email").val(email);
		$("#tel").val(tel);
		$("#condition").val(condition);
		$("#ville").val(ville);
		$("#domaine").val(domaine);
		$("#datec").val(datec);
		$("#site").val(site);

		$("#dialog").dialog("open");
	});
})
//=======================================================================
//========================= script d'ajout ==============================
//=======================================================================
$(function(){
	$("#dialog_aj").dialog({
		autoOpen: false, 
		height: 700,
		width : 800,
		resizable : false
	 });
	  $(".open_aj").click(function(){
			$("#dialog_aj").dialog("open");
	   });
 });
//=======================================================================
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

<script>

/*function ajout()
{
  var a =document.getElementById('form_aj');
  a.action="ajout.php";
  a.submit();
  
}*/

//===================================================
//=============== autocomplete=======================
//===================================================
$(document).ready(function() {
    $('#organismea').autocomplete('concours.php');
});
//===================================================
</script>
<!-- formulaire d'ajout -->
	<!--====================================================================================================-->
	<!-- /////////////////////////////////////////dialog d'affichage ///////////////////////////////////////-->
    <!--====================================================================================================-->
	<div id="dialog_plus" title="Détails du concours">
	<form id='form_af' method="POST">
          
		   <div class="form-row">
            <p class="form-label"><b>Date dépot:</b></p>
            <div class="form-item"><label id="datedm"></label><span class="error"></span></div>
           </div>
		   <div class="form-row">
            <p class="form-label"><b>Pieces :</b></p>
            <div class="form-item"><label id="piecesm"></label><span class="error"></span></div>
           </div>
          <div class="form-row">
            <p class="form-label"><b>Email: </b></p>
            <div class="form-item"><label id="emailm"></label><span class="error"></span></div>
           </div>
           <div class="form-row">
            <p class="form-label"><b>Téléphone :</b></p>
            <div class="form-item"><label id="telm"></label><span class="error"></span></div>
           </div>
           <div class="form-row">
            <p class="form-label"><b>Ville :</b></p>
            <div class="form-item"><label id="villem"></label><span class="error"></span></div>
           </div>
           <div class="form-row">
            <p class="form-label"><b>Conditon d'accés :</b></p><label id="conditionm"></label><span class="error"></span></div> 
             <div class="form-row"></br>
            <p class="form-label"><b>Site:</b></p><label id="sitem"></label><span class="error"></span></div> 
				
          </form>
</div>
<!--*************************************************************************************************** -->




	<!--====================================================================================================-->
	<!-- /////////////////////////////////////////formulaire modifier ///////////////////////////////////////-->
    <!--====================================================================================================-->
	<div id="dialog" title="Modifier un concours">
	<form id='form' method="POST" enctype="multipart/form-data">

            <input type="text" placeholder="Placeholder Text"  name='id_c' id="id_c" hidden='true'/>
	<table>
	<tr>
		  <td> <div class="form-row">
            <p class="form-label">Organisme</p>
            <div class="form-item"><input type="text" placeholder="Tapez le nom de l'entreprise" name='organisme' id="organisme"/><span class="error"></span></div>
           </div></td>
		 <!--  <td><div class="form-row">
            <p class="form-label">Date dépot</p>
            <div class="form-item"><input type="text" placeholder="Cliquez pour entrer la date" name="date_debut" class="datepicker" id="dated" /><span class="error"></span></div>
           </div></td>-->
		   </tr>
		 <tr>
           <td><div class="form-row">
            <p class="form-label">Date fin</p>
            <div class="form-item"><input type="text" placeholder="Cliquez pour entrer la date"  name="date_fin" class="datepicker" id="datef"/><span class="error"></span></div>
           </div></td>
		   	<td><div class="form-row">
            <p class="form-label">Date de concour</p>
            <div class="form-item"><input type="text" placeholder="Cliquez pour entrer la date" name="date_c" class="datepicker" id="datec"/><span class="error"></span></div>
           </div></td>
		   </tr>
		  <tr>
           <td><div class="form-row">
            <p class="form-label">Niveau</p>
            <div class="form-item"><input type="text" placeholder="Niveau de concour:Bac,.." name='niveau' id="niveau"/><span class="error"></span></div>
           </div></td>
           <td><div class="form-row">
            <p class="form-label">Adresse</p>
            <div class="form-item"><textarea placeholder="Tapez l'adresse du concour" cols="30" rows="3"type="text" name='lieu' id="lieu"/></textarea><span class="error"></span></div>
           </div></td>
		   </tr>
		   	<tr>
			<td><div class="form-row">
            <p class="form-label">Domaine</p>
            <div class="form-item"><textarea  placeholder="Ex: Informatique,Droit,.." name='domaine' id="domaine"/></textarea><span class="error"><span class="error"></span></div>
           </div></td>
		   <td><div class="form-row">
            <p class="form-label">Email</p>
            <div class="form-item"><input type="text" placeholder="EX: thefinder@site.com" name='email' id="email"/><span class="error"></span></div>
           </div></td>
		   </tr>
		   <tr>
		   <td><div class="form-row">
            <p class="form-label">Téléphone</p>
            <div class="form-item"><input type="text" placeholder="EX: +212666123456" name='tel' id="tel"/><span class="error"></span></div>
           </div></td>
		   <td><div class="form-row">
            <p class="form-label">Ville</p>
            <div class="form-item"><input type="text" placeholder="EX: Marrakech" name='ville' id="ville"/><span class="error"></span></div>
           </div></td>
		   </tr>
		   <tr>
  		   <td><div class="form-row">
            <p class="form-label">Pièces</p>
            <div class="form-item"><textarea placeholder="Tapez les pièces a fournir" cols="30" rows="3"type="text"  name="pieces"  id="pieces" /></textarea><span class="error"></span></div>
           </div></td>
		  <td> <div class="form-row">
            <p class="form-label">Conditions d'accès</p>
            <div class="form-item"><textarea placeholder="Tapez les conditions d'accés" cols="30" rows="3"type="text"   name='condition' id="condition"/></textarea><span class="error"><span class="error"></span></div>
           </div></td>
		   </tr>
		  <tr>
           <td><div class="form-row">
            <p class="form-label">Déscription</p><textarea  placeholder=" Tapez le but du concours" name='desc' id="desc"/></textarea><span class="error"></span>
			</div></td>
			 <td><div class="form-row">
            <p class="form-label">Site</p>
            <div class="form-item"><input type="text" placeholder="Tapez le site de l'organisme" name='site' id="site"/><span class="error"></span></div>
           </div></td>
			</tr>
						<tr>
				<td>
					Image : <input type="file" name="avatar">
					<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
				</td>
			</tr>
		</table></br>
               <input  type="button"   value='valider' class="button green" id="modif"/>
			    <input  type="reset"   value='Renitialiser' class="button blue"  />
				
          </form>
</div>
<!--*************************************************************************************************** -->

<!--=================================================================================================== -->
<!-- /////////////////////////////////////////formulaire d'ajout ///////////////////////////////////////-->
<!--=================================================================================================== -->
<div id="dialog_aj" title="Ajouter un concours">
	<form id='form_aj' method="POST" action='ajout.php'  enctype="multipart/form-data">
	<table width="100%" align ="center" class="t" >
           <tr>
		   <td>
		     <div class="form-row">
             <p class="form-label">Organisme</p>
             <div class="form-item"><input type="text" placeholder="Tapez le nom de l'entreprise"  name='organisme' id="organismea"/><span class="error"></span></div>
             </div>
		   </td>
		   <!--<td>
		     <div class="form-row">
             <p class="form-label">Date dépot</p>
             <div class="form-item"><input type="text" placeholder="Cliquez pour entrer la date" name="date_debut" class="datepicker" id="dateda" /><span class="error"></span></div>
             </div>
		   </td>-->
		   </tr>
		   <tr>
		   <td><div class="form-row">
            <p class="form-label">Date de concour</p>
            <div class="form-item"><input type="text" placeholder="Cliquez pour entrer la date" name="date_c" class="datepicker" id="dateca"/><span class="error"></span></div>
           </div></td>
           <td><div class="form-row">
            <p class="form-label">Date fin</p>
            <div class="form-item"><input type="text" placeholder="Cliquez pour entrer la date"name="date_fin" class="datepicker" id="datefa"/><span class="error"></span></div>
           </div></td>
           <tr>
		   <td><div class="form-row">
            <p class="form-label">Niveau</p>
            <div class="form-item"><input type="text" placeholder="Niveau de concour:Bac,.." name='niveau' id="niveaua"/><span class="error"></span></div>
           </div></td>
           <td><div class="form-row">
            <p class="form-label">Adresse</p>
            <div class="form-item"><textarea placeholder="Tapez l'adresse du concour"cols="30" rows="3"type="text" name='lieu' id="lieua"/></textarea><span class="error"></span></div>
           </div></td>
          </tr>
		  <tr>
		   <td><div class="form-row">
            <p class="form-label">Email</p>
            <div class="form-item"><input placeholder="EX: thefinder@gmail.com" type="text" name='email' id="emaila"/><span class="error"></span></div>
           </div></td>
		   <td><div class="form-row">
            <p class="form-label">Téléphone</p>
            <div class="form-item"><input placeholder="EX: +212666123456" type="text" name='tel' id="tela"/><span class="error"></span></div>
           </div></td>
		   </tr>
		   <tr>
		   <td><div class="form-row">
            <p class="form-label">Ville</p>
            <div class="form-item"><input placeholder="EX: Marrakech" type="text" name='ville' id="villea"/><span class="error"></span>
			</div>
           </div></td>
		    <td><div class="form-row">
            <p class="form-label">Pièces</p>
            <div class="form-item"><textarea placeholder="Tapez les pièces a fournir" cols="30" rows="3" type="text"  name="pieces"  id="piecesa" /></textarea><span class="error"></span></div>
           </div></td>
		   </tr>
		   <tr>
		   <td><div class="form-row">
            <p class="form-label">Domaine</p>
            <div class="form-item"><input placeholder="Ex: Informatique,Droit,.." type="text" name="domaine" id="domainea" /><span class="error"></span></div>
           </div></td>
		   <td><div class="form-row">
            <p class="form-label">Conditions d'accès</p>
            <div class="form-item"><textarea placeholder="Tapez les conditions d'accés" cols="30" rows="3"type="text" name='condition' id="conditiona"/></textarea><span class="error"><span class="error"></span></div>
           </div></td>
		   </tr>
          <tr>
		  <td><div class="form-row">
            <p class="form-label">Déscription</p>
			<div class="form-item"><textarea placeholder=" Tapez le but du concours" cols="30" rows="3"type="text" name='desc' id="desca"/></textarea><span class="error"></span></div>
			</div></td>
			<td><div class="form-row">
            <p class="form-label">Site</p>
			<div class="form-item"><input placeholder=" Tapez le site de l'organisme" type="text" name='site' id="sitea"/><span class="error"></span></div>
			</div></td>
			</tr>
			<tr>
				<td>
					Image : <input type="file" name="avatar">
					<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
				</td>
			</tr>
	
     </table></br>         
			<input  type="button"   value='valider' class="button green" id='ajout' />
			    <input  type="reset"   value='Renitialiser' class="button blue"  />
				
          </form>
</div>
<!--====================================================================================================== -->
</body>


<!-- Mirrored from novalx.com/adminity/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:25:42 GMT -->
</html><?php }} ?>