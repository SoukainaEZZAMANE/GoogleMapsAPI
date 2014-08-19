<?php /* Smarty version Smarty-3.1.12, created on 2013-01-01 13:19:27
         compiled from "smarty\templates\rc_aj_succes.html" */ ?>
<?php /*%%SmartyHeaderCode:2355250e2355aa110a9-60594037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b21dbe5f661d2ad2b65874e197a14cc4cdecc23' => 
    array (
      0 => 'smarty\\templates\\rc_aj_succes.html',
      1 => 1357002470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2355250e2355aa110a9-60594037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e2355aace055_83779536',
  'variables' => 
  array (
    'idf' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e2355aace055_83779536')) {function content_50e2355aace055_83779536($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Ajout avec Success</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

	     <link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"
        />
        	<link rel="stylesheet" href="css/jquery-mobile.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-mobile.js"></script>
</head>


<body>
  <div data-role="page">
		<div data-role="header">
			<h1>Connexion</h1>
		</div>
		<p align="center">Votre réponse a été ajoutée avec succés</p>
        <p align="center"><a href="f_details.php?id=<?php echo $_smarty_tpl->tpl_vars['idf']->value;?>
.php" rel="external">Retour au sujet</a></p>
		<div data-role="footer" >
		<h1> développé par the finder <?php echo $_SESSION['idu'];?>
</h1>
		</div>
</div>
</body>

</html><?php }} ?>