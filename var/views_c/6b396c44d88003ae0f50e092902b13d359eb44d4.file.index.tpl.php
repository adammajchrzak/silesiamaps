<?php /* Smarty version Smarty-3.1.7, created on 2015-08-09 12:40:37
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\modules\gallery\cms\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1100655c72e25755d15-92036836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b396c44d88003ae0f50e092902b13d359eb44d4' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\modules\\gallery\\cms\\templates\\index.tpl',
      1 => 1438584299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1100655c72e25755d15-92036836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'locale' => 0,
    'sidebar' => 0,
    'main_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c72e2575ef6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c72e2575ef6')) {function content_55c72e2575ef6($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['locale']->value['cms']['gallery']['header'];?>
</h2>
<hr noshade="noshade"/>

<div class="sidebar">
<?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>

</div>
<?php echo $_smarty_tpl->tpl_vars['main_content']->value;?>

<div class="ui-helper-clearfix"></div><?php }} ?>