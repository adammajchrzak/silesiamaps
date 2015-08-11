<?php /* Smarty version Smarty-3.1.7, created on 2015-08-09 12:37:37
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\templates\cms\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1013755bf5e0c83fef6-28729771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a58ddbd2dc9c369d8ac19cd6e2a241f22596097' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\templates\\cms\\menu.tpl',
      1 => 1439116655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1013755bf5e0c83fef6-28729771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55bf5e0c85b5b',
  'variables' => 
  array (
    'router' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf5e0c85b5b')) {function content_55bf5e0c85b5b($_smarty_tpl) {?><div id="page-menu">
	<ul>
		<li><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','index');?>
">Lista projektów</a></li>
		<li><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','gallery');?>
">Galerie</a></li>
	</ul>
</div><?php }} ?>