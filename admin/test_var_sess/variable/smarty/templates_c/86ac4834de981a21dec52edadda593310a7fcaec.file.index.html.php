<?php /* Smarty version Smarty-3.1.12, created on 2012-12-06 14:33:58
         compiled from "smarty\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2988550ba3820ea1043-00187469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86ac4834de981a21dec52edadda593310a7fcaec' => 
    array (
      0 => 'smarty\\templates\\index.html',
      1 => 1354803857,
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
<?php if ($_valid && !is_callable('content_50ba3821239057_84169720')) {function content_50ba3821239057_84169720($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Page</title>
<script>
 function page1 ()
{
var f = document.getElemenetById(form1);
f.action = "page1.php"
}
</script>

</head>
<body>
<p>Formulaire de connexion</p>
<form action="page1.php" method="post">
    Login : <input type="text" name="username" value="" /><br />
    Login : <input type="password" name="password" value="" /><br />
    <input type="submit" value="envoyer" >
</form>

</body>
</html>
<?php }} ?>