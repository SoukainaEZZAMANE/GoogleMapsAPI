<?php /* Smarty version Smarty-3.1.12, created on 2012-12-05 15:48:52
         compiled from "smarty\templates\stage.html" */ ?>
<?php /*%%SmartyHeaderCode:613450bf56bd853f29-00771503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13b2735b8326e57abd81aebe0424fe6e44265a8e' => 
    array (
      0 => 'smarty\\templates\\stage.html',
      1 => 1354721966,
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
  <title>Adminity - Dashboard</title>
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
            <p id="usr-notif">Vous avez 6 notifications. <a href="#">View</a></p>
            <p><a href="#">Profile</a><a href="index.html">Déconnexion</a></p>
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
         
        
       </ul>
      </li>
     </ul>
  </div>

  <!--- CONTENT AREA -->

  <div class="content container_12">  
      <div class="box grid_12">
        <div class="box-head"><h2>Liste des concours</h2></div>
        <div class="box-content no-pad">
         <table class="display" id="example">
        <thead>
          <tr>
          	<th hidden="true">id</th>
            <th>Niveau</th>
            <th>Secteur </th>
            <th>Durée</th>
            <th>Entreprise</th>
            <th>Desciption de l'entreprise</th>
            <th>Mission</th>
            <th>Rémunéré</th>
             <th>Nombre de poste</th>
             <th>date de dépôt</th>
              <th>Démarrage</th>
              <th>Lieu</th>
            <th colspan="2"> Action </th>
          </tr>
          
        </thead>
        <tbody>
       <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
        <tr align="center" class="odd gradeX">            
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['niveau_s'];?>
</td>              
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['secteur_s'];?>
</td>              
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['dure_s'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['data']->value['entreprise_s'];?>
</td>    
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['desc_entr_s'];?>
</td>             
			<td><?php echo $_smarty_tpl->tpl_vars['data']->value['mission_s'];?>
</td> 
			<td><?php echo $_smarty_tpl->tpl_vars['data']->value['remunere'];?>
</td> 
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['nbr_poste'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['date_depot_s'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['demarrage-s'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['lieu_s'];?>
</td> 
			 <td><a href="?action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_s'];?>
" ><IMG SRC=img/nav/delete.png border=0 alt=Supprimer  align=center></a></td>
			 <td><a href="?action=Modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_s'];?>
" ><IMG SRC=img/nav/edit.png border=0 alt=Modifier  align=center></a></td> 
        </tr>                            
         <?php } ?>            
 
        </tbody>
      </table>
        </div>
		<script type="text/javascript">
<!--
function traductionElements()
{
popup = window.open('', 'popup', 'height=800, width=600');
popup.document.write('<form action="?" method="post">');
popup.document.write('<div><input type="submit" value="Valider" /></div>');
popup.document.write('</form>');
}
-->
</script>

<a href="javascript:traductionElements();">Cliquez ici</a>
      </div>

      

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

 
  /* for the iPhone style checkbox, colorpicker and datepicker */

</script>

</body>


<!-- Mirrored from novalx.com/adminity/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:25:42 GMT -->
</html><?php }} ?>