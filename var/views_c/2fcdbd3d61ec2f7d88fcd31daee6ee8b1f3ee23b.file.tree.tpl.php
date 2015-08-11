<?php /* Smarty version Smarty-3.1.7, created on 2015-08-10 09:24:29
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\modules\index\cms\templates\tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2995355c72d1768f3b0-08949755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fcdbd3d61ec2f7d88fcd31daee6ee8b1f3ee23b' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\modules\\index\\cms\\templates\\tree.tpl',
      1 => 1439191465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2995355c72d1768f3b0-08949755',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55c72d17766af',
  'variables' => 
  array (
    'router' => 0,
    'project_list' => 0,
    'list' => 0,
    'tree' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c72d17766af')) {function content_55c72d17766af($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\library\\Smarty\\plugins\\modifier.truncate.php';
?><div class="ui-widget ui-corner-all main-content" style="width: 900px;">
    <div class="page-add" style="text-align: right; margin-bottom: 10px;"><button onclick="document.location.href = '/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','index','add');?>
'" class="button-add-text">dodaj projekt</button></div>
    <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['project_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
        <div class="list-row">
            <div class="list-row-element-name">
                &nbsp;&nbsp;<a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','index','edit',$_smarty_tpl->tpl_vars['list']->value['project_id']);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['list']->value['project_title']);?>
</a>
            </div>
            <span class="edit-set">
                <button class="button-edit" onclick="document.location.href = '/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('cms','index','edit',$_smarty_tpl->tpl_vars['tree']->value['project_id']);?>
'">edytuj</button>
                <button class="button-delete" title="delete" value="<?php echo $_smarty_tpl->tpl_vars['tree']->value['project_id'];?>
">usuń</button>
            </span>
            <span class="move-set">
                <button class="button-move-down" title="DOWN" value="<?php echo $_smarty_tpl->tpl_vars['tree']->value['project_id'];?>
">przesuń w dół</button>
                <button class="button-move-up" title="UP" value="<?php echo $_smarty_tpl->tpl_vars['tree']->value['project_id'];?>
">przesuń w górę</button>
            </span>
            <div class="ui-helper-clearfix"></div>
        </div>
    <?php } ?>
</div><?php }} ?>