<?php /* Smarty version Smarty-3.1.12, created on 2012-12-22 10:34:51
         compiled from "connexion_s.html" */ ?>
<?php /*%%SmartyHeaderCode:1988750d58ccb898994-42033883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b84b8f8ef518960929ebb5b8a5f27f9600c6c2bb' => 
    array (
      0 => 'connexion_s.html',
      1 => 1356170309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1988750d58ccb898994-42033883',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d58ccb8d3362_48991514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d58ccb8d3362_48991514')) {function content_50d58ccb8d3362_48991514($_smarty_tpl) {?><!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        </title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.css"
        />
        <link rel="stylesheet" href="css/my.css" />
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.2.0/jquery.mobile-1.2.0.min.js">
        </script>
</head>

<body>
<div data-role="page">
<div data-role="header" align="center"><a href="" data-rel="back" data-role="button">Back</a><h1>Connexion</h1></div>

<div data-role="content" data-theme="a">
<form id="form1" method="POST"  action="ajout_stage*.php">

				<label class="us">
				<span>Email</span>
				<input type="text" id="username" name="username" >
				</label>

				<label class="pa">
				<span>Mot de passe</span>
				<input type="password"id="password" name="password"  >
				</label>
				
				<button type="submit">Connexion</button>
			</form>
			<div>
<p><a href="new_recrutor.php" data-role="button" data-theme="b">S'inscrir</a></p>
</div></div>
<div data-theme="a" data-role="footer" data-position="fixed">
                
         
            <div data-role="navbar" data-iconpos="top" data-theme="a">
                <ul>
                    <li>
                        <a href="index.php" data-transition="fade" data-theme="" data-icon="home">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" data-rel="dialog" data-transition="fade" data-theme="" data-icon="star">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="about.php" data-transition="fade" data-theme="" data-icon="info">
                            A propos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
</div> 
</body>
</html>
<?php }} ?>