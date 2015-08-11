<?php /* Smarty version Smarty-3.1.7, created on 2015-08-09 12:32:09
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\templates\views\site_intro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2213655c72c2930c4f7-18777212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddef1bffe5eb86ea0f95d525b833ccb97f020c04' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\templates\\views\\site_intro.tpl',
      1 => 1438584314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2213655c72c2930c4f7-18777212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'style' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c72c29421ad',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c72c29421ad')) {function content_55c72c29421ad($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $_smarty_tpl->tpl_vars['head']->value->title;?>
</title>
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['head']->value->keywords;?>
" />
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['head']->value->description;?>
" />
		
		<?php  $_smarty_tpl->tpl_vars['style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['style']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['head']->value->getStyles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['style']->key => $_smarty_tpl->tpl_vars['style']->value){
$_smarty_tpl->tpl_vars['style']->_loop = true;
?>
			<link href="<?php echo $_smarty_tpl->tpl_vars['style']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['style']->value['file'];?>
" media="<?php echo $_smarty_tpl->tpl_vars['style']->value['media'];?>
" rel="stylesheet" type="text/css" />
		<?php } ?>
		
		
		<?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['head']->value->getScripts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
$_smarty_tpl->tpl_vars['script']->_loop = true;
?>
		    <script src="<?php echo $_smarty_tpl->tpl_vars['script']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['script']->value['file'];?>
" type="text/javascript" ></script>
		<?php } ?>
		<script src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" type="text/javascript">//swfobject plugin</script>

<script type="text/javascript">
	var flashvars = false;
	var params = {
	  menu: "false",
	  wmode: "transparent",
	  align: "center",
	  allowfullscreen: "true"
	};
	var attributes = {};
	swfobject.embedSWF("/images/intro.swf", "flashContent", "100%", "740", "9.0.0","expressInstall.swf", flashvars, params, attributes);
</script>
		
</head>
<body style="background: none;  margin: 0 auto; padding:0;  height:100%;">
<div id="flashContent" style="width:100%; height:100%;"></div>
</body>
</html><?php }} ?>