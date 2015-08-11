<?php /* Smarty version Smarty-3.1.7, created on 2015-08-09 12:40:37
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\modules\gallery\cms\templates\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1810555c72e256eae47-57396672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ad8a4a2ab4a71b7421bbb2107568888e3513eed' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\modules\\gallery\\cms\\templates\\list.tpl',
      1 => 1438584300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1810555c72e256eae47-57396672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'router' => 0,
    'gallery_list' => 0,
    'tree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c72e2571121',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c72e2571121')) {function content_55c72e2571121($_smarty_tpl) {?><div class="ui-widget ui-widget-content ui-corner-all main-content">
	<div class="header-module">Galerie</div>
	<div style="text-align: right; margin-bottom: 10px;"><button onclick="document.location.href='/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','gallery','add');?>
'">dodaj galerię</button></div>
	<div style="height: 20px;">
		<ul class="list-header">
			<li style="width: 350px; padding-left: 10px;">Nazwa galerii</li>
			<li style="width: 150px; text-align: center;">Data utworzenia</li>
			<li style="width: 100px; text-align: center;">Aktywność</li>
		</ul>
	</div>
	<div style="clear: both; border-bottom: 1px solid #ccc; margin-top: 10px; margin-bottom: 10px;"></div>
	<?php  $_smarty_tpl->tpl_vars['tree'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tree']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tree']->key => $_smarty_tpl->tpl_vars['tree']->value){
$_smarty_tpl->tpl_vars['tree']->_loop = true;
?>
		<div class="list-row">
			<div class="list-row-element-name" style="width: 350px; padding-left: 10px;">
				<a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','gallery','edit',$_smarty_tpl->tpl_vars['tree']->value['gallery_id']);?>
"><?php echo $_smarty_tpl->tpl_vars['tree']->value['_name'];?>
</a>
			</div>
			<div class="list-row-column" style="width: 150px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['tree']->value['_created'];?>
</div>
			<div class="list-row-column" style="width: 100px; text-align: center;"><?php if ($_smarty_tpl->tpl_vars['tree']->value['_active']=='1'){?><span style="color: #00FF00;">TAK</span><?php }else{ ?><span style="color: #FF0000;">NIE</span><?php }?></div>
			<span class="edit-set">
				<button class="button-edit" onclick="document.location.href='<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','gallery','edit',$_smarty_tpl->tpl_vars['tree']->value['gallery_id']);?>
'">edytuj</button>
				<button class="button-delete" title="delete" value="<?php echo $_smarty_tpl->tpl_vars['tree']->value['gallery_id'];?>
">usuń</button>
			</span>
		</div>
	<?php } ?>
</div><?php }} ?>