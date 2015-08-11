<?php /* Smarty version Smarty-3.1.7, created on 2015-08-03 14:25:14
         compiled from "D:\projekty\euroregion\maps.euroregions.org\www\core\templates\site\common\footer_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:339955bf5daa12d2a2-34647205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10be56c88b6deccfbb65dd0b6789bc4c71dfbb9f' => 
    array (
      0 => 'D:\\projekty\\euroregion\\maps.euroregions.org\\www\\core\\templates\\site\\common\\footer_page.tpl',
      1 => 1438584313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '339955bf5daa12d2a2-34647205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'router' => 0,
    'main_menu' => 0,
    'config' => 0,
    'locale' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55bf5daa1a978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bf5daa1a978')) {function content_55bf5daa1a978($_smarty_tpl) {?><div id="footer-page">
	<div class="footer-logos">
		<ul>
			<li><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('pl','index',$_smarty_tpl->tpl_vars['router']->value->getItemCode('33','pl'),'33');?>
" class="footer-er-link-01"><div class="footer-er-logo-01"></div></a><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('pl','index',$_smarty_tpl->tpl_vars['router']->value->getItemCode('33','pl'),'33');?>
" class="footer-er-link-01">Euroregion<br/>Beskidy</a></li>
			<li><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('pl','index',$_smarty_tpl->tpl_vars['router']->value->getItemCode('42','pl'),'42');?>
" class="footer-er-link-02"><div class="footer-er-logo-02"></div></a><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('pl','index',$_smarty_tpl->tpl_vars['router']->value->getItemCode('42','pl'),'42');?>
" class="footer-er-link-02">Euroregion<br/>Glacensis</a></li>
			<li><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('pl','index',$_smarty_tpl->tpl_vars['router']->value->getItemCode('87','pl'),'87');?>
" class="footer-er-link-03"><div class="footer-er-logo-03"></div></a><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('pl','index',$_smarty_tpl->tpl_vars['router']->value->getItemCode('87','pl'),'87');?>
" class="footer-er-link-03">Euroregion<br/>Nysa</a></li>
			<li><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('pl','index',$_smarty_tpl->tpl_vars['router']->value->getItemCode('57','pl'),'57');?>
" class="footer-er-link-04"><div class="footer-er-logo-04"></div></a><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('pl','index',$_smarty_tpl->tpl_vars['router']->value->getItemCode('57','pl'),'57');?>
" class="footer-er-link-04">Euroregion<br/>Pradziad</a></li>
			<li><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('pl','index',$_smarty_tpl->tpl_vars['router']->value->getItemCode('18','pl'),'18');?>
" class="footer-er-link-05<?php if ($_smarty_tpl->tpl_vars['main_menu']->value=='05'){?> selected<?php }?>"><div class="footer-er-logo-05"></div></a><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('pl','index',$_smarty_tpl->tpl_vars['router']->value->getItemCode('18','pl'),'18');?>
" class="footer-er-link-05">Euroregion<br/>Silesia</a></li>
			<li style="margin-right: 0px !important;"><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('pl','index',$_smarty_tpl->tpl_vars['router']->value->getItemCode('72','pl'),'72');?>
" class="footer-er-link-06"><div class="footer-er-logo-06"></div></a><a href="/<?php echo $_smarty_tpl->tpl_vars['router']->value->getUrl('pl','index',$_smarty_tpl->tpl_vars['router']->value->getItemCode('72','pl'),'72');?>
" class="footer-er-link-06">Euroregion<br/>Śląsk Cieszyński</a></li>
		</ul>
	</div> 
	<div class="footer-green">
		<div id="footer-bottom">
			<div id="footer-copyright">Copyright &copy; EUREGIO PL-CZ</div>
			<div id="footer-design"><?php if ($_smarty_tpl->tpl_vars['config']->value->current_locale=='pl'||$_smarty_tpl->tpl_vars['config']->value->current_locale=='cz'){?><?php echo $_smarty_tpl->tpl_vars['locale']->value['site']['index']['footer']['project'];?>
<?php }else{ ?>Projekt i realizacja<?php }?>: netiz.pl</div>
		</div>
	</div>
</div><?php }} ?>