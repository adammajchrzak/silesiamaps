<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>{$head->title}</title>
		<meta name="keywords" content="{$head->keywords}" />
		<meta name="description" content="{$head->description}" />
		{*	załadowanie plików styli  *}
		{foreach from=$head->getStyles() item=style }
			<link href="{$style.path}{$style.file}" media="{$style.media}" rel="stylesheet" type="text/css" />
		{/foreach}
		
		{*	załadowanie plików scryptów *}
		{foreach from=$head->getScripts() item=script }
		    <script src="{$script.path}{$script.file}" type="text/javascript" ></script>
		{/foreach}
{literal}
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3983718-29']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
{/literal}		
</head>
<body>
<div id="page-body">
	<div id="page-header">
		<div id="page-logo"><a href="/{$router->getUrl($config->current_locale,'index',$router->getItemCode('1',$config->current_locale),'1')}"><img src="/images/page-logo.png" alt="" /></a></div>
		
		{if $sm == "main"}
		<ul id="menu-language">
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('1','pl'),'1')}"><img src="/images/icon-pl.png" alt="wersja polska" /></a></li>
			<li><a href="/{$router->getUrl('cz','index',$router->getItemCode('1','cz'),'1')}"><img src="/images/icon-cz.png" alt="Česká verze" /></a></li>
		</ul>
		{else}
			{if $page_details.parent_id == '34'}
			<ul id="menu-language-euroregion">
				<li style="right: 124px;"><a href="/{$router->getUrl('pl','index',$router->getItemCode($page_details.page_id,'pl'),$page_details.page_id)}"><img src="/images/icon-pl.png" alt="wersja polska" /></a></li>
				<li style="right: 93px; top: -20px;"><img src="/images/icon-cz-grey.png" alt="Česká verze" /></li>
				<li style="right: 62px; top: -40px;"><a href="/{$router->getUrl('en','index',$router->getItemCode($page_details.page_id,'en'),$page_details.page_id)}"><img src="/images/icon-en.png" alt="Česká verze" /></a></li>
				<li style="right: 31px; top: -60px;"><img src="/images/icon-de-grey.png" alt="Česká verze" /></li>
				<li style="right: 0px; top: -80px;"><img src="/images/icon-fr-grey.png" alt="Česká verze" /></li>
			</ul>
			{else}
			<ul id="menu-language-euroregion">
				<li style="right: 124px;"><a href="/{$router->getUrl('pl','index',$router->getItemCode($page_details.page_id,'pl'),$page_details.page_id)}"><img src="/images/icon-pl.png" alt="wersja polska" /></a></li>
				<li style="right: 93px; top: -20px;"><a href="/{$router->getUrl('cz','index',$router->getItemCode($page_details.page_id,'cz'),$page_details.page_id)}"><img src="/images/icon-cz.png" alt="Česká verze" /></a></li>
				<li style="right: 62px; top: -40px;"><a href="/{$router->getUrl('en','index',$router->getItemCode($page_details.page_id,'en'),$page_details.page_id)}"><img src="/images/icon-en.png" alt="Česká verze" /></a></li>
				<li style="right: 31px; top: -60px;"><a href="/{$router->getUrl('de','index',$router->getItemCode($page_details.page_id,'de'),$page_details.page_id)}"><img src="/images/icon-de.png" alt="Česká verze" /></a></li>
				<li style="right: 0px; top: -80px;"><a href="/{$router->getUrl('fr','index',$router->getItemCode($page_details.page_id,'fr'),$page_details.page_id)}"><img src="/images/icon-fr.png" alt="Česká verze" /></a></li>
			</ul>
			{/if}
		{/if}
		
		<div class="slideshow">
		{foreach item=img name=img from=$slider}	
			<img src="{$img}" alt=""/>
		{/foreach}
		</div>
		<div class="sidebar-left-menu-header">{$sidebar_header}</div>
		<ul id="page-header-mainmenu">
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('33','pl'),'33')}" id="mm-item-01" {if $main_menu == '01'}class="selected"{/if}>Euroregion Beskidy</a></li>
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('42','pl'),'42')}" id="mm-item-02" {if $main_menu == '02'}class="selected"{/if}>Euroregion Glacensis</a></li>
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('87','pl'),'87')}" id="mm-item-03" {if $main_menu == '03'}class="selected"{/if}>Euroregion Nysa</a></li>
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('57','pl'),'57')}" id="mm-item-04" {if $main_menu == '04'}class="selected"{/if}>Euroregion Pradziad</a></li>
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('18','pl'),'18')}" id="mm-item-05" {if $main_menu == '05'}class="selected"{/if}>Euroregion Silesia</a></li>
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('72','pl'),'72')}" id="mm-item-06" {if $main_menu == '06'}class="selected"{/if}>Euroregion Śląsk Cieszyński</a></li>
		</ul>
		<ul id="page-header-shortmenu">
		{if $config->current_locale == 'pl' || $config->current_locale == 'cz'}	
			<li style="padding-top: 50px;"><a href="/{$router->getUrl($config->current_locale,'index',$router->getItemCode('1',$config->current_locale),'1')}">{if $config->current_locale == 'cz'}<img src="/images/shortmenu-item-01-cz.png" alt="" />{else}<img src="/images/shortmenu-item-01.png" alt="" />{/if}</a></li>
			<li><a href="/{$router->getUrl($config->current_locale,'index',$router->getItemCode('13',$config->current_locale),'13')}"><img src="/images/shortmenu-item-02.png" alt="" /></a></li>
		{else}
			<li style="padding-top: 50px;"><a href="/{$router->getUrl('pl','index',$router->getItemCode('1','pl'),'1')}">{if $config->current_locale == 'cz'}<img src="/images/shortmenu-item-01-cz.png" alt="" />{else}<img src="/images/shortmenu-item-01.png" alt="" />{/if}</a></li>
			<li><a href="/{$router->getUrl('pl','index',$router->getItemCode('13','pl'),'13')}"><img src="/images/shortmenu-item-02.png" alt="" /></a></li>
		{/if}
		</ul>
		{$sidebar_right}
	</div>
	<div id="page-container">
		{$sidebar_left}
		<div id="page-main">
			<div id="page-content">