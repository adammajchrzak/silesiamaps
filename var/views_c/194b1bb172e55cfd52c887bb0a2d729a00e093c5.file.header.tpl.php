<?php /* Smarty version Smarty-3.1.7, created on 2015-08-03 14:26:52
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\templates\cms\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1456055bf5e0c7577b5-79333986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '194b1bb172e55cfd52c887bb0a2d729a00e093c5' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\templates\\cms\\header.tpl',
      1 => 1438584311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1456055bf5e0c7577b5-79333986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'style' => 0,
    'script' => 0,
    '_auth' => 0,
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55bf5e0c79702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf5e0c79702')) {function content_55bf5e0c79702($_smarty_tpl) {?><?php if (!is_callable('smarty_function_import_css')) include 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\library\\Smarty\\plugins\\function.import_css.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS - Content Managment System</title>

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
<?php  $_smarty_tpl->tpl_vars['style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['style']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['head']->value->getStylesToImport(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['style']->key => $_smarty_tpl->tpl_vars['style']->value){
$_smarty_tpl->tpl_vars['style']->_loop = true;
?>
<?php echo smarty_function_import_css(array('module'=>$_smarty_tpl->tpl_vars['style']->value['module'],'mode'=>$_smarty_tpl->tpl_vars['style']->value['mode'],'file'=>$_smarty_tpl->tpl_vars['style']->value['file']),$_smarty_tpl);?>

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
</head>
<body>
<div id="page-body">	

<?php if ($_smarty_tpl->tpl_vars['_auth']->value->hasIdentity()){?>
	<div id="page-top">
		<div id="page-logo">Euroregions.org</div>
		<ul id="page-top-menu">
			<li><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','auth','logout');?>
">wyloguj</a></li>
		</ul>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("templates/cms/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>


<div id="page-container">
	<div id="page-content"><?php }} ?>