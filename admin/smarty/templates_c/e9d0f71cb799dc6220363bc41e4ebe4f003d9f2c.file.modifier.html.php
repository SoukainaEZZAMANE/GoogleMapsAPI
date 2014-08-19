<?php /* Smarty version Smarty-3.1.12, created on 2012-11-07 11:37:33
         compiled from "smarty\templates\modifier.html" */ ?>
<?php /*%%SmartyHeaderCode:17249509a3e853a5ec8-38471043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9d0f71cb799dc6220363bc41e4ebe4f003d9f2c' => 
    array (
      0 => 'smarty\\templates\\modifier.html',
      1 => 1352288116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17249509a3e853a5ec8-38471043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509a3e854445a2_14527785',
  'variables' => 
  array (
    'return' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a3e854445a2_14527785')) {function content_509a3e854445a2_14527785($_smarty_tpl) {?><FORM action='modifier.php' method="post" name='Form2' id='Form2' onsubmit ="return verifier()">

 <table>
   <tr>
      <td align="right">ID :</td>
      <td> <input type="text" name="id" width="250" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['num'];?>
" /></td>
  </tr>
  <tr>
      <td align="right">Nom :</td>
      <td> <input type="text" name="nom" width="250" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['nom'];?>
" /></td>
  </tr>
 
  <tr>
      <td align="right">prenom :</td>
      <td> <input type="text" name="prenom" width="250" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['prenom'];?>
"/></td>
  </tr>

  <tr>
      <td align="right">date de naissance:</td>
      <td> <input type="text" name="datee" id="a" width="250" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['dateN'];?>
"/>  </td>
  </tr>
 
   <tr>
      <td align="right">email :</td>
      <td> <input type="text" name="mail"  width="250" value="<?php echo $_smarty_tpl->tpl_vars['return']->value['email'];?>
"/>  </td>
  </tr>

 
  <tr>
    <td>
	   <Input Type="submit" value="Modifier" width="150"> 
	   <Input Type="button" value="Annuler" onclick="javascript:history.go(-1)">
	</td>
  </tr><?php }} ?>