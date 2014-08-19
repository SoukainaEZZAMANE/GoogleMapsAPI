<?php /* Smarty version Smarty-3.1.12, created on 2012-11-07 11:16:13
         compiled from "smarty\templates\table.html" */ ?>
<?php /*%%SmartyHeaderCode:30081507e94b1e25e78-74977842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8919db215edf99bfd452a2af170dfcde11e2fb15' => 
    array (
      0 => 'smarty\\templates\\table.html',
      1 => 1352286969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30081507e94b1e25e78-74977842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_507e94b207a020_54508354',
  'variables' => 
  array (
    'return' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507e94b207a020_54508354')) {function content_507e94b207a020_54508354($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
 </head>
  <table width=200 Cellspacing='0' align='center' style='COLOR: #00508F; BACKGROUND-COLOR:#ffffff ;border-collapse: collapse;border: 2px solid #33555F;' rules=all><tr        style='font-size:14px;COLOR: #ffffff; BACKGROUND-COLOR: #33555F' align=center>
    <tr>
	  <td >suppr</td>
      <td>nom</td>
      <td>prenom</td>
      <td>dateN</td>
      <td>email</td>
    </tr>

   <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['return']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
    <tr>
      <td><a href="?action=supprimer&nom=<?php echo $_smarty_tpl->tpl_vars['data']->value['nom'];?>
" ><IMG SRC=images/bSupr.png border=1 alt=Supprimer  align=center><a href="?action=Modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['num'];?>
&nom=<?php echo $_smarty_tpl->tpl_vars['data']->value['nom'];?>
&prenom=<?php echo $_smarty_tpl->tpl_vars['data']->value['prenom'];?>
&dateN=<?php echo $_smarty_tpl->tpl_vars['data']->value['dateN'];?>
&email=<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" ><IMG SRC=images/bModif.png border=1 alt=Supprimer  align=center></td>

	  <td><?php echo $_smarty_tpl->tpl_vars['data']->value['nom'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value['prenom'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value['dateN'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
</td>
    </tr>
   <?php } ?>
 </table>
 
 <body>
  
 </body>
</html>
<?php }} ?>