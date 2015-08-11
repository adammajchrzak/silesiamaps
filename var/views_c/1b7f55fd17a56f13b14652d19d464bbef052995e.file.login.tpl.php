<?php /* Smarty version Smarty-3.1.7, created on 2015-08-09 12:32:14
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\modules\auth\cms\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72355c72c2e47ba62-61191046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b7f55fd17a56f13b14652d19d464bbef052995e' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\modules\\auth\\cms\\templates\\login.tpl',
      1 => 1438584295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72355c72c2e47ba62-61191046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'router' => 0,
    'locale' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c72c2e5c41d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c72c2e5c41d')) {function content_55c72c2e5c41d($_smarty_tpl) {?><div id="login-form-page" class="ui-widget ui-widget-content ui-corner-all">
	
	<div id="page-auth-title"><img src="/images/page-logo.transparent.png" alt="euroregions.org" /></div>
		
	<form id="page_login" action="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','auth','login');?>
" method="post">
		<div class="ui-helper-clearfix"><label><?php echo $_smarty_tpl->tpl_vars['locale']->value['cms']['auth']['user'];?>
</label> <input type="text" id="login" name="login" class="input-text-200<?php if ($_smarty_tpl->tpl_vars['error']->value){?> ui-state-error<?php }?>" /></div>
		<div class="ui-helper-clearfix"><label><?php echo $_smarty_tpl->tpl_vars['locale']->value['cms']['auth']['password'];?>
</label> <input type="password" id="passwd" name="passwd" class="input-text-200<?php if ($_smarty_tpl->tpl_vars['error']->value){?> ui-state-error<?php }?>" /></div>
		<?php if ($_smarty_tpl->tpl_vars['error']->value){?>
			<div id="login-error"><?php echo $_smarty_tpl->tpl_vars['locale']->value['cms']['auth']['error'];?>
</div>
		<?php }?>
		<div class="ui-helper-clearfix"><button type="submit"><?php echo $_smarty_tpl->tpl_vars['locale']->value['cms']['auth']['login'];?>
</button></div>
	</form>

</div><?php }} ?>