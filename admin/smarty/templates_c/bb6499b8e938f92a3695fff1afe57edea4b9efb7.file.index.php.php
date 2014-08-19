<?php /* Smarty version Smarty-3.1.12, created on 2012-12-17 17:45:36
         compiled from "index.php" */ ?>
<?php /*%%SmartyHeaderCode:1506950cf5a405d0bc7-84948610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6499b8e938f92a3695fff1afe57edea4b9efb7' => 
    array (
      0 => 'index.php',
      1 => 1354813866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1506950cf5a405d0bc7-84948610',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50cf5a40697f43_11473595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50cf5a40697f43_11473595')) {function content_50cf5a40697f43_11473595($_smarty_tpl) {?><<?php ?>?php
session_start(); 
header('Content-Type:text/html;charset=utf-8');
require_once('config.php');
require_once('ikra.php');
if (isset($_SESSION['login_user']))

{	
$smarty->display('dashboard.html');
}
else
{
$smarty->display('index.html');
}
<?php }} ?>