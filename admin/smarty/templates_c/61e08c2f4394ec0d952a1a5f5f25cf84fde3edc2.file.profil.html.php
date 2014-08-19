<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 14:17:22
         compiled from "smarty\templates\profil.html" */ ?>
<?php /*%%SmartyHeaderCode:1178250cf48923aaa02-53092838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61e08c2f4394ec0d952a1a5f5f25cf84fde3edc2' => 
    array (
      0 => 'smarty\\templates\\profil.html',
      1 => 1356289776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1178250cf48923aaa02-53092838',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50cf48925c7824_20131598',
  'variables' => 
  array (
    'return' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cf48925c7824_20131598')) {function content_50cf48925c7824_20131598($_smarty_tpl) {?><!doctype html>
<html lang="en">

<!-- Mirrored from novalx.com/adminity/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:24:33 GMT -->
<head>
  <meta charset="utf-8">
  <title>Profil</title>
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
           
            <p><a href="#">Profil</a><a href="logout.php">Déconnexion</a></p>
          </div>
        </li>
        <li>
        <ul id="top-nav">
         <li class="nav-item">
           <a href="index.php"><img src="img/nav/dash.png" alt="" /><p>Accueil</p></a>
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

  <div class="content container_12">
    <div class="box grid_3"  style="width:100%;">
        <div class="box-head"><h2>Profil</h2></div>
        <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
		<div class="box-content" id = "<?php echo $_smarty_tpl->tpl_vars['data']->value['id_a'];?>
" >
		  
		   <div class="form-row" >
            <p class="form-label"><b>Nom:</b></p>
            <div class="form-item"><label id="nomm" class="nom" text="<?php echo $_smarty_tpl->tpl_vars['data']->value['nom_a'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['nom_a'];?>
</label><span class="error"></span></div>
           </div>
		     <div class="form-row">
            <p class="form-label"><b>prenom:</b></p>
            <div class="form-item"><label id="prenomm" class='prenom'><?php echo $_smarty_tpl->tpl_vars['data']->value['prenom_a'];?>
</label><span class="error"></span></div>
           </div>
		   <div class="form-row">
            <p class="form-label"><b>Email:</b></p>
            <div class="form-item"><label id="emailm" class='email' ><?php echo $_smarty_tpl->tpl_vars['data']->value['email_a'];?>
</label><span class="error"></span></div>
           </div>	
		      <?php } ?> 
			    <a href="#" class="open" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_a'];?>
" ><img src=img/icons/basic/plus.png ></a>

        </div>
      </div>
  </div>
<div class="footer">
  <p>Powered by Adminity Administration Interface</p>
</div>

<script> /* SCRIPTS */
$(function(){
	$("#dialog").dialog({
		autoOpen: false, 
		height: 300,
		width : 400,
		resizable : false
	});
	$(".open").click(function(){
		var id = $(this).attr("id");
		var nom = $("#"+id+" .nom").text();
		var prenom =$("#"+id+" .prenom").text();
		var mail =$("#"+id+" .email").text();

		$("#id_a").val(id);
		$("#nom").val(nom);
		$("#prenom").val(prenom);
		$("#email").val(mail);
		$("#dialog").dialog("open");
	});
})



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

  $('#iphone-check').iphoneStyle();
  $("#datepicker").datepicker();
  $("#colorpicker").ColorPicker();
  /* for the iPhone style checkbox, colorpicker and datepicker */

</script>
	<div id="dialog" title="Modifier un profil">
       <form id='form' method="POST" action="modifie_profil.php">

            <input type="text" placeholder="Placeholder Text"  name='id_a' id="id_a" hidden='true'/>
		 <div class="form-row">
            <p class="form-label">nom</p>
            <div class="form-item"><input type="text" placeholder="nom"  name='nom' id="nom"/><span class="error"></span></div>
         </div>
		  <div class="form-row">
            <p class="form-label">prenom</p>
            <div class="form-item"><input type="text" placeholder="prenom"  name='prenom' id="prenom"/><span class="error"></span></div>
         </div>
		  <div class="form-row">
            <p class="form-label">email</p>
            <div class="form-item"><input type="text" placeholder="email"  name='email' id="email" disabled="disabled" /><span class="error"></span></div>
         </div>

		 <input  type="submit"   value='valider' class="button green" id="modif"/>
	     <input  type="reset"   value='Renitialiser' class="button blue"  />
				
       </form>
	 </div>

</body>


<!-- Mirrored from novalx.com/adminity/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:25:42 GMT -->
</html><?php }} ?>