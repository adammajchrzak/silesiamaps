<?php /* Smarty version Smarty-3.1.7, created on 2015-08-03 14:26:52
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\modules\index\cms\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1205055bf5e0c6e22a7-37931148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8b99e367bb0eb23e073dba278c40b0ba1e69225' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\modules\\index\\cms\\templates\\index.tpl',
      1 => 1438584302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1205055bf5e0c6e22a7-37931148',
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
  'unifunc' => 'content_55bf5e0c6eac1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf5e0c6eac1')) {function content_55bf5e0c6eac1($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['locale']->value['cms']['index']['header'];?>
</h2>
<hr noshade="noshade"/>

<div class="sidebar">
<?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>

</div>
<?php echo $_smarty_tpl->tpl_vars['main_content']->value;?>

<div class="ui-helper-clearfix"></div><?php }} ?>