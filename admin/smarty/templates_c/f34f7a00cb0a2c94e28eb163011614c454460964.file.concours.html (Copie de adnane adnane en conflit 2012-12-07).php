<?php /* Smarty version Smarty-3.1.12, created on 2012-12-07 18:01:56
         compiled from "smarty\templates\concours.html" */ ?>
<?php /*%%SmartyHeaderCode:3043750ba4ee80e4839-35644581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f34f7a00cb0a2c94e28eb163011614c454460964' => 
    array (
      0 => 'smarty\\templates\\concours.html',
      1 => 1354903262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3043750ba4ee80e4839-35644581',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ba4ee820f5f1_38860216',
  'variables' => 
  array (
    'return' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ba4ee820f5f1_38860216')) {function content_50ba4ee820f5f1_38860216($_smarty_tpl) {?>﻿<!doctype html>
<html lang="en">

<!-- Mirrored from novalx.com/adminity/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:24:33 GMT -->
<head>
  <meta charset="utf-8">
  <title>Adminity - Dashboard</title>
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
  <script type="text/javascript" src="func.js"></script>
  <script>
   $(function() {
        $( ".datepicker" ).datepicker();
        $( ".format" ).change(function() {
            $( ".datepicker" ).datepicker( "option", "dateFormat", "d M, y" ).attr("readonly","readonly");
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
<script>
	</script>

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
            <p id="usr-notif">Vous avez 6 notifications. <a href="#">View</a></p>
            <p><a href="#">Profile</a><a href="logout.php">Déconnexion</a></p>
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
       </ul>
      </li>
     </ul>
  </div>

  <!--- CONTENT AREA -->

  <div class="content container_12">  
      <div class="box grid_12">
        <div class="box-head">
          <h2 style="display:inline-block;">	Liste des concours </h2>  <a href="#" class="open_aj" style='margin-left: 900px;' ><img src=img/icons/basic/plus.png ></a>
        </div>
        <div class="box-content no-pad">
         <table class="display" id="example">
        <thead>
          <tr>
		    <th hidden='true'></th>
            <th>Date dépot</th>
            <th>Date fin </th>
            <th>Organisme</th>
            <th>Niveau</th>
            <th>Lieu</th>
            <th>Description</th>
            <th> Action </th>
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
            <td class = "id_c"  hidden='true'><?php echo $_smarty_tpl->tpl_vars['data']->value['id_c'];?>
</td>              
            <td class = "dated" ><?php echo $_smarty_tpl->tpl_vars['data']->value['date_depot_c'];?>
</td>              
            <td class ="datef"><?php echo $_smarty_tpl->tpl_vars['data']->value['date_fin_c'];?>
</td>              
            <td class ="organisme"><?php echo $_smarty_tpl->tpl_vars['data']->value['organisme_c'];?>
</td>         
			<td class ="niveau"><?php echo $_smarty_tpl->tpl_vars['data']->value['niveau_c'];?>
</td> 
			<td class = "lieu"><?php echo $_smarty_tpl->tpl_vars['data']->value['lieu_c'];?>
</td> 
			<td class ="desc"><?php echo $_smarty_tpl->tpl_vars['data']->value['desc_c'];?>
</td>  
			 <td><a href="#?action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_c'];?>
" class="open" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_c'];?>
" > <IMG SRC=img/nav/edit.png border=0 alt=Modifier align=center></a>
			 <a href="?&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_c'];?>
"  ><IMG SRC=img/nav/delete.png border=0 alt=Supprimer  align=center></a></td> 
        </tr>                            
         <?php } ?>            
 
        </tbody>
      </table>
        </div>
		<script type="text/javascript">

</script>
      </div>

      

<div class="footer">
  <p>Powered by The finder 2012-2013</p>
</div>

<script> /* SCRIPTS */
$(function(){
	$("#dialog").dialog({
		autoOpen: false, 
		height: 460,
		width : 500,
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

		$("#id_c").val(id);
		$("#dated").val(dated);
		$("#datef").val(datef);
		$("#organisme").val(organisme);
		$("#niveau").val(niveau);
		$("#lieu").val(lieu);
		$("#desc").val(desc);
		$("#dialog").dialog("open");
	});
})
//=======================================================================
//========================= script d'ajout ==============================
//=======================================================================
$(function(){
	$("#dialog_aj").dialog({
		autoOpen: false, 
		height: 490,
		width : 600,
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
</script>
<!-- formulaire d'ajout -->
<div id="dialog" title="Concours">
	<!--====================================================================================================-->
	<!-- /////////////////////////////////////////formulaire d'ajout ///////////////////////////////////////-->
    <!--====================================================================================================-->
	<form id='form' method="POST">
        
		      
            <input type="text" placeholder="Placeholder Text"  name='id_c' id="id_c" hidden='true'/>
		   <div class="form-row">
            <p class="form-label">Organisme</p>
            <div class="form-item"><input type="text" placeholder="Placeholder Text"  name='organisme' id="organisme"/><span class="error"></span></div>
           </div>
		   <div class="form-row">
            <p class="form-label">Date dépot</p>
            <div class="form-item"><input type="text" name="date_debut" class="datepicker" id="dated" /><span class="error"></span></div>
           </div>
           <div class="form-row">
            <p class="form-label">Date fin</p>
            <div class="form-item"><input type="text" name="date_fin" class="datepicker" id="datef"/><span class="error"></span></div>
           </div>
           <div class="form-row">
            <p class="form-label">Niveau</p>
            <div class="form-item"><input type="text" name='niveau' id="niveau"/><span class="error"></span></div>
           </div>
           <div class="form-row">
            <p class="form-label">Lieu</p>
            <div class="form-item"><input type="text" name='lieu' id="lieu"/><span class="error"></span></div>
           </div>
           <div class="form-row">
            <p class="form-label">Déscription</p><textarea  name='desc' id="desc"/></textarea><span class="error"></span></div>
               <input  type="button"   value='valider' class="button green" id="modif"/>
			    <input  type="reset"   value='Renitialiser' class="button blue"  />
				
          </form>
</div>
<!--*************************************************************************************************** -->

<!--=================================================================================================== -->
<!-- /////////////////////////////////////////formulaire d'ajout ///////////////////////////////////////-->
<!--=================================================================================================== -->
<div id="dialog_aj" title="Concours">
	<!--<input name="nom" id="nom">
	<input name="pnom" id="prenom">
	<input name="naom" id="age">-->
	<form id='form_aj' method="POST" action='ajout.php' >
           <div class="form-row">
            <p class="form-label">Organisme</p>
            <div class="form-item"><input type="text" placeholder="Placeholder Text"  name='organisme' id="organisme"/><span class="error"></span></div>
           </div>
		   <div class="form-row">
            <p class="form-label">Date dépot</p>
            <div class="form-item"><input type="text" name="date_debut" class="datepicker" id="dated" /><span class="error"></span></div>
           </div>
           <div class="form-row">
            <p class="form-label">Date fin</p>
            <div class="form-item"><input type="text" name="date_fin" class="datepicker" id="datef"/><span class="error"></span></div>
           </div>
           <div class="form-row">
            <p class="form-label">Niveau</p>
            <div class="form-item"><input type="text" name='niveau' id="niveau"/><span class="error"></span></div>
           </div>
           <div class="form-row">
            <p class="form-label">Lieu</p>
            <div class="form-item"><input type="text" name='lieu' id="lieu"/><span class="error"></span></div>
           </div>
           <div class="form-row">
            <p class="form-label">Déscription</p><textarea  name='desc' id="desc"/></textarea><span class="error"></span></div>
               <input  type="submit"   value='valider' class="button green" id='ajout' />
			    <input  type="reset"   value='Renitialiser' class="button blue"  />
				
          </form>
</div>
<!--====================================================================================================== -->
</body>


<!-- Mirrored from novalx.com/adminity/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:25:42 GMT -->
</html><?php }} ?>