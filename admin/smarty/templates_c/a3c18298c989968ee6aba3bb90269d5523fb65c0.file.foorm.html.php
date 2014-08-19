<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 20:03:54
         compiled from "smarty\templates\foorm.html" */ ?>
<?php /*%%SmartyHeaderCode:8136509bd365a1ca45-34409308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3c18298c989968ee6aba3bb90269d5523fb65c0' => 
    array (
      0 => 'smarty\\templates\\foorm.html',
      1 => 1352405032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8136509bd365a1ca45-34409308',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509bd365b97f03_15825201',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bd365b97f03_15825201')) {function content_509bd365b97f03_15825201($_smarty_tpl) {?><!doctype html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>jQuery UI Tabs - Default functionality</title>
	  <link rel="stylesheet" type="text/css" href="../../jquery-easyui-1.3.1/themes/default/easyui.css">  
    <link rel="stylesheet" type="text/css" href="../../jquery-easyui-1.3.1/themes/icon.css">  
    <link rel="stylesheet" type="text/css" href="../../jquery-easyui-1.3.1/demo/demo.css">  
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <script src="jquery-ui/js/jquery-1.8.2.js"></script>
    <script src="jquery-ui/js/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script type="text/javascript" src="../../jquery.easyui.min.js"></script> 
	<script>

    $(function() {
        $( "#tabs" ).tabs();
    });
    </script>
</head>
<body>
 
<!--<div id="tabs">
    <ul>
        <li><a href="#tabs-1">ajout</a></li>
        <li><a href="#tabs-2">suppression</a></li>
        <li><a href="#tabs-3">Modification</a></li>
		<li><a href="#tabs-4">lister</a></li>
    </ul>
    <div id="tabs-1">
        <p>
		  <p>nom
		  <input type=text  id=nom name=nom> </p>
		
		
		</p>
    </div>
    <div id="tabs-2">
        <p></p>
    </div>
    <div id="tabs-3">
        <p></p>
    </div>
</div>
 <div id="tabs-4">
        <p> -->
		 <div class="demo-info" id=datag>  
        <div class="demo-tip icon-tip"></div>  
        <div>The DataGrid is created from markup, no JavaScript code needed.</div>  
    </div>  
    <div style="margin:10px 0;"></div>  
	<table class="easyui-datagrid" title="Basic DataGrid" style="width:700px;height:250px"  
            data-options="singleSelect:true,collapsible:true,url:'../datagrid/datagrid_data1.json'">  
        <thead>  
            <tr>  
                <th data-options="field:'itemid',width:80">Item ID</th>  
                <th data-options="field:'productid',width:100">Product</th>  
                <th data-options="field:'listprice',width:80,align:'right'">List Price</th>  
                <th data-options="field:'unitcost',width:80,align:'right'">Unit Cost</th>  
                <th data-options="field:'attr1',width:250">Attribute</th>  
                <th data-options="field:'status',width:60,align:'center'">Status</th>  
            </tr>  
        </thead>  
    </table>  
		
		
	<!--	</p>
    </div>
 -->
</body>
</html><?php }} ?>