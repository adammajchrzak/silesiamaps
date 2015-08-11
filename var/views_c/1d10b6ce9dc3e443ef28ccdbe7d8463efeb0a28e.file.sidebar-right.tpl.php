<?php /* Smarty version Smarty-3.1.7, created on 2015-08-03 14:25:14
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\templates\site\sidebar-right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1161755bf5daa083744-75574843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d10b6ce9dc3e443ef28ccdbe7d8463efeb0a28e' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\templates\\site\\sidebar-right.tpl',
      1 => 1438584313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1161755bf5daa083744-75574843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'router' => 0,
    'locale' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55bf5daa08e74',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf5daa08e74')) {function content_55bf5daa08e74($_smarty_tpl) {?><div id="sidebar-right">
	<div id="box-search">
		<form action="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl($_smarty_tpl->tpl_vars['config']->value->current_locale,'search');?>
" method="get">
			<input type="text" id="sw" name="sw" value="<?php echo $_smarty_tpl->tpl_vars['locale']->value['site']['nav']['search'];?>
" onfocus="this.value='';" />
			<button type="submit" id="search-submit">wyślij</button>
		</form>
	</div>
</div><?php }} ?>