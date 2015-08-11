<?php /* Smarty version Smarty-3.1.7, created on 2015-08-09 12:40:37
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\modules\gallery\cms\templates\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2470455c72e25633fe1-81644514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6b0488da13208d9636c270e84e62a5045202991' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\modules\\gallery\\cms\\templates\\sidebar.tpl',
      1 => 1438584300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2470455c72e25633fe1-81644514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'locale_list' => 0,
    'll' => 0,
    'router' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c72e2568030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c72e2568030')) {function content_55c72e2568030($_smarty_tpl) {?><div class="ui-widget ui-widget-content ui-corner-all sidebar-box">
	<div class="header-module">Struktura serwisu</div>
	<?php if ($_smarty_tpl->tpl_vars['config']->value->multi_locale=='1'){?>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['ll'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ll']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locale_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ll']->key => $_smarty_tpl->tpl_vars['ll']->value){
$_smarty_tpl->tpl_vars['ll']->_loop = true;
?>
		<li><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','gallery',$_smarty_tpl->tpl_vars['ll']->value['lang_code']);?>
"><?php echo $_smarty_tpl->tpl_vars['ll']->value['lang_name'];?>
</a></li>
		<?php } ?>
	</ul>
	<?php }?>
</div><?php }} ?>