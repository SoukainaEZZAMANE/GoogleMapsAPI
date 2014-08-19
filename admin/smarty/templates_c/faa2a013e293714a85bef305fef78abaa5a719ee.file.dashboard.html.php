<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 14:16:32
         compiled from "smarty\templates\dashboard.html" */ ?>
<?php /*%%SmartyHeaderCode:2291950ba4c3e9d39f1-53433863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faa2a013e293714a85bef305fef78abaa5a719ee' => 
    array (
      0 => 'smarty\\templates\\dashboard.html',
      1 => 1356521976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2291950ba4c3e9d39f1-53433863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ba4c3eadb031_27787024',
  'variables' => 
  array (
    'return' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ba4c3eadb031_27787024')) {function content_50ba4c3eadb031_27787024($_smarty_tpl) {?>﻿<!doctype html>
<html lang="en">

<!-- Mirrored from novalx.com/adminity/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:24:33 GMT -->
<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <link rel="shortcut icon" href="favicon.gif">
  <!---CSS Files-->
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/tables.css">
    <link rel="stylesheet" href="css/iphone-check.css">
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
  <!---Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
  
      <!--/////////////////////////// calendar ////////////////////////////-->
  	<link rel='stylesheet' type='text/css' href='calendrier/reset.css' />
	<link rel='stylesheet' type='text/css' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/start/jquery-ui.css' />
	<link rel='stylesheet' type='text/css' href='calendrier/jquery.weekcalendar.css' />
	<link rel='stylesheet' type='text/css' href='calendrier/demo.css' />
	
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js'></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js'></script>
	<script type='text/javascript' src='calendrier/jquery.weekcalendar.js'></script>
	<script type='text/javascript' src='calendrier/demo.js'></script>
  <!--=================================================================-->
  
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
           <a href="#"><img src="img/nav/dash-active.png" alt="" /><p>Accueil</p></a>
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

  <div class="box grid_3" style="width:40%">
        <div class="box-head"><span class="box-icon-24 fugue-24 counter"></span><h2>Statistique des membres</h2></div>
        <div class="box-content ad-stats" >
         <table>
		 <tr>
		 <td style="width:350px;">
		  <ul>
            <li class="stats-up"><h3><?php echo $_smarty_tpl->tpl_vars['return']->value['recruteur'];?>
</h3> Nombre de recruteurs</li>
            <li class="stats-up"><h3><?php echo $_smarty_tpl->tpl_vars['return']->value['utilisateur'];?>
</h3> nombre d'utilisateurs</li>

          </ul>
		  </td>
		  </tr>
		 </table>
        </div>
      </div>

	  <div class="box grid_3" style="width:50%">
        <div class="box-head"><span class="box-icon-24 fugue-24 counter"></span><h2>Statistique des information</h2></div>
        <div class="box-content ad-stats" >
         <table border=0px>
		 <tr>
		  <td  style="width:350px;">
		  <ul style="display:inline-block;"> 
            <li class="stats-up"><h3><?php echo $_smarty_tpl->tpl_vars['return']->value['concours'];?>
 </h3> Nombre de concours</li>
            <li class="stats-up"><h3><?php echo $_smarty_tpl->tpl_vars['return']->value['formation'];?>
</h3> Nombre de formations</li>
           </ul>
		   </td>
		   <td style="width:350px;">
		   <ul>
			<li class="stats-up"><h3><?php echo $_smarty_tpl->tpl_vars['return']->value['stage'];?>
</h3> Nombre de stages</li>
            <li class="stats-up"><h3><?php echo $_smarty_tpl->tpl_vars['return']->value['emploi'];?>
</h3> Nombre de emplois</li>
		  </ul>
		  </tr>
		 </table>
        </div>
      </div>

      

	  <div id="event_edit_container">
		<form>
			<input type="hidden" />
			<ul>
				<li>
					<span>Date: </span><span class="date_holder"></span> 
				</li>
				<li>
					<label for="start">Date début: </label><select name="start"><option value="">Selectionner début</option></select>
				</li>
				<li>
					<label for="end">Date Fin: </label><select name="end"><option value="">Selectionner Fin</option></select>
				</li>
				<li>
					<label for="title">Titre: </label><input type="text" name="title" />
				</li>
				<li>
					<label for="body">Corps: </label><textarea name="body"></textarea>
				</li>
			</ul>
		</form>
	  </div>   
      	<div  class="content container_12" id='calendar'></div>

<div class="footer">
  <p>Développé par The finder 2012-2013</p>
</div>

<script> /* SCRIPTS */
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

</script>

</body>


<!-- Mirrored from novalx.com/adminity/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:25:42 GMT -->
</html><?php }} ?>