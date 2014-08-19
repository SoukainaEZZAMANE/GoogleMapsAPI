<?php /* Smarty version Smarty-3.1.12, created on 2012-12-05 11:23:48
         compiled from "smarty\templates\dashboard.html" */ ?>
<?php /*%%SmartyHeaderCode:2291950ba4c3e9d39f1-53433863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faa2a013e293714a85bef305fef78abaa5a719ee' => 
    array (
      0 => 'smarty\\templates\\dashboard.html',
      1 => 1354706624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2291950ba4c3e9d39f1-53433863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ba4c3eadb031_27787024',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ba4c3eadb031_27787024')) {function content_50ba4c3eadb031_27787024($_smarty_tpl) {?><!doctype html>
<html lang="en">

<!-- Mirrored from novalx.com/adminity/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:24:33 GMT -->
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
            <p id="usr-name">Welcome back, Michael.</p>
            <p id="usr-notif">You have 6 notifications. <a href="#">View</a></p>
            <p><a href="#">Preferences</a><a href="#">Profile</a><a href="logout.php">Log out</a></p>
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
         
        
       </ul>
      </li>
     </ul>
  </div>

  <!--- CONTENT AREA -->

  <div class="content container_12">
      <div class="ad-notif-info grid_12"><p>Welcome to Adminity! You can dismiss me by clicking me!</p></div>
      <div class="box grid_3">
        <div class="box-head"><h2>Simple Panel</h2></div>
        <div class="box-content">
          <p>This is a simple panel. All panels in Adminity are collapsible by clicking on the header.
          <br>
          Creating a panel like this one is very easy, 
          you only need 3 divs with classes 'box', 'box-head' and 'box-content'.
          <br><br>
          Adminity also includes a styler. Open it by clicking the eye icon near the logo. A tooltip will tell you what color each colorpicker changes.<br><br>
          <input type="button" class="button green" value="Read more" />
          </p>
        </div>
      </div>
      <div class="box grid_3">
        <div class="box-head"><span class="box-icon-24 fugue-24 counter"></span><h2>Stats</h2></div>
        <div class="box-content ad-stats">
          <ul>
            <li><h3>21594</h3> Unique Visitors</li>
            <li class="stats-up"><h3>52100</h3> Page Views</li>
            <li class="stats-up"><h3>$2652</h3> Ad Revenue</li>
            <li class="stats-down"><h3>$125</h3> Maintenance Costs</li>
            <li class="stats-up"><h3>+2</h3> Moved up Google</li>
          </ul>
        </div>
      </div>
      <div class="box grid_6">
        <div class="box-head"><span class="box-icon-24 fugue-24 system-monitor"></span><h2>Chart</h2></div>
        <div class="box-content">
          <div id="flot-demo"></div>
        </div>
      </div>
      <div class="box grid_12">
        <div class="box-head"><h2>Data Table</h2></div>
        <div class="box-content no-pad">
        <table class="display" id="example">
        <thead>
          <tr>
            <th>Rendering engine</th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
          </tr>
        </thead>
        <tbody>
          <tr class="odd gradeX">
            <td>Trident</td>
            <td>Internet Explorer 4.0</td>
            <td>Win 95+</td>
            <td class="center"> 4</td>
            <td class="center">X</td>
          </tr>
          <tr class="even gradeC">
            <td>Trident</td>
            <td>Internet Explorer 5.0</td>
            <td>Win 95+</td>
            <td class="center">5</td>
            <td class="center">C</td>
          </tr>
          <tr class="odd gradeA">
            <td>Trident</td>
            <td>Internet Explorer 5.5</td>
            <td>Win 95+</td>
            <td class="center">5.5</td>
            <td class="center">A</td>
          </tr>
          <tr class="even gradeA">
            <td>Trident</td>
            <td>Internet Explorer 6</td>
            <td>Win 98+</td>
            <td class="center">6</td>
            <td class="center">A</td>
          </tr>
          <tr class="odd gradeA">
            <td>Trident</td>
            <td>Internet Explorer 7</td>
            <td>Win XP SP2+</td>
            <td class="center">7</td>
            <td class="center">A</td>
          </tr>
          <tr class="even gradeA">
            <td>Trident</td>
            <td>AOL browser (AOL desktop)</td>
            <td>Win XP</td>
            <td class="center">6</td>
            <td class="center">A</td>
          </tr>
          <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.7</td>
            <td class="center">A</td>
          </tr>
          <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 1.5</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.8</td>
            <td class="center">A</td>
          </tr>
          <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 2.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.8</td>
            <td class="center">A</td>
          </tr>
          <tr class="gradeA">
            <td>Gecko</td>
            <td>Firefox 3.0</td>
            <td>Win 2k+ / OSX.3+</td>
            <td class="center">1.9</td>
            <td class="center">A</td>
          </tr>
        </tbody>
      </table>
        </div>
      </div>

      <div class="box grid_6">
        <div class="box-head"><h2>Simple Inputs</h2></div>
        <div class="box-content">
           <div class="form-row">
            <p class="form-label">Text input</p>
            <div class="form-item"><input type="text" /></div>
           </div>
           <div class="form-row">
            <p class="form-label">Password input</p>
            <div class="form-item"><input type="password" /></div>
           </div>
           <div class="form-row">
            <p class="form-label">Input with Placeholder</p>
            <div class="form-item"><input type="text" placeholder="Placeholder Text" /></div>
           </div>
           <div class="form-row">
            <p class="form-label">Read-only field</p>
            <div class="form-item"><input type="text" value="This field cannot be changed" readonly /></div>
           </div>
           <div class="form-row">
            <p class="form-label">Disabled field</p>
            <div class="form-item"><input type="text" disabled="disabled" /></div>
           </div>
           <div class="form-row">
            <p class="form-label">Iphone style checkbox</p>
            <input checked type="checkbox" id="iphone-check" />
           </div>
          <div class="clear"></div>
        </div>
      </div>

      <div class="box grid_6">
        <div class="box-head"><h2>Select Inputs</h2></div>
        <div class="box-content">
           <div class="form-row">
             <label class="form-label">Select Dropdown</label>
             <div class="form-item">
               <select>
                 <option value='option1'>Option 1</option>
                 <option value='option2'>Option 2</option>
                 <option value='option3'>Option 3</option>
                 <option value='option4'>Waldo was here</option>
               </select>
             </div>
           </div>
           <div class="form-row">
             <label class="form-label">Datepicker</label>
             <div class="form-item">
               <input type="text" id="datepicker" />
               <span class="form-icon fugue-2 calendar-day"></span>
             </div>
           </div>
           <div class="form-row">
             <label class="form-label">Color Picker</label>
             <div class="form-item">
               <input type="text" id="colorpicker" />
               <span class="form-icon fugue-2 color"></span>
             </div>
           </div>
           <div class="form-row">
             <label class="form-label">File Upload</label>
             <div class="form-item file-upload">
               <input />
               <input class="filebase" type="file" />
               <span class="form-icon fugue-2 control-eject"></span>
             </div>
           </div>
           <div class="form-row">
             <label class="form-label">Radio Buttons</label>
             <input name='rgroup' type='radio' value='radio1' />
             <input checked='checked' name='rgroup' type='radio' value='radio2' />
             <input disabled='disabled' name='rgroup' type='radio' value='radio3' />
           </div>
           <div class="form-row">
             <label class="form-label">Checkboxes</label>
             <input type='checkbox' value='check1' />
             <input checked='checked' type='checkbox' value='check2' />
             <input disabled='disabled' type='checkbox' value='check3' />
           </div>
         </div>
        <div class="clear"></div>
      </div>
  </div>

<div class="footer">
  <p>Powered by Adminity Administration Interface</p>
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

  $('#iphone-check').iphoneStyle();
  $("#datepicker").datepicker();
  $("#colorpicker").ColorPicker();
  /* for the iPhone style checkbox, colorpicker and datepicker */

</script>

</body>


<!-- Mirrored from novalx.com/adminity/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:25:42 GMT -->
</html><?php }} ?>