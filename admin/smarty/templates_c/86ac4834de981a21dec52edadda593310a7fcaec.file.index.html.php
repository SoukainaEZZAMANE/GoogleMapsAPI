<?php /* Smarty version Smarty-3.1.12, created on 2014-02-20 12:34:56
         compiled from "smarty\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2988550ba3820ea1043-00187469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86ac4834de981a21dec52edadda593310a7fcaec' => 
    array (
      0 => 'smarty\\templates\\index.html',
      1 => 1357142200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2988550ba3820ea1043-00187469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ba3821239057_84169720',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ba3821239057_84169720')) {function content_50ba3821239057_84169720($_smarty_tpl) {?>﻿<!doctype html>
<html lang="en">

<!-- Mirrored from novalx.com/adminity/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:26:45 GMT -->
<head>
  <meta charset="utf-8">
  <title>Espace admin</title>
  <link rel="shortcut icon" href="favicon.gif">
  <!---CSS Files-->
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/login.css">
  <!---jQuery Files-->
  <script src="js/jquery-1.7.1.min.js"></script>
  <script src="js/jquery.spinner.js"></script>
  <script type="text/javascript" src="js/forms/jquery.validate.min.js"></script>
  <!---Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    <!---FadeIn Effect, Validation and Spinner-->
  <script>
    $(document).ready(function () {
       $('div.wrapper').hide();
        $('div.wrapper').fadeIn(1200);
        $('#lg-form').validate();
        $('.submit').click(function() {
        var $this = $(this);
        $this.spinner();
        setTimeout(function() {
                $this.spinner('remove');
        }, 1000);
       });
    });
  </script>
  <!---Google Analytics-->
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30168629-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</head>
<body>
	<div class="wrapper">
		<div class="logo">
	 	<h1>Page d'authentification</h1>
	 </div>
<!--	<?php if ($_SESSION['m']=='0'){?>
	     <div id="login-msg">
      <p class="font-bold">email ou mot de passe incorrect<p>
    </div>
	<?php }?>-->
   <div class="lg-body">
     <div class="inner">
       <div id="lg-head">
         <p><span class="font-bold">Admin</span>: Tapez votre login et mot de passe pour accèder à votre espace.</p>

		 <div class="separator"></div>

       </div>
       <div class="login">
         <form id="lg-form" method="post" action="admin.php">
           <fieldset>
              <ul>
                 <li id="usr-field">
                  <input class="input required" name="name" type="text" size="26" minlength ="1" placeholder="login..." />
                 </li>
                 <li id="psw-field">
                  <input class="input required" name="pass" type="password" size="26" minlength="1" placeholder="mot de passe..." />
                 </li>
                 
                 <li>
                  <input class="submit" type="submit" value=""/>
                 </li>
              </ul>
           </fieldset>
          </form>
          
        </div>
     </div>
    </div>
  
</body>

<!-- Mirrored from novalx.com/adminity/index.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 27 Mar 2012 11:26:45 GMT -->
</html><?php }} ?>