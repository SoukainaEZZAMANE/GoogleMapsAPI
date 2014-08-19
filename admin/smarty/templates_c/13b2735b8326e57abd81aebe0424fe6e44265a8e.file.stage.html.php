<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 15:16:01
         compiled from "smarty\templates\stage.html" */ ?>
<?php /*%%SmartyHeaderCode:613450bf56bd853f29-00771503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13b2735b8326e57abd81aebe0424fe6e44265a8e' => 
    array (
      0 => 'smarty\\templates\\stage.html',
      1 => 1356446488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '613450bf56bd853f29-00771503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50bf56bdc10211_71955444',
  'variables' => 
  array (
    'return' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bf56bdc10211_71955444')) {function content_50bf56bdc10211_71955444($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Stage</title>
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
  <script type="text/javascript" src="js/verification/func_mod_sta.js"></script>
  <script type="text/javascript" src="js/verification/func_aj_sta.js"></script>
  <!---Fonts-->
  
  <script>
  // date picker
   $(function() {
        $( ".datepicker" ).datepicker();
        $( ".format" ).change(function() {
            $( ".datepicker" ).datepicker( "option", "dateFormat", "d,M, y" );
        });
    });

    </script>
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
           <a href="stages.php"><img src="img/nav/widgets-active.png" alt="" /><p>Stages</p></a>
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
        <div class="box-head"><h2 style ="display:inline-block;">Liste des stages</h2>  <a href="#" class="open_aj" style='margin-left: 800px;' ><img src=img/icons/basic/plus.png ></a><a href="pdf.php?&action=stage"  style='margin-left:30px;'><img src=img/icons/basic/print.png ></a>
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
			<th hidden='true'></th>
			<th>Entreprise</th>
			<th>Desciption de stage</th>
			<th>Domaine </th>
			<th>Date début</th>
			<th>Durée</th>
			<th>Rémunéré</th>
            <th>Lieu</th>
            <th> Action </th>
			<th>Détails</th>
          </tr>
          
        </thead>
        <tbody>
       <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
         <tr align="center" id = "<?php echo $_smarty_tpl->tpl_vars['data']->value['id_s'];?>
">    
		  <td class ='id_s' hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['id_s'];?>
</td> 
		   <td class ='site_s' hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['site_s'];?>
</td> 
		     <td class ='mission_s' hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['mission_s'];?>
</td> 
		  <td class ='niveau_s' hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['niveau_s'];?>
</td>         
		  <td class ='email_s' hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['email_s'];?>
</td> 
           <td class ='nbr_poste'hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['nbr_poste'];?>
</td>
           <td class ='date_depot_s'hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['date_depot_s'];?>
</td>
           <td class ='tel_s'hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['tel_s'];?>
</td>	
		   <td class ='ville_s'hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['ville_s'];?>
</td>
		  <td class ='entreprise_s' ><?php echo $_smarty_tpl->tpl_vars['data']->value['entreprise_s'];?>
</td> 
           <td class ='desc_entr_s'><?php echo $_smarty_tpl->tpl_vars['data']->value['desc_entr_s'];?>
</td> 
          <td class ='secteur_s'><?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_s'];?>
</td>  
            <td class ='demarrage_s'><?php echo $_smarty_tpl->tpl_vars['data']->value['demarrage_s'];?>
</td>
            <td class ='dure_s' ><?php echo $_smarty_tpl->tpl_vars['data']->value['dure_s'];?>
</td>	
			<td class ='remunere'><?php echo $_smarty_tpl->tpl_vars['data']->value['remunere'];?>
</td> 	
            <td class ='lieu_s'><?php echo $_smarty_tpl->tpl_vars['data']->value['lieu_s'];?>
</td>			



			 <td><a href="#?action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_s'];?>
" class="open" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_s'];?>
" > <IMG SRC=img/nav/edit.png border=0 alt=Modifier align=center></a>
			 <a href="?&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_s'];?>
"  ><IMG SRC=img/nav/delete.png border=0 alt=Supprimer  align=center></a></td>
			 <td><a href="#" class="open_plus" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_s'];?>
"> <IMG SRC=img/nav/valider.png border=0 alt=Valider align=center></a></td> 
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
		height: 360,
		width : 470,
		resizable : false
	});
	$(".open_plus").click(function(){
		var id = $(this).attr("id");
		var dated = $("#"+id+" .date_depot_s").text();
		var nbr =$("#"+id+" .nbr_poste").text();
	    var email =$("#"+id+" .email_s").text();
		var tel =$("#"+id+" .tel_s").text();
		var niveau=$("#"+id+" .niveau_s").text();
		var ville=$("#"+id+" .ville_s").text();
		var site=$("#"+id+" .site_s").text();
		var mission=$("#"+id+" .mission_s").text();
		
		$("#datedm").text(dated);
		$("#nbrm").text(nbr);
		$("#emailm").text(email);
		$("#telm").text(tel);
		$("#niveaum").text(niveau);
		$("#villem").text(ville);
		$("#sitem").text(site);
		$("#missionm").text(mission);
		$("#dialog_plus").dialog("open");
	});
})
//=======================================================================
//=======================================================================
//========================= script d'ajout ==============================
//=======================================================================
$(function(){
	$("#dialog_aj").dialog({
		autoOpen: false, 
		height: 690,
		width : 800,
		resizable : false
	 });
	  $(".open_aj").click(function(){
			$("#dialog_aj").dialog("open");
	   });
 });
 //======================================================================

 //======================================================================
 //===================== script de modification =========================
 //======================================================================
 $(function(){
	$("#dialog").dialog({
		autoOpen: false, 
		height: 680,
		width : 800,
		resizable : false
	});
	$(".open").click(function(){
	var id = $(this).attr("id");
		var niveau_s = $("#"+id+" .niveau_s").text();
		var secteur_s =$("#"+id+" .secteur_s").text();
		var dure_s =$("#"+id+" .dure_s").text();
		var entreprise_s =$("#"+id+" .entreprise_s").text();
		var desc_entr_s =$("#"+id+" .desc_entr_s").text();	
		var remunere =$("#"+id+" .remunere").text();
		var nbr_poste =$("#"+id+" .nbr_poste").text();
		var date_depot_s =$("#"+id+" .date_depot_s").text();
		var demarrage_s =$("#"+id+" .demarrage_s").text();
		var lieu_s =$("#"+id+" .lieu_s").text();
		var email_s =$("#"+id+" .email_s").text();
		var tel_s =$("#"+id+" .tel_s").text();
		var ville_s =$("#"+id+" .ville_s").text();
		var sites =$("#"+id+" .site_s").text();
		var mission_s =$("#"+id+" .mission_s").text();
	
		$("#id_s").val(id);
		$("#niveau_s").val(niveau_s);
		$("#secteur_s").val(secteur_s);
		$("#dure_s").val(dure_s);
		$("#entreprise_s").val(entreprise_s);
		$("#desc_entr_s").val(desc_entr_s);
		$("#remunere").val(remunere);
		$("#nbr_poste").val(nbr_poste);
		$("#date_depot_s").val(date_depot_s);
		$("#demarrage_s").val(demarrage_s);
		$("#lieu_s").val(lieu_s);
		$("#tel_s").val(tel_s);
		$("#ville_s").val(ville_s);
		$("#email_s").val(email_s);
	    $("#site_s").val(sites);
		$("#mission_s").val(mission_s);
	
		
		$("#dialog").dialog("open");
	});
})

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
function ajout () {	
var f= document.getElementById("form_aj");
f.action="ajout_stage.php";
f.submit();
					
}
</script>
	<!--====================================================================================================-->
	<!-- /////////////////////////////////////////dialog d'affichage ///////////////////////////////////////-->
    <!--====================================================================================================-->
	<div id="dialog_plus" title="Concours">
	<form id='form_af' method="POST">
          
		   <div class="form-row">
            <p class="form-label"><b>Date dépot:</b></p>
            <div class="form-item"><label id="datedm"></label><span class="error"></span></div>
           </div></br>
		   <div class="form-row">
            <p class="form-label"><b>TMission :</b></p>
            <div class="form-item"><label id="missionm"></label><span class="error"></span></div>
           </div></br>
		     <div class="form-row">
            <p class="form-label"><b>Pré-requis:</b></p>
            <div class="form-item"><label id="niveaum"></label><span class="error"></span></div>
           </div></br>
		   <div class="form-row">
            <p class="form-label"><b>Nombre de poste:</b></p>
            <div class="form-item"><label id="villem"></label><span class="error"></span></div>
           </div></br>
		 
          <div class="form-row">
            <p class="form-label"><b>Email: </b></p>
            <div class="form-item"><label id="emailm"></label><span class="error"></span></div>
           </div></br>
           <div class="form-row">
            <p class="form-label"><b>Téléphone :</b></p>
            <div class="form-item"><label id="telm"></label><span class="error"></span></div>
           </div><br/>
		    
		    <div class="form-row">
            <p class="form-label"><b>Site :</b></p>
            <div class="form-item"><label id="sitem"></label><span class="error"></span></div>
           </div>
           

             
				
          </form>
</div>
<!--*************************************************************************************************** -->
<!--=================================================================================================== -->
<!-- /////////////////////////////////////////formulaire d'ajout ///////////////////////////////////////-->
<!--=================================================================================================== -->
<div id="dialog_aj" title="Ajouter un stage">
<form id='form_aj' method="POST"  enctype="multipart/form-data">
 
  <table width="100%" align ="center" class="t">
 <tr>
            <td><div class="form-row">
           <p class="form-label">Entreprise</p>
            <div class="form-item"><input type="text" placeholder="Tapez le nom de l'entreprise" name="entreprise_s" class="entreprise_s" id="entreprise_sa" /><span class="error"></span></div>
           </div></td>
		   <td><div class="form-row">
            <p class="form-label">Déscription </p>
            <div class="form-item"></p><textarea placeholder="Tapez le but de l'entreprise"  cols="30" rows="3"type="text" name='desc_entr_s' id="desca"/></textarea><span class="error"></span></div>
           </div></td>
		   </tr>
		   <tr>
		    <td><div class="form-row">
            <p class="form-label">Domaine</p>
            <div class="form-item"><input type="text" placeholder="Tapez le domaine du stage"  name='secteur_s' id="secteur_sa"/><span class="error"></span></div>
           </div></td>
		   <td><div class="form-row">
            <p class="form-label">Date de dépôt</p><input placeholder="cliquez pour ajouter une date"  type="text" name="date_depot_s" class="datepicker" id="datea" ><span class="error"></span>
			</div></td>
			</tr>
			<tr>
			
		   	<td><div class="form-row">
                 <p class="form-label">date de début</p>
					<input placeholder="cliquez pour ajouter une date"  type="text" name="demarrage_s" class="datepicker" id="dated" ><span class="error"></span>
			    </div>
			</td>
			<td><div class="form-row">
            <p class="form-label">Durée</p>
            <div class="form-item"><input placeholder="Ex: 3,5" type="text" name='dure_s' id="dure_sa"/>Jours<span class="error"></span></div>
           </div></td>
		   </tr>
		   <tr>
		   <td><div class="form-row">
            <p class="form-label">Rémunéré</p><select type="text" name="remunere" class="remunere" id="remunerea" /><span class="error"></span>
			<option type="text" name="remunere" class="remunere" id="remunerea">Oui
			<option type="text" name="remunere" class="remunere" id="remunerea">Non
			</select>
			</div></td>
			<td><div class="form-row">
            <p class="form-label">Adresse</p><textarea placeholder="165,boulevard Z,Marrakech" cols="30" rows="3"type="text"name="lieu_s" class="lieu_s" id="lieua" ></textarea><span class="error"></span>
			</div></td>
			</tr>
			<tr>
			<td><div class="form-row">
            <p class="form-label">Ville</p><input placeholder="Ex:Marrakech" type="text" name="ville_s" class="ville_s" id="villea" /><span class="error"></span>
			</div></td>
			
		    <td><div class="form-row">
            <p class="form-label">Pré-requis</p>
            <div class="form-item"><textarea placeholder="pré-requis souhaités" cols="30" rows="3" placeholder="Placeholder Text"  name='niveau_s' id="niveau_sa"></textarea><span class="error"></span></div>
           </div></td>
		   </tr>
			<tr>
			<td><div class="form-row">
            <p class="form-label">Nombre de poste</p><input  placeholder="4,2,.." type="text" name="nbr_poste" class="nbr_poste" id="nbra" /><span class="error"></span>
			</div></td>
			<td><div class="form-row">
            <p class="form-label">Email</p><input placeholder="Ex: thefinder@site.com" type="text" name="email_s" class="email_s" id="emaila" /><span class="error"></span>
			</div></td>
			</tr>
			<tr>
			<td><div class="form-row">
            <p class="form-label">Téléphone</p><input placeholder="Ex: +212555123456" type="text" name="tel_s" class="tel_s" id="tela" /><span class="error"></span>
			</div></td>
			
			<td><div class="form-row">
            <p class="form-label">Mission</p><input placeholder="tapez la mission"  type="text" name="mission_s" class="mission_s" id="missiona" /><span class="error"></span>
			</div></td>
			</tr>
			<tr>
			<td><div class="form-row">
            <p class="form-label">Site</p><input placeholder="tapez le site"  type="text" name="site_s" class="site_s" id="sitea" /><span class="error"></span>
			</div></td>
			</tr>
			<tr>
				<td>
					Image : <input type="file" name="avatar">
					<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
				</td>
			</tr>
			
			</table></br>
			
		
			
               <input  type="button"   value='valider' class="button green" id="ajout"/>
			    <input  type="reset"   value='Renitialiser' class="button blue"  />
				
          </form>
</div>
<!--====================================================================================================== -->

<!--======================================================================================================-->
<!--=================================== formulaire de modification =======================================-->
<!--======================================================================================================-->
<div id="dialog" title="modifier un stage" >
<form id='form' method="POST" enctype="multipart/form-data">
   <input type="text" placeholder="Placeholder Text"  name='id_s' id="id_s" hidden='true'/>
     <table width="100%" align ="center" class="t">
 <tr>
      
   <td><div class="form-row">
            <p class="form-label">Entreprise</p>
            <div class="form-item"><input type="text" placeholder="Tapez le nom de l'entreprise" name="entreprise_s" class="entreprise_s" id="entreprise_s" /><span class="error"></span></div>
           </div></td>
		   <td><div class="form-row">
            <p class="form-label">Déscription </p>
            <div class="form-item"></p><textarea placeholder="Tapez le but de l'entreprise" cols="30" rows="3"type="text" name='desc_entr_s' id="desc_entr_s"/></textarea><span class="error"></span></div>
           </div></td>
		   </tr>
		   <tr>
		   <td><div class="form-row">
            <p class="form-label">Domaine</p>
            <div class="form-item"><input type="text" placeholder="Tapez le domaine du stage" name='secteur_s' id="secteur_s"/><span class="error"></span></div>
           </div></td>
		   <td><div class="form-row">
            <p class="form-label">Date de dépôt</p><input placeholder="cliquez pour ajouter une date" type="text" name="date_depot_s" class="date_depot_s" id="date_depot_s" /><span class="error"></span></div></td>
			</tr>
			<tr>
			<td><div class="form-row">
            <p class="form-label">date début</p>
					<input placeholder="cliquez pour ajouter une date"  type="text" name="demarrage_s" class="datepicker" id="demarrage_s" ><span class="error"></span>
			</div></td>
			<td>
			<div class="form-row">
            <p class="form-label">Durée</p>
            <div class="form-item"><input placeholder="Ex: 3,5"  type="text" name='dure_s' id="dure_s"/><span class="error"></span></div>
           </div></td>
		   </tr>
		   <tr>
		   <td><div class="form-row">
            <p class="form-label">Rémunéré</p><select type="text" name="remunere" class="remunere" id="remunere" ><span class="error"></span>
			<option type="text" name="remunere" class="remunere" id="remunerea">Oui
			<option type="text" name="remunere" class="remunere" id="remunerea">Non
			</select>
			</div></td>
			  <td><div class="form-row">
			  <p class="form-label">Adresse</p><textarea placeholder="165,boulevard Z,Marrakech" cols="30" rows="3"type="text" name="lieu_s" class="lieu_s" id="lieu_s" ></textarea><span class="error"></span>
			  </div></td>
			  </tr>
			  <tr>
			  <td><div class="form-row">
            <p class="form-label">Ville</p><input type="text" placeholder="Ex:Marrakech" name="ville_s" class="ville_s" id="ville_s" /><span class="error"></span>
			</div></td>
			<td><div class="form-row">
            <p class="form-label">Nombre de poste</p><input  placeholder="4,2,.." type="text" name="nbr_poste" class="nbr_poste" id="nbr_poste" /><span class="error"></span>
			</div></td>
			</tr>
			<tr>
			 <td><div class="form-row">
            <p class="form-label">Pré-requis</p>
            <div class="form-item"><textarea cols="30" rows="3"type="text"placeholder="Placeholder Text"  name='niveau_s' id="niveau_s"></textarea><span class="error"></span></div>
           </div></td>
           
			<td><div class="form-row">
            <p class="form-label">Email</p><input type="text"  placeholder="Ex: thefinder@site.com" name="email_s" class="email_s" id="email_s" /><span class="error"></span>
			</div></td>
			</tr>
			<tr>
			<td><div class="form-row">
            <p class="form-label">Téléphone</p><input placeholder="Ex: +212555123456"  type="text" name="tel_s" class="tel_s" id="tel_s" /><span class="error"></span>
			</div></td>
			<td><div class="form-row">
            <p class="form-label">Mission</p><input placeholder="tapez les missiions"  type="text" name="mission_s" class="mission_s" id="mission_s" /><span class="error"></span>
			</div></td>
			</tr>
			<tr>
			<td><div class="form-row">
            <p class="form-label">Site</p><input placeholder="tapez votre site"  type="text" name="site_s" class="site_s" id="site_s" /><span class="error"></span>
			</div></td>
			</tr>
						<tr>
				<td>
					Image : <input type="file" name="avatar">
					<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
				</td>
			</tr>
			
	</table></br>		
			
		  
               <input  type="button"   value='valider' class="button green" id ="modif"/>
			    <input  type="reset"   value='Renitialiser' class="button blue"  />
				
          </form>
</div>
<!--======================================================================================================-->
</body>
<!-- Mirrored from novalx.com/adminity/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:25:42 GMT -->

</html><?php }} ?>