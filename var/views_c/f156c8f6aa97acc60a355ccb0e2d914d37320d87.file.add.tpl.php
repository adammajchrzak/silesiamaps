<?php /* Smarty version Smarty-3.1.7, created on 2015-08-09 12:40:41
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\modules\gallery\cms\templates\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2518355c72e299ceee4-34469964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f156c8f6aa97acc60a355ccb0e2d914d37320d87' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\modules\\gallery\\cms\\templates\\add.tpl',
      1 => 1438584299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2518355c72e299ceee4-34469964',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'router' => 0,
    'gallery_details' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c72e29a0fbf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c72e29a0fbf')) {function content_55c72e29a0fbf($_smarty_tpl) {?><div id="dialog-message" title="Pole wymagane"></div>
<div class="ui-widget ui-widget-content ui-corner-all main-content">
<form id="form-add-gallery" name="form-add-gallery" method="post" action="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','gallery','edit');?>
">
<div class="header-module">Dodaj galerię</div>
<div style="text-align: right; margin-bottom: 10px;">
	<button type="button" onclick="document.location.href='/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','gallery');?>
';">anuluj</button>
	<button type="submit" class="button-add-gallery-save">zapisz zmiany</button>
</div>
	<input type="hidden" id="gallery_id" name="gallery_id" value="0">
	<input type="hidden" id="lang_code" name="lang_code" value="<?php echo $_smarty_tpl->tpl_vars['gallery_details']->value['lang_code'];?>
">
	<div id="page-edit-tabs">
		<ul>
			<li><a href="#tabs-1">Dane podstawowe</a></li>
			<li><a href="#tabs-2">Ustawienia zaawansowane</a></li>
		</ul>
		
		<div id="tabs-1">
			<p class="ui-helper-clearfix"><label>Nazwa galerii</label></p>
			<div><input type="text" id="_name" name="_name" value="" class="input-text" /></div>
			<p class="ui-helper-clearfix"><label>Opis galerii</label></p>
			<textarea id="_description" name="_description" class="input-textarea"></textarea>
		</div>
		<div id="tabs-2">
			<p class="ui-helper-clearfix"><label>Galeria aktywna</label><input id="_active" name="_active" type="checkbox" value="1" checked/></p>
		</div>
	</div>
</form>
</div><?php }} ?>